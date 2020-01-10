$(document).ready(function(){
    $('button[name=supp]').click(function(event){
        var id = $(this).attr('id');
        var data = "id="+id;
        var click = $(event.target).closest('button');
        $.ajax({
            type : "GET",
            url : "/Banque/controller/operationController.php",
            data : data,
            success : function(data){
                if (data === "OK") {
                    $('#'+id).closest('tr').fadeOut(500);
                    $('#suppriRetour').html("Operation Supprimée!");
                    $('#supp').modal("open");
                }
                
            }
        });
    });
});