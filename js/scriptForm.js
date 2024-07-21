const form = document.getElementById('form');
const input = document.querySelectorAll('.input');
const spanImput = document.querySelectorAll('.span');

function validaForm(){

  //////NOME
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

 ////// CPF
if(input[1].value === ""){
      spanImput[1].innerHTML="Este campo não pode ser vazio";
      spanImput[1].style="color:red";
      input[1].focus();
      return false;
  }

  //////RG
if(input[2].value === ""){
    input[2].style="border-bottom: 5px solid red";
    spanImput[2].innerHTML="Este campo não pode ser vazio";
    spanImput[2].style="color:red";
    input[2].focus();
    return false;
}else{ 
    input[2].style="border-bottom: 5px solid green";
    spanImput[2].innerHTML="OK!";
    spanImput[2].style="color:green";
}

  //////Nascimento
  if(input[3].value === ""){
    input[3].style="border-bottom: 5px solid red";
    spanImput[3].innerHTML="Este campo não pode ser vazio";
    spanImput[3].style="color:red";
    input[3].focus();
    return false;
}else{ 
    input[3].style="border-bottom: 5px solid green";
    spanImput[3].innerHTML="OK!";
    spanImput[3].style="color:green";
}

  //////CEP
if(input[4].value === ""){
    input[4].style="border-bottom: 5px solid red";
    spanImput[4].innerHTML="Este campo não pode ser vazio";
    spanImput[4].style="color:red";
    input[4].focus();
    return false;
}else{ 
    input[4].style="border-bottom: 5px solid green";
    spanImput[4].innerHTML="OK!";
    spanImput[4].style="color:green";
}

/////// UF
  if(input[5].value === ""){
    input[5].style="border-bottom: 5px solid red";
    spanImput[5].innerHTML="Este campo não pode ser vazio";
    spanImput[5].style="color:red";
    input[5].focus();
    return false;
}else {
    input[5].style="border-bottom: 5px solid green";
    spanImput[5].innerHTML="OK!";
    spanImput[5].style="color:green";
}


  ////// CIDADE
  if(input[6].value === ""){
    input[6].style="border-bottom: 5px solid red";
    spanImput[6].innerHTML="Este campo não pode ser vazio";
    spanImput[6].style="color:red";
    input[6].focus();
    return false;
  }else{
      input[6].style="border-bottom: 5px solid green";
      spanImput[6].innerHTML="OK!";
      spanImput[6].style="color:green";
  }

  ////// ENDERECO
  if(input[7].value === ""){
    input[7].style="border-bottom: 5px solid red";
    spanImput[7].innerHTML="Este campo não pode ser vazio";
    spanImput[7].style="color:red";
    input[7].focus();
    return false;
  }else{
      input[7].style="border-bottom: 5px solid green";
      spanImput[7].innerHTML="OK!";
      spanImput[7].style="color:green";
  }

  ////// FILIACAO
  if(input[8].value === ""){
    input[8].style="border-bottom: 5px solid red";
    spanImput[8].innerHTML="Este campo não pode ser vazio";
    spanImput[8].style="color:red";
    input[8].focus();
    return false;
  }else{
      input[8].style="border-bottom: 5px solid green";
      spanImput[8].innerHTML="OK!";
      spanImput[8].style="color:green";
  }


   ////// ATIVIDADE
   if(input[10].value === ""){
    input[10].style="border-bottom: 5px solid red";
    spanImput[10].innerHTML="Este campo não pode ser vazio";
    spanImput[10].style="color:red";
    input[10].focus();
    return false;
  }else{
      input[10].style="border-bottom: 5px solid green";
      spanImput[10].innerHTML="OK!";
      spanImput[10].style="color:green";
  }

    ////// TELEFONE
    if(input[11].value === ""){
      input[11].style="border-bottom: 5px solid red";
      spanImput[11].innerHTML="Este campo não pode ser vazio";
      spanImput[11].style="color:red";
      input[11].focus();
      return false;
    }else{
        input[11].style="border-bottom: 5px solid green";
        spanImput[11].innerHTML="OK!";
        spanImput[11].style="color:green";
    }

      ////// EMAIL
   if(input[12].value === ""){
    input[12].style="border-bottom: 5px solid red";
    spanImput[12].innerHTML="Este campo não pode ser vazio";
    spanImput[12].style="color:red";
    input[12].focus();
    return false;
  }else{
      input[12].style="border-bottom: 5px solid green";
      spanImput[12].innerHTML="OK!";
      spanImput[12].style="color:green";
  }
}


  ///// MASCARAS

              ///////////////////////// cpf ///////////////////////
  function is_cpf (c) {

    if((c = c.replace(/[^\d]/g,"")).length != 11)
      return false
  
    if (c == "00000000000")
      return false;
  
    var r;
    var s = 0;
  
    for (i=1; i<=9; i++)
      s = s + parseInt(c[i-1]) * (11 - i);
  
    r = (s * 10) % 11;
  
    if ((r == 10) || (r == 11))
      r = 0;
  
    if (r != parseInt(c[9]))
      return false;
  
    s = 0;
  
    for (i = 1; i <= 10; i++)
      s = s + parseInt(c[i-1]) * (12 - i);
  
    r = (s * 10) % 11;
  
    if ((r == 10) || (r == 11))
      r = 0;
  
    if (r != parseInt(c[10]))
      return false;
  
    return true;
  }
  
  
  function fMasc(objeto,mascara) {
    obj=objeto
    masc=mascara
    setTimeout("fMascEx()",1)
  }
  
    function fMascEx() {
        obj.value=masc(obj.value)
    }
  
  function mCPF(cpf){
      cpf=cpf.replace(/\D/g,"")
      cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
      cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
      cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
      return cpf
  }
  
  cpfCheck = function (el) {
      const spanImput = document.querySelectorAll('.span');
      
      document.getElementById('cpfResponse').innerHTML = is_cpf(el.value) ?  '<span style="color:green">CPF válido</span>'  : '<span style="color:red">CPF inválido</span>';
      
      spanImput[1].innerHTML="";
     
      
      if(el.value=='') document.getElementById('cpfResponse').innerHTML = '';
  }

  //////////////// celular ///////////////////

  function mask(o, f) {
    setTimeout(function() {
      var v = mphone(o.value);
      if (v != o.value) {
        o.value = v;
      }
    }, 1);
  }
  
  function mphone(v) {
    var r = v.replace(/\D/g, "");
    r = r.replace(/^0/, "");
    if (r.length > 10) {
      r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
    } else if (r.length > 5) {
      r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
    } else if (r.length > 2) {
      r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else {
      r = r.replace(/^(\d*)/, "($1");
    }
    return r;
  }

