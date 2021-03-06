<?php
/*
  Twig extension that takes a json-string (e.g. from {{set json = include('foobar.json')}}) and converts it to an array.



*/
namespace Craft;


class json2arrayPlugin extends BasePlugin
{
  public function init() {

  }
  function getName()
  {
    return Craft::t('json2array plugin');
  }
  public function hasCpSection()
  {
    return false;
  }

  function getVersion()
  {
    return '0.1';
  }

  function getDeveloper()
  {
    return 'Knut Melvær';
  }

  function getDeveloperUrl()
  {
    return 'http://netliferesearch.com/knut';
  }
  public function addTwigExtension()
  {
    Craft::import('plugins.json2array.twigextensions.json2arrayTwigExtension');
    return new json2arrayTwigExtension();
  }
  /*
    function getSettingsUrl()
    {
      return 'json2api/_settings';
    }
    public function addTwigExtension()
    {
      Craft::import('plugins.json2api.twigextensions.json2apiTwigExtension');

      return new json2apiTwigExtension();
    }
    public function getSettingsHtml()
    {
      return
      craft()->templates->render('json2api/_settings', array(
        'settings' => $this->getSettings()
      ));
    }
  */
}

?>
