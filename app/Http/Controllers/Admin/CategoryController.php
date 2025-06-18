<?php

namespace App\Http\Controllers\admin;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver; // অথবা Imagick
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $data = Category::orderBy('id', 'DESC')->get();
        return view('backEnd.category.index', compact('data'));
    }
    public function create()
    {
        return view('backEnd.category.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',
        ]);

        $image = $request->file('image');

        if ($image) {
            $manager = new ImageManager(new Driver());

            $name = time() . '-' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '.webp';
            $uploadpath = 'uploads/category/';
            $imageUrl = $uploadpath . $name;
            // Create folder if not exists
            if (!file_exists(public_path($uploadpath))) {
                mkdir(public_path($uploadpath), 0755, true);
            }
            $img = $manager->read($image->getRealPath());
            $width = 400;
            $height = 400;
            if ($img->height() > $img->width()) {
                $width = null;
            } else {
                $height = null;
            }
            $img->resize($width ?? 400, $height ?? 400);
            $img->toWebp(90)->save(public_path($imageUrl));
        } else {
            $imageUrl = null;
        }

        $input = $request->all();
        $input['status'] = $request->status ? 1 : 0;
        Category::create($input);
        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }
}
