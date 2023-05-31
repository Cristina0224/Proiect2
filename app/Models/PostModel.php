<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\DataModel;
use CodeIgniter\I18n\Time;
class PostModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'post';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','poza','title'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

   // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['beforeInsert'];
    protected $afterInsert    = ['afterInsert'];
    protected $beforeUpdate   = ['beforeUpdate'];
    protected $afterUpdate    = ['afterUpdate'];
    protected $beforeFind     = ['beforeFind'];
    protected $afterFind      = ['afterFind'];
    protected $beforeDelete   = ['beforeDelete'];
    protected $afterDelete    = ['afterDelete'];
    
    protected function beforeInsert(array $data) 
    {
        $rec = new DataModel();
        $myTime = new Time('now');
        $dat = ['name' =>  "BEFORE INSERT RECORD", "time" => $myTime];
        $rec->insert($dat);
        
        return $data;
    }
    
    protected function afterInsert(array $data) 
    {
        $rec = new DataModel();
        $myTime = new Time('now');
        $dat = ['name' =>  "AFTER INSERT RECORD", "time" => $myTime];
        $rec->insert($dat);
        
        return $data;
    }
    
    protected function beforeUpdate(array $data) 
    {
        $rec = new DataModel();
        $myTime = new Time('now');
        $dat = ['name' =>  "BEFORE UPDATE RECORD", "time" => $myTime];
        $rec->insert($dat);
        
        return $data;
    }
    
    protected function afterUpdate(array $data) 
    {
        $rec = new DataModel();
        $myTime = new Time('now');
        $dat = ['name' =>  "AFTER UPDATE RECORD", "time" => $myTime];
        $rec->insert($dat);
        
        return $data;
    }
    
    protected function beforeFind(array $data) 
    {
        $rec = new DataModel();
        $myTime = new Time('now');
        $dat = ['name' =>  "BEFORE FIND RECORD", "time" => $myTime];
        $rec->insert($dat);
        
        return $data;
    }
    
    protected function afterFind(array $data) 
    {
        $rec = new DataModel();
        $myTime = new Time('now');
        $dat = ['name' =>  "AFTER FIND RECORD", "time" => $myTime];
        $rec->insert($dat);
        
        return $data;
    }
    
    protected function beforeDelete(array $data) 
    {
        $rec = new DataModel();
        $myTime = new Time('now');
        $dat = ['name' =>  "BEFORE DELETE RECORD", "time" => $myTime];
        $rec->insert($dat);
        
        return $data;
    }
    
    protected function afterDelete(array $data) 
    {
        $rec = new DataModel();
        $myTime = new Time('now');
        $dat = ['name' =>  "AFTER DELETE RECORD", "time" => $myTime];
        $rec->insert($dat);
        
        return $data;
    }
}
