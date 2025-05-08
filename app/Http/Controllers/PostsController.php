<?php

namespace App\Http\Controllers;
use App\Models\table_content;
use App\Models\posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = posts::with('table_content')->orderby('id','DESC')->get();
        
        return view('backend.posts.all_post',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.posts.add_post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Save the post
    $post = posts::create([
        'title' => $request->title,
        'type' => $request->type,
        'details' => $request->details,
        'publish_date' => $request->publish_date
    ]);

    $post_id = $post->id; // get the correct ID from the inserted post

    $field_names = $request->input('field_name'); // array
$values = $request->input('value');           // array

foreach ($field_names as $index => $field_name) {
    $field_value = $values[$index];

    // Skip if either field name or value is empty
    if (empty($field_name) || empty($field_value)) {
        continue;
    }

    table_content::create([
        'field_name' => $field_name,
        'value' => $field_value,
        'post_id' => $post_id,
    ]);
}

    return redirect()->route('posts');
}
    /**
     * Display the specified resource.
     */
    public function show(posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(posts $posts,$id)
    {
        //
        
        $post = posts::with('table_content')->findOrFail($id);
        return view('backend.posts.edit_post', compact('post'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, posts $posts,$id)
      {
        $post = posts::findOrFail($id);

        // Update post main data
        $post->update([
            'title' => $request->title,
            'publish_date'=>$request->publish_date,
            'type' => $request->type,
            'details' => $request->details,
        ]);

        // Delete old table_content records
        $post->table_content()->delete();

        // Re-insert new table_content
        $field_names = $request->input('field_name', []);
        $values = $request->input('value', []);

        foreach ($field_names as $index => $field_name) {
            $field_value = $values[$index] ?? null;

            if (empty($field_name) || empty($field_value)) {
                continue;
            }

            $post->table_content()->create([
                'field_name' => $field_name,
                'value' => $field_value,
            ]);
        }

        return redirect()->route('posts')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(posts $posts,$id)
    {
        //
        posts::findOrFail($id)->delete();
        table_content::where('post_id',$id)->delete();
        return redirect()
        ->route('posts');
    }
}
