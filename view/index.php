<?php
require_once "../vendor/autoload.php";

use Viniciusrcam\AccessApiBtc\AccessApi;

$accessApi = new AccessApi();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="10">
    <title>Acessando API BTC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bitcoin.svg/1200px-Bitcoin.svg.png" width="40" height="40">
                Cotação atual do Bitcoin
            </a>
        </div>
    </nav>
    <div class="container my-5" >
        <div class="container bg-light p-5 rounded mb-2">
            <?php foreach ($accessApi->access("https://www.mercadobitcoin.net/api/BTC/ticker/") as $item){?>
            <h1 class="display-5 fw-normal"> <?php echo "R$" . number_format($item['last'],2,",","."); ?></h1>
            <div class="d-flex flex-wrap">
                <ul class="nav me-auto">
                    <li class="nav-item px-2"><?php echo 'Compra - ' . "<b>" .  "R$" .  number_format($item['buy'],2,",",".") . "</b>"; ?></li>
                    <li class="nav-item px-2"><?php echo 'Venda - ' . "<b>" . "R$" . number_format($item['sell'],2,",",".") . "</b>"; ?></li>
                    <li class="nav-item px-2"><?php echo 'Maior - ' . "<b>" . "R$" . number_format($item['high'],2,",",".") . "</b>"; ?></li>
                    <li class="nav-item px-2"><?php echo 'Menor - ' . "<b>" . "R$" . number_format($item['low'],2,",",".") . "</b>";?></li>
                </ul>
            </div>
            <?php } ?>
        </div>
    </div>

</body>
</html>