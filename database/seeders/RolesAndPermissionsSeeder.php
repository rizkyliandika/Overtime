<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // PERMISSION
        // Core System
        Permission::create(["name" => "user group"]);
        Permission::create(["name" => "user management"]);
        Permission::create(["name" => "user log"]);
        // End Core System
        // News Management
        Permission::create(["name" => "news management"]);
        // End News Management
        // Management Upload File
        Permission::create(["name" => "upload file"]);
        // End Management Upload File
        // Building Management
        Permission::create(["name" => "tenant management"]);
        Permission::create(["name" => "overtime request"]);
        Permission::create(["name" => "goods transport"]);
        Permission::create(["name" => "ticket mrc"]);
        Permission::create(["name" => "visitor list"]);
        Permission::create(["name" => "overtime approve"]);
        // End Building Management
        // Building Operator
        // Permission::create(["name" => "overtime request"]);
        // End Building Operator
        // Admin Ticket
        Permission::create(["name" => "mrc"]);
        // End Admin Ticket
        // Security
        Permission::create(["name" => "transport"]);
        // End Security
        // Vacation Date
        Permission::create(["name" => "date list"]);
        // End Vacation Date
        // Visitor
        Permission::create(["name" => "photo list id"]);
        Permission::create(["name" => "app photo id"]);
        // End Visitor
        // Overtime
        Permission::create(["name" => "overtime"]);
        // End Overtime

        $administratorRole = Role::create(["name" => "administrator"])->givePermissionTo(Permission::all());
        $buildingOperatorRole = Role::create(["name" => "building-operator"])->givePermissionTo(['tenant management', 'overtime request', 'overtime approve']);
        $tenantRole = Role::create(['name' => 'tenant'])->givePermissionTo('overtime');

        User::create([
            "username" => "admin",
            "firstname" => "admin",
            "lastname" => "admin",
            "email" => "admin@admin.com",
            "password" => bcrypt("admin123456"),
        ])->assignRole($administratorRole);

        User::create([
            "username" => "buildingoperator",
            "firstname" => "building",
            "lastname" => "operator",
            "email" => "buildingoperator@buildingoperator.com",
            "password" => bcrypt("buildingoperator123456"),
        ])->assignRole($buildingOperatorRole);

        User::create([
            "username" => "tenant",
            "firstname" => "tenant",
            "lastname" => "tenant",
            "email" => "tenant@tenant.com",
            "password" => bcrypt("tenant123456"),
        ])->assignRole($tenantRole);
    }
}
