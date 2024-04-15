<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teia CRM</title>
    <link rel="icon" style="width: 200px;" href="images/icon - site TEIA.png" type="image/x-icon">
    <meta name="description" content="Conheça a plataforma que tem ganhado lojas e concessionárias no Brasil com as melhores ferramentas de vendas! Simples, fácil de usar e feito pra te fazer vender mais!">
    <meta name="keywords" content="teia crm, teia, crm, vendas, ferramentas de vendas, plataforma de vendas, plataforma de vendas para lojas, plataforma de vendas para concessionárias">
    <meta name="author" content="Teia CRM">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors.css">
</head>

<body>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Sobre o Produto -->
    <section id="sobre-produto" class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h2 class="teiacolor-1">Teia CRM</h2>
                <h5 class="teiacolor-1">Um captador de leads, acelerando processos de venda e muito mais!</h5>
                <p class="cinza-text">
                    O TEIA CRM (Costumer Relationship Management) é um software que vai auxiliar o vendedor a gerenciar o funil de vendas com os leads,
                     fazendo o acompanhamento das etapas e os follow ups de vendas, além de gerar dados para a análise e o gerenciamento dos processos comerciais.
                </p>
            </div>
    </section>

    <!-- apresentação ferramentas -->
    <section id="ferramentas-leads" class="container-fluid text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>WHATSVENDAS</h2>
                    <p>Excelente para loja, MUITO FÁCIL para vendedor.</p>
                    <p class="h4 shadow-lg text-center" style="background-color:#0056b3">Receba leads +QUENTES 24horas por dia!</p>
                </div>
                <div class="col-md-6">
                    <img id="slogan-0" src="./images/slogan.svg" alt="" class="img-fluid" style="width:800px">
                </div>
            </div>
        </div>
    </section>

    <section id="ferramentas-crm" class="container-fluid text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>FÁCIL ACOMPANHAMENTO DE <strong class="teiacolor-0">LEADS</strong></h2>
                    <p>...</p>
                    <p class="h4">Receba
                    </p>
                </div>
                <div class="col-md-4">
                <img class="animate__animated animate__bounceInRight animate__delay-2s	2s" src="images/image-2.png" style="width: 200px; transform: rotate(10deg);" alt="celular_graficos">
            </div>
            </div>
        </div>

    </section>
    <!-- Chamativo para Agendar Reunião -->
        <?php include 'agendamento.php'; ?>
    </section>




    <article class="container-sm mt-5">
    <div>
                <?php include('usam.php')?>
                <h2 class="text-center teiacolor-1">Usam e aprovam!</h2>
                <div id="carouselUSAM" class="carousel slide mt-5" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php foreach ($usam as $id => $empresa): ?>
                            <div class="carousel-item <?= ($id === 'potiguarhonda') ? 'active' : '' ?>">
                            <img src="<?= $empresa['logo'] ?>" class="d-block w-25 img-fluid" alt="<?= $empresa['nome'] ?>" style="display: inline-block;position: relative;left: 50%;transform: translateX(-50%);">
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carousel-control-prev carousel-dark" type="button" data-bs-target="#carouselUSAM" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next carousel-dark" type="button" data-bs-target="#carouselUSAM" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <a class="no-decoration" href="http://" target="_blank" rel="noopener noreferrer"><h4 class="cinza-text text-center mt-5">Veja mais</h4></a>
         </div>
    </article>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Botão do WhatsApp -->
    <div style="position: fixed; bottom: 20px; right: 20px;">
        <a href="https://wa.me/5511933885568" target="_blank">
            <img src="https://logodownload.org/wp-content/uploads/2015/04/whatsapp-logo-png-0.png" alt="WhatsApp" width="50" height="50">
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>