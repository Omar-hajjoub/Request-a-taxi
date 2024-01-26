function div1(){
    document.getElementById('div1').style.display="block"
    document.getElementById('div2').style.display="none"
    document.getElementById('div3').style.display="none"
    document.getElementById('div4').style.display="none"

   
  
}

function div2(){
    document.getElementById('div1').style.display="none"
    document.getElementById('div2').style.display="block"
    document.getElementById('div3').style.display="none"
    document.getElementById('div4').style.display="none"


  
}

function div3(){
    document.getElementById('div1').style.display="none"
    document.getElementById('div2').style.display="none"
    document.getElementById('div3').style.display="block"
    document.getElementById('div4').style.display="none"
  
}

function div4(){
    document.getElementById('div1').style.display="none"
    document.getElementById('div2').style.display="none"
    document.getElementById('div3').style.display="none"
    document.getElementById('div4').style.display="block"
  
}



//-----------------------------





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




function openFunction(){
    document.getElementById('menu').style.width='250px';
    }
    function closeFunction(){
        document.getElementById('menu').style.width='0px';
    }
  




    


