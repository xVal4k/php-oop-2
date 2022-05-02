<?php 

class Products {
    private $productId, $productName, $productType, $productPrice, $productInfo;

    public function __construct(string $_productId, string $_productName, string $_productType, float $_productPrice) {
        $this->productId = $_productId;
        $this->productName = $_productName;
        $this->productType = $_productType;
        $this->productPrice = $_productPrice . ' €';
    }

    public function setProductInfo(string $_productInfo) {
        $this->productInfo = $_productInfo;
    }
}