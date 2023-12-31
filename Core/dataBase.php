<?php

namespace Core;

use PDO;
use PDOException;

class Database
{

    public $connection;

    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {
        
        $dsn = ('mysql:'.http_build_query($config, '', ';'));

        try 
        {

            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);

        }
        catch (PDOException $e) 
        {

            print "Error!: " . $e->getMessage() . "<br/>";

            die();

        }

    }

    public function query(string $query, array $param = [])
    {

        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($param);

        return $this;

    }

    public function find()
    {

        return $this->statement->fetch();

    }

    public function findOrFail()
    {

        $result = $this->find();

        if(!$result)
        {
            
            abort(Response::NOT_FOUND);
            
        }

        return $result;

    }

    public function get()
    {

        return $this->statement->fetchAll();

    }

}

?>