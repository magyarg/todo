<?php
namespace App;

/**
 * Library injections
 */
use Illuminate\Database\Eloquent\Model;

class Task extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'status'
    ];

    /**
     * A Task Model instance belongs to a User Model intance
     * @return \Illuminate\Collection
     */
    public function user() {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    /**
     * Attribute getter for the status
     * @return Boolean
     */
    public function getDoneAttribute() {
        return $this->status === 1 ? true : false;
    }

    /**
     * Attribute getter for the status
     * @return Boolean
     */
    public function getPendingAttribute() {
        return $this->status === 0 ? true : false;
    }
}
