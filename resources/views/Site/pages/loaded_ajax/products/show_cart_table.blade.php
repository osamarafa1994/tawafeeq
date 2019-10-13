
@php($y = 0 )
@foreach ($allProducts as $product)
    @php($y++ )



    <tr>
        <input type='hidden' name='allProducts[{{$y}}][name]' value='{{$product->name}}'>
        <input type='hidden' name='allProducts[{{$y}}][bill_id]' value='{{$lastBillId}}'>
        <input type='hidden' name='allProducts[{{$y}}][price]' value='{{$product->price*$product->count}}'>
        <input type='hidden' name='allProducts[{{$y}}][quantity]' value='{{$product->count}}'>
        <input type='hidden' name='allProducts[{{$y}}][photo]' value='{{$product->image}}'>
        <td class='thumb'><img src='{{$product->image}}' ></td>"
        <td class='details'>
            <a href='{{url('productProfile/'.$product->pro_ID)}}'>{{$product->name}}</a>
        </td>
        <td class='price text-center'><strong>${{$product->price}}</strong></td>
        <td class='qty text-center'><input class='input item-count' min="1"  data-name='{{$product->name}}' type='number' value='{{$product->count}}'></td>
        <td class='total text-center'><strong class='primary-color'>${{$product->price*$product->count}}</strong></td>
        <td class='text-right'><button type='button' class='delete-item main-btn' data-name='{{$product->name}}'><i class='fa fa-close '></i></button>
        </td>
    </tr>

@endforeach

<script src="https://code.jquery.com/jquery-3.1.1.js"></script>


<script>
    $(".delete-item").click( function (event) {

        var name = $(this).attr("data-name");
        shoppingCart.removeItemFromCartAll(name);
        displayCart();
    });

    $(".item-count").keyup( function (event) {
      //  alert('dd');
        if($(this).val() <= 0){
            $(this).val('1');
        }
        var name = $(this).attr("data-name");
        var count = Number($(this).val());
        shoppingCart.setCountForItem(name, count);
        displayCart();
    });

    $(".item-count").change( function (event) {
      //  alert('dd');
        if($(this).val() <= 0){
            $(this).val('1');
        }
        var name = $(this).attr("data-name");
        var count = Number($(this).val());
        shoppingCart.setCountForItem(name, count);
        displayCart();
    });


    function displayCart() {

        var cartArray = shoppingCart.listCart();
        console.log(cartArray);
        var output = "";
        var output2 = "";
        for (var i in cartArray) {
            var y= parseInt(i)+1;




        }
        output2 +="<input type='hidden' name='total' value='"+shoppingCart.totalCart() +"'>";

        $("#show-cart").html(output);
        //return  alert(output);
        // $("#show-cart2").html(output2);

        $(".show-cart2_pop").html(output2);
        $("#show-cart").html(output);
        $("#count-cart").html(shoppingCart.countCart());
        $("#count-cart2").html(shoppingCart.countCart());
        $("#count-cart2_pop").html(shoppingCart.countCart());

        $('.orders-num').html(shoppingCart.countCart());
        $("#total-cart").html(shoppingCart.totalCart());
        $(".total-cart").html(shoppingCart.totalCart());
        $(".total_cart_input").val(shoppingCart.totalCart());
        var dataPosted = JSON.stringify(cartArray);
        // alert(dataPosted);
        $.ajax({
            type:'get',
            url: '<?php echo url("/") ?>/views',
            data: {data_pro:dataPosted},
            dataType: 'html',
            success: function(html){
                html +="<input type='hidden' name='total' value='"+shoppingCart.totalCart() +"'>";
                $("#show-cart2").html(html);
            },
        });
        $.ajax({
            type:'get',
            url: '<?php echo url("/") ?>/cartInDropdown',
            data: {data_pro:dataPosted},
            dataType: 'html',
            success: function(html){
                $("#show-cart").html(html);
            },
        });
    }

</script>


