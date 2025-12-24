async function listarCarros() {
    try {
        const response = await fetch("listar-carros.php");
        document.getElementById("lista-carros").innerHTML = await response.text();

    } catch (error) {
        document.getElementById("lista-carros").innerHTML = "Erro ao carregar os carros" + error;
    }
}

listarCarros();

setInterval(listarCarros, 60000);

async function remover(id) {
    if(!confirm("Tem certeza que deseja apagar este carro?")) return;

    try {
        const response = await fetch("remover-carro-ajax.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ 'id': id })
        });

        alert(await response.text());

        listarCarros();

    } catch (error) {
        alert("Erro ao remover: " + error);
    }
}

async function apagarCarro(id) {
    if(!confirm("Quer realmente apagar esse carro?")) return;

     try {
        const response = await fetch("remover-carro-ajax.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ id: id })
        });

        const resultado = await response.json();

        if(resultado.status === "ok"){
            alert("Carro removido");

            listarCarros();
        } else{
            alert("Erro: " + resultado.mensagem);
        } 
    } catch(error){
        alert("Erro na requisição: " + error);
    }
}

