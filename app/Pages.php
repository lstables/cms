<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    /**
     * Fillable Fields
     * @var array
     */
    protected $fillable = ['name','m_title','m_description','content','slug'];

    /**
     * Carbon Dates
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * Set slug attr before insert as a str_slug()
     * @param $value
     */
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug($value, "_");
    }
}
