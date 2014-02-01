$(document).ready(function () {
    $("a.navitem").click(function () {
        $("a.navitem").removeClass("active-nav");
        $(this).addClass("active-nav");
    });
});