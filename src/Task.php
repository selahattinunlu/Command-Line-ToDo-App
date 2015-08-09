<?php 

namespace Unlu\CLTodo;

use SQLite3;

class Task extends SQLite3
{
    public function __construct($databaseName = 'tasks.db')
    {
        $this->open($databaseName);
    }

    public function createTable()
    {
        $sql = 'CREATE TABLE IF NOT EXISTS tasks
            (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                description TEXT NOT NULL
            )';

        $this->exec($sql);
    }

    public function all()
    {
        $result = $this->query("select * from tasks");

        while ($task = $result->fetchArray()) {
            $tasks[] = [
                'id' => $task['id'], 
                'description' => $task['description']
            ];
        }

        return $tasks;
    }

    public function add($description)
    {
        $sql = "insert into tasks (description) values ('{$description}')";

        return $this->exec($sql);
    }

    public function remove($id)
    {
        $sql = "delete from tasks where id = $id";

        return $this->exec($sql);
    }
}