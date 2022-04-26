
function update (kurangid){

    let val = $(kurangid).val();
    let qty = $('#qty'+val).val();
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
          success:function(data){

            let price = $('#ambilharga'+val).val();

            $('#subtotal'+val).html("Rp. "+formatRupiah(price*qty));
            
        },error:function(){
            console.log('Ada Error di update');
        }
    });
}

function formatRupiah(bilangan){
    var	reverse = bilangan.toString().split('').reverse().join(''),
	ribuan 	= reverse.match(/\d{1,3}/g);
	ribuan	= ribuan.join('.').split('').reverse().join('');

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    return ribuan;
}


function Grandtotal(){
    console.log("hai")
    $.ajax({
        url: 'total',
        method: 'POST',
        dataType: 'JSON',
        header:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
            _token: $('meta[name="csrf-token"]').attr('content')
          },
          success:function(data){
            // alert(data);
            $('#grandtotal').html("Rp. "+formatRupiah(data))
        },error:function(){
            console.log('Ada Error di grandtotal');
        }
    });
}

function changecheck(data){
    let check = data.checked;

    let cart_id = data.value;
    $.ajax({
        url: 'changecheckbox',
        method: 'POST',
        dataType: 'JSON',
        data: {
            "cart_id":cart_id,
            "checked": check,
            _token: $('meta[name="csrf-token"]').attr('content'),
          },
          success:function(data){
            // alert(data);
            Grandtotal();
        },error:function(){
            console.log('Ada Error di changecheck');
        }
    });
  }
