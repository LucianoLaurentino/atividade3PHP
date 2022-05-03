<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="../css/styles.css">
  <!--JS e jQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript" src="../js/materialize.min.js"></script>

  <script type="text/javascript" src="../js/materialize.js"></script>

  <script type="text/javascript" src="../js/carousel.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Faça seu pedido</title>
</head>

<body>
  <header>
    <nav class="topo">
      <div class="nav-wrapper">
        <a href="../index.php" class="brand-logo">Mercado Preguiça</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="../view/market.test.php">Fazer Pedido</a></li>
          <li><a href="">Meu Pedido</a></li>
        </ul>
      </div>
    </nav>
  </header>
<?php

    include "../model/market.class.php";
    $clientName = $_GET["txtnome"];
    $clientPhone = $_GET["txttelefone"];
    $deliveryAddres = $_GET["txtendereco"];
    $category = $_GET["txtcategoria"];
    $productName = $_GET["txtproduto"];
    $quantity = $_GET["txtquantidade"];
    $payment = $_GET["txtpagamento"];
    $freight = $_GET["txtfrete"];
    $discountCoupon = $_GET["txtcupom"];
    
    echo "<h4>Nome do Cliente: $clientName</h4>";
    echo "<h4>Telefone do Cliente: $clientPhone</h4>";
    echo "<h4>Endereço de entrega: $deliveryAddres</h4>";
    echo "<h4>Categoria: $category</h4>";
    echo "<h4>Nome do produto: $quantity</h4>";
    echo "<h4>Quantidade: $quantity</h4>";
    echo "<h4>Pagamento: $payment</h4>";
    echo "<h4>Frete: $freight</h4>";
    echo "<h4>Cupom de desconto: $discountCoupon</h4>"
?>
  <div class="rodape">
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Mercado Preguiça</h5>
            <p class="grey-text text-lighten-4">Nosso mercado funcionar 3h por dia, piscou fechou.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Contato</a></li>
              <li><a class="grey-text text-lighten-3" href="https://www.google.com.br/maps/place/BIG/@-29.9965342,-51.1428866,16.37z/data=!4m5!3m4!1s0x951977f816d40333:0x9a7b42926a7ef3f2!8m2!3d-29.9952282!4d-51.1409229">localização</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Sobre</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          © 2022 Copyright Text
        </div>
      </div>
    </footer>
  </div>
</body>

</html>