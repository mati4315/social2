<script>
Ossn.register_callback('ossn', 'load', function() {
    $(document).on('click', '.zoom-img', function() {
        $(this).toggleClass('zoomed');
    });
});
</script>
