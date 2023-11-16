let btn = document.getElementById('acessibilidade');

btn.addEventListener('click',()=>{
  let textos = document.querySelectorAll('p');

  for (i=0;i<textos.length;i++){
    if (textos[i].style.textAlign!='left'){
      textos[i].style.textAlign = 'left';
    }else{
      textos[i].style.textAlign = 'center';
    }

    console.log(textos[i].className);
  }
})