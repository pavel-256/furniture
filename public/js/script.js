$('.add-to-cart-btn').on('click', function () {

    var pid = $(this).data('pid'); // from the button add to cart item.blade.php

    $.ajax({

        url: BASE_URL + 'shop/add-to-cart', // from the master  // full rout
        type: 'GET', // the request type
        dataType: 'html', // the file type
        data: {
            pid: $(this).data('pid') // wich data to trransfer to us
        }, // if everthing ok
        success: function () {

            window.location.reload(); // to reaload the page and add to cart+1 (dont need reload)

        }

    });
});

$('.remove-item-btn').on('click', function () {

    if (confirm('Are you sure?')) {
        return true;

    }
    return false;
});


$('.remove-cart').on('click', function () {

    if (confirm('Are you sure?')) {
        return true;

    }
    return false;
});

$('.update-cart-btn').on('click', function (e) {

    e.preventDefault();

    $.ajax({

        url: BASE_URL + 'shop/update-cart', // from the master  // full rout
        type: 'GET', // the request type
        dataType: 'html', // the file type
        data: {
            pid: $(this).data('pid'), // whats the id
            op: $(this).data('op') // whats the operation
        }, // if everthing ok   // from cart plus/minus button
        success: function () {

            window.location.reload(); // to reaload the page and add to cart+1 (dont need reload)

        }
    });


});

// the search 

$('#search').on('input', function () {

    var userSearch = $(this).val().trim();
    $('#search-btn').attr("href", BASE_URL + "shop/search/" + userSearch);

    if (userSearch.length > 0) {

        $.ajax({
            type: 'GET',
            url: BASE_URL + 'search/' + userSearch,
            dataType: 'json',

            success: function (products) {
                if (products) {
                    var availableTags = [];
                    products.forEach(function (product) {

                        availableTags.push({

                            label: product.ptitle,
                            value: BASE_URL + 'shop/' + product.curl + '/' + product.purl
                        });
                    });

                    $("#search").autocomplete({

                        source: availableTags,
                        focus: function (event, ui) {
                            $('#search').val(ui.item.label);
                            $('#search-btn').attr("href", ui.item.value);

                            return false;
                        },

                        select: function (event, ui) {

                            window.location.href = ui.item.value;
                            return false;
                        }
                    });
                }
            }

        });
    }
});
