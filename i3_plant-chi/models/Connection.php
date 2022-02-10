<?php 
abstract class Connection {
	//abstract because all other entities will inherit from Connection so we cannot just create a connection without linked to something. So we use abstract to secured it. 
    private static $_connection;
	//Going to have a private attribute which is $_connection. Also, it will activate when there will be a "new" 
    public function __construct()
	//to build the connection. So when we do a new connection, the _construct will be activate and will activate the function dbConnection on line 14
    {
        $this->dbConnection();
    }

    protected function dbConnection()
    {
        if (self::$_connection !== null) {
			//if the connection is different of null (so if there is already a connection). the :: are for static variable. So when the variable is normal it will be $this-> and when it's static = self::. We put it on line 6 that it's going to be static. So it can be accessible without creating an object.
            return self::$_connection;
			//then it gives the connection. 
        }
		//else, we connect securely to our data base with the PDO. 
        self::$_connection = new PDO("mysql:host=localhost;dbname=plantchi;charset=utf8", 'root', 'root');
		//So we create a new object 'connection' where :
		//1) We put the mysql: the engine of our data base, 
		//2) Specify where our data base is located : localhost, /!\ when we will uploade it online, must be changed! 
		//3) Specify the name of our data base : plantchi, 
		//4) Encoding of the character : utf8 ,
		//5) The login to connect to our data base : root in our case (in xamp/mamp), /!\ when we will uploade it online, must be changed!
		//6) The password which is also root for mamp. But xamp doesn't have a password. /!\ when we will uploade it online, must be changed!
		//When we will uploade it our site, we will get the data from our provider

        self::$_connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		//We are going to define the PDO is the way to recover data is the default mode. The fetch_assoc is to recover the data in an associative table.
        self::$_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // retourne la connection
        return self::$_connection;
		//When the connection is succeeded, it will return the connect
    }

    protected function execute($query, $params= array(), $fetchMode = null)
	// To execute the $query by giving it $params and we can modify the fetch mode. 
    {
		$stmt = self::$_connection->prepare($query);
        // To prepare the request.BUT don't use the SQL injection! 
        // exucute la requte
        $stmt->execute($params);
		// To execute the request
        if ($fetchMode !== null) {
            // To return all the data in an array form
            return $stmt->fetchAll($fetchMode);
        } else {
            return $stmt->fetchAll();
        }
        return $stmt; // Iterator (forearch)
    }
}

?>