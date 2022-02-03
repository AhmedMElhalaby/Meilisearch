<?php

namespace App\Http\Controllers;

use App\Models\Image;
use MeiliSearch\Client;
use Illuminate\Http\Request;

class MeiliesearchController extends Controller
{
    public function store_doc()
    {
        $client = new Client('http://127.0.0.1:7700', 'masterKey');
        $index = $client->index('images');
        $index->addDocuments(Image::with('tags')->get());
        return 'Done!';
    }
    public function search(Request $request)
    {
        $client = new Client('http://127.0.0.1:7700', 'masterKey');
        $index = $client->index('images');
        return $index->search($request->q)->getHits();
    }
}
