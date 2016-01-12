<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class enivestapiTwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'json2api';
    }

    public function getFilters()
    {
        return array(
            'json2api' => new Twig_Filter_Method($this, 'json2api'),
        );
    }

    public function json2api($json)
    {
        $jsonArray = array();

        $jsonArray = json_decode($json);

        return json_decode(json_encode($jsonArray), true);;
    }
}
