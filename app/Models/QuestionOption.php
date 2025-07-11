<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;


class QuestionOption extends Model
{
    use HasUuids;

    protected $fillable = [
        'option_based_question_id',
        'is_correct'
    ];

    public function optionBasedQuestion()
    {
        return $this->belongsTo(OptionBasedQuestion::class);
    }

    public function optionable()
    {
        return $this->morphTo();
    }
}
