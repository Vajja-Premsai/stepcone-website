$(document).ready(function() {
    $("#toggle").click(function() {
        var elem = $("#toggle").hidemenu();
        if (elem == "Read More") {
        //Stuff to do when btn is in the read more state
        $("#toggle").hidemenu("Read Less");
        $("#hidemenu").slideDown();
        } else {
        //Stuff to do when btn is in the read less state
        $("#toggle").hidemenu("Read More");
        $("#hidemenu").slideUp();
        }
    });
    });
