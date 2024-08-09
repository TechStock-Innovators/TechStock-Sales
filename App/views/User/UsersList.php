<?php

?>

<?php require '../App/views/components/headers/SalesHeader.php'; ?>

<div class="containerTopo">
    <h3>Usuários</h3>
    <div>
        <button class="btn btn-transparente"><i data-feather="filter"></i></button>
        <a href="/User/novoUsuario" class="btn btn-grey"><i data-feather="plus-circle"></i>Adicionar</a>
    </div>
</div>

<div class="containerTable">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuário</th>
                <th>E-Mail</th>
                <th>Permissão</th>
                <th>Criado em</th>
                <th>Menu</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['users'] as $key => $linha){ ?>
                <tr>
                    <td><?= $linha["id"]?></td>
                    <td><?= $linha["name"] ?></td>
                    <td><?= $linha["email"] ?></td>
                    <td><?= $linha["permission"] ?></td>
                    <td><?= $linha["created_at"] ?></td>
                    <td class="tableMenu">
                        <button onclick="updateUser(<?= $linha['id'] ?>)" class="btn btn-transparente"><i data-feather="edit"></i></button>
                        <button onclick="deleteUser(<?= $linha['id'] ?>)" class="btn btn-transparente"><i data-feather="trash-2"></i></button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    function deleteUser(id) {
        let confirmacao = confirm(`Deseja deletar o usuário numero ${id}?`)
        if(confirmacao){
            console.log(`deletando o ${id}`)
            fetch(`/User/delete/${id}`)
                .then(window.location.assign(""))
        }
    }

    function updateUser(id) {
        window.location.pathname = `User/editar/${id}`
    }

    <?php if(isset($data["notify"])) { ?>
        const toastStyle = {
            success: "linear-gradient(to right, #00b09b, #96c93d)",
            warning: "linear-gradient(110deg, rgba(255,246,0,1) 0%, rgba(220,233,22,1) 25%, rgba(249,255,130,1) 50%, rgba(228,233,46,1) 75%, rgba(244,255,139,1) 100%)",
            error: "linear-gradient(110deg, rgba(255,0,0,1) 0%, rgba(255,0,0,1) 25%, rgba(255,107,107,1) 50%, rgba(209,40,40,1) 75%, rgba(255,114,114,1) 100%);"
        }
        Toastify({
            text: '<?= $data["notify"]["message"] ?>',
            duration: 3000,
            close: true,
            gravity: "bottom", // `top` or `bottom`
            position: "right", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: toastStyle["<?= $data["notify"]["type"] ?>"],
            },
            onClick: function(){} // Callback after click
        }).showToast();
    <?php } ?>

    
</script>