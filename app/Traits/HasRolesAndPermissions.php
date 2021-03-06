<?php
namespace App\Traits;

use App\Models\Permission;
use App\Models\Role;

trait HasRolesAndPermissions{

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'users_roles');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'users_permissions');
    }

    public function hasRole($role)
    {
        return $this->roles->contains('slug', $role); //сначала указываем что ищем а потом где, так как коллекция многомерная
    }

    public function hasPermission($permission)
    {
        return $this->permissions->contains('slug', $permission);
    }
}