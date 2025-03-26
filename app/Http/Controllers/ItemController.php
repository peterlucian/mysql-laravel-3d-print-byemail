<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ImagePath;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{

    private $itemModel;
    public function __construct( ){
        $this->itemModel = new Item;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = $this->itemModel->all();
        return view('index', ['items'=> $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'thumbnail_path.*' => 'required|image|mimes:jpg,png,jpeg|max:2048', // Validate multiple images
            'image_resource_path.*' => 'required|image|mimes:jpg,png,jpeg|max:2048', // Validate multiple images
        ]);

        try {


            DB::beginTransaction();

            $path = $request->file('thumbnail_path')->store('thumbnails', 'public');
            $item = $this->itemModel->create([
                'name' => $data['name'],
                'description'=> $data['description'],
                'price'=> $data['price'],
                'thumbnail_path' => 'storage/' . $path,
                'user_id' => '1'
            ]);

            if ($request->hasFile('image_resource_path')) {
                foreach ($request->file('image_resource_path') as $image) {
                    $path = $image->store('images', 'public'); // Saves in storage/app/public/products
                    ImagePath::create([
                        'image_resource_path'=> 'storage/' . $path,
                        'item_id'=> $item->id
                        ]);
                }
            }

            DB::commit();

        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }



        return redirect()->back()->with("success", "item created succefully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
