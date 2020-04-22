<?php

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the blogs
        $blog = Blogs::all()->sortByDesc('created_at');
		
        // load the view and pass the user
        return View('blog.index')
            ->with('blog', $blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load the create form (resources\views\blogs)
        return View('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:150',
            'body' => 'required|string',
        ]);
    
        // store
        $blog = new Blogs;
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->save();

        // redirect
        return redirect('blog')->with('message', 'Successfully created blog!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get the blog
        $blog = Blogs::findOrFail($id);
 
        // show the view and pass the blog to it
        return View('blog.show')
            ->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the blog
        $blog = Blogs::findOrFail($id);
 
        // show the edit form and pass the blog
        return View('blog.edit')
            ->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:150',
            'body' => 'required|string',
        ]);
    
        // store
        $blog = Blogs::findOrFail($id);
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->save();

        // redirect
        return redirect('blog')->with('message', 'Successfully updated blog!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $blog = Blogs::findOrFail($id);
        $blog->delete();
 
		// redirect
		return redirect('blog')->with('message', 'Successfully deleted the blog!');
    }
}
