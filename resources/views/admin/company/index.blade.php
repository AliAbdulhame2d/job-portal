<x-admin-layout>
    <x-slot name="header">
        {{__('Company Page')}} 
     </x-slot>

     <x-admin.table>
        <x-admin.table-thead>
            <x-admin.table-th>Name</x-admin.table-th>
            <x-admin.table-th>Adress</x-admin.table-th>
            <x-admin.table-th>Telefone</x-admin.table-th>
            <x-admin.table-th>Action</x-admin.table-th>
        </x-admin.table-thead>

        <x-admin.table-tbody>
            <x-admin.table-tr>
                <x-admin.table-td>Ali</x-admin.table-td>
                <x-admin.table-td>Berlin</x-admin.table-td>
                <x-admin.table-td>101010101</x-admin.table-td>
                <x-admin.table-td></x-admin.table-td>
            </x-admin.table-tr>
            <x-admin.table-tr>
                <x-admin.table-td>Ali</x-admin.table-td>
                <x-admin.table-td>Berlin</x-admin.table-td>
                <x-admin.table-td>101010101</x-admin.table-td>
                <x-admin.table-td></x-admin.table-td>
            </x-admin.table-tr>
        </x-admin.table-tbody>

     </x-admin.table>

</x-admin-layout>