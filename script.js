$(document).ready(function () {
  $("#equationForm").submit(function (event) {
    event.preventDefault();

    const a = $("#a").val();
    const b = $("#b").val();
    const c = $("#c").val();

    $.ajax({
      url: "solver.php",
      type: "POST",
      data: { a: a, b: b, c: c },
      success: function (result) {
        $("#result").html(result);
      },
      error: function () {
        $("#result").html("Có lỗi xảy ra. Vui lòng thử lại.");
      },
    });
  });
});
