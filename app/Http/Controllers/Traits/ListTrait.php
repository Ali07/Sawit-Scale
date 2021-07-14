<?php

namespace App\Http\Controllers\Traits;

use App\Models\Kategori;
use App\User;
use Spatie\Permission\Models\Role;

trait ListTrait {

    public function listRole()
    {
        return Role::pluck('name', 'id');
    }

    public function listKategori()
    {
        return Kategori::pluck('nama', 'id');
    }

    public function dataKategoriItem()
    {
    	return Kategori::with('item')->has('item')->get();
    }

    public function pluckDetailChecklist($model)
    {
        return $model->detailChecklist->pluck('kondisi','item_id');
    }

    public function listStatusApprove()
    {
        return [
            '0'         => 'Belum Approve',
            '1'         => 'Approved',
        ];
    }

    public function listUser()
    {
        return User::pluck('name','id');
    }
}
