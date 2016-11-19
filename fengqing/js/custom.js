/* Theme Name:iDea - Clean & Powerful Bootstrap Theme
 * Author:HtmlCoder
 * Author URI:http://www.htmlcoder.me
 * Author e-mail:htmlcoder.me@gmail.com
 * Version:1.0.0
 * Created:October 2014
 * License URI:http://wrapbootstrap.com
 * File Description: Place here your custom scripts
 */
//添加书签
function addBookmark(url, title){
if (!url) {url = window.location}
    if (!title) {title = document.title}
    var browser=navigator.userAgent.toLowerCase();
    if (window.sidebar) { // Mozilla, Firefox, Netscape
        window.sidebar.addPanel(title, url,"");
    } else if( window.external) { // IE or chrome
        if (browser.indexOf('chrome')==-1){ // ie
            window.external.AddFavorite( url, title);
        } else { // chrome
            alert('请使用快捷键ctrl+D,添加此页面到书签');
        }
    }
    else if(window.opera && window.print) { // Opera - automatically adds to sidebar if rel=sidebar in the tag
        return true;
    }
    else if (browser.indexOf('konqueror')!=-1) { // Konqueror
        alert('请使用 CTRL+B 添加此页面到书签.');
    }
    else if (browser.indexOf('webkit')!=-1){ // safari
        alert('请使用快捷键 CTRL+B (或者MAC电脑 Command+D) 添加此页面到书签');
    } else {
        alert('您的浏览器无法使用此链接添加书签。请手动添加此页面。')
    }
}