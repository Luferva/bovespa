
function visualizarActive(id) {
    /* console.log(id);  */

    $.get("/getticker/"+id)
        .done(function($result){
            $(".modal-body").html($result);
        }); 

    $('#myModal').modal("show");
}