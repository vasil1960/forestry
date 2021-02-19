<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;
    protected $table = 'issue';
    protected $primaryKey = 'issueID';

    public function journal()
    {
        return $this->belongsTo(Journal::class, 'issueJournalID', 'journalID');
    }
}
