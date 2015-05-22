function isEmpty(field, error_id){
    if(field.value == null || field.value == "") {
        document.getElementById(error_id).innerHTML = "*";
        return true;
    }

    return false;
}

function createErrorItem(content) {
    return "<h4 class=\"error_item\">" + content + "</h4>";
}

function validateFormCadastro() {
    //Informacoes de login
    var usuario = document.getElementById("usuario");
    var senha = document.getElementById("senha");
    var confirmacaoSenha = document.getElementById("confirmacao_senha");

    //Informacoes pessoais
    var nome = document.getElementById("nome");
    var cpf = document.getElementById("cpf");
    var dataDeNascimento = document.getElementById("data_nascimento");
    var sexo = document.getElementById("sexo");
    var email = document.getElementById("email");

    //Informações residenciais
    // var cep = document.getElementById("cep");
    // var rua = document.getElementById("rua");
    // var numero = document.getElementById("numero");
    // var bairro = document.getElementById("bairro");
    // var cidade = document.getElementById("cidade");
    // var estado = document.getElementById("estado");
    // var telefone = document.getElementById("telefone");

    var emptyFields = false;
    var invalidCPF = false;

    if(isEmpty(usuario, "error_usuario"))
        emptyFields = true;
    if(isEmpty(senha, "error_senha"))
        emptyFields = true;
    if(isEmpty(confirmacaoSenha, "error_confirmacao_senha"))
        emptyFields = true;
    if(isEmpty(nome, "error_nome"))
        emptyFields = true;
    if(isEmpty(cpf, "error_cpf"))
        emptyFields = true;
    if(isEmpty(dataDeNascimento, "error_data_nascimento"))
        emptyFields = true;
    if(!document.getElementById("sexo_masculino").checked || !document.getElementById("sexo_feminino").checked) {
        document.getElementById("error_sexo").innerHTML = "*";
        emptyFields = true;
    }
    if(isEmpty(email, "error_email"))
        emptyFields = true;

    // if(isEmpty(cep, "error_cep"))
    //  emptyFields = true;
    // if(isEmpty(rua, "error_rua"))
    //  emptyFields = true;
    // if(isEmpty(numero, "error_numero"))
    //  emptyFields = true;
    // if(isEmpty(bairro, "error_bairro"))
    //  emptyFields = true;
    // if(isEmpty(cidade, "error_cidade"))
    //  emptyFields = true;
    // if(isEmpty(estado, "error_estado"))
    //  emptyFields = true;
    // if(isEmpty(telefone, "error_telefone"))
    //  emptyFields = true;

    var divErrorList = document.getElementById("error_list");
    var errorInnerHTML = "";

    if(emptyFields) {
        errorInnerHTML += createErrorItem("Verifique se existem campos vazios antes de continuar.");
    }

    // if(invalidCPF) {
    //     errorInnerHTML += createErrorItem("Verifique se o número de CPF inserido é válido.");
    // }

    divErrorList.innerHTML = errorInnerHTML;

    if(emptyFields) {
        return false;
    }
    else {
        return true;
    }
}

function validateFormContato() {
    var nome = document.getElementById("nome");
    var email = document.getElementById("email");
    var mensagem = document.getElementById("mensagem");

    var emptyFields = false;

    if(isEmpty(nome, "error_nome"))
        emptyFields = true;
    if(isEmpty(email, "error_email"))
        emptyFields = true;
    if(isEmpty(mensagem, "error_mensagem"))
        emptyFields = true;

    var divErrorList = document.getElementById("error_list");
    var errorInnerHTML = "";

    if(emptyFields) {
        errorInnerHTML += createErrorItem("Verifique se existem campos vazios antes de continuar.");
    }

    divErrorList.innerHTML = errorInnerHTML;

    if(emptyFields) {
        return false;
    }
    else {
        return true;
    }
}

function validateFormLogin() {
    var usuario = document.getElementById("usuario");
    var senha = document.getElementById("senha");

    var emptyFields = false;

    if(isEmpty(usuario, "error_usuario"))
        emptyFields = true;
    if(isEmpty(senha, "error_senha"))
        emptyFields = true;

    var divErrorList = document.getElementById("error_list");
    var errorInnerHTML = "";

    if(emptyFields) {
        errorInnerHTML += createErrorItem("Verifique se existem campos vazios antes de continuar.");
    }

    divErrorList.innerHTML = errorInnerHTML;

    if(emptyFields) {
        return false;
    }
    else {
        return true;
    }
}
