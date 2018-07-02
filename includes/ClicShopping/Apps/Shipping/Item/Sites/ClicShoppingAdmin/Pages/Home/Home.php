<?php
/*
 * Home.php
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse
 
*/

  namespace ClicShopping\Apps\Shipping\Item\Sites\ClicShoppingAdmin\Pages\Home;

  use ClicShopping\OM\Registry;

  use ClicShopping\Apps\Shipping\Item\Item;

  class Home extends \ClicShopping\OM\PagesAbstract {
    public $app;

    protected function init() {
      $CLICSHOPPING_Item = new Item();
      Registry::set('Item', $CLICSHOPPING_Item);

      $this->app = $CLICSHOPPING_Item;

      $this->app->loadDefinitions('Sites/ClicShoppingAdmin/main');
    }
  }
