<x-admin-layout>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex">
                    <a href="{{route('admin.roles.create')}}" class="px-4 py-2 bg-green-700 hover:bg-green-500 rounded-md">Create</a>
                </div>
                <div class="p-6 text-gray-900">
                    <table style="border-collapse: collapse; width: 100%;">
                        <thead>
                            <tr style="border: 1px solid #000;">
                                <th style="border: 1px solid #000; padding: 8px;">Name</th>
                                <th style="border: 1px solid #000; padding: 8px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr style="border: 1px solid #000;">
                                <td style="border: 1px solid #000; padding: 8px;">{{$role->name}}</td>
                                <td>
                                    <div class="flex justify-end">
                                        <div class="flex space-x-2">
                                         <a href="{{ route('admin.roles.edit', $role->id) }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Edit</a>
                                         <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" method="POST" action="{{ route('admin.roles.destroy', $role->id) }}" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                         </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>