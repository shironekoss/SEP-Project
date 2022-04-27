
function update(kurangid) {

    let val = $(kurangid).val();
    let qty = $('#qty' + val).val();
    // console.log(val,qty)
    $.ajax({
        url: 'update',
        method: 'POST',
        dataType: 'JSON',
        data: {
            "cart_id": val,
            "quantity": qty,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {

            let price = $('#ambilharga' + val).val();

            $('#subtotal' + val).html("Rp. " + formatRupiah(price * qty));

        }, error: function () {
            console.log('Ada Error di update');
        }
    });
}

function formatRupiah(bilangan) {
    var reverse = bilangan.toString().split('').reverse().join(''),
        ribuan = reverse.match(/\d{1,3}/g);
    ribuan = ribuan.join('.').split('').reverse().join('');

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    return ribuan;
}


function Grandtotal() {
    console.log("hai")
    $.ajax({
        url: 'total',
        method: 'POST',
        dataType: 'JSON',
        header: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data: {
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            // alert(data);
            $('#grandtotal').html("Rp. " + formatRupiah(data))
        }, error: function () {
            console.log('Ada Error di grandtotal');
        }
    });
}

function changecheck(data) {
    let check = data.checked;

    let cart_id = data.value;
    $.ajax({
        url: 'changecheckbox',
        method: 'POST',
        dataType: 'JSON',
        data: {
            "cart_id": cart_id,
            "checked": check,
            _token: $('meta[name="csrf-token"]').attr('content'),
        },
        success: function (data) {
            // alert(data);
            Grandtotal();
        }, error: function () {
            console.log('Ada Error di changecheck');
        }
    });
}


$('#Pembayaran').on('click', function () {
    var saldo = $('#saldo').val();
    jQuery.ajax({
        url: 'pembayaran',
        method: 'post',
        data: {
            "ekspedisi": $('#ekspedisi').val(),
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (result) {
            $('#subTotalTagihan').html("Rp. " + formatRupiah(result[0]['totaltagihan']));
        }
    });
});


$('#subcheckout').on('click', function () {
    var namapenerima = $('#nama_penerima')[0]['value'];
    var telppenerima = $('#telp_penerima')[0]['value'];
    var alamatpenerima = $('#alamat_penerima')[0]['value'];
    jQuery.ajax({
        url: 'prosescheckout',
        method: 'post',
        data: {
            "ekspedisi": $('#ekspedisi').val(),
            "nama_penerima": namapenerima,
            "telppenerima": telppenerima,
            "alamatpenerima": alamatpenerima,
            _token: $('meta[name="csrf-token"]').attr('content'),
        },
        success: function (data) {
            // alert(data);
            alert(data)
            window.location = 'HistoryTransaksi';
        }, error: function () {
            alert("error subcheckout")
        }
    });
});
