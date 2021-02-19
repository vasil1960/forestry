<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    protected $table = 'journal';
    protected $primaryKey = 'journalID';

    public function issue()
    {
        return $this->hasMany(Issue::class, 'issueJournalID', 'journalID');
    }
}
