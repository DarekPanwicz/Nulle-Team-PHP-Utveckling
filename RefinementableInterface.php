<?php

declare(strict_types=1);
/**
 * Interface dla produktów które mogą zostać uszlachetnione
 */


interface RefinementableInterface
{
    /**
     * Funkcja do foliowania
     */
    public static function foliuj();
    /**
     * Funkcja dodająca złote litery do druku
     */
    public static function applyGoldLetters();
    /**
     * Nakładanie filtru UV na produkt
     */
    public static function applyUVFilter();
}