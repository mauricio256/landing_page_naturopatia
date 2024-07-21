const form = document.getElementById('form');
const input = document.querySelectorAll('.input');
const spanImput = document.querySelectorAll('.span');

function validaLogin(){

    //////usuario
    if(input[0].value === ""){
            input[0].style="border-bottom: 5px solid red";
            spanImput[0].innerHTML="Este campo não pode ser vazio";
            spanImput[0].style="color:red";
            input[0].focus();
            return false;
    }else{
            input[0].style="border-bottom: 5px solid green";
            spanImput[0].innerHTML="OK!";
            spanImput[0].style="color:green";
    }

    //////senha
    if(input[1].value === ""){
            input[1].style="border-bottom: 5px solid red";
            spanImput[1].innerHTML="Este campo não pode ser vazio";
            spanImput[1].style="color:red";
            input[1].focus();
            return false;
    }else{
            input[1].style="border-bottom: 5px solid green";
            spanImput[1].innerHTML="OK!";
            spanImput[1].style="color:green";
    }

}