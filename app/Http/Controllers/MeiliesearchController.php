<?php

namespace App\Http\Controllers;

use App\Models\Image;
use MeiliSearch\Client;
use Illuminate\Http\Request;

class MeiliesearchController extends Controller
{
    public function store_doc()
    {
        $client = new Client('http://127.0.0.1:7700', 'hv7SEHtabef5f8dea8218486c50bf7d10eb467e1a4d58895d6d7dc121bec7c173a9a4e9c');
        $index = $client->index('images');
        $index->addDocuments(Image::with('tags')->get()->toArray());
        return 'Done!';
    }
    public function search(Request $request)
    {
        $client = new Client('http://127.0.0.1:7700', 'hv7SEHtabef5f8dea8218486c50bf7d10eb467e1a4d58895d6d7dc121bec7c173a9a4e9c');
        $index = $client->index('images');
        return $index->search($request->q)->getHits();
    }
}
