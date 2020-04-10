<?php

namespace App\Http\Controllers\Dashboard\Users\Admin;

use Alert;
use App\Model\Users;
use App\Helper\src\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    protected $path = 'dashboard.users.admin';

    public function index($data = null)
    {
        $data = DB::table('users')
            ->where('role','admin')
            ->get();
        return view(" {$this->path}.index ", compact('data'));
        // return $data;
    }

    public function form($id = null)
    {
        $users = Users::where('id',$id)->get();

        if(!empty($id)) {
            $users = Users::find($id);
        } else {
            $users = app(Table::class)->name('users')->toObject();
        }

        return view(" {$this->path}.form ", compact('users'));
    }

    public function store(Request $request, $id = null)
    {
        DB::beginTransaction();

        try{
            $users = [
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'role' => 'admin',
                'password' => \Hash::make('12345'),
                'phone_number' => $request->phone_number,
                'whatsapp_number' => $request->whatsapp_number,
                'address' => $request->address
            ];

            Users::updateOrCreate(['id' => $id], $users);

            DB::commit();
            Alert::success('Success Add User as Admin');
            return redirect()->route('admin.index');
        } catch(\Exception $e){
            DB::rollback();
            return $e->getMessage();
        }
    }

    public function delete($id)
    {
        try{
            Users::destroy($id);
            Alert::success('Success Delete User');
            return redirect()->back();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
