$(window).on('load', function() {
    if (feather) {
        feather.replace({
            width: 14,
            height: 14
        });
    }
})

$(".alert-success").fadeTo(2000, 500).slideUp(6000, function(){
    $(".alert-success").slideUp(500);
});

$(".alert-danger").fadeTo(2000, 500).slideUp(6000, function(){
    $(".alert-danger").slideUp(500);
});
