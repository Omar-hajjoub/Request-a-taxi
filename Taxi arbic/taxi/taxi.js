function openFunction(){
    document.getElementById('menu').style.width='250px';
    }
    function closeFunction(){
        document.getElementById('menu').style.width='0px';
    }

//-----------------------------------------------------------
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


//animtions---------------------------------------------------------
const observer = new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
        console.log(entry)
        if(entry.isIntersecting){
            entry.target.classList.add('show')
        }else{
            entry.target.classList.remove('show')
        }
    })
})
const hiddenElements=document.querySelectorAll('.hidden')
hiddenElements.forEach((el) => observer.observe(el))




//Translat Ordar







