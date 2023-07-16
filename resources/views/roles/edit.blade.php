<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit role</title>
    @vite('resources/css/app.css')
</head>
<body>

    <div class="w-10/11 m-auto m-auto mt-10">
      <div class="bg-green-700  h-12 fixed w-full z-50 top-0">
        <h4 class="uppercase text-white font-bold my-3 mx-6">Edit {{ $role->name }} Role</h4>
      </div>

      {!! Form::open(array('route' => ['roles.update',$role->id], 'method' => 'POST','class'=>'bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4')) !!}
      @method('PATCH')
          @csrf
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
             id="name" type="text" placeholder="Enter role name" value="{{ $role->name }}" name="name" required>
          </div>

          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="role_description">
              Role Description
            </label>
            <textarea rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
             name="description"  placeholder="Please enter a description for the role" required>{{ $role->description }}</textarea>
        </div>

{{-- PERMISSIONS FOR PERMISSION MANAGEMENT --}}
            <div>
                <hr>
                <h4 class="text-green-700 font-bold">Permision Management Permissions</h4>
                <hr>
                <div class="grid grid-flow-row grid-cols-4 p-6 pt-4">
                    @foreach($p_permissions as $permission)
                    <span>
                    {{ Form::checkbox('permission[]', $permission->id, in_array($permission->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                    {{ $permission->name }}
                  </span>
                         
                  @endforeach
    
                </div>

            </div>

            {{-- PERMISSIONS FOR PERMISSION MANAGEMENT --}}
            <div>
                <hr>
                <h4 class="text-green-700 font-bold">Product Management Permissions</h4>
                <hr>
                <div class="grid grid-flow-row grid-cols-4 p-6 pt-4">
                    @foreach($product_permissions as $permission)
                    <span>
                      {{ Form::checkbox('permission[]', $permission->id, in_array($permission->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                      {{ $permission->name }}
                    </span>
                         
                  @endforeach
    
                </div>

            </div>

            {{-- PERMISSIONS FOR CATEGORY MANAGEMENT --}}
            <div>
                <hr>
                <h4 class="text-green-700 font-bold">Category Management Permissions</h4>
                <hr>
                <div class="grid grid-flow-row grid-cols-5 p-6 pt-4">
                    @foreach($category_permissions as $permission)
                    <span>
                      {{ Form::checkbox('permission[]', $permission->id, in_array($permission->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                      {{ $permission->name }}
                    </span>
                         
                  @endforeach
    
                </div>

            </div>

            {{-- PERMISSIONS FOR USER MANAGEMENT --}}
            <div>
                <hr>
                <h4 class="text-green-700 font-bold">User Management Permissions</h4>
                <hr>
                <div class="grid grid-flow-row grid-cols-5 p-6 pt-4">
                    @foreach($user_permissions as $permission)
                    <span>
                      {{ Form::checkbox('permission[]', $permission->id, in_array($permission->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                      {{ $permission->name }}
                    </span>
                         
                  @endforeach
    
                </div>

            </div>

            {{-- PERMISSIONS FOR CUSTOMER MANAGEMENT --}}
            <div>
                <hr>
                <h4 class="text-green-700 font-bold">Customer Management Permissions</h4>
                <hr>
                <div class="grid grid-flow-row grid-cols-5 p-6 pt-4">
                    @foreach($customer_permissions as $permission)
                    <span>
                      {{ Form::checkbox('permission[]', $permission->id, in_array($permission->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                      {{ $permission->name }}
                    </span>
                         
                  @endforeach
    
                </div>

            </div>

            {{-- PERMISSIONS FOR PERMISSION MANAGEMENT --}}
            <div>
                <hr>
                <h4 class="text-green-700 font-bold">Supplier Management Permissions</h4>
                <hr>
                <div class="grid grid-flow-row grid-cols-5 p-6 pt-4">
                    @foreach($supplier_permissions as $permission)
                    <span>
                      {{ Form::checkbox('permission[]', $permission->id, in_array($permission->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                      {{ $permission->name }}
                    </span>
                         
                  @endforeach
    
                </div>

            </div>

          <button class="bg-green-700 hover:bg-green-600 w-1/4 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded float-right my-10">
            Save Role Changes
          </button>
        </div>
        {!! Form::close() !!}
        
          
    </div>
</body>