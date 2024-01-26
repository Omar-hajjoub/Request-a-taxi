
function div1(){
  document.getElementById('div1').style.display="flex"
  document.getElementById('div2').style.display="none"
  document.getElementById('div3').style.display="none"

}

function div2(){
  document.getElementById('div1').style.display="none"
  document.getElementById('div2').style.display="block"
  document.getElementById('div3').style.display="none"

}

function div3(){
  document.getElementById('div1').style.display="none"
  document.getElementById('div2').style.display="none"
  document.getElementById('div3').style.display="block"

}



  
  


  //img fille 
const image=document.getElementById("img1"),
input=document.getElementById('fil');
input.addEventListener("change",()=>{
    image.src =URL.createObjectURL(input.files[0])
})


//JQUERY------------------------


  



  