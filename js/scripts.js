$(function(){

	console.log("It's working");

//active Links 

    $("ul.wp-tag-cloud li a").each(function() {
        if (this.href == window.location.href) {
            $(this).addClass("active");
        }
    });

    $("ul.menu li a").each(function() {
        if (this.href == window.location.href) {
            $(this).addClass("activeMenu");
        }
    });

});