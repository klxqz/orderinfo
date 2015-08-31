<?php

/**
 * @author wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
class shopOrderinfoPlugin extends shopPlugin {

    public function backendOrder($order) {
        if ($this->getSettings('status')) {
            $customer_contact = new waContact($order['contact_id']);
            $selected_fields = $this->getSettings('fields');
            $selected_field_icons = $this->getSettings('field_icons');
            $fields = array();
            if ($selected_fields) {
                foreach ($selected_fields as $key => $selected_field) {
                    $fields[] = array(
                        'value' => $customer_contact->get($selected_field, 'html'),
                        'icon' => isset($selected_field_icons[$key]) ? $selected_field_icons[$key] : 'icon16 info',
                    );
                }
            }

            $view = wa()->getView();
            $view->assign('fields', $fields);
            $template_path = wa()->getAppPath('plugins/orderinfo/templates/OrderInfo.html', 'shop');
            $html = $view->fetch($template_path);
            return array('action_link' => $html);
        }
    }

}
