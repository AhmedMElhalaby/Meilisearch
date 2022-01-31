<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolariumController extends Controller
{
    protected $client;
    public function __construct(\Solarium\Client $client)
    {
        $this->client = $client;
    }
    public function search(Request $request)
    {
        $q= $request->q;
        $query = $this->client->createSelect();
        $query->setQuery('*:*');
        $query->setQuery('name:"' . $q . '"');
        $query->setStart(0);
        $query->setRows(10);
        $result = $this->client->select($query);

        return view('search', compact('result'));

    }
}
