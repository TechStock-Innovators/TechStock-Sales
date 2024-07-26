<?php
global $config;
use App\helpers\Authenticator;
$r = new Authenticator();
$r->validate("kylejimenez");
?>

<?php require '../App/views/components/headers/SalesHeader.php'; ?>

<div class="logincontainer">
    <h2>Bem Vindo à TechStock</h2>
    <hr>
    <div class="inputContato">
        <i data-feather="user"></i>
        <input class="inputContatojs" type="text" name="mensagem" placeholder="Mensagem...">
    </div>
    <div class="inputContato">
        <i data-feather="lock"></i>
        <input class="inputContatojs" type="text" name="mensagem" placeholder="Mensagem...">
    </div>
</div>
<script>
    Array.from(document.getElementsByClassName("inputContatojs")).forEach(element => {
        console.log("Evento: ")
        element.addEventListener("focus", e => {
            element.parentElement.classList.add("focoInputContato")
        })
        element.addEventListener("blur", e => {
            element.parentElement.classList.remove("focoInputContato")
        })
    });
</script>