<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class SolariumController extends Controller
{
    protected $client;

    public function __construct(\Solarium\Client $client)
    {
        $this->client = $client;
    }
    public function ping()
    {
        $ping = $this->client->createPing();

        try {
            $this->client->ping($ping);
            return response()->json('OK');
        } catch (Exception $e) {
            return response()->json('ERROR::'.$e->getMessage(), 500);
        }
    }
    public function search()
    {
        $query = $this->client->createSelect();
//        $query->addFilterQuery(array('key'=>'provence', 'query'=>'provence:Groningen', 'tag'=>'include'));
//        $query->addFilterQuery(array('key'=>'degree', 'query'=>'degree:MBO', 'tag'=>'exclude'));
//        $facets = $query->getFacetSet();
//        $facets->createFacetField(array('field'=>'degree', 'exclude'=>'exclude'));
        $result = $this->client->select($query);

        // display the total number of documents found by solr
        echo 'NumFound: ' . $result->getNumFound();

        // show documents using the resultset iterator
        foreach ($result as $document) {

            echo '<hr/><table>';

            // the documents are also iterable, to get all fields
            foreach ($document as $field => $value) {
                // this converts multivalue fields to a comma-separated string
                if (is_array($value)) {
                    $value = implode(', ', $value);
                }

                echo '<tr><th>' . $field . '</th><td>' . $value . '</td></tr>';
            }

            echo '</table>';
        }
    }
}
