<?php

namespace Dcat\Admin\Extension\Crontab\Models;

use Illuminate\Database\Eloquent\Model;

class CrontabLog extends Model
{
    //
    protected $table = 'crontab_log';
    protected $fillable = ['type'];

    public function crontab()
    {
        return $this->belongsTo(Crontab::class, 'cid', 'id');
    }
}
