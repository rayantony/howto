<?php

///////////////////////////////////////////////////////////////
//
// SugarCRM 7.5 performance optimization tuning
//
///////////////////////////////////////////////////////////////

/***CONFIGURATOR***/
$sugar_config['save_query'] = 'populate_only';
$sugar_config['verify_client_ip'] = false;
$sugar_config['disable_count_query'] = true;
$sugar_config['disable_vcr'] = true;
$sugar_config['hide_subpanels'] = true;
$sugar_config['hide_subpanels_on_login'] = true;
$sugar_config['external_cache_disabled'] = true;
$sugar_config['external_cache_disabled_apc'] = true;
$sugar_config['list_max_entries_per_page'] = '10';
$sugar_config['default_module_favicon'] = false;
$sugar_config['show_download_tab'] = true;
$sugar_config['enable_action_menu'] = true;
$sugar_config['stack_trace_errors'] = false;
$sugar_config['developerMode'] = false;
$sugar_config['full_text_engine']['Elastic']['host'] = 'localhost';
$sugar_config['full_text_engine']['Elastic']['port'] = '9200';
$sugar_config['fts_disable_notification'] = true;
/***CONFIGURATOR***/