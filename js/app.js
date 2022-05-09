$(function(){
    /*Navigation Interactions
    1. Menu toggler
    2. Dropdown toggler
    */

    //Menu toggler
    // 1.Listen for click on .navbar-toggle
    // 2. Store the property in the attribute "data-target"
    // 3. Use the attribute's value to select the navigation it wants to affect

    $(".navbar-toggle").on("click", function(){
        let toggler = $(this).attr("data-target");
        $(toggler).toggleClass("open");
    })

    //Dropdown toggler
    // 1.Listen for click on .dropdown > a
    // 2. Toggle the class of "open" on the .dropdown element

    $(".dropdown > a").on("click", function(e){
        e.preventDefault();
        //console.log("I was clicked");
        $(this).parent().toggleClass("open");
    })

})