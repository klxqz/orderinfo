<?php

/**
 * @author wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
class shopOrderinfoPluginBackendSaveController extends waJsonController {

    public function execute() {

        $app_settings_model = new waAppSettingsModel();
        $shop_orderinfo = waRequest::post('shop_orderinfo');
        $fields = isset($shop_orderinfo['fields']) ? $shop_orderinfo['fields'] : array();
        $field_icons = isset($shop_orderinfo['field_icons']) ? $shop_orderinfo['field_icons'] : array();
        unset($shop_orderinfo['fields']);
        unset($shop_orderinfo['field_icons']);
        foreach ($shop_orderinfo as $name => $val) {
            $app_settings_model->set(array('shop', 'orderinfo'), $name, $val);
        }
        $app_settings_model->set(array('shop', 'orderinfo'), 'fields', json_encode($fields));
        $app_settings_model->set(array('shop', 'orderinfo'), 'field_icons', json_encode($field_icons));
    }

}
