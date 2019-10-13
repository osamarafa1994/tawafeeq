 <!-- Footer Area -->
 <div class="footer fixed-footer">

<!-- Footer Widgets Area -->
<div class="footer-toparea tm-padding-section" data-bgimage="{{ url('assets/Site/'.Config::get('app.locale')) }}/images/bg/footer-bg.jpg" data-overlay="2">
    <div class="container">
        <div class="row widgets footer-widgets">
           
          
        </div>
    </div>
</div>
<!--// Footer Widgets Area -->

<!-- Footer Copyright Area -->
<div class="footer-copyrightarea">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 col-12">
                <p class="footer-copyright">جميع الحقوق محفوظة  © <script>document.write(new Date().getFullYear());</script> </p>
            </div>
            <div class="col-md-4 col-12">
                <div class="footer-copyrightsocial">
                    <ul>
                                                 @if(!empty($main_data->facebook))
                                                       <li> <a href="{{$main_data->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                                @endif
                                                
                                                @if(!empty($main_data->twitter))
                                                        <li><a href="{{$main_data->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                                @endif
                                                @if(!empty($main_data->youtube))
                                                        <li><a href="{{$main_data->youtube}}"><i class="fa fa-youtube"></i></a></li>
                                                @endif
                                                
                                                @if(!empty($main_data->linkedin))
                                                        <li><a href="{{$main_data->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                                                @endif
                                                @if(!empty($main_data->whatsapp))
                                                        <li><a href="{{$main_data->whatsapp}}"><i class="fa fa-whatsapp"></i></a></li>
                                                @endif

                        <!-- <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                    class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i
                                    class="fa fa-pinterest-p"></i></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Footer Copyright Area -->

</div>
<!--// Footer Area -->






