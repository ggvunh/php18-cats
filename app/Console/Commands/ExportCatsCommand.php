<?php

namespace Furbook\Console\Commands;

use Illuminate\Console\Command;
use Furbook\Cat;

class ExportCatsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:cats {file?} {--headers=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export all cats in database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       $output_path = $this->argument('file');
       $headers = ['Name', 'Date of Birth', 'Breed'];
       $rows = $this->getCatsData();
       if ($output_path) {
          $handle = fopen($output_path, 'w');
           if ($this->option('headers')) {
             fputcsv($handle, $headers);
           }
           foreach ($rows as $row) {
             fputcsv($handle, $row);
           }
           fclose($handle);
       } else {
          $this->table($headers, $rows);
         }
    }

    protected function getCatsData()
    {
         $cats = Cat::with('breed')->get();
         foreach ($cats as $cat) {
           $output[] = [
             $cat->name,
             $cat->date_of_birth,
             $cat->breed->name,
            ];
          }
          return $output;
     }
}
