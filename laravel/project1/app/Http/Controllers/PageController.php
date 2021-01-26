<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Models\Project;

class PageController extends Controller
{  public function home()
  {
    Project::query()->create([
        'title'=> 'project title 1',
        'description'=>'project description one'
    ]);
    Project::query()->create([
        'title'=> 'project title 2',
        'description'=>'project description two'
    ]);
    Project::query()->create([
        'title'=> 'project title 3',
        'description'=>'project description three'
    ]);

    Project::where('title','project title 1')->update(['title'=>'updated title']);
    Project::where('title','project title 2')->delete();
    //$project= DB::table('projects')->get();

    //print_r($project);
    dd(Project::all());



    return "Home From Page Controller";
}
}
