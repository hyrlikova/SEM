
function succesAjax(result){

    result = parseInt( result.substr(result.length-3));

    if (result === 200) {
        $("#hodnotenie").empty().append("Ďakujeme za Vaše ohodnotenie!");
    } else if (result === 400) {
        alert("Všetky polia musi byť vyplnené");
    }
}


function removeFromCartSuccess (data,idType){

    if (data.status === 'success') {
        $("#n" + idType + "").fadeOut();
        $("#suma").empty().append(data.price);
    } else if (data.status === 'error') {
        alert("Error on query!");
    }
}