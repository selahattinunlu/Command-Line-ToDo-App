<?php 

namespace Unlu\CLTodo\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class AddCommand extends Command
{
    public function configure()
    {
        $this->setName('add')
             ->setDescription('Add Task');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("<info> This command adds a task. </info>");
    }
}