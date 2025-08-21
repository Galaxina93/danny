<div class="@if(isset($class)){{ $class }}@endif">
    <div class="mt-1 flex">
        <div class="flex flex-wrap">
            @foreach($data['roles'] as $roleArray)
                @php
                    $role = (object)$roleArray;
                @endphp
                <div class="m-3">
                    <h3 class="text-xl font-semibold mb-2">{{ $role->name }}</h3>
                    @foreach($role->permissions as $permissionArray)
                        @php
                            $permission = (object)$permissionArray;
                        @endphp
                        <span class="flex items-center justify-between inline-block px-2 py-0.5 text-red-800 bg-primary bg-opacity-10 rounded-full m-1 hover:bg-opacity-25">
                            <span>{{ $permission->name }}</span>
                            <span wire:click="deletePermissionFromRole('{{ $role->id }}', '{{ $permission->id }}')"
                                  class="flex cursor-pointer"
                                  title="Löschen">
                                <x-heroicon-m-trash class="hero-icons"/>
                            </span>
                        </span>

                    @endforeach
                    <div class="mt-2">
                        <label class="text-sm font-medium text-gray-900 dark:text-white">Füge Berechtigung hinzu:</label>
                        <select wire:model="selectedPermission" class="rounded border-gray-300">
                            <option value="">Wähle eine Berechtigung...</option>
                            @foreach($data['permissions'] as $permissionArray)
                                @php
                                    $permission = (object)$permissionArray;
                                @endphp
                                <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                            @endforeach
                        </select>

                        <x-forms.button wire:loading.remove wireClick="addPermissionToRole('{{ $role->id }}', '{{ $selectedPermission }}')" title="Hinzufügen" category="secondary" class="mt-4"/>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
