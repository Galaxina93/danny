<?php

namespace App\Http\Livewire\Global\Crud;

use App\Models\Permission;
use App\Models\Role;

class RightsCrud extends UniversalCrud
{
    public $selectedPermission;

    public function mount(string $configClass = null): void
    {
        parent::mount('crud\\RightsConfig');
        $this->config['fields']['permissions']['data']['permissions'] = Permission::all();
        $this->config['fields']['permissions']['data']['roles'] = Role::with('permissions')->get();
    }

    // CRUD
    public function addPermissionToRole(string $roleId, string $permissionId): void
    {
        $role = Role::findOrFail($roleId);
        $permission = Permission::findOrFail($permissionId);
        $role->permissions()->syncWithoutDetaching([$permission->id]);
        $this->refresh();
    }

    public function deletePermissionFromRole(string $roleId, string $permissionId): void
    {
        $role = Role::findOrFail($roleId);
        $permission = Permission::findOrFail($permissionId);
        $role->permissions()->detach($permission);
        $this->refresh();
    }

    // Refresh-Methode
    public function refresh(): void
    {
        $this->config['fields']['permissions']['data']['permissions'] = Permission::all();
        $this->config['fields']['permissions']['data']['roles'] = Role::with('permissions')->get();
    }
}
