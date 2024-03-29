<?php


namespace App\Helpers;


 use Carbon\Carbon;

 class TranslitConverter
 {
     private static $replace = [
         "А"=>"A",   "а"=>"a",
         "Б"=>"B",   "б"=>"b",
         "В"=>"V",   "в"=>"v",
         "Г"=>"H",   "г"=>"h",
         "Ґ"=>"G",   "ґ"=>"g",
         "Д"=>"D",   "д"=>"d",
         "Е"=>"E",   "е"=>"e",
         "Є"=>"YE",  "є"=>"ye",
         "Ж"=>"ZH",  "ж"=>"zh",
         "З"=>"Z",   "з"=>"z",
         "И"=>"Y",   "и"=>"y",
         "І"=>"I",   "і"=>"i",
         "Ї"=>"YI",  "ї"=>"yi",
         "Й"=>"Y",   "й"=>"y",
         "К"=>"K",   "к"=>"k",
         "Л"=>"L",   "л"=>"l",
         "М"=>"M",   "м"=>"m",
         "Н"=>"N",   "н"=>"n",
         "О"=>"O",   "о"=>"o",
         "П"=>"P",   "п"=>"p",
         "Р"=>"R",   "р"=>"r",
         "С"=>"S",   "с"=>"s",
         "Т"=>"T",   "т"=>"t",
         "У"=>"U",   "у"=>"u",
         "Ф"=>"F",   "ф"=>"f",
         "Х"=>"KH",  "х"=>"kh",
         "Ц"=>"TS",  "ц"=>"ts",
         "Ч"=>"CH",  "ч"=>"ch",
         "Ш"=>"SH",  "ш"=>"sh",
         "Щ"=>"SHCH","щ"=>"shch",
         "Ю"=>"YU",  "ю"=>"yu",
         "Я"=>"YA",  "я"=>"ya",
         "Ь"=>"",    "ь"=>"",
         "«"=>"",    "»"=>"",
         "("=>"",    ")"=>"",
         " "=>"_",   '"'=>"",
         "`"=>""
     ];
     public static function toTranslit($string)
     {
         $string = mb_strtolower($string);
         return iconv("UTF-8","UTF-8//IGNORE",strtr($string,self::$replace));
     }


 }
