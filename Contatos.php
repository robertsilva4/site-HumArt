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
            <div class="col-lg-12 ">
                <main>
                    <div class="float-lg-left col-lg-7">
                        <article>
                            <h1 class="text-center p-3">Contatos</h1>
                            <figure class="col-lg-5 figure p-2">
                                <img class="figure-img img-fluid rounded float-left" src="images/logo%20linkedin_100x100.png" alt="" height="100" width="100" />
                                <figcaption class="figure-caption float-right">
                                    <p><a href="#">Dmitri lima</a></p>
                                    <p><a href="#">Carlos Benfica</a></p>
                                    <p><a href="#">Robert Silva</a></p>
                                    <p><a href="#">Vitor Vicentini</a></p>
                                </figcaption>
                            </figure>
                            <figure class="col-lg-5 figure p-2">
                                <img class="figure-img img-fluid rounded float-left" src="images/logo%20linkedin.png" alt="" height="150" width="150" />
                                <figcaption class="figure-caption float-right">
                                    <p><a href="#">Dmitri Lima</a></p>
                                    <p><a href="#">Carlos Benfica</a></p>
                                    <p><a href="#">Robert Silva</a></p>
                                    <p><a href="#">Vitor Vicentini</a></p>
                                </figcaption>
                            </figure>
                            <figure class="col-lg-5 figure p-2">
                                <img class="figure-img img-fluid rounded float-left" src="images/logo%20twiter.png" alt="" height="150" width="150" />
                                <figcaption class="figure-caption float-right">
                                    <p><a href="#">Dmitri Lima</a></p>
                                    <p><a href="#">Carlos Benfica</a></p>
                                    <p><a href="#">Robert Silva</a></p>
                                    <p><a href="#">Vitor Vicentini</a></p>
                                </figcaption>
                            </figure>
                            <figure class="col-lg-5 figure p-2">
                                <img class="figure-img img-fluid rounded float-left" src="images/logo%20whatsapp.png" alt="" height="150" width="150" />
                                <figcaption class="figure-caption float-right">
                                    <p><a href="#">Dmitri Lima</a></p>
                                    <p><a href="#">Carlos Benfica</a></p>
                                    <p><a href="#">Robert Silva</a></p>
                                    <p><a href="#">Vitor Vicentini</a></p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-5 float-lg-right">
                        <aside>
                            <h2 class="text-center">Contate-nos</h2>
                            <form action="codigo-email.php" method="POST">
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
                                <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                            </form>
                        </aside>
                    </div>
                </main>
            </div>
        </div>
        <div class="row">
            <footer>
                <?php include 'php/footer.php';?>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
