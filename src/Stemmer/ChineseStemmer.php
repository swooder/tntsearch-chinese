<?php
/**
 * Created by PhpStorm.
 * User: shaojie
 * Date: 16/12/10
 * Time: 11:38
 */

namespace TeamTNT\TNTSearch\Stemmer;


use Woodfish\Stemmer\Split\Split;

class ChineseStemmer implements Stemmer
{

    public static function stem($text)
    {
        $split = new Split();
        $words = $split->simple($text);
        return  $words;
    }
}