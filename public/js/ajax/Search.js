$(document).ready(function (){
    
    $('#searchCompte').submit(function(e){
        e.preventDefault();
        $('#recherche').modal('close');
        var data = $(this).serialize();
        $.ajax({
            type : "GET",
            url : "/Banque/controller/compteController.php",
            data : data,
            success : function(server_response){
                var retour = JSON.parse(server_response);
                
                $('#nom').attr('value',retour.nom);
                $('#prenom').attr('value', retour.prenom);
                $('#adresse').attr('value', retour.adresse);
                $('#mail').attr('value', retour.mail);
                $('#phone').attr('value', retour.phone);
                $('#solde').attr('value', retour.solde);

                    $.ajax({
                        type : "GET",
                        url : "/Banque/controller/operationController.php",
                        data : "idCompte="+retour.idCompte,
                        success : function(server_response){
                            var retourOper = JSON.parse(server_response);
                            console.log(retourOper);
                            Object.keys(retourOper).forEach(function(i){
                                var value = "<tr><td>"+retourOper[i].numOp+"</td><td>"+retourOper[i].dateOper+"</td><td>"+retourOper[i].typeOp+"</td><td>"+retourOper[i].montant+"</td><td>"+retourOper[i].prenomUser+" "+retourOper[i].nomUser+"</td></tr>";
                                $(value).appendTo("table[name=operTab]");
                            });

                        }
                    });

                $('#modal3').modal('open');

            }
        });
    });
});