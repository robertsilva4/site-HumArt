<?php

$emailDestino = (isset($_POST['emailDestino']))? $_POST['emailDestino'] : '' ;
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
    default:
        echo "Insira um e-mail válido";
        break;
}
$emailCliente = (isset($_POST['emailCliente']))? $_POST['emailCliente'] : '';


function validaEmail($emailCliente) {
    return filter_var($emailCliente, FILTER_VALIDATE_EMAIL);
}

$assunto = "contato formmail";

if (mail ($emailDestino, $assunto, nl2br($email_conteudo), $email_headers)){ 
    echo "</b>E-Mail enviado com sucesso!</b>"; 
    } 
    else{ 
    echo "</b>Falha no envio do E-Mail!</b>"; }


// echo "$emailDestino , $emailCliente, $mensagem";

 
    //Variaveis de POST, Alterar somente se necessário 
    //====================================================
    // $nome = $_POST['nome'];
    $email = $emailCliente;
    $mensagem = (isset($_POST['mensagem']))? $_POST['mensagem'] : '';
    //====================================================
    
    //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
    //==================================================== 
    $email_remetente = "robert.richrd020@gmail.com"; // deve ser uma conta de email do seu dominio 
    //====================================================
    
    //Configurações do email, ajustar conforme necessidade
    //==================================================== 
    $email_destinatario = $emailDestino; // pode ser qualquer email que receberá as mensagens
    $email_reply = "$email"; 
    $email_assunto = "Contato formmail"; // Este será o assunto da mensagem
    //====================================================
    
    //Monta o Corpo da Mensagem
    //====================================================
    // $email_conteudo = "Nome = $nome \n"; 
    $email_conteudo .= "Email = $email \n";
    // $email_conteudo .= "Telefone = $telefone \n"; 
    $email_conteudo .= "Mensagem = $mensagem \n"; 
    //====================================================
    
    //Seta os Headers (Alterar somente caso necessario) 
    //==================================================== 
    $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
    //====================================================
    
    //Enviando o email 
    //==================================================== 
    if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
    echo "</b>E-Mail enviado com sucesso!</b>"; 
    } 
    else{ 
    echo "</b>Falha no envio do E-Mail!</b>"; } 
    //====================================================
    


// function pegaValor($emailCliente) {
//     return isset($_POST[$emailCliente]) ? $_POST[$emailCliente] : '';
// }


// function enviaEmail($de, $assunto, $mensagem, $para, $email_servidor) {
//     $headers = "From: $email_servidor\r\n" .
//                "Reply-To: $de\r\n" .
//                "X-Mailer: PHP/" . phpversion() . "\r\n";
//     $headers .= "MIME-Version: 1.0\r\n";
//     $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
//   mail($para, $assunto, nl2br($mensagem), $headers);
// }

// $email_servidor = "https://outlook.office.com/mail/inbox";
// $para = "$emailDestino";
// $de = $emailCliente;
// $assunto = "Assunto da mensagem";

