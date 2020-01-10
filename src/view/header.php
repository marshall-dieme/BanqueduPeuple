<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bank of DTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/myprojects/banquedupeuple/public/css/Style.css">
   
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!-- JAVASCRIPT LINK -->
    <script>
        

function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 4500);
}

$(document).ready(function(){
    // SELECT
    $('select').formSelect();
    //MODAL
    $('.modal').modal();
    //SIDENAV
    $('.sidenav').sidenav();
    //CAROUSEL
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        padding: 50,
        indicators: true
    }, setTimeout(autoplay, 4500));
    



    // ----------------------------------------------------------------------------------------
    
    $('button[name=bloquer]').click(function(event){
        var idBloque = $(this).attr('idBlock');
        var data = "idBlock="+idBloque;
        console.log(data)
        $.ajax({
            type : "GET",
            url : "/myProjects/banquedupeuple/src/controller/compteController.php",
            data : data,
            success : function(server_response){

             
                if (server_response == "Bloque 1") {
                    $('#retourCompte').html("Compte Bloque!");
                }else{
                    $('#retourCompte').html("Compte Debloque!");
                }
                $('#modalCompte').modal('open');
                $('button[name=reload]').click(function(){
                    window.location.reload();

                });
                

            }
        });
    });
    // ----------------------------------------------------------------------------------------

    $('button[name=supprimer]').click(function(event){
        var id = $(this).attr('idSupp');
        var data = "idSupp="+id;
        console.log(data);
        $(this).closest('tr').fadeOut(700);
        $.ajax({
            type : "GET",
            url : "/myProjects/banquedupeuple/src/controller/compteController.php",
            data : data,
            success : function(server_response){

              
                if (server_response == "1") {
                    $('#retourCompte').html("Compte Supprimé!");
                }else{
                    $('#retourCompte').html("Errreur lors de la Suppression!");
                }
                setTimeout(function(){

                    $('#modalCompte').modal('open');
                }, 1000);
                
                

            }
        });
    });
    // ----------------------------------------------------------------------------------------

    $('button[name=detail]').click(function(){
        var id = $(this).attr('idDetail');
        var data = "id="+id;
        console.log(data)
        
        $.ajax({
            type : "GET",
            url : "/myProjects/banquedupeuple/src/controller/compteController.php",
            data : data,
            success : function(server_response){
                var retour = JSON.parse(server_response);                
                $('#nomD').attr('value',retour.nom);
                $('#prenomD').attr('value', retour.prenom);
                $('#adresseD').attr('value', retour.adresse);
                $('#mailD').attr('value', retour.mail);
                $('#phoneD').attr('value', retour.tel);
                $('#soldeD').attr('value', retour.solde);
                $('#numCompteD').attr('value', retour.numCompte);
                $('#dateD').attr('value', retour.dateCreation);
               

                $('#modal4').modal('open');
            }
        });
    });

    // ----------------------------------------------------------------------------------------
    
    $('button[name=ajout]').click(function(){
        var id = $(this).attr('id');
        
        var data = "id="+id;
        
        $.ajax({
            type : "GET",
            url : "/myProjects/banquedupeuple/src/controller/clientController.php",
            data : data,
            success : function(server_response){
               var retour = JSON.parse(server_response)
                $('#nomA').attr('value',retour[0][2]);
                $('#prenomA').attr('value', retour[0][3]);
                $('#adresseA').attr('value', retour[0][4]);
                $('#mailA').attr('value', retour[0][5]);
                $('#phoneA').attr('value', retour[0][6]);
                
                $('#AjoutCompte').modal('open');
            }
        });

       
    });
    
    $('#insert').submit(function(e){
        e.preventDefault();
        var data = $(this).serialize();
        $.ajax({
            type : "GET",
            url : "/myProjects/banquedupeuple/src/controller/compteController.php",
            data : data,
            success : function(response_server){
              
                if (response_server == 1) {
                    $('#resultText').html("Compte ajouté avec succés!");
                    $("#resultAdd").modal('open');
                }
            }
        });
    });




    // ----------------------------------------------------------------------------------------


    
});
    

    </script>
</head>
<body class="grey lighten-3">