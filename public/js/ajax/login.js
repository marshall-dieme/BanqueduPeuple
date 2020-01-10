$(document).ready(function() {
    //RECUPERER LE LOGINFORM
    $('#login').submit(function(e) {
        e.preventDefault();
        var username = $(this).find("input[name=username]").val();
        var password = $(this).find("input[name=pass]").val();

        $.post(
            "/Banque/controller/userController.php",
            {username : username, password : password}, 
            function(data){
                $('#loader').hide();
                if (data === "OK") {
                    window.location.href = "/Banque/view/mainIndex.php?page=accueil";
                }else{
                    alert("Login ou Mot de passe incorrect!!!");
                }
        });
        
        return false;
    });
});