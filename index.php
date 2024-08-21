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
    <script src="countrymap/mapdata.js"></script>
    <script src="countrymap/countrymap.js"></script>
</head>

<body>
<header class="position-fixed top-0 start-0 w-100 z-index-fixed bg-white mb-3">
    <!-- Header -->
        <?php include 'header.php'; ?>
    </header>
    <!-- Sobre o Produto -->
    <section id="sobre-produto" class="container" style="margin-top: 8rem;">
        <div class="row">
            <div class="col-md-8">
                <h2 class="teiacolor-1">Um captador de leads, acelerando processos de venda e muito mais!</h2>
                <p class="cinza-text fs-6">
                Conheça a plataforma que tem ganhado lojas e concessionárias no Brasil com as melhores ferramentas de vendas!
Simples, fácil de usar e feito pra te fazer vender mais!
                </p>
            </div>
            <div id="mapa-teia">
                <!---mapa --->
                <div class="container">
                    <h1 class="text-center mt-5 teiacolor-4">Presente em +10 estados do Brasil!</h1>
                    <div id="map">

                    </div>
                </div>
         </div>
    </section>

    <!-- apresentação ferramentas -->
    <section id="ferramentas-leads" class="container-fluid text-white py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>WHATSMOTO</h2>
                    <h6>Excelente para loja, MUITO FÁCIL para vendedor</h6>
                    <p class="h4 shadow-lg text-center" style="background-color:#0056b3">Receba leads +QUENTES 24horas por dia!</p>
                    <a type="button" class="btn btn-danger rounded-5 w-100 mt-5 shadow-lg animate__animated animate__bounce fs-6 border border-dark-subtle" href="https://teiacrm.com/wm/store/nr/1016" target="_blank" rel="noopener noreferrer">
                    CLIQUE E VEJA NA PRÁTICA
                    </a>
                </div>
                <div class="col-md-6">
                    <img id="slogan-0" src="./images/banners-site-TEIA.svg" alt="" class="img-fluid d-none animate__animated animate__bounceInRight" style="width:800px">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h2>WHATSVENDAS</h2>
                   <p class="h5 shadow-lg text-center" style="background-color:#0056b3">Sem limitação de Produtos, Leads, ou usuários.</p>
                   Tenha a página de prospecção de Leads para sua Loja e Vendedores.
                </div>
                <div class="col-md-6">
                <img id="slogan-1" src="./images/Slogan2.svg" alt="" class="img-fluid animate__animated d-none animate__bounceInLeft animate__delay-2s 2s" style="width:800px;margin-top:-1.5rem;">
                </div>
            </div>
        </div>
    </section>

    <section id="ferramentas-crm" class="container-fluid teiacolor-1 py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>FÁCIL ACOMPANHAMENTO DE <strong class="teiacolor-0 border border-success-subtle">LEADS</strong></h2>
                    <p class="text-dark fs-4">Receba & acompanhe leads 24horas por dia em tempo real!</p>
                    <p>...</p>
                </div>
                <div class="col-md-4">
                <img class="animate__animated animate__bounceInRight animate__delay-2s 2s d-none" src="images/image-2.png" style="width: 200px; transform: rotate(10deg);" alt="celular_graficos">
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
    <script>
document.addEventListener("DOMContentLoaded", function () {
    var animatedElements = document.querySelectorAll('.animate__animated');

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function handleScroll() {
        animatedElements.forEach(function (el) {
            if (isElementInViewport(el)) {
                el.classList.remove('d-none');
            }
        });
        // Remova o evento de rolagem depois que todas as imagens forem exibidas para evitar repetição
        window.removeEventListener('scroll', handleScroll);
    }

    // Adicione um evento de rolagem para verificar quando as imagens devem ser exibidas
    window.addEventListener('scroll', handleScroll);
});
    </script>
</body>

</html>