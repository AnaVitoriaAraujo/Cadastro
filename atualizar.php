<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     function atualizar($opcao, $dado){

        switch($opcao){
            
                case 1: 
                    $_SESSION['nome'] = $dado;
                    return "Atualizado nome";
                    break;

                case 2:
                    $_SESSION['telefone'] = $dado;
                    return "Atualizado telefone";
                    break;
                case 3:
                    $_SESSION['endereco'] = $dado;
                    return "Atualizado endereco";
                    break;
                case 4:
                    $_SESSION['cidade'] = $dado;
                    return "Atualizado cidade";
                    break;

                default:
                return "Faça uma escolha";
             
        }//fim do escola 
    }//fim do metodo

        include 'cadastro.php' ?>
        <form method="POST">

        <label>Escolha o campo que deseja atualizar: </label>
        <select name="opcao">
            <option value="0"></option>
            <option value="1">Nome</option>
            <option value="2">Telefone</option>
            <option value="3">Endereco</option>
            <option value="4">Cidade</option>
        </select>
        <br><br>

        <label>Dado: </label>
        <input type="Text" id="dado" name="dado"/>

        <button> Atualizar
            <?php
                session_start();
                $opcao = $_POST['opcao'];
                $dado = $_POST['dado'];       
            ?>

        </button>
        <?php
            echo atualizar ($opcao, $dado)
        ?>
    
        </form>
    
</body>
</html>