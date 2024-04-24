<?php

?>
    <section id="agendar-reuniao" class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <h2>Agende uma Apresentação agora!</h2>
                <p>Vamos entrar em contato com você para confirmar a apresentação.</p>
                <button type="button" class="btn btn-primary animate__animated animate__bounce" data-bs-toggle="modal" data-bs-target="#agendarReuniaoModal">Agendar Reunião</button>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal modal-lg fade" id="agendarReuniaoModal" tabindex="-1" aria-labelledby="agendarReuniaoModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-center teiacolor-1" id="agendarReuniaoModal">Solicitar reunião</h1>
                    </div>
                    <div class="modal-body">
                      <form action="POST">
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
                      </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </div>