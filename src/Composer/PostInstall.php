<?php
namespace EasyPhpRest\Composer;

class PostInstall
{
 public function createDir()
 {
     mkdir(__DIR__.'/test', 0755);
 }
}