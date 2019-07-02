function testDbConnection(){
    $('.success').addClass('hidden');
    $('.error').addClass('hidden');

    $.ajax({
        url: '/testDbConnection',
        method: 'POST',
        data: {
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
        }
    });
}