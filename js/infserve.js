
function id( el ){
        return document.getElementById( el );
}
function hide_all(){
        var divs = id('serviHide').getElementsByClassName('sumir');
        for( var i=0; i<divs.length; i++ )
        {
                divs[i].style.display = 'none';
        }
}
/* http://www.javascriptkit.com/jsref/event.shtml */
function disablelink( e ){
        var evt = window.event || e
        if (evt.preventDefault) //supports preventDefault?
                evt.preventDefault()
        else //IE browser
                return false
}
window.onload = function(){
        hide_all();
        var as = id('serviHide').getElementsByTagName('a');
        for( var i=0; i<as.length; i++ )
        {
                as[i].onclick = function( e ){
                        hide_all();
                        var id_el = this.href.split('#')

                        id( id_el[1] ).style.display = 'block';
                        return disablelink( e );
                }
        }
}
