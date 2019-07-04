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

function deleteApi(id, csrfToken){
    $.ajax({
        url: '/api/delete/' + id,
        method: 'DELETE',
        data: {
            _token: csrfToken
        },
        success: function(response){
            if(response === 'true'){
                location.reload();
            }
        }
    });
}

function deleteRoute(id, csrfToken){
    $.ajax({
        url: '/routes/delete/' + id,
        method: 'DELETE',
        data: {
            _token: csrfToken
        },
        success: function(response){
            if(response === 'true'){
                location.reload();
            }
        }
    });
}