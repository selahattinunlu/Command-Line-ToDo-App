<?php 

namespace Unlu\CLTodo;

use PDO;

class DatabaseAdapter
{
    protected $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }
}