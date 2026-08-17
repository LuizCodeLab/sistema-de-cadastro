<?php

// =====================================================
// 1. RECEBIMENTO DOS DADOS
// =====================================================
// Os dados enviados pelo formulário chegam através do POST.

$nome = $_POST['nome1'];
$idade = $_POST['idade2'];
$profissao = $_POST['profissao3'];
$salario = $_POST['salario4'];
$telefone = $_POST['telefone5'];
$experiencia = $_POST['experiencia6'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <!-- Permite uma boa visualização em dispositivos diferentes -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro realizado</title>
</head>

<body>

    <!-- =====================================================
         2. TÍTULO DA PÁGINA DE CONFIRMAÇÃO
         ===================================================== -->

    <h1>Cadastro realizado com sucesso!</h1>

    <p>Confira abaixo os dados cadastrados:</p>

    <!-- =====================================================
         3. APRESENTAÇÃO DOS DADOS
         ===================================================== -->

    <p>
        <strong>Nome completo:</strong>
        <?php echo $nome; ?>
    </p>

    <p>
        <strong>Idade:</strong>
        <?php echo $idade; ?>
    </p>

    <p>
        <strong>Profissão:</strong>
        <?php echo $profissao; ?>
    </p>

    <p>
        <strong>Salário pretendido:</strong>
        R$ <?php echo $salario; ?>
    </p>

    <p>
        <strong>Telefone:</strong>
        <?php echo $telefone; ?>
    </p>

    <p>
        <strong>Experiência anterior:</strong>
        <?php echo $experiencia; ?>
    </p>

    <!-- =====================================================
         4. MENSAGEM PERSONALIZADA
         ===================================================== -->

    <h2>Mensagem</h2>

    <p>
        Olá, <?php echo $nome; ?>!
        Agradecemos seu interesse em trabalhar conosco como
        <?php echo $profissao; ?>.
        Sua experiência informada foi:
        <?php echo $experiencia; ?>
    </p>

    <!-- =====================================================
         5. RETORNO AO FORMULÁRIO
         ===================================================== -->

    <a href="cadastro.html">Voltar para o formulário</a>

</body>

</html>