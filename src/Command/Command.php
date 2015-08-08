<?php 

namespace Unlu\CLTodo\Command;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Unlu\CLTodo\DatabaseAdapter;

class Command extends SymfonyCommand
{   
    private $database;

    public function __construct(DatabaseAdapter $database)
    {
        $this->database = $database;

        parent::__construct();
    }

    protected function database()
    {
        return $this->database;
    }
}