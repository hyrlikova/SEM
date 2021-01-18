
$(document).ready(function () {
    $("#submit").click(function () {

        var dodanie = $('input[name="dodanie"]:checked').val();
        var jedlo = $('input[name="jedlo"]:checked').val();
        var spokojnost = $('input[name="spokojnost"]:checked').val();

        var dataString = 'dodanie=' + dodanie + '&jedlo=' + jedlo + '&spokojnost=' + spokojnost;

        $.ajax({
            type: "POST",
            url: "../FILE/evaluationAjax.php",
            data: dataString,
            dataType: "text",


            success: function (result) {
               succesAjax(result);
            },

            error: function (result) {
                alert("error");

            }
        });
        return false;
    });

});

function removeFromCart(id) {
    var idType = id.getAttribute("data-id-type");
    $.ajax({
        type: "POST",
        url: "../FILE/remove.php",
        data: {id: idType},

        success: function (data) {
            removeFromCartSuccess(data,idType);
        },
        error: function (data) {
            alert("chyba")
        }
    });
}




