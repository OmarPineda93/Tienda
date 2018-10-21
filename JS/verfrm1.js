var n = 1;
var n2 = 1;
 var n3 = 1;
function mostrarfrm4() {

    if(n==1){
        n2 = 1;
        n3 = 1;
        document.getElementById("adminfrm4").style.display = "block";  
        document.getElementById("adminfrm5").style.display = "none"; 
        document.getElementById("adminfrm6").style.display = "none"; 
        document.getElementById("navegacion4").style.display = "block"; 
        n = n + 1;

        } else{
     
            document.getElementById("adminfrm4").style.display = "none"; 
            document.getElementById("navegacion4").style.display = "none"; 
     
         n = 1;
         n2 = 1;
         n3 = 1;
        } 
}

function mostrarfrm5() {

    if(n2==1){
        n = 1;
        n3 = 1;
        document.getElementById("adminfrm4").style.display = "none";  
        document.getElementById("adminfrm5").style.display = "block"; 
        document.getElementById("adminfrm6").style.display = "none";  
        document.getElementById("navegacion4").style.display = "none"; 
        n2 = n2 + 1;

        } else{
     
            document.getElementById("adminfrm5").style.display = "none"; 
     
            document.getElementById("navegacion4").style.display = "none"; 
         n2 = 1;
         n = 1;
         n3 = 1;
        } 
}

function mostrarfrm6() {

    if(n3==1){

        n = 1;
        n2 = 1;
        document.getElementById("adminfrm4").style.display = "none";  
        document.getElementById("adminfrm5").style.display = "none"; 
        document.getElementById("adminfrm6").style.display = "block"; 
        document.getElementById("navegacion4").style.display = "none"; 
        n3 = n3 + 1;
      
        } else{
     
            document.getElementById("adminfrm6").style.display = "none";       
            document.getElementById("navegacion4").style.display = "none"; 
         n3 = 1;
         n = 1;
         n2 = 1;
        } 
}