<?php
namespace EasyPhpRest\Composer;

class PostInstall
{
 public static function createDir()
 {
     mkdir(__DIR__.'/test', 0755);
 }
}