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
        $ContactFormsModel = new ContactFormsModel("b97b01067@gmail.com");
        $contactForms = $ContactFormsModel->getYesterDaySubmittedForms();
        $number = $contactForms->count();
        $mail = $ContactFormsModel->mail;
        $message = $number . "個" . PHP_EOL;
        foreach ($contactForms as $contactForm)
        {
            $message .= "Mail: " . $contactForm->mail . PHP_EOL;
        }
        $date = new DateTime('now');
        Mail::raw($message, function($message) use ($mail, $date)
        {
            $message->from('b97b01067@gmail.com', 'Global Best Japan');
         
            $message->to($mail)->subject(date('Y/m/d', strtotime("-1 days")) . 'のお問い合わせ');
        });
        echo "send complete";
    }
}
