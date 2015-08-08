<?php 

namespace Unlu\CLTodo\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class RemoveCommand extends Command
{
    public function configure()
    {
        $this->setName('remove')
             ->setDescription('Remove Task By ID');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("<info> This command removes the task by id. </info>");
    }
}