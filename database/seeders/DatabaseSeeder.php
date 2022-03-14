<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
        ]);
        $this->call(AddressesTableSeeder::class);
        $this->call(ContactCompaniesTableSeeder::class);
        $this->call(ContactContactsTableSeeder::class);
        $this->call(DictsTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(ProductProductCategoryTableSeeder::class);
        $this->call(ProductProductTagTableSeeder::class);
        $this->call(ProductTagsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
