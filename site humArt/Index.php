<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">

    <title>HumArt</title>
</head>

<body>
    <div class="text-center col-lg-5 float-right alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Atenção !</strong>
        <p>Este site pode utilizar dados salvos no seu cookie, Leia as normas de utilização do site</p> <a href="termosdeuso.php">clique aqui</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="container">
        <div class="row">
            <header>
                <div class="col-lg-12">
                    <?php include 'php/header.php';?>
                </div>
            </header>
        </div>
        <div class="row">
            <?php include 'php/nav.php';?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <main>
                    <div class="col-lg-4 col-md-12 col-sm-12 float-lg-right ">
                        <aside>
                            <h2 class="text-center p-3">O que é a arte? </h2>
                            <p class="text-justify ">A arte é uma habilidade ou disposição dirigida para a execução de uma finalidade prática ou teórica
                                realizada de forma consciente, controlada e racional, ou seja a are é definida por nossos sentimentos e emoção e pode
                                ser definida em diversas maneiras tanto na forma de pensar, agir e até na forma de definir suas emoções. </p>
                            <h2 class="text-center p-3">Qual a ligação da arte com a natureza?</h2>
                            <p class="text-justify">Difícil falar em poucas linhas sobre dois “temas” tão abrangentes como arte e natureza,
                                e mais ainda sobre a relação entre eles. Se quisermos defini-los, não o faremos com muita facilidade, apesar de sermos íntimos
                                dos dois, seus significados são tão amplos que escapam às palavras. Enfim, a arte pode ser um simples modo de olhar , e a natureza
                                pode ser também uma sensação, dentre infinitas definições. Vejamos se essa seleção de filmes escolhidos nos ajudam a pensar sobre
                                essa relação entre arte e natureza.</p> <b>Fonte:Aline Albuquerque</b> <a target="_blank" href="https://cineclubeserverluz.wordpress.com/textos2/arte-e-natureza/">ver mais</a>
                        </aside>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 float-lg-left p-2">
                        <article>
                            <h1 class="text-center p-lg-2 p-md-3">Todos os tipos de artes</h1>
                            <div class="col-lg-6 col-md-6 d-flex justify-content-center float-lg-left float-md-left p-2">
                                <div class="card" style="width: 18rem;">
                                    <img src="images/arte%20quilombaque_300x250.jpg" class="card-img-top" width="200" height="200" alt="">
                                    <div class="card-body">
                                        <p class="card-text">O quilambaque é uma comunidade de origem aficana, está localizado no bairro de Perus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex justify-content-center float-lg-right float-md-right p-2 ">
                                <div class="card" style="width: 18rem;">
                                    <img src="images/biom1_300x250.jpg" class="card-img-top" width="200" height="200" alt="">
                                    <div class="card-body">
                                        <p class="card-text"> O estilo Bio Mecânico é composto de tatuagens que imitam na pele objetos mecânicos .</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex justify-content-center float-lg-left float-md-left p-2">
                                <div class="card" style="width: 18rem;">
                                    <img src="images/capoeira_cultura300x250.jpg" class="card-img-top" width="200" height="200" alt="">
                                    <div class="card-body">
                                        <p class="card-text">A capoeira cultural brasileira mistura arte marcial, esporte, cultura popular, dança e música.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex justify-content-center float-lg-right float-md-right p-2">
                                <div class="card" style="width: 18rem;">
                                    <img src="images/cutura%20japonesa_300x250.jpg" class="card-img-top" width="200" height="200" alt="">
                                    <div class="card-body">
                                        <p class="card-text">O Japão exibe uma cultura multifacetada, com tradições milenares cujas marcas persistem.</p>
                                    </div>
                                </div>
                            </div>
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
</body>

</html>
