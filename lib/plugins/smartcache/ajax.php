<?
/**
 * DokuWiki Plugin DokuSmartcache 
 *
 * @license GPL 3 http://www.gnu.org/licenses/gpl.html
 * @author  Simon-Shlomo Poil <simon.shlomo@poil.dk>
 */

$_POST['call']();

function smartcheck() {
print  date ("m/d/Y H:i:s",filemtime(('/var/www/data/pages/'.(str_replace(':','/',$_POST['id'])).'.txt')));  
}

function smartcheck2(){
if(!defined('DOKU_INC')) define('DOKU_INC',realpath(dirname(__FILE__).'/../../../').'/');
require_once(DOKU_INC.'inc/init.php');
if(isset($_SERVER['REMOTE_USER'])){
print 'X';
}else{
print $_POST['re'];
}


}
?>
