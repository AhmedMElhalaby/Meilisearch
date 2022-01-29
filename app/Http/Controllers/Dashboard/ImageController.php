<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\Controller;
use App\Models\Image;
use App\Traits\AhmedPanelTrait;

class ImageController extends Controller
{
    use AhmedPanelTrait;

    public function setup()
    {
        $this->setRedirect('dashboard/images');
        $this->setEntity(new Image());
        $this->setTable('images');
        $this->setLang('Image');
        $this->setColumns([
            'name'=> [
                'name'=>'name',
                'type'=>'text',
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
        ]);
        $this->SetLinks([
            'edit',
        ]);
    }
}
