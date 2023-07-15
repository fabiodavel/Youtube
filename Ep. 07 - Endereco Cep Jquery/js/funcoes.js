$('#cep').blur(function () {
    var vl = this.value;

    $.get('https://viacep.com.br/ws/'+vl+'/json/', function (dados) {
        $('#rua').val(dados.logradouro);
        $('#bairro').val(dados.bairro);
        $('#cidade').val(dados.localidade);
        $('#estado').val(dados.uf);
    });
});

$('#cep').mask('99999-999');