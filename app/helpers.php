<?php
if(!function_exists('api_export')) {
    function api_export() {}
}

if(!function_exists('api_import')) {
    function api_import() {}
}

if(!function_exists('test_db_connection')) {
    function test_db_connection(\App\Database $database = null)
    {
        if(request() && request()->post()){
            $dbname = request('database_database');
            $host = request('database_host');
            $port = request('database_port');
            $user = request('database_user');
            $password = request('database_password')
        } else {
            $dbname = $database->database_database;
            $host = $database->database_host;
            $port = $database->database_port;
            $user = $database->database_user;
        }
        try {
            new \PDO('mysql:dbname='.$dbname.';host='.$host.';port='.$port, $user, $password,
                [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
            return 'true';
        } catch (\Exception $e) {
            return $e;
        }
    }
}