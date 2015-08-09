<?php 

namespace Unlu\CLTodo\Command;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Unlu\CLTodo\Task;

class Command extends SymfonyCommand
{   
    private $task;

    public function __construct(Task $task)
    {
        $this->task = $task;

        parent::__construct();
    }

    protected function task()
    {
        return $this->task;
    }
}