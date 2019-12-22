require('./bootstrap');
require('./metro');
require('./tinymce.min.js');

$(function() {
    tinymce.init({
        selector: 'textarea.rich-editor',
        base_url: '/js/tinymce/js/tinymce',
        suffix: '.min',
        height: 400
    });
});
