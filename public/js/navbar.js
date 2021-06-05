$(document).click(function(event) {
    $(event.target).closest(".navbar").length || 
    $(".navbar-collapse.show").length && 
    $(".navbar-collapse.show").collapse("hide")
  });

$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});

