/**
 * AJAX functions for the DokuSmartcache plugin
 *
 * @license  GPL3 (http://www.gnu.org/licenses/gpl.html)
 * @author   Simon-Shlomo Poil <simon.shlomo@poil.dk>
 * 
 */


if(JSINFO['lastmod'] != 'X'){
window.onLoad = checkCache();
}

function checkCache() {
tt = new sack(DOKU_BASE + 'lib/plugins/DokuSmartcache/ajax.php');
tt.encodeURIString = false;
tt.onCompletion=checkDate;

tt.runAJAX('call=smartcheck&id='+JSINFO['id']);
}

function checkDate() {
if(JSINFO['lastmod'] != this.response) {
	location.reload(true);
} else {
tt.onCompletion=checkDate2;
tt.runAJAX('call=smartcheck2&re='+this.response);
}
}

function checkDate2() {
if(JSINFO['lastmod'] != this.response){
	location.reload(true);
}
}
