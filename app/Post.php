<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function post_information()
    {
        return $this->hasOne(PostInformation::class)
                    ->withDefault([
                        'hashtag' => 'tiada value',
                        'color'   => '#000000',
                    ]);
    }
}
