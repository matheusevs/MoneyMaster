$(function () {

    $("#formCadastrar").on("submit", event => {

        event.preventDefault();

        const formulario = document.getElementById("formCadastrar");
        const formData = new FormData(formulario);
        const form = Object.fromEntries(new URLSearchParams(formData).entries());
        let data = JSON.stringify(getData(form));

        console.log(form);

        $.ajax({
            type: "post",
            url: "/api/despesas/create",
            data: data,
            headers: {
                'X-CSRF-TOKEN': form._token
            },
            dataType: 'json',
            contentType: 'application/json',
            success: res => {

                console.log(res)

            },
            error: error => {

                console.log(error)

            }

        });

    });

    function getData(form){

        let data = {};
        let formInfo = Object.entries(form);

        formInfo.forEach(([key, value]) => {
                
            if(value){

                data[key] = value;
                
            }

        });

        return data;

    }

});