<?php

namespace Colophon\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class PrintCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('print')
            ->setDescription('print an ascii image');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // get term
        // find image on google with term
        // send image to ascii converter
        // get image on string variable
        $text = "\nduo dinamico\n";
        $output->writeln($text);
    }
}