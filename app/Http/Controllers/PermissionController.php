<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
            $product_permissions = Permission::where('name','LIKE',"%product%")->get();
            $role_permissions = Permission::where('name','LIKE',"%role%")->get();
            $p_permissions = Permission::where('name','LIKE',"%permission%")->get();
            $category_permissions = Permission::where('name','LIKE',"%categor%")->get();
            $customer_permissions = Permission::where('name','LIKE',"%customer%")->get();
            $sale_permissions = Permission::where('name','LIKE',"%sale%")->get();
            $user_permissions = Permission::where('name','LIKE',"%user%")->orWhere('name','LIKE',"%log%")->orWhere('name','LIKE',"%password%")->orWhere('name','LIKE',"%home%")->get();
            $supplier_permissions = Permission::where('name','LIKE',"%supplier%")->get();

        

        


        return view('permisions.index', [
            'product_permissions' => $product_permissions,
            'role_permissions' => $role_permissions,
            'p_permissions' => $p_permissions,
            'user_permissions' => $user_permissions,
            'category_permissions' => $category_permissions,
            'customer_permissions' => $customer_permissions,
            'supplier_permissions' => $supplier_permissions,
            'sale_permissions' => $sale_permissions,


        ]);
    }

    /**
     * Show form for creating permissions
     * 
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {   
        return view('permisions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'permission_name' => 'required|unique:users,name'
        ]);

        Permission::create(['name'=>$request->input('permission_name')]);

        return redirect()->route('permissions.index')
            ->withSuccess(__('Permission created successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Permission  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {


        return view('permisions.edit',[
            'permission' => $permission
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Permission $permission)
    {

        $request->validate([
            'name' => 'required|unique:permissions,name,'.$permission->id,
        ]);

       


        $permission->update($request->only('name'));

        return redirect()->route('permissions.index')
            ->withSuccess(__('Permission updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        return redirect()->route('permissions.index')
            ->withSuccess(__('Permission deleted successfully.'));
    }
}