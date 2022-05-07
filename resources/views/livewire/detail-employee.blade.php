<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        Detalle
    </x-jet-danger-button>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
        Detalle del empleado {{$employee['name']}}
        </x-slot>
        <x-slot name="content">
        <div class="mb-4" align="center">
            <x-jet-label value="Nombre"/>{{$employee['name']}} 
            <x-jet-label value="Email"/>{{$employee['email']}} 
            <x-jet-label value="Telefono"/>{{$employee['phone']}} 
            <x-jet-label value="Dirección"/>{{$employee['address']}}
            <x-jet-label value="Posición"/>{{$employee['position']}}
            <x-jet-label value="Salario"/>{{$employee['salary']}}
            <x-jet-label value="Skills"/>{{$employee['skills']}} 
        </div>

        </x-slot>
        <x-slot name="footer">

        </x-slot>
        
    </x-jet-dialog-modal>
</div>
