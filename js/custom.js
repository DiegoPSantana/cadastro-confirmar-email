const loginForm = document.getElementById("login-usuario-form");
const msgAlertErroLogin = document.getElementById("msgAlertErroLogin");

loginForm.addEventListener("submit", async (e) => {
        e.preventDefault(); 

    //  if(document.getElementById("email").value === ""){
    //         msgAlertErroLogin.innerHTML = "<div class='alert alert-danger role='alert'> Erro JS Usuário: Necessário preencher campo USUÁRIO!</div>";
    //  } else if(document.getElementById("senha").value === ""){
    //      msgAlertErroLogin.innerHTML = "<div class='alert alert-danger role='alert'> Erro JS Senha: Necessário preencher campo SENHA!</div>";
    //  } else {
         const dadosForm   = new FormData(loginForm);
         const dados = await fetch("validar.php", {
             method: "POST",
             body: dadosForm
         })
         const resposta = await dados.json();
         console.log(resposta);
    // }
});