<?php
// PDO basic operation

// 1. PDO Connection
// DSN style of connection = mysql:host=xxx.xxx.xxx.xxx;dbname=xxdbName
// pwd and username
// opt = [] as below to setup some options
// new PDO($db, $user, $pwd)

// 2. PDO Query (straight way)
// first query, second fetch.
// $stmt = $db -> query('SQL statement Here!!!');
// while ($row = $stmt -> fetch()) {...}; PS: fetch will return a list of key-value pair of data.

// 2. PDO Query (Prepared, in order to prevent SQL injections)
// first write down the sql query to var $sql, second prepare the sql query, third execute the statement, fourth do fetch data out of $stmt
// PDO::FETCH_NUM returns enumerated array
// PDO::FETCH_ASSOC returns associative array
// PDO::FETCH_BOTH - both of the above
// PDO::FETCH_OBJ returns object
// PDO::FETCH_LAZY allows all three (numeric associative and object) methods without memory overhead.


// Note that PDO supports positional (?) and named (:email) placeholders, 
// the latter always begins from a colon and can be written using letters, digits and underscores only. 
// Also note that no quotes have to be ever used around placeholders.

// When it used the placeholder, we have to bind the value to the placeholder then set the value to it.
// Example:
// 1. $stmt -> bindValue(':param', $value);
// 2. shortcut: $data = array('fname' => 'David', 'lname' => 'Jones');
//      $sth = $db => prepare('... where firstname = :fname');
//      #sth->execute($data);

// Example: 
// $sql = 'select * from user where email = :email and status=?'
// $stmt = $pdo -> prepare($sql);
// $stmt -> execute([$email, $status]);
// $user = $stmt -> fetch();
// ################################################ OR ################################################
// $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email AND status=:status');
// $stmt->execute(['email' => $email, 'status' => $status]);
// $user = $stmt->fetch();
// ################################################ OR (FXXKing Wrong!!!!) ################################################
// All in one
// $sql = "select * from user where fname = ? and lname = ?";
// $stmt = $pdo -> prepare($stmt) -> execute([$fname, $lname]); (method chaining)
// $result = $stmt -> fetch()





$db = "mysql:host=127.0.0.1;dbname=myDB";
$user = "root";
$pwd = "gshya1602";

$opt = [
    // It tells PDO to throw an exception every time a query failed, 
    // so you won't have to get the error manually after every query call as it was used to be with mysql_query().
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 

    // this option is used simply for convenience
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    
    //  this option tell PDO whether to use an emulation mode or not
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $db = new PDO($db, $user, $pwd, $opt);
} catch (PDOException $e){
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
?>