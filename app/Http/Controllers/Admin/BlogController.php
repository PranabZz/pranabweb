<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index',compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(BlogRequest $request)
    {
        $blog = Blog::create($request->validated());
        $this->storeThumbnail($request, $blog);

        return redirect()->route('admin.blogs.index')->with('success', 'Created new blog successfully');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit',compact('blog'));
    }

    public function update(BlogUpdateRequest $request, Blog $blog)
    {
        $oldThumbail = $blog->thumbnail;

        $blog->update($request->validated());

        $this->storeThumbnail($request, $blog);

        if (!is_null($oldThumbail) && $oldThumbail !== $blog->thumbnail) {
            $this->deleteThumbnail($oldThumbail);
        }

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        $this->deleteThumbnail($blog->thumbnail);

        return redirect()->back()->with('sucess','Blog Deleted');
    }

    private function storeThumbnail($request, $blog)
    {
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'thumbnails');
            
            $blog->update([
                'thumbnail' => $thumbnailPath,
            ]);
        }
    }

    private function deleteThumbnail($thumbnail)
    {
        if (!is_null($thumbnail)) {
            if (Storage::disk('thumbnails')->exists($thumbnail)) {
                Storage::disk('thumbnails')->delete($thumbnail);
            }
        }
    }
}
