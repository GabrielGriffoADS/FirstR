async function lista_cliente() {
//montamos as configurações de requisição 
// ao servidor http
    const opt = {
        method:'POST',
        mode: 'cors', 
        cache:'default'

    }
    //tentamos executar uma requisição 
    fetch('listacliente.php', opt)

    .then(reponse => {
reponse.text
.then(data => Show(data))

})

    .catch(e => {

console.log(e.message());
})


}
//Mapeando o evento de  carregamento do documento

document.addEventListener("DOMContentLoaded", function() {
    lista_cliente();



});
