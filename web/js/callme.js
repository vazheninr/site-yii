
function hideForm() {
    jQuery("body").removeClass("owerlayed");
    jQuery("#callmeform").hide();
}

jQuery(function() {
    jQuery("#viewform").click(function() {
        jQuery("#callmeform").fadeIn("fast");
        jQuery("body").addClass("owerlayed");
        $(document).mouseup(function (e) {
                var container = $("#callmeform");

                if (!container.is(e.target)
                    && container.has(e.target).length === 0)
                {
                    hideForm();
                }
        });
    });
    jQuery("#cme_cls").click(function() {
        hideForm();
    });
});

function sendMail() {
    var a = jQuery.Storage.get("callme-sent");
    if (!a) {
        a = 0
    }
    jQuery.getJSON("/callme/index.php", {
        cname: jQuery("#cname").val(),
        cphone: jQuery("#cphone").val(),
        ccmnt: jQuery("#ccmnt").val(),
        ctime: a,
        url: location.href
    }, function(b) {
        message = "<div class='" + b.cls + "'>" + b.message + "</div>";
        jQuery("#callme_result").html(message);
        if (b.result == "success") {
            jQuery.Storage.set("callme-sent", b.time);
            jQuery("#callmeform .btn").attr("disabled", "disabled");
            setTimeout(function() {
                hideForm();
            }, 10000);
            setTimeout(function() {
                jQuery("#callmeform .txt").val("")
            }, 10000)
        }
    })
}
jQuery(document).ready(function() {
    jQuery("#callmeform .txt").focus(function() {});
    jQuery("#callmeform .btn").click(function() {
        jQuery("#callme_result").html("<div class='sending'>Отправка...</div>");
        setTimeout(function() {
            sendMail()
        }, 2000);
        return false
    })
});