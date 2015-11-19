<?php

/**
 * Feladatsor.
 *
 * @package    Amadeushu\Feladat1
 * @author     Tamas Balint <tbalint@hu.amadeus.com>
 * @copyright  2015 Amadeus Hungary
 */

namespace Amadeushu\Feladat1;

use Exception;

/**
 * File osztály.
 *
 * Elmenti egy fajlba parancssori argumentumokat.
 *
 * @package    Amadeushu\Feladatsor1
 * @author     Tamas Balint <tbalint@hu.amadeus.com>
 */
trait File
{
  /**
   * Elmenti egy Json fajlba az ARGV tartalmat.
   */
  public function saveJsonFile()
  {
    try
    {
      // konyvtar megadasa
      $dir = __DIR__.'/../public/json/';

      // leellenorizzuk van-e ilyen konyvtar
      if (!is_dir($dir))
      {
        // kivetelt dobunk, ha nincs
        throw new Exception('A konyvtar nem letezik!', 1);
      }

      // fajl nevenek a megadasa
      $file = time();

      // lementjuk a parametereket egy json fajlba
      $fp = fopen($dir.$file.'.json', 'w');
      fwrite($fp, json_encode($_SERVER['argv'], JSON_PRETTY_PRINT));
      fclose($fp);
    }
    // hiba volt, kiirjuk a kimenetre
    catch (Exception $e)
    {
      echo $e;
    }
  }
}
