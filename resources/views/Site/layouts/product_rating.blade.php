<div class="product-rating">
    <?php for($i = 1;$i<=5;$i++){
    $ai =$i+.5;
    $Ai =$i+1;
    ?>

    <i class="fa fa-star
                                        @if($avg === $i )
    @elseif($Ai > $avg and  $avg >= $ai)
            -o
@elseif($i > $avg)
            -o empty
@endif
            "></i>
    <?php } ?>
</div>
