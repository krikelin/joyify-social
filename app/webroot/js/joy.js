(function (c) {
    c.generateWidget = function () {
        var title = document.querySelector('#title').value;
        var url = document.querySelector('#url').value;
        var code = '<iframe src="http://www.' + APPDOMAIN + '/widget?title=' + title + '&url=' + encodeURI(url) + '" target="_blank" scrolling="no" frameborder="0" allowtransparency="true" style="border:none; overflow:hidden; width:150px; height:24px"></iframe>';
        document.querySelector('#code').value = code;
    };
})(this);
