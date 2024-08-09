<?php

?>

<?php require '../App/views/components/headers/SalesHeader.php'; ?>

<form class="containerPrincipal" action="/User/salvar" method="POST">
    <h2>Adicionar um Usuário</h2>
    <div></div>
    <div class="form-group">
        <input class="input__field" type="text" placeholder=" " id="id" name="id">
        <label for="id">ID</label>
    </div>
    <div class="form-group">
        <input type="text" placeholder=" " id="permissao" name="permissao">
        <label for="permissao">Selecione a permissão</label>
    </div>
    <div class="form-group two-columns">
        <input type="text" placeholder=" " id="nome" name="nome">
        <label for="nome">Nome Completo</label>
    </div>
    <div class="form-group two-columns">
        <input type="text" placeholder=" " id="user" name="user">
        <label for="user">Usuário</label>
    </div>
    <div class="form-group two-columns">
        <input type="text" placeholder=" " id="email" name="email">
        <label for="email">E-Mail</label>
    </div>
    <div class="form-group two-columns">
        <input type="text" placeholder=" " id="senha" name="senha">
        <label for="senha">Senha</label>
    </div>
    <div class="form-group">
        <input type="text" placeholder=" " id="setor" name="setor">
        <label for="setor">Setor</label>
    </div>
    <div></div>
    <div></div>
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