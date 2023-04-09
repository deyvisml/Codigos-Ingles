<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "isbn",
        "edition",
        "format",
        "licence_length",
        "price_usd",
        "price_pen",
        "level_id",
        "iamge"
    ];

    // problem with route model bidding custom keys https://stackoverflow.com/a/61073459/15694873
    public function getRouteKeyName()
    {
        return 'isbn';
    }

    public function level()
    {
        return $this->belongsTo(Level::class)->select(["id", "name"]);
    }

    // https://stackoverflow.com/a/63803927/15694873 
    public function serie()
    {
        $level = Level::find($this->level->id)->first();

        return $level->serie();
    }

    public function category()
    {
        $level = Level::find($this->level->id)->first();
        $serie = Serie::find($level->serie_id)->first();

        return $serie->category();
    }
}
