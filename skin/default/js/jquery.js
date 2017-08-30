var indexx = $(".indexx li").length;
$(".about-list li").eq(indexx).find("a").css({
    "background-color": "#fff",
    "padding-left": "35px"
});

$(".totop").click(function () {
    $("html, body").animate({
        "scrollTop": 0
    }, 500);
});

var index = $(".index li").length;
$(".nav li").eq(index).css({
    "background-color": "#4fc17d"
});

$(".nav li").each(function (index) {
    $(".nav li").eq(index).find("a").css({
        "margin-top": ($(".nav li").height() - $(".nav li").eq(index).find("a").height()) / 2
    });
});

var timer = null;
var inum = 0;

$(".banner,.banner-ul").css("height", $(".banner-ul img").height());

banner();


$(".banner-title").mouseover(function () {
    clearInterval(timer);
});

$(".banner-title").mouseout(function () {
    timer = setInterval(function () {
        banner();
    }, 5000);
});

clearInterval(timer);

timer = setInterval(function () {
    banner();
}, 5000);

$(".thumb li").click(function () {
    var index = $(this).index();
    inum = index;
    $(".thumb li").eq(index).find("img").css("border", "2px solid darkorange");
    $(".thumb li").eq(index).siblings().find("img").css("border", "2px solid #fff");
    $(".banner-ul li").eq(index).show();
    $(".banner-ul li").eq(index).siblings().hide();
    $(".banner-title p").html($(".banner-p p").eq(index).html());
});

$(".arrow1").click(function () {
    inum--;
    if (inum == -1) {
        inum = $(".banner-ul li").length - 1;
    }
    $(".thumb li").eq(inum).find("img").css("border", "2px solid darkorange");
    $(".thumb li").eq(inum).siblings().find("img").css("border", "2px solid #fff");
    $(".banner-ul li").eq(inum).show();
    $(".banner-ul li").eq(inum).siblings().hide();
    $(".banner-title p").html($(".banner-p p").eq(inum).html());
});

$(".arrow2").click(function () {
    inum++;
    if (inum == $(".banner-ul li").length) {
        inum = 0;
    }
    $(".thumb li").eq(inum).find("img").css("border", "2px solid darkorange");
    $(".thumb li").eq(inum).siblings().find("img").css("border", "2px solid #fff");
    $(".banner-ul li").eq(inum).show();
    $(".banner-ul li").eq(inum).siblings().hide();
    $(".banner-title p").html($(".banner-p p").eq(inum).html());
});

function banner() {
    inum++;
    if (inum == $(".banner-ul li").length) {
        inum = 0;
    }
    $(".thumb li").eq(inum).find("img").css("border", "2px solid darkorange");
    $(".thumb li").eq(inum).siblings().find("img").css("border", "2px solid #fff");
    $(".banner-ul li").eq(inum).show();
    $(".banner-ul li").eq(inum).siblings().hide();
    $(".banner-title p").html($(".banner-p p").eq(inum).html());
}

var timer2 = null;
var num = 5;
var onew = $(".product-list li").eq(0).width();
getw();

$(".product-box").mousemove(function () {
    clearInterval(timer2);
});
$(".product-box").mouseout(function () {
    timer2 = setInterval(function () {
        for (var i = 0; i < num; i++) {
            var ol = $(".product-list li").eq(i).clone();
            $(".product-list").append(ol);
            getw();
        }
        $(".product-list").animate({
            "left": -(onew * num + num * 20)
        }, 1000, function () {
            for (var j = 0; j < num; j++) {
                $(".product-list li").eq(0).remove();
                $(".product-list").css("left", 0);
                getw();
            }
        });
    }, 5000);
});

function getw() {
    var len = $(".product-list li").length;
    $(".product-list").css("width", len * onew + len * 20);
}

clearInterval(timer2);

timer2 = setInterval(function () {
    for (var i = 0; i < num; i++) {
        var ol = $(".product-list li").eq(i).clone();
        $(".product-list").append(ol);
        getw();
    }
    $(".product-list").animate({
        "left": -(onew * num + num * 20)
    }, 1000, function () {
        for (var j = 0; j < num; j++) {
            $(".product-list li").eq(0).remove();
            $(".product-list").css("left", 0);
            getw();
        }
    });
}, 5000);
