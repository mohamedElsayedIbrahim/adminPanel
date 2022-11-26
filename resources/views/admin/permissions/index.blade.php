<x-app-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <a
                type="button"
                href="{{route("admin.permissions.create")}}"
                class="border border-gray-700 bg-gray-700 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline"
              >
                Create New Permission
            </a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        
                        <!-- Table -->
                        <div class="w-full max-w-1xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                            <header class="px-5 py-4 border-b border-gray-100">
                                <h2 class="font-semibold text-gray-800">Permissions</h2>
                            </header>
                            <div class="p-3">
                                <div class="overflow-x-auto">
                                    <table class="table-auto w-full">
                                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                            <tr>
                                                <th class="p-2 whitespace-nowrap">
                                                    <div class="font-semibold text-left">Name</div>
                                                </th>
                                                <th class="p-2 whitespace-nowrap">
                                                    <div class="font-semibold text-left">Actions</div>
                                                </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm divide-y divide-gray-100">
                                            @foreach ($permissions as $permission)
                                            <tr>
                                                <td class="p-2 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="font-medium text-gray-800">{{$permission->name}}</div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <a href="" class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline"
                                                    >Delete</a>
                                                    <a href="" class="border border-yellow-500 bg-yellow-500 text-white rounded-md px-4 py-1 m-2 transition duration-500 ease select-none hover:bg-yellow-600 focus:outline-none focus:shadow-outline"
                                                    >Edit</a>
                                                </td>
                                                
                                            </tr> 
                                            @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    
            </div>
        </div>
    </div>
</x-app-layout>