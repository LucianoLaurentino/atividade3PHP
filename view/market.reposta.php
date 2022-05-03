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
          <li><a href="../view/market.reposta.php">Fazer Pedido</a></li>
          <li><a href="">Meu Pedido</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <section>
    <form action="../controller/market.controller.php" method="POST" class="form-text">
      <label>Nome:
        <input class="b-r-10 form-text bg-c-verde-claro b-remove" type="text" name="txtnome" placeholder="Neymar Júnior" required>
      </label>
      <label>Telefone:
        <input style="color: white;" class="b-r-10 form-text bg-c-verde-claro b-remove" type="number" name="txttelefone" required>
      </label>
      <label>Endereço:
        <input class="b-r-10 form-text bg-c-verde-claro b-remove" type="text" name="txtendereco" required>
      </label>
      <p style="color: white;">Selecione a categoria:</p>
      <select name="txtcategoria" class="button">
        <option name="padaria" value="Padaria">padaria.</option>
        <option name="açougue" value="Açougue">açougue.</option>
        <option name="higiene" value="Higiene">higiene.</option>
      </select>
      <p style="color: white;">Selecione o produto:</p>
      <select class="browser-default" name="txtproduto">
        <option value="product" disabled selected>Produtos </option>
        <option value="Costela bovina">Costela bovina Kg:59.99 </option>
        <option value="Coxa e sobrecoxa">Coxa e sobrecoxa Kg:89.99 </option>
        <option value="Pão françes">Pão françes Kg:49.99 </option>
        <option value="Detergente">Detergente 10L:69.99 </option>
        <option value="Sabão em pó">Sabão em pó 10Kg:R$ 129.99 </option>
      </select>
      <div class="input-field col s12">
        <p style="color: white;">Digite a quantidade:</p>
        <input placeholder="Quantidade:" name="txtquantidade" type="number" class="validate">
      </div>
      <label>Forma de pagamento</label>
      <select class="browser-default" name="txtpagamento">
        <option value="payment" disabled selected>Pagamento </option>
        <option value="credito">Cartao de credito </option>
        <option value="pix">pix </option>
        <option value="Boleto">Boleto bancario </option>
      </select>
      <div class="input-field col s12">
        <p style="color: white;">Para calcular o frete informe seu cep:</p>
        <input placeholder="CEP:" name="txtfrete" type="number" class="validate">
      </div>
      <div class="input-field col s12">
        <a href="./market.test.php">
          <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
        </a>
      </div>
    </form>
  </section>
  <div class="rodape">
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Mercado Preguiça</h5>
            <p class="grey-text text-lighten-4">Nosso mercado funciona 3h por dia, piscou fechou.</p>
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