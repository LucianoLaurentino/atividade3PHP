<?php
    include "../model/market.class.php";

    $mark = new Market;
   
    $mark->setClientName($_POST["txtnome"]);
    $mark->setClientPhone($_POST["txttelefone"]);
    $mark->setDeliveryAddress($_POST["txtendereco"]);
    $mark->typeProduct($_POST["txtcategoria"]);
    $mark->getProduct($_POST["txtproduto"]);
    $mark->setQuantity($_POST["txtquantidade"]);
    $mark->formOfPayment($_POST["txtpagamento"]);
    $mark->freight($_POST["txtfrete"]);
    $mark->discountCoupon([""]);

    echo " ".$mark->__toString();
    

?>