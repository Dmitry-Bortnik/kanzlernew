    // QTY
    var qty;
    $('.quantity-arrow-plus').on('click', function(){
        qty = $(this).prev('input.quantity-num').val();
        qty++;
        $(this).prev('input.quantity-num').val(qty);
        $(this).prev().prev().prop('disabled',false);
    });
    $('.quantity-arrow-minus').on('click', function(){
        qty = $(this).next('input.quantity-num').val();
        if (qty == '2') {
            $(this).prop('disabled',true);
            qty--;
            $(this).next('input.quantity-num').val(qty);
        }
        else if (qty != '1') {
            qty--;
            $(this).next('input.quantity-num').val(qty);
        }
       
    });
