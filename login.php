<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/utility.css">
        <link rel="stylesheet" href="css/mediaQuery.css"> -->
        <link rel="stylesheet" href="css/login.css">
        
        <title> Login </title>
    </head>
    <body>
        <div class="container">
            <header class="headerLogo">
                <img src="images/logoshape-box.png">
                <img src="images/logotext-box.png">
            </header> 
            
            <form class="form" action="/action_page.php">
                <div class="formContainer">
                    <h3>Se connecter</h3>

                    <input type="text" placeholder="Enter Email" name="email" required>
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <button type="submit" class="signupbtn">Se connecter</button>

                    <p>Vous n'avez pas encore de compte ? <a href="#" style="color:dodgerblue">S'inscrire maintenant </a>.</p>
                </div>
            </form>
        </div>
    </body>
</html>
