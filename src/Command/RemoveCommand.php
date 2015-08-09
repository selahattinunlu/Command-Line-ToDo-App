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
             ->setDescription('Remove Task By ID')
             ->addArgument('id', InputArgument::REQUIRED);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $id = $input->getArgument('id');

        $this->task()->remove($id);

        $output->writeln("<info>Removed.</info>");
    }
}