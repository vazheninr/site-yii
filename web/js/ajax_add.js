$(document).ready(function() {
    $(".nav_close").live("click", function() {
        $(this).closest(".canhide").slideUp("fast")
    });
    $(".toggler").click(function() {
    	$('.canhide').css("z-index", "99");
        var a = "#" + $(this).data("toggle");
        $(a).css("z-index", "199");
        $(a).slideToggle("fast");
    });

    $(".normaldy").click(function() {
        $("body").addClass("noresponsive")
    });
    $("#add_to_cart").removeAttr("onclick");
    $("#add_to_cart").click(function() {
        $.ajax({
            type: "post",
            url: "index.php?route=module/cart/callback",
            dataType: "html",
            data: $("#product :input[name=product_id], #product input[name=quantity], #product input[name=redirect], #product input:checked"),
            success: function(a) {
                $("#module_cart .middle").html(a)
            },
            complete: function() {
                var a = $("#image").offset();
                var b = $("#module_cart").offset();
                $("#image").before('<img src="' + $("#image").attr("src") + '" id="temp" style="position: absolute; top: ' + a.top + "px; left: " + a.left + 'px;" />');
                params = {
                    top: b.top + "px",
                    left: b.left + "px",
                    opacity: 0,
                    width: $("#module_cart").width(),
                    height: $("#module_cart").height()
                };
                $("#temp").animate(params, "slow", false, function() {
                    $("#temp").remove()
                })
            }
        })
    })
});