<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;

class ProjectController extends Controller
{
    //
    public function add (Request $req)
    {

             $project=new Project;
             $project->name=$req->name;
             $project->start_date=$req->start_date;
             $project->end_date=$req->end_date;
             $project->assigned_user=$req->assigned_user;


             $project->save();


            return redirect('/home') ;
     }
     public function addproject ()
      {
        $users = User::all();
        return view ('project.add_project',compact('users'));
      }

      public function display()
      {

         $project = Project::all();

         return view('project.projects_list', compact('project'));
      }

      public function displayProject()
      {
          //dd(auth()->id());
         $projects = Project::all();
         $project = Project::where('assigned_user', '=', auth()->id())->get();

         return view('user.user_projects_list', compact('project'));
      }




      public function edit(Project $projects)

      {
          $users = User::all();
          return view('project.update_project', compact('projects','users'));
      }


      public function update(Request $req)

      {

         $project= Project::find($req->id);
         $project->name=$req->name;
         $project->start_date=$req->start_date;
         $project->end_date=$req->end_date;
         $project->assigned_user=$req->assigned_user;
         $project->save();
         return redirect("/project/display");

     }
     public function destroy(Project $projects)

     {
     $projects->delete();
     return redirect('/project/display');
     }
}
