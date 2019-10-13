
@php($y = 0 )
@foreach ($allProducts as $product)

    @php($y++ )

    <div class='product product-widget'>
        <div class='product-thumb'>
            <img src='{{$product->image}}' alt=''>
        </div>
        <div class='product-body'>
            <h3 class='product-price'>${{$product->price}} <span class='qty'>x{{$product->count}}</span></h3>
        <h2 class='product-name'><a href='{{url('productProfile/'.$product->pro_ID)}}'>{{$product->name}}</a></h2>
        </div>
        <a class='delete-item cancel-btn  delete-color fa-delete' href='#' data-name='{{$product->name}}' ><i class='fa fa-trash'></i></a>
    </div>

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


