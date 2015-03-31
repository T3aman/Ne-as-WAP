<?php

/**
 * 
 * @author Pavel Nečas <necas155@seznam.cz>
 * @version 1.0
 * @package Práce na Wap
 * @license Free
 */
class text {

    /**
     * Zložení druhu TAGu
     * @var string 
     */
    private $tag;

    /**
     * Uložení textu který se má vypsat
     * @var string 
     */
    private $text;

    /**
     * Uložení jednotlivých parametů pro adkaz a obrázek
     * @var array 
     */
    private $data;
    
    
    /**
     * Konstruktor třídy
     * @param string $tag uloží proměnou
     */
    function __construct($tag) {
        $this->tag = $tag;
    }
    
    /**
     * Nastavuje text který se má vypsat
     * @param string $text uloží proměnou do třídy
     */
    function text($text) {
        $this->text = $text;
    }
    
    /**
     * Ukládá obrázek do třídy
     * @param string $src Src obrázku
     * @param string $alt Alt obrázku
     */
    function image($src, $alt) {
        $this->tag = "img";
        $this->data["src"] = $src;
        $this->data["alt"] = $alt;
    }

    /**
     * Ukládá odkaz do třídy
     * @param type $href Odkaz odkazu
     * @param type $alt Alt odkazu
     * @param type $text Text treý má odkazovat
     */
    function href($href, $alt, $text) {
        $this->tag = "a";
        $this->data["href"] = $href;
        $this->data["alt"] = $alt;
        $this->text = $text;
    }

    /**
     * Vygeneruje tagy a mezi ně text.
     * @return string vrátí vygenerovaný text
     */
    function __toString() {
        switch ($this->tag) {
            case "h1":
                $vrat = "<h1>" . $this->text . "</h1>";
                break;
            case "h2":
                $vrat = "<h2>" . $this->text . "</h2>";
                break;
            case "h3":
                $vrat = "<h3>" . $this->text . "</h3>";
                break;
            case "h4":
                $vrat = "<h4>" . $this->text . "</h4>";
                break;
            case "h5":
                $vrat = "<h5>" . $this->text . "</h5>";
                break;
            case "span":
                $vrat = "<span>" . $this->text . "</span>";
                break;
            case "p":
                $vrat = "<p>" . $this->text . "</p>";
                break;
            case "img":
                $vrat = "<img src='".$this->data["src"]."' alt='".$this->data["alt"]."' >";
                break;
            case "a":
                $vrat = "<a href='".$this->data["href"]."' alt='".$this->data["alt"]."' >" . $this->text . "</a>";
                break;
            default:
                $vrat = "<span>Zadali jste špatný Tag</span>";
                break;
        }
        return $vrat;
    }

}
