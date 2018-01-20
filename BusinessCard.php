<?php

//New declare construct
declare(strict_type=1);


// New class added
class BusinessCard extends AbstractProduct
{
    // size, string
   private $size;
    //color, string
    private $color;
    // one page
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