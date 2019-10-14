<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.min.css" />
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
            <article>
                <div class="col-12">
                    <h1></h1>
                </div>

            </article>
        </div>
        <div class="row">
            <div class="col-12">
            <figure>
                <img src="images/" alt="" height="" width="">
                <figcaption>
                    <h2>História do Robert Richard</h2>
                </figcaption>
            </figure>
            </div>
            <form action="Codigo-email.php" method="post">
                <fieldset class="col-12">
                    <label for="email">E-mail: </label>
                    <input required name="email" type="email">
                </fieldset>
                <fieldset class="col-12">
                    <label for="mensagem">Mensagem: </label>
                    <textarea required name="mensagem"></textarea>
                </fieldset>
                <fieldset>
                    <button type="submit">Enviar</button>
                </fieldset>
            </form>
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
