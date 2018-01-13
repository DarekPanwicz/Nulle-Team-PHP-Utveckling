<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-13
 * Time: 12:08
 */

declare(strict_types=1);


class Product {

    //Adding new
    protected $price;
    protected $numberOfCopies;
    protected $printType;
    protected $paperType;
    protected $productCode;

public function setPrice(int $price):void {

    $this->price = $price;
}


public function getPrice():int {

    return $this->price;
}


    public function setNumberOfCopies(int $numberOfCopies):void {

        $this->numberOfCopies = $numberOfCopies;
    }


    public function getNumberOfCopies():int {

        return $this->numberOfCopies;
    }


    public function setPrintType(string $printType):void {

        $this->printType = $printType;
    }


    public function getPrintType():string {

        return $this->printType;
    }

    public function setPaperType(string $paperType):void {

        $this->paperType = $paperType;
    }


    public function getPaperType():string {

        return $this->paperType;
    }

    public function setProductCode(string $productCode):void {

        $this->productCode = $productCode;
    }


    public function getProductCode():string {

        return $this->productCode;
    }

}