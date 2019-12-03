<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Parser Enabled
|--------------------------------------------------------------------------
|
| Should the Parser library be used for the entire page?
|
| Can be overridden with $this->template->enable_parser(TRUE/FALSE);
|
|   Default: TRUE
|
*/

$config['parser_enabled'] = TRUE;

/*
|--------------------------------------------------------------------------
| Parser Enabled for Body
|--------------------------------------------------------------------------
|
| If the parser is enabled, do you want it to parse the body or not?
|
| Can be overridden with $this->template->enable_parser(TRUE/FALSE);
|
|   Default: FALSE
|
*/

$config['parser_body_enabled'] = FALSE;

/*
|--------------------------------------------------------------------------
| Title Separator
|--------------------------------------------------------------------------
|
| What string should be used to separate title segments sent via $this->template->title('Foo', 'Bar');
|
|   Default: ' | '
|
*/

$config['title_separator'] = ' | ';

/*
|--------------------------------------------------------------------------
| Layout
|--------------------------------------------------------------------------
|
| Which layout file should be used? When combined with theme it will be a layout file in that theme
|
| Change to 'main' to get /application/views/layouts/main.php
|
|   Default: 'default'
|
*/

$config['layout'] = 'default';

/*
|--------------------------------------------------------------------------
| Theme
|--------------------------------------------------------------------------
|
| Which theme to use by default?
|
| Can be overriden with $this->template->set_theme('foo');
|
|   Default: ''
|
*/

$config['theme'] = '';

/*
|--------------------------------------------------------------------------
| Theme Locations
|--------------------------------------------------------------------------
|
| Where should we expect to see themes?
|
| Default: array(APPPATH.'themes/' => '../themes/')
|
*/

$config['theme_locations'] = array(
  APPPATH.'themes/'
);


$template['active_template'] = 'pebri_cms';

$template['non_pebri_cms']['template'] = 'template/non_pebri_template.php';
$template['non_pebri_cms']['regions'] = array(
   'title' => array('content' => array('NonWaktuCms')),
   'header',
   'navs',
   'sidenavs',
   'content',
   'footer' => array(
        'content' => array('Waktu &copy;2019'),
    ),
);

$template['non_pebri_cms']['parser'] = 'parser';
$template['non_pebri_cms']['parser_method'] = 'parse';
$template['non_pebri_cms']['parse_template'] = FALSE;





$template['pebri_cms']['template'] = 'template/cms/cms_pebri_template.php';
$template['pebri_cms']['regions'] = array(
   'title' => array('content' => array('WaktuCms')),
   'header',
   'navs',
   'sidenavs',
   'content',
   'footer' => array(
        'content' => array('Waktu &copy;2019'),
    ),
);

$template['pebri_cms']['parser'] = 'parser';
$template['pebri_cms']['parser_method'] = 'parse';
$template['pebri_cms']['parse_template'] = FALSE;





$template['pebri_front']['template'] = 'template/front/front_pebri_template.php';
$template['pebri_front']['regions'] = array(
   'title' => array('content' => array('WaktuFront')),
   'header',
   'navs',
   'sidenavs',
   'content',
   'footer' => array(
        'content' => array('Waktu &copy;2019'),
    ),
);

$template['pebri_front']['parser'] = 'parser';
$template['pebri_front']['parser_method'] = 'parse';
$template['pebri_front']['parse_template'] = FALSE;