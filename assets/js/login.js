var usuarios = `
    Aecio Jeni Lui Ju Luiz Dani Gio Ale Will Lukas Vanessa
    Saotome Hideki Jose Caio Dan Bispo
`;

function logar(){
    var usuario = document.getElementById("usuario");
    var senha = document.getElementById("senha");

    if (usuarios.includes(usuario.value) && senha.value == usuario.value.toLowerCase()){
        localStorage.setItem("acesso", true);
        window.location.href = "pg.html";
    }else{
        alert("Usuário ou senha inválide");
    }
}