<?php
global $config;

?>

<?php require '../App/views/components/headers/SalesHeader.php'; ?>
<form id="123" class="logincontainer" method="POST" action="/sales/logon">
    <h2>Bem Vindo à TechStock</h2>
    <hr>
    <div class="inputContato">
        <i data-feather="user"></i>
        <input class="inputContatojs" type="text" name="user" placeholder="Usuário...">
    </div>
    <div class="inputContato">
        <i data-feather="lock"></i>
        <input class="inputContatojs" type="password" name="senha" placeholder="Senha...">
    </div>
    <button type="submit">Entrar</button>
    <div id="response"><?php if (isset($ViewBag)) { echo $ViewBag[0]; } ?></div>
</form>

<script>
    Array.from(document.getElementsByClassName("inputContatojs")).forEach(element => {
        element.addEventListener("focus", e => {
            element.parentElement.classList.add("focoInputContato")
        })
        element.addEventListener("blur", e => {
            element.parentElement.classList.remove("focoInputContato")
        })
    });

    // document.getElementById("123").addEventListener("submit", e => {
    //     e.preventDefault()
    //     var action="/sales/logon"
    //     let user = document.getElementsByName("user")[0].value
    //     let senha = document.getElementsByName("senha")[0].value
    //     fetch(action, {
    //         method: "POST",
    //         body: JSON.stringify({username: user, passsword: senha})
                
    //     })
    //     .then(res => {
    //         // document.getElementById("response").innerHTML = res.body
    //         console.log(res)
    //     })
    // })
</script>