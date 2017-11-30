function HeightBackground() {
    height = $(window).height() - 50;
    $("#cover_index").css({
        'height': height
    })
}

function HeightBody() {
    height = $(window).height();
    $("#content_tk").css({
        'min-height': height - 114
    })
}

function OpacityContent() {
    scrollPos = $(this).scrollTop();
    $("#content_top_page").css({
        'margin-top': (scrollPos / 4) + 'px',
        'opacity': 1 - (scrollPos / 250)
    })
}

function ShrinkNavbar() {
    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            $("#header").removeClass('header-color-white');
            $("#header").addClass('shrink');
        } else {
            $("#header").removeClass('shrink');
            $("#header").addClass('header-color-white');
        }
    })
}
(function($) {
    jQuery(document).ready(function($) {
        HeightBody();
        HeightBackground();
        $(window).resize(function() {
            HeightBackground();
        })
        $(window).resize(function() {
            HeightBody();
        })
    })
    $(window).scroll(function() {
        ShrinkNavbar();
        OpacityContent();
    })
}(jQuery));

// @@@@@@    SLOW SCROLLING    @@@@@@@
$('a[href^="#"]').click(function() {
    var the_id = $(this).attr("href");

    $('html, body').animate({
        scrollTop: $(the_id).offset().top
    }, 'slow');
    return false;
});
//  @@@@@   END SLOW SCROLLING


(function($) {
    jQuery(document).ready(function($) {
        jQuery("#datepicker").click(function() {
            jQuery("#ui-datepicker-div")
                // BTW, min-width is better:
                //.css("min-width", $(this).outerWidth() + "px");
                .css("width", jQuery(this).outerWidth() + "px");
        });
        jQuery("input.date_dispo_local").datepicker({
            altField: "#datepicker",
            closeText: 'Fermer',
            firstDay: 1,
            prevText: 'Précédent',
            nextText: 'Suivant',
            currentText: 'Aujourd\'hui',
            monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
            monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
            dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
            dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
            dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
            weekHeader: 'Sem.',
            minDate: 0,
            dateFormat: 'dd/mm/yy'
        });
    })
}(jQuery));

(function($) {
    jQuery(document).ready(function($) {
        jQuery('.btn-add-to-wishlist').tooltip({ title: "ajouter au favoris", trigger: "hover", placement: "bottom" });
        jQuery('.prop_female').tooltip({ title: "Femelle", trigger: "hover", placement: "bottom" });
        jQuery('.prop_male').tooltip({ title: "Mâle", trigger: "hover", placement: "bottom" });
        jQuery('.prop_clim').tooltip({ title: "Climatisation", trigger: "hover", placement: "bottom" });
        jQuery('.prop_rad').tooltip({ title: "Chauffage central", trigger: "hover", placement: "bottom" });
        jQuery('.prop_indiv').tooltip({ title: "Individuelle", trigger: "hover", placement: "bottom" });
        jQuery('.prop_wifi').tooltip({ title: "Wifi", trigger: "hover", placement: "bottom" });
        jQuery('.prop_smok').tooltip({ title: "Tabac", trigger: "hover", placement: "bottom" });
    })
}(jQuery));
$(document).ready(function(e) {
    $(".img-check").click(function() {
        $(this).toggleClass("check");
        $(this).parent().toggleClass("check_parent");
    });
});

(function($) {
    jQuery(document).ready(function($) {
        $("[data-js-form-slider]", function() {
            const el = $(this)
            const field = el.find('.field')
            const fill = el.find('.fill')
            const label = el.find('.-thumb')
            const min = field.attr('min') || 0
            const max = field.attr('max') || 100

            var value = field.val()
            var fillVal = 100 * (value - min) / (max - min)

            fill.css({ "width": fillVal + "%" })
            label.find('.center').text(" " + value + " ")

            field.on('input', function() {
                var value = field.val()
                var fillVal = 100 * (value - min) / (max - min)

                fill.css({ "width": fillVal + "%" })
                label.find('.center').text(" " + value + " ")
            })
        })
    })
}(jQuery));

/*****************  DATA TABLE************* */
(function($) {
    jQuery(document).ready(function($) {
        jQuery('#dataTable').DataTable();
    })
}(jQuery));
/********************* END DATA TABLE ******************** */