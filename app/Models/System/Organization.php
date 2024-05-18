<?php

namespace App\Models\System;

use App\Models\System\Relationship\OrganizationRelationship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Organization extends Model
{

    use OrganizationRelationship,Notifiable;
    protected $guarded = [];
    protected $table = 'organizations';


    /**
     * @return null|string
     * Attribute
     */
    public function getFullAddressAttribute()
    {
        $full_address=null;
        $box = ($this->box_no) ?  ('P.O. Box ' . $this->box_no . ', ') : '';
        $full_address =  $box . $this->address;
        return $full_address;
    }

    public function getAllPhonesAttribute()
    {
        $all_phones=null;
        $phone = ($this->phone) ? ($this->phone) : '';
        $telephone = ($this->telephone) ? (' / ' . $this->telephone) : '';
        $all_phones =  $phone . $telephone;
        return $all_phones;
    }


    public function getMessageSubjectsForSelect()
    {
        $array = [];
        if($this->message_subjects){
            $message_subjects_arr = json_decode($this->message_subjects);
            foreach ($message_subjects_arr as $ref){
                $array[$ref] = $ref;
            }
        }
        return $array;
    }
}
