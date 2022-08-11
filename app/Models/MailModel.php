<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Exception;
use Illuminate\Support\Facades\Mail;

class MailModel
{
    public function __construct($mail = "b97b01067@gmail.com", $message = '')
    {
        $this->mail = $mail;
        $this->message = $message;
    }

    /**
     * 後台讀完資料後, 可以按一個 button 寄出信告知填表人已經讀完此資料
     */
    public function sendAlreadyReadMail()
    {
        $mail = $this->mail;
        $message = $this->message;
        try {
            Mail::raw($message, function($message) use ($mail)
            {
                $message->from("b97b010671@gmail.com", 'Global Best Japan');
                
                $message->to($mail)->subject('We had read you submission');
            });
            } catch (Exception $e)
            {}
    }

    /**
     * 統計昨天填表完成後，排程寄信告知管理員昨天有哪些人填表
     */
    public function sendYesterdaySubmittedReportMail()
    {
        $mail = $this->mail;
        $message = $this->message;
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

    /**
     * 使用者填表完後，立刻寄出信通知已經收到信件
     */
    public function sendFormSubmittedMail()
    {
        $mail = $this->mail;
        $message = "ご連絡ありがとうございます。担当者からご連絡いたしますので少々お待ちください。";
        try {
            Mail::raw($message, function($message) use ($mail)
            {
                $message->from('b97b01067@gmail.com', 'Global Best Japan');
             
                $message->to($mail)->subject('Global Best Japan');
            });
        } 
        catch(Exception $e){}
    }
}
