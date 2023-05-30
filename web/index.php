<?php
$TAB = "HestiaCP Plugin Base";

// Main include
include($_SERVER['DOCUMENT_ROOT'] . "/inc/main.php");

// Blocks other users from accessing the page, but still allows the administrator to access when logged as the user
if ($_SESSION['user'] != 'admin') {
    header("Location: /list/user/");
    exit;
}

$output = hst_exec('v-plugin-base-demo', "Parameter Test");

// Render page
hst_render_plugin_page(HESTIACP_PLUGIN_BASE_NAME, "list", ['command_output' => $output]);
