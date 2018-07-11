<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = ['1' => 'admin', '2' => 'tech', '3' => 'emp',];

        return view('admin.users.create',compact('roles'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ];
        $this->validate($request, $rules);
        $user = new User;
        $user->name =  $request->input('name');
        $user->email =  $request->input('email');
        $user->password =  bcrypt($request->input('password'));

        $user->save();
        $user->roles()->attach($request->input('role'));
        return redirect()->route('admin.users.show',$user->id)->with('success','L\'utilisateur à été crée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = ['1' => 'admin', '2' => 'tech', '3' => 'emp',];
        return view('admin.users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        $rules = [
            'email' => 'required|email|unique:users',
            'name' => 'required',
        ];
        $user = new User();
        $this->validate($request, $rules);
        $user->email = $request->input('email');
        $user->name = $request->input('name');
        $user->password = $request->input('password');
        $user->roles()->attach($request->input('role'));
        $user->update();
        return redirect()->route('admin.users.show', ['id' => $user->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $u = User::findOrFail($id);
        $u->destroy($id);
        return redirect()->route('admin.users.index');
    }

     /**
     * 
     */
    public function csvToArray($filename = '', $delimiter = ';')
    {
        if (!file_exists($filename) || !is_readable($filename)){
            return false;
        }

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            
            fclose($handle);
        }

        return $data;
    }

    /**
     * 
     */
    public function importCsv()
    {
        $file = public_path('import/users.csv');

        $customerArr = $this->csvToArray($file);

        for ($i = 0; $i < count($customerArr); $i ++)
        {
            $name = $customerArr[$i]['enom'];
            $mail = $customerArr[$i]['mail'];
            $password = bcrypt($customerArr[$i]['login']);

            $isInDatabase = User::where('name', $name)->get()->first();
           
           if($isInDatabase != null) {
               User::insert(
                ['name' => $name, 'email' => $mail, 'password' => $password]
               );
           } else {
               User::where('name', $name)
               ->update(['name' => $name, 'email' => $mail, 'password' => $password]);
           }
        }
        return redirect()->route('admin.users.index'); 
    }
}
