<script src="{{url('public/assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>


<script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
<script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script>

<!--===============================================================================================-->
    <script src="{{url('public/assets/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{url('public/assets/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{url('public/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{url('public/assets/vendor/select2/select2.min.js')}}"></script>
    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
    
    <script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{url('public/assets/vendor/isotope/isotope.pkgd.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{url('public/assets/vendor/sweetalert/sweetalert.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{url('public/assets/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{url('public/assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{url('public/assets/vendor/slick/slick.min.js')}}"></script>
    <script src="{{url('public/assets/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{url('public/assets/vendor/parallax100/parallax100.js')}}"></script>
    
<!--===============================================================================================-->
    <script src="{{url('public/assets/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
    
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!--===============================================================================================-->
    <script src="{{url('public/assets/vendor/isotope/isotope.pkgd.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{url('public/assets/vendor/sweetalert/sweetalert.min.js')}}"></script>
    
    </script>
<!--===============================================================================================-->
    <script src="{{url('public/assets/js/main.js')}}"></script>




<!-- index.blade.php -->
 <script>
        $('body').scrollspy
        ({
            target: '#mainNav',
            offset: navHeight
        });
    </script>
    <script>
        $('.parallax100').parallax100();
    </script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled:true
                },
                mainClass: 'mfp-fade'
            });



        });
    </script>
    <script>
        $('.js-addwish-b2').on('click', function(e){
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function(){
            var nameProduct = $(this).parent().parent().find('.js-name-b2')();
            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail')();

            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function(){
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail')();
            $(this).on('click', function(){
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    </script>
    <script>
        $('.js-pscroll').each(function(){
            $(this).css('position','relative');
            $(this).css('overflow','hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function(){
                ps.update();
            })
        });
    </script>


    