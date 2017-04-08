<style>
    .jconfirm .jconfirm-box.jconfirm-animation-news{

        transform: rotate(400deg) scale(0);
    }
</style>


@if (session('statusConfirm'))

    <script>
        $.confirm({
            animation: 'news',
            closeAnimation: 'news',
            theme: 'supervan',
            title: '<a class="logo"><img class="w" src="images/welcome/gymx_logo_2.png" alt=""><img class="ww" src="images/welcome/gymx_logo_3.png" alt=""><img class="www" src="images/welcome/gymx_logo_2.png" alt=""></a>',            content: 'Please Confirm Your Email Address To Complete <Strong> GYMX </strong> Registration',
            type: 'purple',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'OK!',
                    btnClass: 'btn-purple',
                    action: function(){
                    }
                },
                close: function () {
                }
            }
        });
//        $.alert({
//            title: 'Alert!',
//            content: 'Simple alert!',
//        });
    </script>
@endif



@if (session('statusVerified'))
    <script>
        $.confirm({
            animation: 'news',
            closeAnimation: 'news',
            theme: 'modern', // 'material', 'bootstrap'
            title: '<a class="logo"><img class="w" src="images/welcome/gymx_logo_2.png" alt=""><img class="ww" src="images/welcome/logoblk2.png" alt=""><img class="www" src="images/welcome/gymx_logo_2.png" alt=""></a>',
            content: 'Welcome to &nbsp;<Strong> GYMX </strong> &nbsp;your account is verified.<br>Please login to start using &nbsp; <Strong> GYMX </strong>',
            type: 'green',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'OK!',
                    btnClass: 'btn-green',
                    action: function(){
                    }
                },
                close: function () {
                }
            }
        });

    </script>
@endif

@if (session('status'))
    <script>
        $.dialog({
            title: '<strong style="color: red">Sorry!</strong>',
            content: 'Something is wrong! Please <a href="mailto:shahariarrabby1@gmal.com">contact us</a>  for help.',
        });

    </script>
@endif