<?php
/**
* 2007-2021 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2021 PrestaShop SA

*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

namespace PrestaShop\Module\findomestic_payments\Configuration;

use Context;
use Configuration;
use findomestic_payments;
use Customer;
use Module;
use Order;
use Psr\Container\ContainerInterface;
use Tools;
use Product;

/*
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerInterface;
 */

class FPUrlConfiguration
{
    public function __construct($url, $tvei, $prf, $cod_fin = '')
    {
        $this->baseurl = $url;
        $this->tvei = $tvei;
        $this->prf = $prf;
        $this->cod_fin = $cod_fin;
    }

    public function getUrl()
    {
        $url = $this->baseurl.'?tvei='.$this->tvei.'&prf='.$this->prf;
        if($this->cod_fin != ''){
            $url .= '&codice_finalita='.$this->cod_fin;
        }
        return $url;
    }
}
