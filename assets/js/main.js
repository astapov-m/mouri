/*
    Авторизация
 */
$('.btn-entry').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        pass = $('input[name="pass"]').val();


    $.ajax({
        url: '../vendor/login.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            pass: pass
        },
        success (data) {

            if (data.status) {
                document.location.href = '../index.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);
            }

        }
    });
});

$('.btn-regist').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        pass = $('input[name="pass"]').val(),
        name = $('input[name="name"]').val(),
        number = $('input[name="number"]').val(),
        pass2 = $('input[name="pass2"]').val();

    $.ajax({
        url: '../vendor/register.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login : login,
            pass : pass,
            name : name,
            number : number,
            pass2 : pass2,
        },
        success (data) {

            if (data.status) {
                document.location.href = '../view/login.php';
            } else {

                if (data.type === 1 || 2 || 3) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }

        }
    });

});

$('.btn-booking').click(function (e) {
    e.preventDefault();
    var paramsString = document.location.search;
    var params = new URLSearchParams(paramsString);
    let id = params.get("id");

    $.ajax({
        url: '../vendor/booking.php',
        type: 'POST',
        dataType: 'json',
        data: {
            id: id,
        },
        success (data) {
            $('.msg').removeClass('none').text(data.message);
        }
    });
});

