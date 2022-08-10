<?php

namespace App\Console\Commands;

use App\Models\ContactFormsModel;
use DateTime;
use Exception;
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
        $ContactFormsModel = new ContactFormsModel("b97b01067@gmail.com");
        $contactForms = $ContactFormsModel->getYesterdaySubmittedForms();
        $number = $contactForms->count();
        $mail = $ContactFormsModel->mail;
        $message = $number . "個" . PHP_EOL;
        foreach ($contactForms as $contactForm)
        {
            $message .= "Mail: " . $contactForm->mail . PHP_EOL;
        }

        try {
            Mail::raw($message, function($message) use ($mail)
            {
                $message->from($mail, 'Global Best Japan');
             
                $message->to($mail)->subject(date('Y/m/d', strtotime("-1 days")) . 'のお問い合わせ');
            });
            echo "send complete";
        } catch (Exception $e)
        {}

    }
}
