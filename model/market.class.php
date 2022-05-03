<?php

class Market
{
        private $clientName;
        private $clientPhone;
        private $deliveryAddress;
        private $productName;
        private $value;
        private $quantity;
        private $category;
        private $payment;
        private $delivery;

        public function getClientName()
        {
                return $this->clientName;
        }
        public function setClientName($clientName)
        {
                $this->clientName = $clientName;
        }

        public function getClientPhone()
        {
                return $this->clientPhone;
        }
        public function setClientPhone($clientPhone)
        {
                $this->clientPhone = $clientPhone;
        }

        public function getDeliveryAddress()
        {
                return $this->deliveryAddress;
        }
        public function setDeliveryAddress($deliveryAddress)
        {
                $this->deliveryAddress = $deliveryAddress;
        }
 
        public function getProductName()
        {
                return $this->productName;
        }
        public function setProductName($productName)
        {
                $this->productName = $productName;
        }

        public function getValue()
        {
                return $this->value;
        }
        public function setValue($value)
        {
                $this->value = $value;
        }

        public function getQuantity()
        {
                return $this->quantity;
        }
        public function setQuantity($quantity)
        {
                $this->quantity = $quantity;
        }

        public function getCategory()
        {
                return $this->category;
        }
        public function setCategory($category)
        {
                $this->category = $category;
        }

        public function getPayment()
        {
                return $this->payment;
        }
        public function setPayment($payment)
        {
                $this->payment = $payment;
        }

        public function getDelivery()
        {
                return $this->delivery;
        }
        public function setDelivery($delivery)
        {
                $this->delivery = $delivery;
        }
        

function typeProduct()
    {
        switch ($this->category) {
            case $this->category == 'Padaria':
                return "Padaria";
                break;
            case $this->category == 'açougue':
                return "Açougue";
                break;
            case $this->category == 'higiene':
                return "Higiene";
            default:
                return "categoria invalida";
        }
    }
    public function getProduct()
    {
        switch ($this->productName) {
            case 'Pão frances Kg':
                return  7.99;
                break;
            case 'Costela bovina Kg':
                return 48.99;
            case 'Coxa e sobrecoxa Kg':
                return 14.99;
            case 'Detergente L':
                return 1.99;
            case 'Sabão em pó Kg':
                return 17.99;
            default:
                return  0;
                break;
        }
    }
    function totalValue()
    {
        return $this->getProduct() * $this->quantity;
    }
    function formOfPayment()
    {

        switch ($this->payment) {
            case $this->payment == "Cartao de credito":
                return "Cartao de credito";
                break;
            case $this->payment == "pix":
                return "pix";
                break;
            case $this->payment == "Cartão de Débito":
                return "Cartão de Débito";
                break;

            default:
                return "pagamento invalido";
                break;
        }
    }

    function discountCoupon()
    {
        $numbers = range(1, 100);
        $letters = range("A", "Z");

        shuffle($numbers);
        shuffle($letters);

        echo  "Codigo de desconto gerado:" . $letters[1] . "" . $numbers[1] . $letters[4] . "" . $numbers[2] . $letters[1] . "" . $numbers[3];
    }


    
    function freight()
    {
         $this->totalValue() + 11.99; 
    }
    public function date()
    {
    return date("d-M-Y");
    }
    function __toString()
    {
        return nl2br(
            "<h1>
                Nome: $this->clientName
                Telefone: $this->clientPhone
                Endereço: $this->deliveryAddress
                Nome do produto: $this->productName
                Quantidade: $this->quantity
                Categoria: $this->category
                Pagamento: {$this->formOfPayment()}
                Tele entrega: {$this->freight()}
                Valor total: {$this->totalValue()}
             </h1>"
        );
    }
}
?>