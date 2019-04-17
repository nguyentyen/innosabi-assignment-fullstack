<?php
/**
 * Created by PhpStorm.
 * User: yennguyen
 * Date: 27.02.2019
 * Time: 20:02
 */

class sqlsrv
{
    public function connection() {
        $serverName = "serverName\\sqlexpress, 1542"; //serverName\instanceName, portNumber (default is 1433)
        $connectionInfo = array( "Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");
        $conn = sqlsrv_connect( $serverName, $connectionInfo);

        if( $conn ) {
            echo "Connection established.<br />";
        }else{
            echo "Connection could not be established.<br />";
            die( print_r( sqlsrv_errors(), true));
        }
        return;
    }
}