<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;

class ImageController extends BaseController
{   
    public function index()
    {
        $model = new PostModel();
        $data['posts'] = $model->findAll();
    
        return view('post', $data);
    }
    
    public function upload()
    { $model = new PostModel();
        $data['posts'] = $model->findAll();
        return view('upload',$data);
    }
    
    public function save()
    {
        $model = new PostModel();
        $url1 = $this->do_upload();
        $url = substr($url1, 1);
        $title = $this->request->getPost('title');
        $data = [
            'title' => $title,
            'poza' => $url,
        ];
        $model->insert($data);
        return redirect()->to(base_url('/posts'));
    }
    
    private function do_upload()
    {
        $type = explode('.', $_FILES["poza"]["name"]);
        $type = strtolower(end($type)); // Get the file extension in lowercase
        $url = "./images/" . uniqid(rand()) . '.' . $type;

        if (in_array($type, array("jpg", "jpeg", "gif", "png"))) {
            if (is_uploaded_file($_FILES["poza"]["tmp_name"])) {
                if (move_uploaded_file($_FILES["poza"]["tmp_name"], $url)) {
                    return $url;
                }
            }
        }

        return "";
    }
     public function post($id=NULL){
        $model= new PostModel();
        $data['posts']=$model->where('id',$id)->first();
        return view('single_image_view', $data);
                
    }
    public function edit($id = null) 
    {
        $model = new PostModel();
        $data['image'] = $model->where('id', $id)->first();
        return view('edit_view', $data);
    }

    public function update()
{
    helper('form', 'url');
    $model = new PostModel();
    
    $id = $this->request->getPost('id');
    $postData = [
        'title' => $this->request->getPost('title'),
    ];
    
    $uploadedImage = $this->do_upload();
    if (!empty($uploadedImage)) {
        $postData['poza'] = $uploadedImage;
    } else {
        $existingPost = $model->find($id);
        if ($existingPost) {
            $postData['poza'] = $existingPost['poza'];
        }
    }
    
    $model->update($id, $postData);
    return redirect()->to(base_url('/posts'));
}

    public function delete($id = null)
    {
        $model = new PostModel();
        $model->where('id', $id)->delete();
        return redirect()->to(base_url('/posts'));
    }
}
