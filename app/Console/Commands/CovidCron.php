<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\CovidStat;

class CovidCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'covid:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {

        $httpClient = new \GuzzleHttp\Client();
        $requestCovidStatus =
            $httpClient
                ->get("https://hpb.health.gov.lk/api/get-current-statistical");

        $responseCovidStatus = json_decode($requestCovidStatus->getBody()->getContents());

        $newCovidStat = CovidStat::create([
            'local_new_cases' => $responseCovidStatus->data->local_new_cases,
            'local_total_cases' => $responseCovidStatus->data->local_total_cases,
            'local_total_number_of_individuals_in_hospitals' =>$responseCovidStatus->data->local_total_number_of_individuals_in_hospitals,
            'local_deaths'=>$responseCovidStatus->data->local_deaths,
            'local_new_deaths'=>$responseCovidStatus->data->local_new_deaths,
            'local_recovered'=>$responseCovidStatus->data->local_recovered,
            'local_active_cases'=>$responseCovidStatus->data->local_active_cases,
            'update_date_time'=>$responseCovidStatus->data->update_date_time,
        ]);
        \Log::info('Covid Status Command Success!');
    }
}
