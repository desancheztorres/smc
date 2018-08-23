<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=koxezzi9oq8puhgpzogmswiqc3lamj5fs6heuptw908hs9w7"></script>
<script>
    tinymce.init({
        selector: '.tiny',  // change this value according to your HTML
        color_picker_callback: function(callback, value) {
            callback('#FF00FF');
        },
        skin: 'lightgray',  // use the name of your skin, not lightgray
        height : 200,
        plugins: 'link code',
        menu: {
            file: {title: 'File', items: 'newdocument'},
            edit: {title: 'Edit', items: 'undo redo | cut copy paste pastetext | selectall'},
            insert: {title: 'Insert', items: 'link media | template hr'},
            view: {title: 'View', items: 'visualaid'},
            format: {title: 'Format', items: 'bold italic underline strikethrough superscript subscript | formats | removeformat'},
            table: {title: 'Table', items: 'inserttable tableprops deletetable | cell row column'},
            tools: {title: 'Tools', items: 'spellchecker code'}
        }
    });
</script>