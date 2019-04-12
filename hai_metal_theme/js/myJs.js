$('#body-div').scroll(function() { 
    $('#header-div').css('top', $(this).scrollTop());
});