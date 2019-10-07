<html>
<head>
<title>SÃO PAULO FC</title>
</head>
<body><h2><strong><a href="http://localhost/html.php" title="Ir para a página inicial do São Paulo" id="logo" data-hveid="7"><img src="http://imagens.ebc.com.br/odPmBjKaXITpCqWah11AdcH5ANc=/1140x760/smart/http://agenciabrasil.ebc.com.br/sites/default/files/thumbnails/image/sao_paulo_fc.jpg?itok=lrKy0zcp" alt="São Paulo" height="60" width="100" data-atf="1"></a>
<br><br>TRI-MUNDIAL </strong></h2><b>SPFC</b>

<b><br> <hr><li>TITULOS INTERNACIONAIS</li></b>
<ol>
<li>Mundial de Clubes: 1992, 1993, 2005</li>
<li>Copa Libertadores da América: 1992, 1993, 2005</li>
<li> Copa Sul-Americana: 2012</li>
<li> Supercopa da Libertadores da América: 1993</li>
<li>Recopa Sul-Americana: 1993, 1994</li>
<li>opa Conmebol: 1994</li>
<li>Copa Master da Conmebol: 1996</li>
</ol>
<br>
<br>
<b> <hr><h2>Cadastro</h2></b>
<br>
<form> 

</form>
<form name="input" action="html_form_action.asp"
method="get">
*Nome Completo: 
<input type="text" name="user"><input type="radio" name="sex" value="male"checked> Masculino <input type="radio" name="sex" value="female"> Feminino
<br>
<title>ViaCEP Webservice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
    </head>

    <body>
    <!-- Inicio do formulario -->
      <form method="get" action=".">
        <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" /></label><br />
        <label>Rua:
        <input name="rua" type="text" id="rua" size="60" /></label><br />
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" /></label><br />
        <label>Cidade:
        <input name="cidade" type="text" id="cidade" size="40" /></label><br />
        <label>Estado:
        <input name="uf" type="text" id="uf" size="2" /></label><br />
        <label>IBGE:
        <input name="ibge" type="text" id="ibge" size="8" /></label><br />
      </form>
<br>
</form>
<meta http-equiv="refresh" content="tempo (em segundos);URL=localhost/html.php">

</body>
</html>

<!-- <input type="submit" value="Enviar">
