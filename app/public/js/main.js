const parametros = new URLSearchParams(window.location.search);
const tipoMensagem = parametros.get('mensagem');
const notificacao = document.createElement('div');

if (tipoMensagem === 'sucesso') {
    notificacao.innerHTML = 'Operação realizada com sucesso!';
    notificacao.className = 'notificacao sucesso';
} else if (tipoMensagem === 'erro') {
    notificacao.innerHTML = 'Erro ao realizar operação!';
    notificacao.className = 'notificacao erro';
}

if (tipoMensagem) {
    document.body.appendChild(notificacao);
    setTimeout(() => notificacao.remove(), 2000);
}

