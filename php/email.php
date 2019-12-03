<?php

$emailCliente = (isset($_POST['emailCliente'])) ? ($_POST['emailCliente']) : '';
$emailDestino = (isset($_POST['emailDestino'])) ? ($_POST['emailDestino']) : '';
$mensagem = (isset($_POST['mensagem'])) ? ($_POST['mensagem']) : '';

switch ($emailDestino) {
    case '1':
        $emailDestino = 'carlos.benfica@fatec.sp.gov.br';
        break;

    case '2':
        $emailDestino = 'dmitrilimaonlie@gmail.com';
        break;

    case '3':
        $emailDestino = 'robert.silva4@fatec.sp.gov.br';
        break; 

    case '4':
        $emailDestino = 'vitor.vicentini@fatec.sp.gov.br';
        break;

}

$docMensagem = fopen('docMensagem.json', 'a+');

fwrite($docMensagem, $mensagem . PHP_EOL);

fclose($docMensagem);

fopen('Contatos.php', PHP_EOL);
