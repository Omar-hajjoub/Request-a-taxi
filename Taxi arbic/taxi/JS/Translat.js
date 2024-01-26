
//Translat Ordar


  

  
  


//menu ------------------------------
function openFunction(){
  document.getElementById('menu').style.width='250px';
  }
  function closeFunction(){
      document.getElementById('menu').style.width='0px';
  }


 //Translat--------------------------------y
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
