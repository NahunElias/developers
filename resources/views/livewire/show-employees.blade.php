<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
           

            <div class="px-6 py-4 flex intems-center">
                <x-jet-input class="flex-1" placeholder="Escriba un email" type="text" wire:model="search" />
            </div>
            <div class="px-6 py-4">
                <x-jet-input class="flex-1" placeholder="Escriba rango inicial" type="number" wire:model="rango1" />
            </div>
            <div class="px-6 py-4">
                <x-jet-input class="flex-1" placeholder="Escriba rango final" type="number" wire:model="rango2" />
            </div>

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Position
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Salary
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{$employee['name']}}
                        </th>
                        <td class="px-6 py-4">
                            {{$employee['email']}}
                        </td>
                        <td class="px-6 py-4">
                            {{$employee['position']}}
                        </td>
                        <td class="px-6 py-4">
                            {{$employee['salary']}}
                        </td>
                        <td class="px-6 py-4">
                            @livewire('detail-employee', ['employee' => $employee], key($employee['id']))
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>