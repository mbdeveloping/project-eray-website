<?php
$geoPlugin_array = unserialize( file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $_SERVER['REMOTE_ADDR']) );

if ( $geoPlugin_array['geoplugin_countryCode'] == 'LT' ) {
    header('location: lt');
} else {
    header('location: en');
}