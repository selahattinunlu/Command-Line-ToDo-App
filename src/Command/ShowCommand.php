<?php 

namespace Unlu\CLTodo\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\Table;

class ShowCommand extends Command
{
    public function configure()
    {
        $this->setName('show')
             ->setDescription('Show All Tasks');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        if ( ! $tasks = $this->task()->all()) {
            return $output->writeln('<comment>All tasks are completed!</comment>');
        }

        $table = new Table($output);

        $table->setHeaders(['#', 'Description'])
              ->setRows($tasks)
              ->render();
    }
}