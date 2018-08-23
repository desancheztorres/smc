<script type="text/javascript">
    $("#blogCreateForm").validate({
        rules: {
            title:              {required: true},
            subtitle:           {required: true},
            category:           {required: true},
            slug:               {required: true},
            meta_description:   {required: true},
        },
        messages: {
            title: "<h5 class='text-danger'>Please choose a title</h5>",
            subtitle: "<h5 class='text-danger'>Please choose a subtitle</h5>",
            category: "<h5 class='text-danger'>Please select a category</h5>",
            slug: "<h5 class='text-danger'>Please choose a slug</h5>",
            meta_description: "<h5 class='text-danger'>Please choose a meta description</h5>",
        },
        tooltip_options: {
            title: {trigger:'focus'},
            subtitle: {placement:'right',html:true}
        },
    });
</script>