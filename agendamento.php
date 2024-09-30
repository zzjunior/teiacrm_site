<?php

?>
<section id="agendar-reuniao" class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h2>Agende uma Demonstração agora!</h2>
            <p>Vamos entrar em contato com você para confirmar a apresentação.</p>
            <button id="btn-agenda" type="button" class="btn btn-primary animate__animated animate__bounce text-center rounded-2" onclick="toggleForm()">Agendar Demonstração</button>
        </div>
    </div>
    <div class="row" id="form-container" style="display:none;">
        <div class="col-md-6 offset-md-3 border rounded-2 p-3 mt-2 shadow">
        <form action="" method="POST" id="agendarReuniaoForm">
    <div class="mb-3">
        <label for="nome" class="form-label">Seu Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone/WhatsApp</label>
        <input type="tel" class="form-control" id="telefone" name="telefone" required>
    </div>
    <div class="mb-3">
        <label for="empresa" class="form-label">Nome da Empresa</label>
        <input type="text" class="form-control" id="empresa" name="empresa" required>
    </div>
    <div class="mb-3">
        <label for="nicho" class="form-label">Ramo da Empresa</label>
        <textarea class="form-control" id="nicho" name="nicho" rows="1" required></textarea>
    </div>
    <div class="mb-3">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" required>
    </div>
    <div class="mb-3">
        <label for="estado" class="form-label">Estado</label>
        <input type="text" class="form-control" id="estado" name="estado" required>
    </div>
    <div class="mb-3">
        <label for="mensagem" class="form-label">Mensagem</label>
        <textarea class="form-control" id="mensagem" name="mensagem" rows="3" required></textarea>
    </div>
    <input type="hidden" name="agendarReuniao" value="1"/>
    <div class="text-center">
        <button type="submit" class="btn btn-primary rounded-2">Enviar</button>
        <button type="button" class="btn btn-secondary" onclick="toggleForm()">Cancelar</button>
    </div>
</form>
        </div>
    </div>
</section>

<script>
    var btnAgenda = document.getElementById('btn-agenda');
    function toggleForm() {
        var formContainer = document.getElementById('form-container');
        formContainer.style.display = (formContainer.style.display === 'none' || formContainer.style.display === '') ? 'block' : 'none';
        btnAgenda.style.display = (btnAgenda.style.display === 'revert-layer' || btnAgenda.style.display === '') ? 'none' : 'revert-layer';
    }
</script>

<!---Enviando agendamento para o TEIA---->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura e sanitiza os dados do formulário corretamente
    $gestor = htmlspecialchars($_POST['nome'], ENT_QUOTES, 'UTF-8');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $telefone = htmlspecialchars($_POST['telefone'], ENT_QUOTES, 'UTF-8');
    $empresa = htmlspecialchars($_POST['empresa'], ENT_QUOTES, 'UTF-8');
    $nicho = htmlspecialchars($_POST['nicho'], ENT_QUOTES, 'UTF-8');
    $cidade = htmlspecialchars($_POST['cidade'], ENT_QUOTES, 'UTF-8');
    $estado = htmlspecialchars($_POST['estado'], ENT_QUOTES, 'UTF-8');
    $mensagem = htmlspecialchars($_POST['mensagem'], ENT_QUOTES, 'UTF-8');

    // Validação básica para campos obrigatórios
    if (!$gestor || !$email || !$telefone || !$empresa || !$nicho || !$mensagem || !$cidade || !$estado) {
        echo "Por favor, preencha todos os campos obrigatórios corretamente.";
        exit;
    }

    // Função para enviar dados via cURL
    function enviarParaApi($data) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://teiacrm.com.br/api/lead',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $error = curl_error($curl);
        curl_close($curl);

        if ($error) {
            return array('success' => false, 'error' => $error);
        }

        return array('success' => $httpCode == 200, 'response' => $response);
    }

    // Dados para enviar
    $data = array(
        'token' => 'token - Ambiente TEIA CRM',
        'name' => $empresa,
        'phone' => $telefone,
        'product_id' => 1109,
        'email' => $email,
        'source_id' => 3423,
        'user_id' => 2687,
        'comment' => 'Deseja conhecer mais sobre o TEIA CRM. <b>Agendar demonstração com Júnior</b><br>'.'<b>'.$nicho.'</b>'.'<br/>'.'Gestor: '.$gestor.'<br/>'.'Cidade: '.$cidade.'<br/>'.'Estado: '.$estado.'<br/>'.$mensagem,
        'custom_lead_field_answers' => [
            [
                'custom_lead_field_answer_id' => 229203,
                'custom_lead_field_id' => 12,
                'lead_id' => 1719368,
                'answer' => $gestor
            ],
            [
                'custom_lead_field_answer_id' => 229204,
                'custom_lead_field_id' => 33,
                'lead_id' => 1719368,
                'answer' => $cidade
            ],
            [
                'custom_lead_field_answer_id' => 229205,
                'custom_lead_field_id' => 34,
                'lead_id' => 1719368,
                'answer' => $estado
            ]
        ]
    );

    // Envia os dados para a API
    $resultado = enviarParaApi($data);

// Supondo que você já tenha a lógica anterior e o resultado da API
if ($resultado['success']) {
    echo "<script>alert( 'Solicitação realizada, em breve nossa equipe entrará em contato com você!')</script>";
} else {
    echo "Falha ao realizar o agendamento: " . $resultado['error'];
}
}

?>

