(function ($) {
  //SLIDER
  var slider = document.getElementById("weight");
  var output = document.getElementById("demo");
  output.innerHTML = slider.value;

  slider.oninput = function () {
    output.innerHTML = this.value;
  };

  //AJAX
  var form = $("#add-form");

  form.on("submit", function (event) {
    event.preventDefault();

    var req = $.ajax({
      url: form.attr("action"),
      type: "POST",
      data: form.serialize(),
    });

    req.done(function (data) {
      $.ajax({
        url: "http://localhost/web/Project_1/BASE/index.php",
      }).done(function (html) {
        newDay = $(html).find(".newday li:last-child");

        newDay.hide();
        newDay.appendTo(".newday").fadeIn();
      });
    });
  });
})(jQuery);