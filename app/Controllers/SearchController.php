<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;

class SearchController extends BaseController
{
    public function index()
    {
         return view('post');
    }
     public function search()
    {
       $search = $this->request->getPost('search');

        $model = new PostModel();
        $data['r'] = $model->where('title', $search)->findAll();

        return view('search_result',$data);
    }
}
