(function($) {
    jQuery(document).ready(function($) {
        jQuery("#update_profile_info").validate({
            rules: {
                user_edit_cpost: {
                    minlength: 4,
                    maxlength: 4,
                    number: true
                },
                user_edit_cin: {
                    minlength: 8,
                    maxlength: 8,
                    number: true
                },
                user_edit_tel: {
                    minlength: 8,
                    maxlength: 8,
                    number: true
                }
            },
            messages: {
                user_edit_cpost: {
                    minlength: "Le code postal 4 chiffres",
                    maxlength: "Le code postal 4 chiffres",
                    number: "Chiffres uniquement"
                },
                user_edit_cin: {
                    minlength: "Numéro carte CIN 8 chiffres",
                    maxlength: "Numéro carte CIN 8 chiffres",
                    number: "Chiffres uniquement"
                },
                user_edit_tel: {
                    minlength: "Numéro de téléphone 8 chiffres",
                    maxlength: "Numéro de téléphone 8 chiffres",
                    number: "Chiffres uniquement"
                }
            }
        });
    })
}(jQuery));

(function($) {
    jQuery(document).ready(function($) {
        jQuery("#add_colocation").validate({
            rules: {
                budget: {
                    required: true,
                    number: true,
                    max: 600,
                    min: 50,
                },
                ville_col: {
                    required: true
                },
                adresse_col: {
                    required: true
                },
                titre_col: {
                    required: true
                },
                description_col: {
                    minlength: 0,
                    maxlength: 1000,
                },
                price_col: {
                    required: true,
                    number: true,
                    max: 600,
                    min: 50,
                },
                surface_col: {
                    required: true,
                    number: true,
                    max: 1000,
                    min: 50,
                }
            },
            messages: {
                budget: {
                    required: "Le champ est requis.",
                    max: "max 600 DNT",
                    min: "min 50 DNT",
                    number: "Chiffres uniquement"
                },
                ville_col: {
                    required: "Le champ est requis."
                },
                adresse_col: {
                    required: "Le champ est requis."
                },
                titre_col: {
                    required: "Le champ est requis."
                },
                price_col: {
                    required: "Le champ est requis.",
                    max: "max 600 DNT",
                    min: "min 50 DNT",
                    number: "Chiffres uniquement"
                },
                surface_col: {
                    required: "Le champ est requis.",
                    max: "max 1000 m²",
                    min: "min 50 m²",
                    number: "Chiffres uniquement"
                }
            }
        });
    })
}(jQuery));


(function($) {
    jQuery(document).ready(function($) {
        jQuery("#seach_colocation").validate({
            rules: {
                budget: {
                    required: true,
                    number: true,
                    max: 600,
                    min: 50,
                },
                adresse_search: {
                    required: true
                },
                typeUser: {
                    required: true,
                },
                sitation: {
                    required: true,
                },
                description_trv: {
                    required: true,
                    minlength: 0,
                    maxlength: 1000,
                },
            },
            messages: {
                budget: {
                    required: "Le champ est requis.",
                    max: "max 600 DNT",
                    min: "min 50 DNT",
                    number: "Chiffres uniquement"
                },
                adresse_search: {
                    required: "Le champ est requis."
                },
                typeUser: {
                    required: "Le champ est requis."
                },
                sitation: {
                    required: "Le champ est requis."
                },
                description_trv: {
                    required: "Le champ est requis.",
                    maxlength: 'Max 1000 caratères'
                },
            }
        });
    })
}(jQuery));

/**************************** */

$('#tel').formatter({
    'pattern': '{{99999999}}'
});
$('#cin').formatter({
    'pattern': '{{99999999}}'
});