<?php

if(!defined('DOKU_INC')) die();
if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'action.php');
 
class action_plugin_smartcache extends DokuWiki_Action_Plugin {
 
  /**
   * return some info
   */
  function getInfo(){
    return array(
                 'author' => 'Simon-Shlomo Poil',
                 'email'  => 'simon.shlmo@poil.dk',
                 'date'   => '1 August 2011',
                 'name'   => 'SmartCache action plugin',
                 'desc'   => 'SmartCache action plugin actions',
                 'url'    => 'http://wiki.splitbrain.org/plugin:smartcache',
                 );
  }

 function register(&$controller) {
   
    $controller->register_hook('DOKUWIKI_STARTED', 'BEFORE', $this, 'smartAddlastmod');
//    $controller->register_hook('ACTION_HEADER_SEND', 'BEFORE', $this,'smartAddHeader');
  }


function smartAddlastmod(&$event,$param){
global $JSINFO;
global $conf;
global $ID;
if(!isset($_SERVER['REMOTE_USER'])){
  if(auth_quickaclcheck($ID) < AUTH_READ){
  $JSINFO['lastmod'] = (string) 'X';
  } else {
$JSINFO['lastmod'] = (string) date("m/d/Y H:i:s",filemtime(($conf['datadir'].'/'.(str_replace(':','/',$ID)).'.txt'))); 
}
} else {
$JSINFO['lastmod'] = (string) 'X';
}
return true;
}
//
//function smartAddHeader(&$event,$param){
//global $conf;
//if(!isset( $_SERVER['REMOTE_USER'])){
//$event->data[] =  'Cache-Control: public, max-age='.max($conf['cachetime'], 2000000);
//$event->data['test2'] =  'Pragma: cache';
//$event->data['test'] = 'X-PINGback: test';
//return true;     
//}

//}


}



