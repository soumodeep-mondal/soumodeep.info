var myVar;

function myFunction(){
    myVar = setTimeout(hiding, 2000);
    myVar = setTimeout(showPage,1000);


function showPage(){
    document.getElementById("preloader").style.display = "none";
    document.getElementById("myVar").style.display = "block";
}

function hiding(){
    document.getElementById("preloader").style.animation = "fadeout 1s ease";
    document.getElementById("myVar").style.animation = "fadein 1s ease";
}
}