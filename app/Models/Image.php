<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

/**
 * @property mixed id
 * @property mixed name
 */
class Image extends Model
{
    use Searchable,HasFactory;
    protected $table = 'images';
    protected $fillable = ['name'];
    protected $hidden = ['created_at','updated_at'];
    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class,'image_id');
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

}
