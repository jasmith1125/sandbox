<?php

class Chore extends Eloquent {

 # The guarded properties specifies which attributes should *not* be mass-assignable
    protected $guarded = array('id', 'created_at', 'updated_at');


    /**
    * Chores belong to many Tags
    */
    public function tags() {

        return $this->belongsToMany('Tag');

    }

    /**
    * Search among books, authors and tags
    * @return Collection
    */
    public function chores() {

            return $this->belongsToUser('Chore');

            $chores = Chore::with('tags')->get();
        }



}