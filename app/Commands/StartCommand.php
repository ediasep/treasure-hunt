<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class StartCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'start {name=Artisan}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Start treasure hunt';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('########');
        $this->info('#......#');
        $this->info('#.###..#');
        $this->info('#...#.##');
        $this->info('#x#....#');
        $this->info('########');

        $field = [];
        for ($i=1; $i <= 6; $i++) { 
            for ($j=1; $j <=4 ; $j++) { 
                array_push($field, [$i, $j]);
            }
        }

        $obstacles = [[2,2],[3,2],[4,2],[4,3],[6,3],[2,4]];
        $current  = [1,4];
        $probables = [[1,4],[1,3],[1,2],[1,1],[2,1],[3,1],[4,1],[5,1],[6,1],[6,2],[5,2],[5,3],[5,4],[2,3],[3,3],[3,4]];

        $this->info("Probable coordinate: ");
        foreach ($probables as $value) {
            echo "[".$value[0].",".$value[1]."] \n";
        }
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule)
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
