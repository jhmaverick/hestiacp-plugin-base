<?php

const HESTIACP_PLUGIN_BASE_NAME = 'hestiacp-plugin-base';
$HESTIACP_PLUGIN_BASE_DATA = get_plugin_data(HESTIACP_PLUGIN_BASE_NAME);

hst_add_header_menu('HestiaCP Plugin Base', '/plugin/hestiacp-plugin-base/');

if (hst_is_plugin_page(HESTIACP_PLUGIN_BASE_NAME)) {
    hst_add_css('/plugin/hestiacp-plugin-base/style.css?v='.$HESTIACP_PLUGIN_BASE_DATA['version']);
}
