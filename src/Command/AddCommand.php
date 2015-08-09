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
             ->setDescription('Add Task')
             ->addArgument('description', InputArgument::REQUIRED);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $description = $input->getArgument('description');

        $result = $this->task()->add($description);

        $output->writeln('<info>Added!</info>');
    }
}