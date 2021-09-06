<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewExhibitorForm;
use App\Models\Exhibitor;
use App\Models\Table;
use App\Models\Tag;
use App\Models\TagTable;
use App\Traits\CreatingImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ExhibitorController extends Controller
{
    use CreatingImage;

    public function index()
    {
        if (isset($_GET['search'])) {
            $searchWord = $_GET['search'];
        } else {
            $searchWord = '';
        }

        $exhibitors = Exhibitor::with('table.tags')
            ->where('confirmed', '=', '1')
            ->where('full_name', 'LIKE', '%'. $searchWord .'%')
            ->orderBy('full_name', 'ASC')
            ->paginate(12);

        $tags = Tag::all();

        return view('exhibitor.index', compact('exhibitors', 'tags'));
    }

    public function store(NewExhibitorForm $request)
    {
        $validatedData = $request->validated();

        $exhibitor = Exhibitor::create([
            'full_name' => $validatedData['name'],
            'slug' => Str::slug($validatedData['name']),
            'work_title' => $validatedData['work_title'],
            'email' => $validatedData['email'],
            'tel' => $validatedData['phone_number'],
            'confirmed' => 0,
        ]);

        if ($request->hasFile('file')) {
            $this->saveImage($request, $exhibitor->slug);

            $exhibitor->cover_img = '/images/exhibitors/full/' .  $exhibitor->slug .'.'. $request->file('file')->extension();
        }

        $table = Table::create([
            'exhibitor_id' => $exhibitor->id,
            'name' => $validatedData['stand_name'],
        ]);


        foreach ($validatedData['tags'] as $tag) {
            TagTable::create([
                'table_id' => $table->id,
                'tag_id' => $tag,
            ]);
        }


        return redirect()->route('exhibitor.index');
    }
}
