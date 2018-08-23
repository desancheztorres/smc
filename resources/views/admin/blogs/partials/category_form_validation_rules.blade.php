<script type="text/javascript">
    $("#blogCategoryForm").validate({
        rules: {
            name: {required: true},
        },
        messages: {
            name: "<h5 class='text-danger'>Please choose a name</h5>",
        },
        tooltip_options: {
            name: {trigger:'focus'},
        },
    });
</script>