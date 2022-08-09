<?php

namespace App\Console\Commands;

use App\Models\ContactFormsModel;
use Carbon\Carbon;
use DateTime;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class testSchedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:testSchedule';

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
        $date = new DateTime('now');
        $contactFormsModels = ContactFormsModel::whereDate('created_at', Carbon::yesterday())->get();
        $number = $contactFormsModels->count();

        $message = $number . "個" . PHP_EOL;
        foreach ($contactFormsModels as $contactFormsModel)
        {
            $message .= "Mail: " . $contactFormsModel->mail . PHP_EOL;
        }
        $mail = "b97b01067@gmail.com";
        $date = new DateTime('now');
        Mail::raw($message, function($message) use ($mail, $date)
        {
            $message->from('b97b01067@gmail.com', 'Global Best Japan');
         
            $message->to($mail)->subject($date('Y/m/d', strtotime("-1 days")) . 'のお問い合わせ');
        });
        echo "send complete";
    }
}
