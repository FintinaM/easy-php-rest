<?php

namespace EasyPhpRest\Composer;

use EasyPhpRest\Util\Constants;

class PostInstall
{

    public static function createDirs()
    {
         // Create the front controller
        self::createDirAndFile(Constants::ROOT_DIR.'public', 'index.php');
        //create the config
        self::createDirAndFile(Constants::ROOT_DIR.'config', 'api_routes.yml');
        //create the directory structure
        self::createDirAndFile(Constants::ROOT_DIR.'src');
        self::createDirAndFile(Constants::ROOT_DIR.'src/Services');
        self::createDirAndFile(Constants::ROOT_DIR.'src/Controller', 'TestController.php');
    }

    public static function injectAutoload()
    {

        $composerContent = file_get_contents(Constants::ROOT_DIR.'composer.json');
        $composerArray = json_decode($composerContent, true);
        if(strpos($composerContent, 'autoload') === false) {
            $composerArray = array_merge($composerArray, Constants::AUTOLOAD_ARRAY);
            $composerContent = str_replace('\/', '/', json_encode($composerArray));
            file_put_contents(Constants::ROOT_DIR.'composer.json', $composerContent);
        }
    }

    private static function createDirAndFile(string $path, string $fileName = null)
    {
        if (!file_exists($path)) {
            mkdir($path, Constants::MODE);
        }
        if(!is_null($fileName)) {
            if (!file_exists($path . '/' . $fileName)) {
                $fController = fopen($path . '/' . $fileName, 'w+');
                if (file_exists(__DIR__ . '/Data/' . $fileName)) {
                    fwrite($fController, file_get_contents(__DIR__ . '/Data/'.$fileName));
                }
                fclose($fController);
            }
        }
    }


}