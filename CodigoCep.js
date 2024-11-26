//Codigo temporariamente inativo
let campo = document.querySelector('#campo');
let cep = document.querySelector("#CEP") ?? "";
let label = document.querySelector('label');
let Nome = document.querySelector("#Nome");
let Email = document.querySelector("#Email");
let Senha = document.querySelector("#Senha");
let Tel = document.querySelector("#Tel");
let Cpf = document.querySelector("#CPF");
let img = document.createElement('img');
let btnCerto = document.createElement('button');
let btnErrado = document.createElement('button');

img.id = 'ImagemCorreto';
img.src = 'img/Cadastro realizado com sucesso! (1).png';

btnCerto.id = 'ButtonCerto';
btnErrado.id = 'ButtonErrado';

btnCerto.textContent = 'Concluir cadastro';
btnErrado.textContent = 'Voltar';

function FuncaoBtnCerto() {
  btnCerto.addEventListener('click', () => {
    document.body.appendChild(img);

    setTimeout(() => {
      location.href = 'home.html';
    }, 2200)
  })
}
function FuncaoBtnErrado() {
  btnErrado.addEventListener('click', () => {
    location.reload();
  })
}
function ExibirMensagem(mensagem) {
  campo.innerHTML = campo.classList.contains('Ver') ? mensagem : "";
}

async function CodigoCEP() {

  const url = await fetch(`https://viacep.com.br/ws/${cep.value}/json/`);
  const urljson = await url.json();

  if (url.ok && !urljson.erro) {

    label.innerHTML = '';

    ExibirMensagem('Seus Dados: <br> Nome: <b>' + Nome.value + ' </b> <br> Email: <b>' + Email.value + '</b> <br> Senha: <b>' + Senha.value + '</b> <br> Telefone: <b>' + Tel.value + '</b> <br> CPF: <b>' + Cpf.value + '</b> <br> Dados do CEP: <br> Número do seu CEP: ' + '<b>' + cep.value + '</b>' + '<br>' + 'Rua: ' + '<b>' + JSON.stringify(urljson.logradouro) + '</b>' + '<br>' + 'Bairro: ' + '<b>' + JSON.stringify(urljson.bairro) + '</b>' + '<br>' + 'Cidade: ' + '<b>' + JSON.stringify(urljson.localidade) + '</b>' + '<br>' + 'Estado: ' + '<b>' + JSON.stringify(urljson.estado) + '</b>');

    campo.appendChild(btnCerto);
    campo.appendChild(btnErrado);

    FuncaoBtnCerto();
    FuncaoBtnErrado();
  }
  else {
    campo.innerHTML = '';
    label.innerHTML = 'Talvez seu CEP esteja errado.';
    btnCerto.remove();
    btnErrado.remove();
  }
}

function validarCEP(cep) {
  const validacao = /^\d{8}$/;
  return validacao.test(cep);
}

function Ver() {
  if (Nome.value == 0 || Email.value == 0 || Senha.value == 0 || Tel.value == 0 || Cpf.value == 0 || img.value == 0) {
    campo.innerHTML = '';
    label.innerHTML = 'Todos os campos devem estar preenchidos';
    btnCerto.remove();
    btnErrado.remove();
  }
  else if (!validarCEP(cep.value)) {
    label.innerHTML = 'Certfique-se de que o CEP tenha 8 números';
  }
  else {
    label.innerHTML = '';
    campo.classList.toggle('Ver');
    FuncaoBtnCerto();
    FuncaoBtnErrado();
    CodigoCEP();
  }
}
/*
{
  let barraPesquisa = document.querySelector("#barraPesquisa");
  let btnPesquisa = document.querySelector("#btnPesquisa");
  barraPesquisa.addEventListener("input", () => {
    if (barraPesquisa.value.trim() !== '') {
      btnPesquisa.style.display = 'flex'
    }
    else {
      btnPesquisa.style.display = 'none'
    }
  })
}
*/