function validaConfirmarSenha(){

    let senha = document.getElementById("password").value;
    let confirmarSenha  = document.getElementById("confirm-password").value;
    
    console.log(senha);
if(senha === confirmarSenha){
    alert("iguais");

}
else{

    alert("diferentes");
}
}
