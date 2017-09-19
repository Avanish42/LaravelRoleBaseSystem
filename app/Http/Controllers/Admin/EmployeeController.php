<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\model\Role;
use App\model\Permission;
use Zizaco\Entrust\Entrust;
use Zizaco\Entrust\Traits\EntrustRoleTrait;
use Zizaco\Entrust\Traits\EntrustPermissionTrait;



class EmployeeController extends Controller
{
    //
    //use EntrustUserTrait;

    public function add1()
    {
        $admin=Role::where('name','=','manager')->first();
        $perm=Permission::where('name','=','create')->first();

//        dd($perm);
//
//        $role=$user->roles->toArray();
//        $role=$user->roles->all();
//        $role=$user->roles->first()->name;
//        $role=$user->roles;

        $admin->attachPermission($perm);
//        $admin->perms()->sync(array($perm->id));
        //dd($admin);
        $user = User::where('id','=',1)->first();
        //$user->attachRole($admin);

        if($user->can('create'))
        {
            echo "true";

        }
        else
        {
            echo "false";

        }

    }
    public function show()
    {
//        $employee=User::all()->toArray();
        $employee=User::with('roles')->get()->toArray();
        return view('employee.show' ,compact('employee'));

    }
    public function add()
    {
        return view('employee.add');

    }
    public function store(Request $request)
    {
        $user= new User();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->password=bcrypt($request->password);
        $user->remember_token=str_random(40);
        if($user->save()) {
            return back()->with('returnStatus', true)->with('status', 101)->with('message', 'Employee Added Successfully')->with("dummy data");
        }
        else
        {
            return back()->with('returnStatus', true)->with('status', 101)->with('message', ' Employee Added Failed')->with("dummy data");

        }

    }
    public function edit($id)
    {
//        dd($id);
        $user=  User::where('id','=',$id)->first();
 //       $role=$user->roles->toArray();
   //     $role=$user->roles->all();
     //   $role=$user->roles->first()->name;
       // $role=$user->roles;
         $role=  $user->roles ? $user->roles->first()->name : 'No role';
        $roles = Role::with('perms')->get();
       $data= User::with('roles')->get()->toArray();
        dd($data);
        echo $role;
        dd($user->toArray());
    }
    public function delete($id)
    {
        dd($id);
    }
    public function update()
    {

    }


}
