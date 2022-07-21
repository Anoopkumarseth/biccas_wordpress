(function ($) {
    $(".togglePrimary").click(function () {
        $(".primaryMenu").toggleClass("active"); 
        $("body").toggleClass("open-menu"); 
        $(this).toggleClass("active"); 
    });

    // sticky Header
    var stickyNavTop = $('.site-header').offset().top;
    var stickyNav = function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > stickyNavTop) {
            $('.site-header').addClass('site-header_fixed');
        } else {
            $('.site-header').removeClass('site-header_fixed');
        }
    };
    $(window).scroll(function () {
        stickyNav();
    });
    stickyNav();
}(jQuery));

// selector
selectAll = (name) => document.querySelectorAll(name);
// custom tab
tablinks = selectAll(".tabs-auto .tab-nav .tab-link");
tabContents = selectAll(".tabs-auto .tab-content");
for (let i = 0; i < tablinks.length; i++) {
    tablinks[i].addEventListener("click", (e) => {
        e.preventDefault()
        let linkSiblings = tablinks[i].parentElement.parentElement.children;
        let tabSiblings = tabContents[i].parentElement.children;
        for (let i = 0; i < linkSiblings.length; i++) {
            linkSiblings[i].children[0].classList.remove('active')
            tabSiblings[i].classList.remove('active')
        }
        tablinks[i].classList.add("active");
        tabContents[i].classList.add("active");
    })
}
var swiper = new Swiper(".testimonials_swiper", {
    spaceBetween: 20,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesProgress: true,
});

var swiper2 = new Swiper(".testimonials_item", {
    spaceBetween: 10,
    autoHeight: true,
    thumbs: {
        swiper: swiper,
    },
});
