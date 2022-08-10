<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class ContactFormsModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact_forms';

    public function __construct($mail = "b97b01067@gmail.com")
    {
        $this->mail = $mail;
    }

    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format(('Y-m-d H:i:s'));
    }

    public function getYesterdaySubmittedForms()
    {
        return $this->whereDate('created_at', Carbon::yesterday())->get();
    }

}
