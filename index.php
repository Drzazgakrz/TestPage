<!DOCTYPE html>
<html>
    <head title="Przykładowa strona">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="header">
            <h1>
                Tekst
            </h1>
        </div>
        <div class="content">
            <h3>
                Formularz
            </h3>
            <form action="index.php" method="post" id="myForm">


            </form>
            <?php
            require_once "UserModel.php";
                if($_REQUEST["name"]){
                    $user = new UserModel($_REQUEST["name"],$_REQUEST["surname"],$_REQUEST["address"],
                        $_REQUEST["phoneNumber"],$_REQUEST["city"]);
                    $user->insertUserToDB();
                }

            ?>
        </div>

    </body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
                 integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="mainSheet.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="generateForm.js"></script>
    <script>
        $(function () {
            generateForm();
        })
    </script>
</html>


