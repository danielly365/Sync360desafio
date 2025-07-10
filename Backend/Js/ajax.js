document.addEventListener('DOMContentLoaded', function () {
    const formEnviar = document.getElementById("enviar");
    const formEditar = document.getElementById("editar");

    if (formEnviar) {
        formEnviar.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData2 = new FormData(formEnviar);

            $.ajax({
                url: '../Backend/update.php',
                method: 'POST',
                data: formData2,
                processData: false,
                contentType: false,
                success: function (result) {
                    console.log(result);
                    alert("Usuário cadastrado com sucesso");
                },
                error: function () {
                    alert("Erro ao cadastrar usuário");
                }
            });
        });
    }

    if (formEditar) {
        formEditar.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData1 = new FormData(formEditar);

            $.ajax({
                url: '../Backend/editar.php',
                method: 'POST',
                data: formData1,
                processData: false,
                contentType: false,
                success: function (result) {
                    console.log(result);
                    alert("Usuário editado com sucesso");
                },
                error: function () {
                    alert("Erro ao editar usuário");
                }
            });
        });
    }
});
function deleta(id){
    console.log(id)
    if(confirm("Você tem certeza que deseja excluir esse usuário?")){
        $.ajax({
            url:'../Backend/deletar.php',
            method: 'POST',
            data: { id: id }
        }).done(function(result){
            console.log(result)
            alert("Usuário deletado com sucesso!");
            location.reload();
        })
    }else{
        alert("não excluiu o usuario");
    }
}