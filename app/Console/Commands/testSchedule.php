<?php

namespace App\Console\Commands;

use App\Models\ContactFormModel;
use App\Models\MailModel;
use Illuminate\Console\Command;

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
        $ContactFormModel = new ContactFormModel("b97b01067@gmail.com");
        $contactForms = $ContactFormModel->getYesterdaySubmittedForms();
        $number = $contactForms->count();
        $mail = $ContactFormModel->mail;
        $message = $number . "個" . PHP_EOL;
        foreach ($contactForms as $contactForm)
        {
            $message .= "Mail: " . $contactForm->mail . PHP_EOL;
        }

        $mailModel = new MailModel($mail, $message);
        $mailModel->sendYesterdaySubmittedReportMail();
    }
}
