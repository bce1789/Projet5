$("#ville").autocomplete({
    source: function(request, response) {
        $.ajax({
            url: "https://api-adresse.data.gouv.fr/search/?city=" + $("input[name='ville']").val(),
            data: { q: request.term },
            dataType: "json",
            success: function(data) {
                var cities = [];
                response($.map(data.features, function(item) {
                    // ajoute des villes dans un array pour ne pas avoir plusieurs fois la même
                    if ($.inArray(cities) == -1) {
                        return {
                            label: item.properties.city,
                        };
                    }
                }));
            }
        });
    },
});