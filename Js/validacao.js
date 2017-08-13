var botaoEnvia = document.querySelector("#enviaForm");

botaoEnvia.addEventListener("click",function(event){
    event.preventDefault();
    
    var form = document.querySelector("#form");
    
    var usuario = criaUsuario(form);
    
    var erros = validaUsuario(usuario);
    
    var valido = true;
    
    if(erros.length >0)
    {
        exibeErros(erros);
        valido = false;
        return;
    }
    else
    {
        var ul = document.querySelector("#erros");
        ul.remove();
    }
       
    if(valido === true)
    {
        form.submit();
    }
    
    form.reset();
});

function criaUsuario (form)
{
    var usuario = {
        nome: form.nome.value,
        cpf: form.cpf.value,
        genero: form.genero.selectedIndex,
        nascimento: form.data.value,
        email: form.email.value,
        senha: form.senha.value,
        confirma: form.confirma.value
    }
    
    return usuario;
}

function validaUsuario(usuario)
{
    var erros = [];
    
    if(usuario.nome.length <3)
    {
        erros.push("Nome inválido");
    }
    
    if(usuario.cpf.length <11)
    {
        erros.push("CPF inválido");
    }
    
    if(usuario.genero == 0)
    {
        erros.push("Selecione uma gênero");
    }
    
    if(usuario.nascimento.length <8)
    {
        erros.push("Informe uma data válida");
    }
    
    if(usuario.email.length <12)
    {
        erros.push("Informe uma e-mail válido");
    }
    
    if(usuario.senha.length <8)
    {
        erros.push("Infome uma senha com 8 digítos");
    }
    
    if(usuario.senha != usuario.confirma)
    {
        erros.push("Senhas diferentes");
    }
    
    return erros;    
    
}

function exibeErros(erros)
{
    var ul = document.querySelector("#erros");
    
    ul.innerHTML = "";
    
    erros.forEach(function(erro){
        var li = document.createElement("li");
        li.textContent = erro;
        ul.appendChild(li);
    });
}