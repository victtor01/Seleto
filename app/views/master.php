<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <meta name="google-signin-client_id" content="908492610801-9q40ikvib9ft6u111oudmpt3dsrp3rov.apps.googleusercontent.com">

    <link rel="stylesheet" href="/assets/css/index.css">
    
    <title><?php echo $title ?></title>
</head>
<body>
    <div id="message">
    
    </div>
    <main id="main">
        <?php require $view ?>
    </main>
    
    <script type="module" src="/assets/js/app.js"></script>
</body>
</html>