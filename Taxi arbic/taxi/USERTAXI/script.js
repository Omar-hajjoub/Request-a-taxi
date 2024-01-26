
function div1(){
    document.getElementById('cards').style.display="block"
    document.getElementById('recent_grid').style.display="block"
    document.getElementById('container').style.display="none"
    document.getElementById('acont').style.display="none"

  
}

function div2(){
    document.getElementById('cards').style.display="none"
    document.getElementById('recent_grid').style.display="none"
    document.getElementById('container').style.display="block"
    document.getElementById('acont').style.display="none"

  
}

function div6(){
    document.getElementById('cards').style.display="none"
    document.getElementById('recent_grid').style.display="none"
    document.getElementById('container').style.display="none"
    document.getElementById('acont').style.display="inline-block"
  
}



// احضر زر الفتح والنافذة القائمة
const taxisghir= document.getElementById("taxisghir");
const btntaxikbir = document.getElementById("btntaxikbir");

const taxikbir= document.getElementById("taxikbir");
const btntaxisghir = document.getElementById("btntaxisghir");



btntaxikbir.addEventListener("click", () => {
    taxikbir.style.display='block';
    taxisghir.style.display='none';

});

btntaxisghir.addEventListener("click", () => {
    taxikbir.style.display='none';
  taxisghir.style.display='block';

});

