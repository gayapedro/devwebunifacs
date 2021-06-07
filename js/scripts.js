function buscarEnderecoPorCep() {
  const cep = $("#cep").val();
  var xhr = new XMLHttpRequest();
  xhr.open("GET", `http://cep.la/${cep}`, true);
  xhr.setRequestHeader("Accept", "application/json");
  xhr.onreadystatechange = function () {
    if ((xhr.readyState == 0 || xhr.readyState == 4) && xhr.status == 200) {
      const response = JSON.parse(xhr.responseText);
      $("#logradouro").val(response["logradouro"]);
      $("#cidade").val(response["cidade"]);
      $("#estado").val(response["uf"]);
      $("#logradouro").prop("readonly", "true");
      $("#cidade").prop("readonly", "true");
      $("#estado").prop("readonly", "true");
    }
  };
  xhr.send(null);
}

function validaCadastro() {
  let errMsg = [];
  const cpf = $("#cpf").val();
  const cep = $("#cep").val();
  const logradouro = $("#logradouro").val();
  const celular = $("#telefone").val();
  const senha = $("#senha").val();
  const confirmasenha = $("#pwdConf").val();
  if (cpf.length < 14 && cpf.length > 0) {
    errMsg.push("CPF inválido.");
  }
  if ((cep.length < 10 && cep.length > 0) || logradouro.length === 0) {
    errMsg.push("CEP inválido.");
  }
  if (celular.length < 15 && celular.length > 0) {
    errMsg.push("Celular inválido.");
  }
  if (senha !== confirmasenha) {
    errMsg.push("As duas senhas não conferem.");
  }
  return errMsg;
}

$(document).ready(function() {

  const token = $.cookie("token");

  $("#divErros").hide();

  [].forEach.call($(".signed"), function (el) {
    el.style.visibility = token ? 'visible' : 'hidden';
  });
  [].forEach.call($(".not-signed"), function (el) {
    el.style.visibility = token ? 'hidden' : 'visible';
  });

  if ($("#padrao").is(":checked")) {
    $("#divnovoendereco").hide();
    $("#cep").prop("required", false);
    $("#logradouro").prop("required", false);
    $("#complemento").prop("required", false);
    $("#cidade").prop("required", false);
    $("#estado").prop("required", false);
  }

  $("#form").submit(function (e) {
    const erros = validaCadastro();
    console.log(erros);
    $("#divErros").empty();
    if (erros.length > 0) {
      e.preventDefault();
      $("#divErros").show();
      for (let erro of erros) {
        $("#divErros").append(`<p>${erro}</p>`);
      }
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        100
      );
    } else {
      $("#divErros").hide();
    }
  });

});

function goBack() {
  window.location.href="./produtos";
}

function enableInputs() {
  $("#logradouro").prop("disabled", "false");
  $("#cidade").prop("disabled", "false");
  $("#estado").prop("disabled", "false");
}

function showNovoEndereco() {
  $("#divnovoendereco").show();
  $("#cep").prop("required", true);
  $("#logradouro").prop("required", true);
  $("#complemento").prop("required", true);
  $("#cidade").prop("required", true);
  $("#estado").prop("required", true);
}

function hideNovoEndereco() {
  $("#divnovoendereco").hide();
  $("#cep").prop("required", false);
  $("#logradouro").prop("required", false);
  $("#complemento").prop("required", false);
  $("#cidade").prop("required", false);
  $("#estado").prop("required", false);
}

function showUpdateItemAndSetPath(cantidadOriginal, id) {
  const cantidadAtual = $(`#cantidad_${id}`).val();
  console.log(`${cantidadAtual} - ${cantidadOriginal}`);
  if (cantidadOriginal != cantidadAtual) {
    $(`#btn-${id}`).css("display", "block");
    $(`#btn-${id}`).attr("href", `./alteritem?id=${id}&cantidad=${cantidadAtual}`);

  } else {
    $(`#btn-${id}`).css("display", "none");
  }
}

function setModalId($id) {
  $(`#idCompraModal`).val($id);
}