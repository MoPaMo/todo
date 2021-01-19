<?php
$connect = null;
#update bot
function udb()
{
    global $connect;
    if ($connect == null) 
    {
        $adr = "localhost";
        $user = "tdubot";
        $pwd = "Th8wfw5F5rgwVuSC0NVjwGZLhGN11yOj";
        $dbName = "todo";
        
        $connect =
            new mysqli($adr, $user, $pwd, $dbName);
        
        if ($connect->connect_error)
        {
            echo "Connection error: " . $connect->connect_error;
            exit();
        }
    }
    
    return $connect;
}
$gconnect = null;
#general bot
function db()
{
    global $gconnect;
    if ($gconnect == null) 
    {
        $adr = "localhost";
        $user = "tdbot";
        $pwd = "1IOcS6UWR6";
        $dbName = "todo";
        
        $gconnect =
            new mysqli($adr, $user, $pwd, $dbName);
        
        if ($gconnect->connect_error)
        {
            echo "Connection error: " . $gconnect->connect_error;
            exit();
        }
    }
    
    return $gconnect;
}
$iConnect = null;

function idb()
{
    global $iConnect;
    if ($iConnect == null) 
    {
        $adr = "localhost";
        $user = "tdibot";
        $pwd = "LOecQwXVZB8w3K8tH3PqBAg8MRPWQKiZ";
        $dbName = "todo";
        
        $iConnect =
            new mysqli($adr, $user, $pwd, $dbName);
        
        if ($iConnect->connect_error)
        {
            echo "Connection error: " . $iConnect->connect_error;
            exit();
        }
    }
    
    return $iConnect;
}
