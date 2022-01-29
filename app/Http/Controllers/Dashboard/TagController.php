<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\Controller;
use App\Models\Tag;
use App\Models\Image;
use App\Traits\AhmedPanelTrait;

class TagController extends Controller
{
    use AhmedPanelTrait;

    public function setup()
    {
        $this->setRedirect('dashboard/tags');
        $this->setEntity(new Tag());
        $this->setTable('tags');
        $this->setLang('Tag');
        $this->setColumns([
            'name'=> [
                'name'=>'name',
                'type'=>'text',
                'is_searchable'=>true,
                'order'=>true
            ],
            'image_id'=> [
                'name'=>'image_id',
                'type'=>'custom_relation',
                'relation'=>[
                    'data'=> Image::all(),
                    'custom_search'=>function($Object){
                        return ($Object)?$Object->name:'-';
                    },
                    'custom'=>function($Object){
                        return ($Object)?$Object->name:'-';
                    },
                    'entity'=>'image'
                ],
                'is_searchable'=>true,
                'order'=>true
            ],
        ]);
        $this->setFields([
            'name'=> [
                'name'=>'name',
                'type'=>'text',
                'is_required'=>true
            ],
            'image_id'=> [
                'name'=>'image_id',
                'type'=>'custom_relation',
                'relation'=>[
                    'data'=> Image::all(),
                    'custom'=>function($Object){
                        return $Object->name;
                    },
                    'entity'=>'image'
                ],
                'is_required'=>true
            ],
        ]);
        $this->SetLinks([
            'edit',
            'delete',
        ]);
    }
}
