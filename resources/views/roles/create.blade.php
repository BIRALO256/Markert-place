<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Roles</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit role</title>
    @vite('resources/css/app.css')
</head>
<body>

    <div class="w-10/11 m-auto m-auto mt-10">
        <div class="bg-green-700  h-12 fixed w-full z-50 top-0">
          <h4 class="uppercase text-white font-bold my-3 mx-6">Create a Role</h4>
        </div>
        {!! Form::open(array('route' => 'roles.store', 'method' => 'POST','class'=>'bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4')) !!}
        @csrf
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="role_name">
                Name
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
               id="role_name" name="name" type="text" placeholder="Please enter the role name" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="role_description">
                  Role Description
                </label>
                <textarea rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                 name="description" placeholder="Please enter a description for the role" required></textarea>
            </div>
            <h4>Assign permisions to role</h4>

            <div class="py-5">
                <span><input type="checkbox" name="all_permissions" id="all_permissions">Grant all</span>
            </div>

            {{-- PERMISSIONS FOR USER MANAGEMENT --}}
            <div>
              <hr>
              <h4 class="text-green-700 font-bold">User Management Permissions</h4>
              <hr>
              <div class="grid grid-flow-row grid-cols-4 p-6 pt-4">
                  @foreach($user_permissions as $permission)
                  <label>{{ Form::checkbox('permission[]', $permission->id, false, array('class' => 'permission')) }}
                    {{ $permission->name }}</label>
                       
                @endforeach
  
              </div>

             </div>
  
              {{-- PERMISSIONS FOR PERMISSION MANAGEMENT --}}
              <div>
                  <hr>
                  <h4 class="text-green-700 font-bold">Permision Management Permissions</h4>
                  <hr>
                  <div class="grid grid-flow-row grid-cols-4 p-6 pt-4">
                      @foreach($p_permissions as $permission)
                      <label>{{ Form::checkbox('permission[]', $permission->id, false, array('class' => 'permission')) }}
                        {{ $permission->name }}</label>
                           
                    @endforeach
      
                  </div>
  
                </div>
  
              {{-- PERMISSIONS FOR PRODUCT MANAGEMENT --}}
              <div>
                  <hr>
                  <h4 class="text-green-700 font-bold">Product Management Permissions</h4>
                  <hr>
                  <div class="grid grid-flow-row grid-cols-4 p-6 pt-4">
                      @foreach($product_permissions as $permission)
                      <label>{{ Form::checkbox('permission[]', $permission->id, false, array('class' => 'permission')) }}
                        {{ $permission->name }}</label>
                           
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
                      <label>{{ Form::checkbox('permission[]', $permission->id, false, array('class' => 'permission')) }}
                        {{ $permission->name }}</label>
                           
                    @endforeach
      
                  </div>
  
                </div>
  
              {{-- PERMISSIONS FOR ROLE MANAGEMENT --}}
              <div>
                  <hr>
                  <h4 class="text-green-700 font-bold">Role Management Permissions</h4>
                  <hr>
                  <div class="grid grid-flow-row grid-cols-5 p-6 pt-4">
                      @foreach($role_permissions as $permission)
                      <label>{{ Form::checkbox('permission[]', $permission->id, false, array('class' => 'permission')) }}
                        {{ $permission->name }}</label>
                           
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
                      <label>{{ Form::checkbox('permission[]', $permission->id, false, array('class' => 'permission')) }}
                        {{ $permission->name }}</label>
                           
                    @endforeach
      
                  </div>
  
                </div>
  
              {{-- PERMISSIONS FOR SUPPLIER MANAGEMENT --}}
              <div>
                  <hr>
                  <h4 class="text-green-700 font-bold">Supplier Management Permissions</h4>
                  <hr>
                  <div class="grid grid-flow-row grid-cols-5 p-6 pt-4">
                      @foreach($supplier_permissions as $permission)
                      <label>{{ Form::checkbox('permission[]', $permission->id, false, array('class' => 'permission')) }}
                        {{ $permission->name }}</label>
                           
                    @endforeach
      
                  </div>
  
                </div>

              {{-- PERMISSIONS FOR SALE MANAGEMENT --}}
              <div>
                <hr>
                <h4 class="text-green-700 font-bold">Sale Management Permissions</h4>
                <hr>
                <div class="grid grid-flow-row grid-cols-4 p-6 pt-4">
                    @foreach($sale_permissions as $permission)
                    <label>{{ Form::checkbox('permission[]', $permission->id, false, array('class' => 'permission')) }}
                      {{ $permission->name }}</label>
                         
                  @endforeach
    
                </div>

              </div>
  
            <button class="bg-green-700 hover:bg-green-600 w-1/5 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded float-right my-10">
              Save Role
            </button>
          </div>
          {!! Form::close() !!}

            
      </div>


      <script type="text/javascript">
      const grantAllPermissions=document.getElementById('all_permissions');
      const checkboxes=document.getElementsByClassName('permission');
      grantAllPermissions.addEventListener('change',function(){
        const isChecked=grantAllPermissions.checked;
        for (let i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = isChecked;
      }
      })
      </script>
</body>
</html>
