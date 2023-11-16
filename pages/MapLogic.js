function obterLatitudeLongitude(cep) {
  return new Promise(function (resolve, reject) {
    var xhr = new XMLHttpRequest();
    var url = "https://viacep.com.br/ws/" + cep + "/json/";

    xhr.open("GET", url, true);
    xhr.onload = function () {
      if (xhr.status === 200) {
        var endereco = JSON.parse(xhr.responseText);
        if (endereco.erro) {
          reject("CEP não encontrado.");
        } else {
          var enderecoCompleto = endereco.logradouro + ", " + endereco.localidade + ", " + endereco.uf;
          var geocodeUrl = "https://nominatim.openstreetmap.org/search?format=json&q=" + encodeURIComponent(enderecoCompleto);
          var geocodeXhr = new XMLHttpRequest();

          geocodeXhr.open("GET", geocodeUrl, true);
          geocodeXhr.onload = function () {
            if (geocodeXhr.status === 200) {
              var geocodeData = JSON.parse(geocodeXhr.responseText);
              if (geocodeData.length > 0) {
                const latitude = geocodeData[0].lat;
                const longitude = geocodeData[0].lon;
                resolve({ latitude: latitude, longitude: longitude });
              } else {
                reject("Coordenadas não encontradas para o CEP especificado.");
              }
            } else {
              reject("Erro ao obter dados de geocodificação do servidor.");
            }
          };
          geocodeXhr.onerror = function () {
            reject("Erro de conexão ao obter dados de geocodificação.");
          };
          geocodeXhr.send();
        }
      } else {
        reject("Erro ao obter dados do servidor.");
      }
    };
    xhr.onerror = function () {
      reject("Erro de conexão.");
    };
    xhr.send();
  });
}

var map = L.map('map');

var marker;

if (typeof cepUsuario!=="undefined"){
  
  obterLatitudeLongitude(cepUsuario)
  .then((resultado)=>{
    map.setView([resultado.latitude, resultado.longitude], 14);
    marker = L.marker([resultado.latitude, resultado.longitude]).addTo(map);
    console.log(imgUsuario);
    marker.bindPopup(`<center>
    <center><p>Você Está Aqui!</p></center>`);
  });
}else{
  
  map.setView([-19.938669, -44.036714], 14);
  marker = L.marker([-19.938669, -44.036714]).addTo(map);
}



var layerCachorros = L.layerGroup().addTo(map);
var layerGatos = L.layerGroup().addTo(map);
var layerAmbos = L.layerGroup().addTo(map);

var marcadorCachorro;

const iconeCachorro = L.icon({
  iconUrl: '../images/icons/dog.png',
  iconSize: [38, 38],
});


var marcadorGato;

const iconeGato = L.icon({
  iconUrl: '../images/icons/cat.png',
  iconSize: [38, 38],
});

var marcadorAmbos;

const iconeAmbos = L.icon({
  iconUrl: '../images/icons/both.png',
  iconSize: [38, 38],
});

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(map);


var layerVazio = L.layerGroup().addTo(map);

var popup = L.popup();

$.ajax({
  type: "post",
  url: "../CRUD/enderecos.php",
  data: "",
  dataType: "json",
  success: function (response) {
    try {
      ceps = response;
      console.log(ceps);
      console.log(typeof (ceps))
    } catch (e) {
      alert(e);
    }


    // Exemplo de uso:
    ceps.forEach(item => {
      obterLatitudeLongitude(item.Cep)
        .then(function (resultado) {
          console.log("Latitude: " + resultado.latitude);
          console.log("Longitude: " + resultado.longitude);

          switch (item.Animal) {
            case 'Gato':
              marcadorGato = L.marker([resultado.latitude, resultado.longitude],
                { icon: iconeGato }).addTo(layerGatos);
                marcadorGato.bindPopup(`<center>
                <img src="../Uploads/${item.Nome}.jpg" width="120px" height="120px"></center>
                <br>
                <center><p>${item.Nome}</p></center>
                <center><p>${item.Endereco}</p></center>`);
                break;

            case 'Cachorro':
              marcadorCachorro = L.marker([resultado.latitude, resultado.longitude],
                { icon: iconeCachorro }).addTo(layerCachorros);
                marcadorCachorro.bindPopup(`<center>
                <img src="../Uploads/${item.Nome}.png" width="120px" height="120px"></center>
                <br>
                <center><p>${item.Nome}</p></center>
                <center><p>${item.Endereco}</p></center>`);
              break;

            case 'Ambos':
              marcadorAmbos = L.marker([resultado.latitude, resultado.longitude],
                { icon: iconeAmbos }).addTo(layerAmbos);
                marcadorAmbos.bindPopup(`<center>
                <img src="../Uploads/${item.Nome}.jpg" width="120px" height="120px"></center>
                <br>
                <center><p>${item.Nome}</p></center>
                <center><p>${item.Endereco}</p></center>`);
              break;
          }

        })
        .catch(function (erro) {
          console.log(erro);
        });
    });

    document.getElementById('Cachorro').addEventListener('click',()=>{
      
        layerGatos.addTo(layerVazio);
        layerAmbos.addTo(layerVazio)
        map.removeLayer(layerGatos)
        map.removeLayer(layerAmbos)
        layerCachorros.addTo(map);

    })

    document.getElementById('Gato').addEventListener('click',()=>{
      
      layerCachorros.addTo(layerVazio);
      layerAmbos.addTo(layerVazio)
      map.removeLayer(layerCachorros)
      map.removeLayer(layerAmbos)
      layerGatos.addTo(map);
        
    })
    document.getElementById('Ambos').addEventListener('click',()=>{
      
      map.removeLayer(layerCachorros)
      map.removeLayer(layerGatos)
      layerCachorros.addTo(map);
      layerGatos.addTo(map)
        
    })

  }
});

var circulo = L.circle([-19.937947, -44.036255], {
  color: 'gray',
  fillColor: '#efefef',
  fillOpacity: 0.3,
  radius: 800
}).addTo(map);

L.control.scale({ metric: true }).addTo(map);

var popup = L.popup();

L.Control.geocoder().addTo(map);


