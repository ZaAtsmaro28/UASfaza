$(window).scroll(function () {
  let wScroll = $(this).scrollTop();

  if (wScroll > $(".visi-judul").offset().top - 250) {
    $(".visi-judul").addClass("masuk");
  }

  if (wScroll > $(".visi-judul").offset().top - 270) {
    $(".visi").addClass("trans-in");
  }

  if (wScroll > $(".visi-judul").offset().top - 270) {
    $(".misi").addClass("trans-in");
  }

  if (wScroll > $(".layanan").offset().top - 400) {
    $(".layanan .card ").addClass("transisi");
  }
  if (wScroll > $(".layanan").offset().top - 400) {
    $(".layanan h4").addClass("slide-masuk");
  }
});
