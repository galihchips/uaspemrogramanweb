<?php

namespace App\Controllers;
use App\Models\ModelResidence;
class Home extends BaseController
{
    public function index()
    {
        $residence = new ModelResidence();
        $data = [
            'showdata' => $residence->showdata()
        ];

        return view('view_residences', $data);
    }
    public function add()
    {
        helper('form');
        return view('view_add');
    }
    public function save()
    {
        $residence = new ModelResidence();
        $data = [
            'name' => $this->request->getpost('name'),
            'category_id' => $this->request->getpost("category"),
            'area_id' =>  $this->request->getpost("area"),
            'desc' => $this->request->getpost('desc'),
            'sqm' => $this->request->getpost('sqm'),
            'image_url' => $this->request->getpost('image_url'),
        ];
        $save = $residence->savedata($data);
        if ($save) {
            return redirect()->to('');
        }
    }
    public function delete(){
        $residence = new ModelResidence();
        $uri = service('uri');
        $id = $uri->getSegment('2');
        $delete = $residence->deletedata($id);
        
        if ($delete) {
            return redirect()->to('');
        }
    }
    public function get(){
        helper('form');
        $residence = new ModelResidence();
        $uri = service('uri');
        $id = $uri->getSegment('2');
        $getbyid = $residence->get($id);
        if(count($getbyid->getResult()) > 0) {
            $row = $getbyid->getRow();
            $data = [
                'id' => $row->id,
                'name' => $row->name,
                'category_id' => $row->category_id,
                'area_id' => $row->area_id,
                'desc' => $row->desc,
                'sqm' => $row->sqm,
                'image_url' => $row->image_url,
            ];
            return view('view_edit', $data);
        }
    }
    public function edit()
    {
        helper('form');
        $residence = new ModelResidence();
        $uri = service('uri');
        $id = $uri->getSegment('2');
        $data = [
            'name' => $this->request->getpost('name'),
            'category_id' => $this->request->getpost("category"),
            'area_id' =>  $this->request->getpost("area"),
            'desc' => $this->request->getpost('desc'),
            'sqm' => $this->request->getpost('sqm'),
            'image_url' => $this->request->getpost('image_url'),
        ];
        $edit = $residence->editdata($id, $data);
        if ($edit) {
            return redirect()->to('');
        }
    }
}
