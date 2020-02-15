$('.add_to_card').click(function () {
    console.log($(this).attr('id'));
    console.log(BASE_URL);
    $.ajax({
        url: BASE_URL + "/shop/AddToCart",
        type: "GET",
        // dataType:"json",
        data: {
            product_id: $(this).attr('id')
        },
        success: function (result) {

            if (result) {
                location.reload();
            }
        }
    });
});


$('.sm').delay('3000').slideUp();

$('.remove_from_card').click(function () {
    $.ajax({
        url: BASE_URL + "/shop/RemoveFromCart",
        type: "GET",
        // dataType:"json",
        data: {
            product_id: $(this).attr('id')
        },
        success: function (result) {
            if (result) {
                location.reload();
            }
        }
    });
});


$('.update_card').click(function () {
    $.ajax({
        url: BASE_URL + "/shop/UpdateCard",
        type: "GET",
        // dataType:"json",
        data: {
            product_id: $(this).attr('id')
        },
        success: function (result) {
            // if (result) {
            //     location.reload();
            // }
            // alert("in remove one fron cart");
        }
    });
});

// Basic example
// $(document).ready(function () {
//     $('#dtBasicExample').DataTable({
//         "searching": false // false to disable search (or any other option)
//     });
//     $('.dataTables_length').addClass('bs-select');
// });


$(document).ready(function () {
    $("#search").keyup(function () {
        _this = this;
        $.each($("#mytable tbody tr"), function () {
            if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
    });
})
