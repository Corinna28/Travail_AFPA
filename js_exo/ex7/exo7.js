function check(){
    var nbr;
    nbr = Number(document.getElementById("myInput").value);
    if(nbr%2 == 0)
    {
           alert("Nombre pair");
    }
    else
    {
           alert("Nombre impair");
    }
}