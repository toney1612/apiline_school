<?php
    function connectDB(){
        $user = 'id1258197_admin';
		$pass = '123456';
		$db = 'id1258197_linedb';
        $link = mysqli_connect( "localhost", $user, $pass, $db);
        if ( ! $link ) {
            die( "Couldn't connect to MySQL: ".mysql_error() );
        }else{
        	echo "Connected !.";
        }
        return $link;
    }
    function insertUser($userID,$name){
        $link=connectDB();
        $query = "Insert Into TBUser(userID,name) values('$userID','$name')";
        mysqli_query( $link , $query  );
    }
    function getUser(){
        $link=connectDB();
        $query = "Select * from TBUser";
        $result = mysqli_query( $link , $query);
        $userID = array();
        foreach ($result as $val) {
        	$userID[] = $val['userID'];
        }
        return $userID;
    }
?>