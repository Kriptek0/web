$(() => {
    $("#send").prop("disabled", !$("#agreement").prop("checked"));

    $("#agreement").click(function(){
        $("#send").prop("disabled", !$(this).prop("checked"));
    });

    $("input[type='reset']").click(function(){
        $("#send").prop("disabled", true);
    });

    $("#send").click(function(){
        error = "";

        $("#form").find("[required]").each(function(){
            if ($(this).val() == ""){
                error += $(this).data("desc") + "<br>";
            }
        });

        if (error != ""){
            $("#error").html("Не заполнены поля: <br>" + error);
            return false;
        }

        if($("#pass").val() != $("#pass2").val()){
            $("#error").text("Пароли не совпадают");
            return false;
        }

        return true;
    });
});