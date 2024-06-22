function WriteToFile(passForm){

    document.write("Testing what this does: " + document.getElementById("fname").value);
    
}

function XMLguests(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            document.getElementById("fname").innerHTML =
            this.responseText;
            }
    };
    xhttp.open("GET", "xml"
}

