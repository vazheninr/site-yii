var sozesize = 0;

function showCart(cart) {//показать корзину
    $('#cart .modal-body').html(cart);
    $('#cart').modal();

    $.ajax({//узнать количество товаров в корзине
        url: '/cart/qty',
        type: 'GET',
        success: function (res) {
            if (!res)
                alert('Ошибка!');
            $('#empty_cart').html(res);
        },
        error: function () {
            alert('Error!');
        }
    });
}

function getCart() {
    $.ajax({
        url: '/cart/show',
        type: 'GET',
        success: function (res) {
            if (!res)
                alert('Ошибка!');
            showCart(res);
        },
        error: function () {
            alert('Error!');
        }
    });
    return false;
}

/*удаление отдельного товара из корзины*/
$('#cart .modal-body').on('click', '.del-item', function () {
    var id = $(this).data('id');
    var sozesize = $(this).data('sozesize');
    // alert(sozesize);
    $.ajax({
        url: '/cart/del-item',
        data: {id: id, sozesize: sozesize},
        type: 'GET',
        success: function (res) {
            if (!res)
                alert('Ошибка!');
            showCart(res);
        },
        error: function () {
            alert('Error!');
        }
    });
});

/*очистка всей корзины*/
function clearCart() {
    $.ajax({
        url: '/cart/clear',
        type: 'GET',
        success: function (res) {
            if (!res)
                alert('Ошибка!');
            showCart(res);
        },
        error: function () {
            alert('Error!');
        }
    });
}

$('.radioinput').on('click', function () {//считываем размер выбраный обуви
    sozesize = $(this).val();
});

$('.prod_buy').on('click', function (e) {//добвление в карзину
    if (!sozesize) {
        alert('Пожалуйста выберите размер!');
        return false;
    }
    e.preventDefault();/*отмена отработки get запроса аналог return false*/
    var id = $(this).data('id');
    $.ajax({
        url: '/cart/add',
        data: {id: id, sozesize: sozesize},
        type: 'GET',
        success: function (res) {
            // alert(res);
            if (!res)
                alert('Ошибка!');
            // console.log(res);
            showCart(res);
        },
        error: function () {
            alert('Error!');
        }
    });
});

