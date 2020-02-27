<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DictionaryConcept
 * @package App\Models\Admin
 *
 * @property string $description
 */
class DictionaryConcept extends Model
{
    protected $table = 'dictionary_concept';

    protected $fillable = ['description'];
}
