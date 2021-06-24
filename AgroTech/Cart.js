let array = []
let value = []

let names = document.getElementById('name')
let adress = document.getElementById('addres')
let phone = document.getElementById('phone')

function cart() {
    $('table td p').each(function () {
        array.push($(this).html())
    })
    $('table td input[type=number]').each(function () {
        value.push($(this).val())
    })
    $.ajax({
        type: 'POST',
        url: 'Order.php',
        data: {
            arrayL: array,
            values: value,
            cName: names.value,
            cadress: adress.value,
            cphone: phone.value
        },
        success: function (data) {
            alert(data);
            location.reload();
        },
    })
}