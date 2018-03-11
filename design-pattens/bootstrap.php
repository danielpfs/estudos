<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function autoload($class)
{
    $path = explode('\\', $class);
    $file = '';
    foreach ($path as $item) {
        $file.= '/' . $item;
    }
    include __DIR__ . $file . '.php';
}

spl_autoload_register('autoload');

class HtmlBuilder
{
    private static $data;

    public static function add($data, $element = null)
    {
        if ($element) {
            self::$data[] = "<$element>$data</$element>";
        } else {
            self::$data[] = $data.'<br>';
        }
    }

    public static function build()
    {
        echo '<pre>';
        foreach (self::$data as $item) {
            echo $item;
        }
        echo '</pre>';
        self::$data = null;
    }
}

/**
 * Create a block on html
 * 
 * @param string $data    Data for print
 * @param string $element Element of html
 * 
 * @return null
 */
function add($data, $element = null)
{
    HtmlBuilder::add($data, $element);
}

function build()
{
    HtmlBuilder::build();
}