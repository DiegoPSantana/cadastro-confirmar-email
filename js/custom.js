const loginForm = document.getElementById("login-usuario-form");
const msgAlertErroLogin = document.getElementById("msgAlertErroLogin")

loginForm.addEventListener("submit", async (e) =>{
    //Para apenas atualizar a pagina e não voltar ao inicio
    e.preventDefault();

    if(document.getElementById("email").value === ""){
        msgAlertErroLogin.innerHTML = "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo usuário!</div>" 
    } else if(document.getElementById("senha").value === ""){
        msgAlertErroLogin.innerHTML = "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo senha!</div>" 
    } else{
        const dadosForm = new FormData(loginForm);

        const dados = await fetch("validar.php", {
            method: "POST",
            body: dadosForm
        });
    

    const resposta = await dados.json();

    console.log(resposta);

}
});