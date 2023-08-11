

function viewPass(){
    var chboxView = document.getElementById("viewPassword");
    var pass = document.getElementById("clave");

    if(chboxView.checked)
    {
        pass.type = "text";
    }
    else
    {
        pass.type="password";
    }
}