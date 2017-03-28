

        <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>


        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script>
            $(".sidebartog").click(function (e) {
                e.preventDefault;
                $('.wrapper').toggleClass('none');
            });


            $('.submanu > .sub-menu').parent().hover(function () {
                var submenu = $(this).children('.sub-menu');
                if ($(submenu).is(':hidden')) {
                    $(submenu).slideDown(200);
                } else {
                    $(submenu).slideUp(200);
                }
            });
        </script>



        <script>
            $(function () {
                var $tabs = $("#tabs").tabs();

                $tabs.tabs({
                    hide: {
                        effect: "slide",
                        direction: "down",
                        duration: 500
                    },
                    show: {
                        effect: "slide",
                        direction: "up",
                        duration: 500
                    },
                    beforeActivate: function (event, ui) {
                        setTimeout(function () {
                            /* Do something after hide */
                            $tabs.animate({
                                top: "500px"
                            }, function () {
                                $tabs.animate({
                                    top: "0px"
                                })
                            });
                            $tabs.toggleClass('switch');
                        }, 500);
                    }
                });


                function getSelectedTabIndex() {
                    $tabIndex = $tabs.tabs('option', 'selected');
                    var $selected = $("#tabs ul>li a").eq($tabIndex).attr('href');
                    return $selected;
                }
            });
        </script>
    </body>

</html>