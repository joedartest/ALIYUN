var ISOUT = ISOUT || {};
ISOUT = (function(){
    var metas = document.getElementsByTagName('meta');
    var meta = '';
    for(var i=0; i<metas.length; i++){
        if(metas[i].name == 'isout'){meta = metas[i]}
    }
    return Number(meta.content)
}());