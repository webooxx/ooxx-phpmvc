<?php
namespace {
    $config = array(
        'ROUTER_KEY' => 'r',
        'APP_NAME'   => 'app',
    );
    require_once( dirname( __FILE__ ).'/core/framework.php' );
    Framework\Core::init( array_merge( $config , include_once(  dirname( __FILE__ ).'/config.php') ) );
}
