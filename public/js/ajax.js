function testDbConnection(){
    $('.success').addClass('hidden');
    $('.error').addClass('hidden');
    $('#testDb').html($('#testDb').data('loading'));

    $.ajax({
        url: '/testDbConnection',
        method: 'POST',
        data: {
            database_database: $("input[name=database_database]").val(),
            database_host: $("input[name=database_host]").val(),
            database_user: $("input[name=database_username]").val(),
            database_password: $("input[name=database_password]").val(),
            _token: $("input[name=_token]").val(),
        },
        success: function(response){
            if(response === 'true'){
                $('.success').removeClass('hidden');
            } else {
                $('.error').removeClass('hidden');
            }
        },
        complete: function(){
            $('#testDb').html($('#testDb').data('string'));

        }
    });
}