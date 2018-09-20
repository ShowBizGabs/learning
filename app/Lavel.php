<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Lavel
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lavel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lavel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lavel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lavel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lavel whereUpdatedAt($value)
 */
class Lavel extends Model
{
    public function course(){
        return $this->hasOne(Course::class);
    }
}
