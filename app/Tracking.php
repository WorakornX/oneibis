<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    protected $fillable = [
        'tracking_no',
        'view',
    ];

    public function index()
    {

        return $this->get()->mapWithKeys(function ($item, $key) {

            return $this->result = [$key => [
                'tracking_no' => $item->tracking_no,
                'view'        => $item->view,
                'id'          => $item->id,
                'updated_at'  => ($item->created_at == $item->updated_at) ? '-' : $item->updated_at->shortRelativeToNowDiffForHumans(),
            ]];
        });
    }
}
