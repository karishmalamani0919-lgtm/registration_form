
$(document).ready(function() {

    $("input, select, textarea").focus(function() {
        $(this).css("background-color", "#eef7ff");
    });

    $("input, select, textarea").blur(function() {
        $(this).css("background-color", "white");
    });

    $("form").submit(function() {
        alert("Your registration form is being submitted!");
    });

});
