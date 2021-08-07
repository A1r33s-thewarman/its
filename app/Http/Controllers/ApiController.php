<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issue;
use App\Models\Categories;
use App\Models\subCategories;
use App\Models\comments;
use App\Models\issue_Categories;
use App\Models\issue_subCategories;
use App\Models\images;


class ApiController extends Controller
{
    //



    public function createIssue(Request $request) {
      // logic to create an Issue record goes here

    $issues = new Issue;
    $comment = new comments;
    $issue_Categories = new issue_Categories;
    $issue_subCategories = new issue_subCategories;
    $images = new images;

    $issues->title = $request->title;
    $issues->body = $request->body;
    $issues->uuid = $request->uuid;
    $issues->slug = $request->slug;
    $issues->save();

    $Max = $issues::max('id');


    $comment->issue_id = $Max;
    $comment->body = $request->c_body;
    $comment->save();

    $issue_Categories->issue_id = $Max;
    $issue_Categories->category_id = $request->category_id;
    $issue_Categories->save();

    $issue_subCategories->issue_id = $Max;
    $issue_subCategories->subcategory_id = $request->subcategory_id;
    $issue_subCategories->save();

    $images->imagable_type = $request->imagable_type;
    $images->imagable_id = $request->imagable_id;
    $images->size = $request->size;
    $images->path = $request->path;
    $images->name = $request->name;
    $images->extension = $request->extension;
    $images->save();

    return response()->json([
        "message" => "New issue added"
    ], 201);
    }

    public function getIssue($id) {

       $issues = new Issue;
      if ($issues::where('id', $id)->exists()) {
        $isseu_json = $issues::select('issues.*', 'comments.*', 'issue_categories.*', 'issue_sub_categories.*')
        ->join('comments', 'comments.issue_id', '=', 'issues.id')
        ->join('issue_categories', 'issue_categories.issue_id', '=', 'issues.id')
        ->join('issue_sub_categories', 'issue_sub_categories.issue_id', '=', 'issues.id')
        ->where('issues.id', $id)->get()->toJson(JSON_PRETTY_PRINT);
        return response($isseu_json, 200);
      } else {
        return response()->json([
          "message" => "Issue not found"
        ], 404);
      }

    }

    public function updateIssue(Request $request, $id) {
      // logic to update an Issue record goes here
    }

    public function deleteIssue ($id) {
      // logic to delete an Issue record goes here
    }


     public function createCategory(Request $request) {
      // logic to create an Category record goes here

    $category = new Categories;
    $category->name = $request->name;
    $category->description = $request->description;

    $category->save();

    return response()->json([
        "message" => "category record created"
    ], 201);
    }

     public function createsubCategory(Request $request) {
      // logic to create an subCategory record goes here

    $subcategory = new subCategories;
    $subcategory->category_id = $request->category_id;
    $subcategory->name = $request->name;
    $subcategory->description = $request->description;

    $subcategory->save();

    return response()->json([
        "message" => "subcategory record created"
    ], 201);
    }
}
