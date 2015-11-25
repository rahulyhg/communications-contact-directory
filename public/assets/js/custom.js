$(document).ready(function(){
  $('.data-table').dataTable();

  $('.alert-fade-away').delay(3000).slideUp(300);

  $("#entryModal").on("show.bs.modal", function(e) {
      var link = $(e.relatedTarget);
      $(this).find(".modal-content").load(link.attr("href"));
  });
});
