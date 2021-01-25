<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Models\project;

class PageController extends Controller
{  public function home(){
    project::query()->create([
        'title'=> 'project title 1',
        'description'=>'project description one'
    ]);
    project::query()->create([
        'title'=> 'project title 2',
        'description'=>'project description two'
    ]);
    project::query()->create([
        'title'=> 'project title 3',
        'description'=>'project description three'
    ]);

    project::where('title','project title 1')->update(['title'=>'updated title']);
    project::where('title','project title 2')->delete();
    //$project= DB::table('projects')->get();

    //print_r($project);
    dd(project::all());



    return "Home From Page Controller";
}
}
