<?php 

namespace Unlu\CLTodo\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class ShowCommand extends Command
{
    public function configure()
    {
        $this->setName('show')
             ->setDescription('Show Tasks');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("<info> This command shows all tasks. </info>");
    }
}