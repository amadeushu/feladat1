<?php

/**
 * Feladatsor.
 *
 * @package    Amadeushu\Feladat1
 * @author     Tamas Balint <tbalint@hu.amadeus.com>
 * @copyright  2015 Amadeus Hungary
 */

namespace Amadeushu\Feladat1;

/**
 * Console osztály.
 *
 * Kiirja a kimenetre a parancsori argumentumokat.
 * 
 * @package    Amadeushu\Feladatsor1
 * @author     Tamas Balint <tbalint@hu.amadeus.com>
 */
trait Console
{
  /**
   * Kiirja a fuggveny a kimenetre az ARGV tartalmat.
   */
  public function writeConsole()
  {
    print_r($_SERVER['argv'], false);
  }
}
