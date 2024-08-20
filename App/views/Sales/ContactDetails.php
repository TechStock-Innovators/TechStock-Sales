<?php


?>

<?php require '../App/views/components/headers/SalesHeader.php'; ?>

<form class="containerPrincipal contatos" action="/Sales/salvar/<?= $data['data']['id'] ?>" method="POST">
    <h2>Mensagem Nº <?= $data['data']['id'] ?></h2>
    <div class="columns contatos">
        <section>
            <div class="">
                <span>Nome: <?= $data['data']['nome'] ?></span>
            </div>
            <div class="">
                <span>E-mail: <?= $data['data']['email'] ?></span>
            </div>
            <div class="">
                <span>Mensagem: <?= $data['data']['mensagem'] ?></span>
            </div>
        </section>
        <section>
            <div class="form-group">
                <textarea type="text" placeholder=" " id="permissao" name="observacoes"></textarea>
                <label for="permissao">Observações</label>
            </div>
            <div class="form-group">
                <textarea type="text" placeholder=" " id="setor" name="feedback"></textarea>
                <label for="setor">Feedback</label>
            </div>
        </section>
    </div>
    <div class="buttonsCell">
        <button class="btn btn-grey" id="salvar"><i data-feather="save" type="submit"></i>Salvar</button>
        <button class="btn btn-grey" id="calcelar"><i data-feather="x-circle"></i>Cancelar</button>
    </div>
</form>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var inputs = document.querySelectorAll('input');

        inputs.forEach(function(input) {
            input.addEventListener('focus', function() {
                this.nextElementSibling.classList.add('active');
            });

            input.addEventListener('blur', function() {
                if (this.value === '') {
                    this.nextElementSibling.classList.remove('active');
                }
            });
        });
    });

    
    
</script>