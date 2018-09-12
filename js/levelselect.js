$(document).on("click mousedown", function(e) {
    if ($(e.target).is(".classchange1")) {
        $("#classe").val("1");
        $("#clasess .activated").removeClass("activated");
        document.getElementById("1").classList.add('activated');
    } else if ($(e.target).is(".classchange2")) {
        $("#classe").val("2");
        $("#clasess .activated").removeClass("activated");
        document.getElementById("2").classList.add('activated');
    } else if ($(e.target).is(".classchange3")) {
        $("#classe").val("3");
        $("#clasess .activated").removeClass("activated");
        document.getElementById("3").classList.add('activated');
    } else if ($(e.target).is(".classchange4")) {
        $("#classe").val("4");
        $("#clasess .activated").removeClass("activated");
        document.getElementById("4").classList.add('activated');
    } else if ($(e.target).is(".levelchange1")) {
        $("#leveel").val("1");
        $("#levelss .activated").removeClass("activated");
        document.getElementById("5").classList.add('activated');
    } else if ($(e.target).is(".levelchange2")) {
        $("#leveel").val("2");
        $("#levelss .activated").removeClass("activated");
        document.getElementById("6").classList.add('activated');
    } else if ($(e.target).is(".levelchange3")) {
        $("#leveel").val("3");
        $("#levelss .activated").removeClass("activated");
        document.getElementById("7").classList.add('activated');
    } else if ($(e.target).is(".levelchange4")) {
        $("#leveel").val("4");
        $("#levelss .activated").removeClass("activated");
        document.getElementById("8").classList.add('activated');
    } else if ($(e.target).is(".icona")) {
        $("#meniu").show();
    } else if ($(e.target).is(".tradelink")) {
        document.getElementById("historylist").style.display = "block" 
    }else if ($(e.target).is(".tos")) {
        $("#sourcess").show();
    } else if ($(e.target).is(".sup")) {
        $("#clasess").show();
    } else if ($(e.target).is(".affiliates")) {
        $("#levelss").show();
    } else {
 document.getElementById("historylist").style.display = "none" ;
        $("#levelss").hide();
        $("#clasess").hide();
        $("#sourcess").hide();
        $("#meniu").hide();
}
    $(this).off("click")
});