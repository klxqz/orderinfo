<?php

/**
 * @author wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
class shopOrderinfoPluginSettingsAction extends waViewAction {

    protected $plugin_id = array('shop', 'orderinfo');
    protected $icons = array(
        'icon16 uarr',
        'icon16 darr',
        'icon16 rarr',
        'icon16 larr',
        'icon16 custom',
        'icon16 rotate-left',
        'icon16 rotate-right',
        'icon16 im',
        'icon16 skype',
        'icon16 aim',
        'icon16 yahoo',
        'icon16 icq',
        'icon16 jabber',
        'icon16 msn',
        'icon16 zone',
        'icon16 routing',
        'icon16 notebook',
        'icon16 archive',
        'icon16 archive-text',
        'icon16 close',
        'icon16 folder',
        'icon16 folder-dynamic',
        'icon16 folders',
        'icon16 user',
        'icon16 contact',
        'icon16 picture',
        'icon16 pictures',
        'icon16 add',
        'icon16 add-bw',
        'icon16 delete',
        'icon16 delete-bw',
        'icon16 status-red',
        'icon16 status-yellow',
        'icon16 status-green',
        'icon16 status-gray',
        'icon16 status-blue',
        'icon16 status-red-tiny',
        'icon16 status-yellow-tiny',
        'icon16 status-green-tiny',
        'icon16 status-gray-tiny',
        'icon16 status-blue-tiny',
        'icon16 link',
        'icon16 design',
        'icon16 plugins',
        'icon16 settings',
        'icon16 funnel',
        'icon16 plus',
        'icon16 plus-bw',
        'icon16 minus',
        'icon16 minus-bw',
        'icon16 trash',
        'icon16 broom',
        'icon16 broom-bw',
        'icon16 reports',
        'icon16 sync',
        'icon16 search',
        'icon16 search-bw',
        'icon16 lock',
        'icon16 lock-bw',
        'icon16 lock-unlocked',
        'icon16 lock-unlocked-bw',
        'icon16 edit',
        'icon16 edit-bw',
        'icon16 merge',
        'icon16 split',
        'icon16 add-to-list',
        'icon16 update',
        'icon16 box',
        'icon16 print',
        'icon16 books',
        'icon16 lightning',
        'icon16 play',
        'icon16 globe',
        'icon16 globe-small',
        'icon16 light-bulb',
        'icon16 export',
        'icon16 import',
        'icon16 view-thumbs',
        'icon16 view-table',
        'icon16 view-splitview',
        'icon16 view-thumb-list',
        'icon16 view-timeline',
        'icon16 hierarchical',
        'icon16 book-open',
        'icon16 lens',
        'icon16 desktop',
        'icon16 bundles',
        'icon16 apps',
        'icon16 new-window',
        'icon16 text',
        'icon16 video',
        'icon16 cart',
        'icon16 script',
        'icon16 script-lock',
        'icon16 script-block',
        'icon16 comments',
        'icon16 marker',
        'icon16 star',
        'icon16 star-empty',
        'icon16 star-half',
        'icon16 star-hover',
        'icon16 phone',
        'icon16 email',
        'icon16 mobile',
        'icon16 facebook',
        'icon16 twitter',
        'icon16 google',
        'icon16 vkontakte',
        'icon16 livejournal',
        'icon16 picasa',
        'icon16 flickr',
        'icon16 access',
        'icon16 yes',
        'icon16 yes-bw',
        'icon16 no',
        'icon16 no-bw',
        'icon16 cross',
        'icon16 cross-bw',
        'icon16 move',
        'icon16 info',
        'icon16 rss',
        'icon16 medal',
        'icon16 clock',
        'icon16 alarm-clock',
        'icon16 anchor',
        'icon16 home',
        'icon16 cup',
        'icon16 bug',
        'icon16 disk',
        'icon16 burn',
        'icon16 animal-monkey',
        'icon16 smiley',
        'icon16 fruit',
        'icon16 car',
        'icon16 guitar',
        'icon16 store',
        'icon16 target',
        'icon16 luggage',
        'icon16 cookie',
        'icon16 bean',
        'icon16 sport-soccer',
        'icon16 clapperboard',
        'icon16 upload',
        'icon16 zip',
        'icon16 image',
        'icon16 download',
        'icon16 script-css',
        'icon16 script-js',
        'icon16 script-php',
        'icon16 sort',
        'icon16 cheatsheet',
        'icon16 agreement',
        'icon16 palette',
        'icon16 blogs',
        'icon16 blog',
        'icon16 notebooks',
        'icon16 calendar',
        'icon16 exclamation',
        'icon16 attachment',
        'icon16 attachment-small',
        'icon16 tags',
        'icon16 stack',
        'icon16 checkboxes',
        'icon16 map',
        'icon16 userpic20',
        'icon16 hand',
        'icon16 dollar',
        'icon16 percent',
        'icon16 progress',
        'icon16 new',
    );
    protected $def_icon = 'icon16 info';

    public function execute() {
        $app_settings_model = new waAppSettingsModel();
        $settings = $app_settings_model->get($this->plugin_id);
        $selected_fields = isset($settings['fields']) ? json_decode($settings['fields'], true) : array();
        $selected_field_icons = isset($settings['field_icons']) ? json_decode($settings['field_icons'], true) : array();
        $fields = waContactFields::getAll();
        unset($fields['address']);
        $address = waContactFields::get('address');
        $address = $address->getFields();

        $this->view->assign('settings', $settings);
        $this->view->assign('icons', $this->icons);
        $this->view->assign('def_icon', $this->def_icon);
        $this->view->assign('fields', $fields);
        $this->view->assign('address_fields', $address);
        $this->view->assign('selected_fields', $selected_fields);
        $this->view->assign('selected_field_icons', $selected_field_icons);
    }

}