

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create permission</title>
    @vite('resources/css/app.css')
</head>
<body>

    <div class="w-4/5 m-auto m-auto mt-20">
      <div class="bg-green-700  h-12">
        <h4 class="uppercase text-white py-2 mx-2">Create New Permission</h4>

      </div>
        <form action="{{ route('permissions.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="permission_name">
              Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
             id="permission_name" type="text" placeholder="Enter permission name" name="permission_name">
          </div>

          <button class="bg-green-700 hover:bg-green-600 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded float-right my-10">
            Save Permission
          </button>
        </div>
        </form>
          
    </div>
</body>
</body>
</html>




       
