<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de cadastro</title>
</head>
<body>
    <?php 
        include 'cadastro.php';?>
    <form method="POST">
        <label>CPF: </label>
        <input type="text" id="tCPF" name="tCPF"/>
        <br><br>

        <label>Nome: </label>
        <input type="text" id="tNome" name="tNome"/>
        <br><br>

        <label>Telefone: </label>
        <input type="text" id="tTel" name="tTel"/>
        <br><br>

        <label>Endereco: </label>
        <input type="text" id="tEnd" name="tEnd"/>
        <br><br>

        <label>Cidade: </label>
        <input type="text" id="tCid" name="tCid"/>
        <br><br>



        <button> Cadastrar
         <?php            
            //Passe os dados para o construtor
            
            function consultarObjeto(){
                $cpf = $_POST['tCPF'];
                $nome = $_POST['tNome'];
                $telefone = $_POST['tTel'];
                $endereco = $_POST['tEnd'];
                $cidade = $_POST['tCid'];
        
                $cad = new Cadastro($cpf, $nome, $telefone, $endereco, $cidade);
                return $cad;
            }//fim do metodo
         ?>

        </button>
    </form>

    <?php 
        echo consultarObjeto()->imprimir();
    ?>
</body>
</html>