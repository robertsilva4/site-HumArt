<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css" />
  <title>Contatos</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <header>
        <?php include 'php/header.php';?>
      </header>
    </div>
    <div class="row">
      <?php include 'php/nav.php';?>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <main>
          <div class="p-5 flo col-lg-7 ">
            <article>
              <h2 class="text-center">Contate-nos para mais detalhes</h2>
              <form action="php/email.php" method="POST">
                <div class="form-group">
                  <div>
                    <label for="emailcliente">Digite o seu E-mail:</label>
                    <input type="email" name="emailCliente" class="form-control" id="emailcliente" placeholder="name@example.com" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="formulariodeselecao">Selecione um E-mail de destino:</label>
                  <select class="form-control" name="emailDestino" id="formulariodeselecao" required>
                    <option value="">Selecionar uma opção</option>
                    <option value="1">1-Carlos Benfica</option>
                    <option value="2">2-Dmitri Lima</option>
                    <option value="3">3-Robert Richard</option>
                    <option value="4">4-Vitor Vicentini</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="campodeformulario">Seleção de E-mails:</label>
                  <select multiple class="form-control" id="campodeformulario">
                    <option>1 - carlos.benfica@fatec.sp.gov.br</option>
                    <option>2 - dmitrilimaonlie@gmail.com</option>
                    <option>3 - robert.silva4@fatec.sp.gov.br</option>
                    <option>4 - vitor.vicentini@fatec.sp.gov.br</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="caixadetexto">Caixa de texto:</label>
                  <textarea class="form-control" name="mensagem" id="caixadetexto" rows="4" required></textarea>
                </div>
                <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">Enviar</button>
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Sucesso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Parabéns, Seu E-mai foi enviado com Sucesso !!!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>
              </form>
            </article>
          </div>
        </main>
      </div>
    </div>
  </div>
 
  <div class=" align-text-top bg-dark">
    <footer>
      <?php include 'php/footer.php';?>
    </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
