<?php

/**
 * @author wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
return array(
    'name' => 'Информация в заказе',
    'description' => 'Выводит дополнительную информацию в заказе',
    'vendor' => '985310',
    'version' => '1.0.1',
    'img' => 'img/orderinfo.png',
    'frontend' => true,
    'shop_settings' => true,
    'handlers' => array(
        'backend_order' => 'backendOrder',
    ),
);
//EOF
