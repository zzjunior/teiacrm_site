<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teia CRM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-dark {
            background-color: #343a40 !important;
            color: white;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Sobre o Produto -->
    <section id="sobre-produto" class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h2>Teia CRM</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Mauris condimentum nisl eget est posuere, at ullamcorper nisl tristique. Aenean vel aliquam quam.</p>
            </div>
            <div class="col-md-4">
                <h3>Empresas Parceiras</h3>
            </div>
        </div>
    </section>

    <!-- Frases de Efeito -->
    <section id="frases-efeito" class="container-fluid bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Frases de Efeito</h2>
                    <p>"Transformando empresas com inovação e tecnologia."</p>
                    <p>"Soluções sob medida para o seu negócio."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Chamativo para Agendar Reunião -->
    <section id="agendar-reuniao" class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <h2>Agende uma Reunião de Apresentação</h2>
                <p>Preencha o formulário abaixo e entraremos em contato para agendar uma apresentação do nosso produto.</p>
                <button type="button" class="btn btn-primary">Agendar Reunião</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Botão do WhatsApp -->
    <div style="position: fixed; bottom: 20px; right: 20px;">
        <a href="https://wa.me/seu-numero-do-whatsapp" target="_blank">
            <img src="https://cdn.jsdelivr.net/npm/gijgo@1.9.13/css/icons/whatsapp.svg" alt="WhatsApp" width="50" height="50">
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>