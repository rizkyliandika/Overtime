var sectionArray = [
    "home",
    "about",
    "team",
    "services",
    "unit",
    "venue",
    "contact",
];

const activeWhileScroll = (e, value, index) => {
    console.log(value);
    var offsetSection = $("#" + value).offset().top - 84;
    var docScroll = $(this).scrollTop();
    if (docScroll >= offsetSection) {
        $(".navbar-nav .nav-item .nav-link").removeClass("active");
        $(".navbar-nav .nav-item .nav-link:link").addClass("inactive");
        $(".navbar-nav .nav-item .nav-link").eq(index).addClass("active");
        $(".navbar-nav .nav-item .nav-link").eq(index).removeClass("inactive");
    }
};

sectionArray.forEach((value, index) => {
    window.document.addEventListener("scroll", (event) => activeWhileScroll(event, value, index));
});
