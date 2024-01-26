  //img fille 
  const image=document.getElementById("img1"),
  input=document.getElementById('fil');
  input.addEventListener("change",()=>{
      image.src =URL.createObjectURL(input.files[0])
  })
  

//-------------- Updat and Save------------------
  const inp=document.getElementById("usernam");
  const savebtn =document.getElementById("my-Save");
  const updat = document.getElementById("my-updat");
  const FirstName=document.getElementById("First-Name")
  const Forename=document.getElementById("Fore-name")
  const Email=document.getElementById("Email");
  const Numro=document.getElementById('phonenumber');

  //-------------------Updat------------------
  updat.addEventListener("click", function() {
 inp.removeAttribute("readonly") ;
 FirstName.removeAttribute("readonly") ;
 Forename.removeAttribute("readonly") ;
 Email.removeAttribute("readonly") ;
 Numro.removeAttribute("readonly") ;

 savebtn.style.display="block";
});


//--------------Save button---------------------
savebtn.addEventListener("click", function() {

  inp.setAttribute("readonly",true);
  FirstName.setAttribute("readonly",true) ;
 Forename.setAttribute("readonly",true) ;
 Email.setAttribute("readonly",true) ;
 Numro.setAttribute("readonly",true) ;

  savebtn.style.display="none";
});







