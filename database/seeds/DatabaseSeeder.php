<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StatusesTableSeeder::class);
        $this->call(DocumentTypesTableSeeder::class);
        $this->call(AddressTypeTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CurrencyCodesTableSeeder::class);
        $this->call(TaxesTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(FinancialEntitiesTableSeeder::class);
        $this->call(PaymentTypesTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(DeliveryMethodsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderProductsTableSeeder::class);
        $this->call(EstadosTableSeeder::class);
        $this->call(CiudadesTableSeeder::class);
        $this->call(MunicipiosTableSeeder::class);
        $this->call(ParroquiasTableSeeder::class);
    }
}
