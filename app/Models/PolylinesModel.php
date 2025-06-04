<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class PolylinesModel extends Model
{
    protected $table = 'polylines';

    protected $guarded = ['id'];

    public function gejson_polylines()
    {
        $polylines =  $this->select(DB::raw('polylines.id, st_asgeojson(polylines.geom) as geom, polylines.name, polylines.description, polylines.image, st_length(geom, true) as length_m, st_length(geom, true)/1000 as length_km, polylines.created_at, polylines.updated_at, polylines.user_id, users.name as user_created'))
        ->leftJoin('users', 'polylines.user_id', '=', 'users.id')
        ->get();

        $geojson = [
            'type' => 'FeatureCollection',
            'features' => [],
        ];

        foreach ($polylines as $p) {
         $feature = [
            'type' => 'Feature',
            'geometry' => json_decode($p->geom),
            'properties' => [
                'id' => $p->id,
                'name' => $p->name,
                'description' => $p->description,
                'image' => $p->image,
                'length_m' => $p->length_m,
                'length_km' => $p->length_km,
                'created_at' => $p->created_at,
                'update_at' => $p->updated_at,
                'user_id' => $p->user_id,
                'user_created' => $p->user_created,
            ],
        ];

        array_push($geojson['features'], $feature);
    }

        return $geojson;
    }
    public function gejson_polyline($id)
    {
        $polylines =  $this
        ->select(DB::raw('id, st_asgeojson(geom) as geom, name, description, image, st_length(geom, true) as length_m, st_length(geom, true)/1000 as length_km, created_at, updated_at'))
        ->where('id', $id)
        ->get();

        $geojson = [
            'type' => 'FeatureCollection',
            'features' => [],
        ];

        foreach ($polylines as $p) {
         $feature = [
            'type' => 'Feature',
            'geometry' => json_decode($p->geom),
            'properties' => [
                'id' => $p->id,
                'name' => $p->name,
                'description' => $p->description,
                'image' => $p->image,
                'length_m' => $p->length_m,
                'length_km' => $p->length_km,
                'created_at' => $p->created_at,
                'update_at' => $p->updated_at,
            ],
        ];

        array_push($geojson['features'], $feature);
    }

        return $geojson;
    }
}
