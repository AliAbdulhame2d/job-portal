<x-admin-layout>
    <x-slot name="header">
        {{__('Company Page')}} 
     </x-slot>
     
     <x-admin.link :href="route('admin.companies.create')" variant="primary" class="mb-3">Add Company +</x-admin.link>
     
     <x-admin.table.table>

        <x-admin.table.thead>
            <x-admin.table.tr>
                <x-admin.table.th>Company Name</x-admin.table.th>
                <x-admin.table.th>Location</x-admin.table.th>
                <x-admin.table.th>Phone</x-admin.table.th>
                <x-admin.table.th>Email</x-admin.table.th>
                <x-admin.table.th>Website</x-admin.table.th>
                <x-admin.table.th>Owner</x-admin.table.th>
                <x-admin.table.th>Description</x-admin.table.th>
                <x-admin.table.th>Action</x-admin.table.th>   
            </x-admin.table.tr>
        </x-admin.table.thead>
     

        <x-admin.table.tbody>
            @foreach ($companies as $company)

            <x-admin.table.tr>
                <x-admin.table.td>{{$company->name}}</x-admin.table.td>
                <x-admin.table.td>{{$company->location}}</x-admin.table.td>
                <x-admin.table.td>{{$company->phone}}</x-admin.table.td>
                <x-admin.table.td>{{$company->email}}</x-admin.table.td>
                <x-admin.table.td>{{$company->website}}</x-admin.table.td>
                <x-admin.table.td>{{$company->user->name}}</x-admin.table.td>
                <x-admin.table.td>{{$company->description}}</x-admin.table.td>

                <x-admin.table.td>
                    <x-admin.link :href="route('admin.companies.edit',$company)" variant="warning" class="px-6">Edit</x-admin.link>
             
                    <form method="POST" action="{{route('admin.companies.destroy',$company)}}" class="inline-block mt-1">
                        @csrf
                        @method('DELETE')
                        <x-admin.button variant="danger" type="submit">
                            Delete
                        </x-admin.button>
                    </form>

                </x-admin.table.td>

            </x-admin.table.tr>
            @endforeach
        </x-admin.table.tbody>
     </x-admin.table.table>

</x-admin-layout>
