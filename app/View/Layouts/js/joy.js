(function (c) {
    c.generateWidget = function () {
        var title = document.querySelector('#title');
        var url = document.querySelector('#url');
        var code = '<iframe src="http://www.joy.com/embed?title=' + title + '&url=' + encodeURI(url) + '" scrolling="no" frameborder="0" allowtransparency="true" style="border:none; overflow:hidden; width:150px; height:24px"></iframe>';
        document.querySelector('#code').value = code;
    };
})(this);
