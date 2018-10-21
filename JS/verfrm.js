var clic = 1;
var clic2 = 1;
 var clic3 = 1;
function mostrarfrm1() {

    if(clic==1){
        clic2 = 1;
        clic3 = 1;
        document.getElementById("adminfrm1").style.display = "block";  
        document.getElementById("adminfrm2").style.display = "none"; 
        document.getElementById("adminfrm3").style.display = "none"; 
        document.getElementById("marcas").style.height = "1054px";
        clic = clic + 1;

        } else{
     
            document.getElementById("adminfrm1").style.display = "none"; 
            document.getElementById("marcas").style.height = "800px";      
     
         clic = 1;
         clic2 = 1;
         clic3 = 1;
        } 
}

function mostrarfrm2() {

    if(clic2==1){
        clic = 1;
        clic3 = 1;
        document.getElementById("adminfrm1").style.display = "none";  
        document.getElementById("adminfrm2").style.display = "block"; 
        document.getElementById("adminfrm3").style.display = "none";  
        document.getElementById("marcas").style.height = "1054px";
        clic2 = clic2 + 1;

        } else{
     
            document.getElementById("adminfrm2").style.display = "none"; 
            document.getElementById("marcas").style.height = "800px";      
     
         clic2 = 1;
         clic = 1;
         clic3 = 1;
        } 
}

function mostrarfrm3() {

    if(clic3==1){

        clic = 1;
        clic2 = 1;
        document.getElementById("adminfrm1").style.display = "none";  
        document.getElementById("adminfrm2").style.display = "none"; 
        document.getElementById("adminfrm3").style.display = "block"; 
        document.getElementById("marcas").style.height = "1054px";
        clic3 = clic3 + 1;
      
        } else{
     
            document.getElementById("adminfrm3").style.display = "none";       
            document.getElementById("marcas").style.height = "800px";
         clic3 = 1;
         clic = 1;
         clic2 = 1;
        } 
}