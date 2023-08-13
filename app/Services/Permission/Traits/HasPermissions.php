<?php
namespace App\Services\Permission\Traits;
use Illuminate\Support\Arr;
use App\Models\Permission;

trait HasPermissions
{
    public function permissions ()
    {
        return $this->belongstomany(Permission::class);
        
    }
    public function givePermissionsTo(... $permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        if ($permissions->isEmpty()) return $this;
        $this->permissions()->syncWithoutDetaching($permissions);

    }
    protected function getAllPermissions(array $permissions)
    {
        return Permission::wherein('name',Arr::flatten($permissions))->get(); 

    }
}