    //Menu Toggle Script     
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    //Tooltip 

    $(function () {
      $('[data-toggle=tooltip]').tooltip();
    });
   