$(document).ready(function(){
  $('.data-table').dataTable();
  $('.validate-form').parsley();
  $('.wysiwyg').summernote({
    height: 300,                 // set editor height
    minHeight: null,             // set minimum height of editor
    maxHeight: null,             // set maximum height of editor
  });

  $('.alert-fade-away').delay(3000).slideUp(300);

  // populate the model with the current entry information on the show method
  $("#entryModal").on("show.bs.modal", function(e) {
    var link = $(e.relatedTarget);
    $(this).find(".modal-content").load(link.attr("href"));
  });

  // clear the model on the hide method
  $("#entryModal").on("hide.bs.modal", function(e) {
    $(this).find(".modal-content").empty();
  });

  // enhance specific dropdowns using Select2
  $(".select2_list").select2();

});
