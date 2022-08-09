<?php

namespace App\Models;

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

    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format(('Y-m-d H:i:s'));
    }
}
