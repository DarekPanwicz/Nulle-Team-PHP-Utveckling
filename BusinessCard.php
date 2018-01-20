<?php

//New declare construct
declare(strict_type=1);


// New class added
class BusinessCard extends AbstractProduct
{
    // Variable:String. Size, string
    private $size;
    //Variable:String. Color, string
    private $color;
    // Variable: String. One page
    private $numberOfPages;

    /**
     * function get color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * function get size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * function get number of pages
     */
    public function getNumberOfPages()
    {
        return $this->numberOfPages;
    }


};