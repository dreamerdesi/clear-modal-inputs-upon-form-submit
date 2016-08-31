<script>
// clear input forms when modal is either dismissed or save id button is clicked

$('[id=your_id]').on('click', function (e) {
    var $t = $(this),
        target = $t[0].href || $t.data("target") || $t.parents('.modal') || [];
    
  $(target)
    .find("input")
       .val('')
       .end()
    
});
</script>