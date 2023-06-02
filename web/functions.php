<?php

const HESTIACP_PLUGIN_BASE_NAME = 'hestiacp-plugin-base';
$HESTIACP_PLUGIN_BASE_DATA = get_plugin_data(HESTIACP_PLUGIN_BASE_NAME);

hst_add_header_menu(_('HestiaCP Plugin Base'), '/plugin/hestiacp-plugin-base/', 'face-smile', 'HestiaCP Plugin Base');

if (hst_is_plugin_page(HESTIACP_PLUGIN_BASE_NAME)) {
    hst_add_js('/plugin/hestiacp-plugin-base/res/scripts.js?v='.$HESTIACP_PLUGIN_BASE_DATA['version']);
    hst_add_css('/plugin/hestiacp-plugin-base/res/style.css?v='.$HESTIACP_PLUGIN_BASE_DATA['version']);
}
