<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show role</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <div class="bg-green-700  h-12 fixed w-full z-50 top-0">
        <h4 class="uppercase text-white font-bold my-3 mx-5">Viewing {{ $role->name }} Role</h4>
    
    </div>
{{-- displaying assigned permissions when viewing a role --}}
    <div class="mt-16 w-11/12 m-auto">
        <h3 class="pb-2 font-bold">Assigned Permissions</h3>

    {{-- PERMISSIONS FOR USER MANAGEMENT --}}
    <div >
        <hr>
        <h4 class="text-green-700 font-bold">User Management Permissions</h4>
        <hr>
        <div class="grid grid-flow-row grid-cols-4 p-6 pt-4">
            @if($userPermissions->isEmpty())
            <span><i class="fas fa-times p-2 text-gray-400"></i>No permissions assigned</span>
            @else
                @foreach($userPermissions as $permission)
                    @if($role->hasPermissionTo($permission->name))
                    <span><i class="fas fa-check text-gray-400 p-2"></i>{{ $permission->name }}</span>

                    @endif
                    
                @endforeach
            @endif

        </div>
    </div>

    {{-- PERMISSIONS FOR PRODUCT MANAGEMENT --}}
    <div>
        
        <hr>
        <h4 class="text-green-700 font-bold">Product Management Permissions</h4>
        <hr>
        <div class="grid grid-flow-row grid-cols-4 p-6 pt-4">
            @if($productPermissions->isEmpty())
            <span><i class="fas fa-times p-2 text-gray-400"></i>No permissions assigned</span>
       @else
           @foreach($productPermissions as $permission)
               @if($role->hasPermissionTo($permission->name))
               <span><i class="fas fa-check text-gray-400 p-2"></i>{{ $permission->name }}</span>

               @endif
            
           @endforeach
       @endif

        </div>
    </div>

    {{-- PERMISSIONS FOR CUSTOMER MANAGEMENT --}}
    <div>
        
        <hr>
        <h4 class="text-green-700 font-bold">Customer Management Permissions</h4>
        <hr>
        <div class="grid grid-flow-row grid-cols-4 p-6 pt-4">
            @if($customerPermissions->isEmpty())
            <span><i class="fas fa-times p-2 text-gray-400"></i>No permissions assigned</span>
       @else
           @foreach($customerPermissions as $permission)
               @if($role->hasPermissionTo($permission->name))
               <span><i class="fas fa-check text-gray-400 p-2"></i>{{ $permission->name }}</span>

               @endif
            
           @endforeach
       @endif

        </div>
    </div>

    {{-- PERMISSIONS FOR CATEGORY MANAGEMENT --}}
    <div>
        
        <hr>
        <h4 class="text-green-700 font-bold">Category Management Permissions</h4>
        <hr>
        <div class="grid grid-flow-row grid-cols-4 p-6 pt-4">
            @if($categoryPermissions->isEmpty())
            <span><i class="fas fa-times p-2 text-gray-400"></i>No permissions assigned</span>
       @else
           @foreach($categoryPermissions as $permission)
               @if($role->hasPermissionTo($permission->name))
               <span><i class="fas fa-check text-gray-400 p-2"></i>{{ $permission->name }}</span>

               @endif
            
           @endforeach
       @endif

        </div>
    </div>

    {{-- PERMISSIONS FOR SALE MANAGEMENT --}}
    <div>
        
        <hr>
        <h4 class="text-green-700 font-bold">Sale Management Permissions</h4>
        <hr>
        <div class="grid grid-flow-row grid-cols-4 p-6 pt-4">
            @if($salePermissions->isEmpty())
            <span><i class="fas fa-times p-2 text-gray-400"></i>No permissions assigned</span>
       @else
           @foreach($salePermissions as $permission)
               @if($role->hasPermissionTo($permission->name))
               <span><i class="fas fa-check text-gray-400 p-2"></i>{{ $permission->name }}</span>

               @endif
            
           @endforeach
       @endif

        </div>
    </div>

    {{-- PERMISSIONS FOR SUPPLIER MANAGEMENT --}}
    <div>
        
        <hr>
        <h4 class="text-green-700 font-bold">Supplier Management Permissions</h4>
        <hr>
        <div class="grid grid-flow-row grid-cols-4 p-6 pt-4">
            @if($supplierPermissions->isEmpty())
            <span><i class="fas fa-times p-2 text-gray-400"></i>No permissions assigned</span>
       @else
           @foreach($supplierPermissions as $permission)
               @if($role->hasPermissionTo($permission->name))
               <span><i class="fas fa-check text-gray-400 p-2"></i>{{ $permission->name }}</span>

               @endif
            
           @endforeach
       @endif

        </div>
    </div>

    {{-- PERMISSIONS FOR ROLE MANAGEMENT --}}
    <div>
        
        <hr>
        <h4 class="text-green-700 font-bold">Role Management Permissions</h4>
        <hr>
        <div class="grid grid-flow-row grid-cols-4 p-6 pt-4">
            @if($rolePermissions->isEmpty())
                 <span><i class="fas fa-times p-2 text-gray-400"></i>No permissions assigned</span>
            @else
                @foreach($rolePermissions as $permission)
                    @if($role->hasPermissionTo($permission->name))
                    <span><i class="fas fa-check text-gray-400 p-2"></i>{{ $permission->name }}</span>

                    @endif
                 
                @endforeach
            @endif

        </div>
    </div>

    {{-- PERMISSIONS FOR PERMISSION MANAGEMENT --}}
    <div>
        
        <hr>
        <h4 class="text-green-700 font-bold">Permission Management Permissions</h4>
        <hr>
        <div class="grid grid-flow-row grid-cols-4 p-6 pt-4">
            @if($Permissions->isEmpty())
                 <span><i class="fas fa-times p-2 text-gray-400"></i>No permissions assigned</span>
            @else
                @foreach($Permissions as $permission)
                    @if($role->hasPermissionTo($permission->name))
                    <span><i class="fas fa-check text-gray-400 p-2"></i>{{ $permission->name }}</span>

                    @endif
                 
                @endforeach
            @endif

        </div>
    </div>
    

    </div>

    
</body>
</html>












