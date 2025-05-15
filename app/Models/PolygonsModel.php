<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PolygonsModel extends Model
{
    protected $table = 'polygons';

    protected $guarded = ['id'];

    public function gejson_polygons()
    {
        $polygons =  $this
        ->select(DB::raw('id, st_asgeojson(geom) as geom, name, description, image, st_area(geom, true) as luas_m2, st_area(geom, true)/1000000 as luas_km2,
        st_area(geom, true)/10000 as luas_hektar, created_at, updated_at'))
        ->get();

        $geojson = [
            'type' => 'FeatureCollection',
            'features' => [],
        ];

        foreach ($polygons as $p) {
         $feature = [
            'type' => 'Feature',
            'geometry' => json_decode($p->geom),
            'properties' => [
                'id' => $p->id,
                'name' => $p->name,
                'description' => $p->description,
                'image' => $p->image,
                'luas_m2' => $p->luas_m2,
                'luas_km2' => $p->luas_km2,
                'luas_hektar' => $p->luas_hektar,
                'created_at' => $p->created_at,
                'update_at' => $p->updated_at,
            ],
        ];

        array_push($geojson['features'], $feature);
    }

        return $geojson;
    }
    public function gejson_polygon($id)
    {
        $polygons =  $this
        ->select(DB::raw('id, st_asgeojson(geom) as geom, name, description, image, st_area(geom, true) as luas_m2, st_area(geom, true)/1000000 as luas_km2,
        st_area(geom, true)/10000 as luas_hektar, created_at, updated_at'))
        ->where('id', $id)
        ->get();

        $geojson = [
            'type' => 'FeatureCollection',
            'features' => [],
        ];

        foreach ($polygons as $p) {
         $feature = [
            'type' => 'Feature',
            'geometry' => json_decode($p->geom),
            'properties' => [
                'id' => $p->id,
                'name' => $p->name,
                'description' => $p->description,
                'image' => $p->image,
                'luas_m2' => $p->luas_m2,
                'luas_km2' => $p->luas_km2,
                'luas_hektar' => $p->luas_hektar,
                'created_at' => $p->created_at,
                'update_at' => $p->updated_at,
            ],
        ];

        array_push($geojson['features'], $feature);
    }

        return $geojson;
    }
}
