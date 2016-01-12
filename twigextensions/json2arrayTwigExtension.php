<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class json2arrayTwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'json2array';
    }

    public function getFilters()
    {
        return array(
            'json2array' => new Twig_Filter_Method($this, 'json2array'),
        );
    }

    public function json2array($json)
    {
        $jsonArray = array();

        $jsonArray = json_decode($json, true);

        return $jsonArray;
    }
}
