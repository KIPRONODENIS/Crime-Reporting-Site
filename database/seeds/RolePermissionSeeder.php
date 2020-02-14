<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
class RolePermissionSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

      // create permissions
Permission::create(['name' => 'add police']);
Permission::create(['name' => 'delete police']);
Permission::create(['name' => 'update articles']);
//permission concerning cases
Permission::create(['name' => 'cancel case']);
Permission::create(['name' => 'update case']);
Permission::create(['name' => 'delete case']);

//role creation
$role = Role::create(['name' => 'police']);
$role->givePermissionTo(['cancel case','update case','delete case']);

//ASSIGN SOME USERS RoleS
User::find(2)->assignRole('police');

    }
}
