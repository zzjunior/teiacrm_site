<?php

?>
<section id="agendar-reuniao" class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h2>Agende uma Demonstração agora!</h2>
            <p>Vamos entrar em contato com você para confirmar a apresentação.</p>
            <button type="button" class="btn btn-primary animate__animated animate__bounce rounded-2" onclick="toggleForm()">Agendar Demonstração</button>
        </div>
    </div>
    <div class="row" id="form-container" style="display:none;">
        <div class="col-md-6 offset-md-3 border rounded-2 p-3 mt-2 shadow">
            <form action="POST" id="agendarReuniaoForm">
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
    function toggleForm() {
        var formContainer = document.getElementById('form-container');
        formContainer.style.display = (formContainer.style.display === 'none' || formContainer.style.display === '') ? 'block' : 'none';
    }
</script>
