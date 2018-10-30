$(function(){
    $('#log-in').click(function(){
        $('.login-form').show();
        $('.register-form').hide();
    });
    
    $('#sign-up').click(function () {
        $('.login-form').hide('hidden');
        $('.register-form').show('hidden');
    });
});

$(document).ready(function() {
    var basePath = 'http://localhost/myshop/';
    $('#category-selector').on('change', function(event) {
        event.preventDefault();
        var select = $(this);
        window.location.href = basePath + select.val();
    });
});
