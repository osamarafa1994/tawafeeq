
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>

<script>
    $(".delete-item").click( function (event) {

        return alert('dd');
        var name = $(this).attr("data-name");
        shoppingCart.removeItemFromCartAll(name);
        displayCart();
    });



    $(".item-count").keyup( function (event) {
        //  alert('dd');
        if($(this).val() <= 0){
            $(this).val('1');
        }

    });

    $(".item-count").change( function (event) {
        //  alert('dd');
        if($(this).val() <= 0){
            $(this).val('1');
        }

    });




    $(".addToCart").click(function (event) {
    event.preventDefault();
    window.location="#toop";
     $('#message').fadeIn('slow', function(){
                        $('#message').delay(3000).fadeOut(); 
                    });

    var name = $(this).attr("data-name");
    var pro_ID = $(this).attr("data-ID");
    var price = Number($(this).attr("data-price"));
    var image = $(this).attr("data-image");
    var color = $(this).attr("data-color");
    var size = $(this).attr("data-size");
    if ($('#quantity').val()) {
        var amount = Number($('#quantity').val());
    } else {
        var amount = 1;
    }

    shoppingCart.addItemToCart(name, price, amount, pro_ID,image,color,size);
    displayCart();




    /*****/
    var cart = $('.handle');
    var imgtodrag = $(this).parent().parent().parent().find(".box-image img").eq(0);
    if (imgtodrag) {
        var imgclone = imgtodrag.clone()
            .offset({
                top: imgtodrag.offset().top,
                left: imgtodrag.offset().left
            })
            .css({
                'opacity': '0.5',
                'position': 'absolute',
                'height': '150px',
                'width': '150px',
                'z-index': '100'
            })
            .appendTo($('body'))
            .animate({
                'top': cart.offset().top + 10,
                'left': cart.offset().left + 10,
                'width': 75,
                'height': 75
            }, 1000, 'easeInOutExpo');

        setTimeout(function () {
            cart.effect("shake", {
                times: 2
            }, 200);
        }, 1500);

        imgclone.animate({
            'width': 0,
            'height': 0
        }, function () {
            $(this).detach()
        });
    }
    /*****/


});

$("#clear-cart").click(function (event) {
    shoppingCart.clearCart();
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

   // $("#show-cart").html(output);
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



$(".show-cart2_pop").on("click", ".subtract-item", function (event) {
    var name = $(this).attr("data-name");
    shoppingCart.removeItemFromCart(name);
    displayCart();
});

$(".show-cart2_pop").on("click", ".plus-item", function (event) {
    var name = $(this).attr("data-name");
    var pro_ID = $(this).attr("data-ID");
    var price = $(this).attr("data-price");
    shoppingCart.addItemToCart(name, 0, 1);
    displayCart();
});


$(".show-cart2").on("change",'.item-count', function (event) {
    alert('dd');
    return;
    var name = $(this).attr("data-name");
    var count = Number($(this).val());
    shoppingCart.setCountForItem(name, count);
    displayCart();
});


displayCart();


</script>

<script>
function myFunction(){

    setTimeout (
        $.ajax({
            type:'post',
            url:"https://shop-peak.com/Web/end_offers",
            data:{},
            success:function(d){


                // alert(d);


            }

        }) , 2000 );
}


</script>
<!-------------------------------------------- saving shopping_cart--------------------------------------------------------------->

<script>
function save_pro() {


    var cartArray = shoppingCart.listCart();


    if (cartArray.length == 0) {
        alert("من فضلك قم باختيار منتجاتك اولا");
        return;
    }
    var pill_num = $('#pill_num').val()

    var client_name=$('#client_name').val();
    var address=$('#address').val();
    var phone=$('#phone').val();
    var user_lang=$('.user_lang').val();
    var user_lat=$('.user_lat').val();


    if($('#phone').val()=='')
    {
        $('.phone').show();
        return;
    }
    if($('#client_name').val()=='')
    {
        $('.client_name').show();
        return;
    }
    if($('#address').val()=='')
    {
        $('.address').show();
        return;
    }

    $.ajax({
        type: 'post',
        url: "https://shop-peak.com/Web/save_cart",
        data: {cartArray: cartArray,client_name:client_name,address:address,phone:phone,pill_num:pill_num,user_lang:user_lang,user_lat:user_lat},
        success: function (d) {

            Swal.fire(
                'بنجاح!',
                'تم ارسال طلبك بنجاح انتظر رد الموقع تليفونيا لاتمام عمليه الشحن ',

            )

            shoppingCart.clearCart();
            displayCart();
            $('#myModal').modal('toggle');
            // window.location.href = "https://shop-peak.com/Web";



        }

    });
}

</script>

<!-- Store Likes-->
<script>
function redirect_login() {
    alert("من فضلك قم بتسجيل الدخول اولا ");
    window.location = "https://shop-peak.com/Web/login";
}

</script>
<script>
function add_like_store(store_id) {

    $.ajax({
        type: 'post',
        url: "https://shop-peak.com/Web/add_store_likes",
        data: {store_id: store_id},
        success: function (d) {
            alert("sssssss");
        }

    });
}


</script>
<script>
function add_like_asnaf(sanf_id) {

    $.ajax({
        type: 'post',
        url: "https://shop-peak.com/Web/add_asnaf_likes",
        data: {sanf_id: sanf_id},
        success: function (d) {

            $('.fav-num').text('('+d +')');


        }

    });
}


</script>
<script>
function make_follow(valu,sess)
{

    if(sess==1){
        $.ajax({
            type: 'post',
            url: "https://shop-peak.com/Web/make_follow",
            data: {valu:valu},
            success: function (d) {


                $('.fav-num_flow').text('('+d +')');


            }

        });
    }else{
        alert("من فضلك قم بتسجيل الدخول اولا");
        window.location.href = "https://shop-peak.com/Web/login";
    }

}


</script>

<!-- Store Likes-->
<!----------------------------------------------------------------------------------------------------------->



<script>
$(function() {
    // setup validate
    $.validate({
        validateHiddenInputs: true // for live search required
    });

});
</script>

<script type="text/javascript">
    $("#list").click(function(){
        $(".gridsys").addClass("listsys");
        $(".listsys").removeClass("gridsys");
        $(this).addClass("active");
        $("#grid").removeClass("active");

    });
$("#grid").click(function(){
    $(".listsys").addClass("gridsys");
    $(".gridsys").removeClass("listsys");
    $(this).addClass("active");
    $("#list").removeClass("active");

});
</script>



<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>