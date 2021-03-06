<?php

use Illuminate\Database\Seeder;
use App\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permission = [
          [

            'name' => 'role-list',

            'display_name' => 'Display Role Listing',

            'description' => 'See only Listing Of Role'

          ],

          [

            'name' => 'role-create',

            'display_name' => 'Create Role',

            'description' => 'Create New Role'

          ],

          [

            'name' => 'role-edit',

            'display_name' => 'Edit Role',

            'description' => 'Edit Role'

          ],

          [

            'name' => 'role-delete',

            'display_name' => 'Delete Role',

            'description' => 'Delete Role'

          ],
          [

              'name' => 'user-delete',

              'display_name' => 'Delete User ',

              'description' => 'Delete User'

          ],
          [

          'name' => 'user-list',

          'display_name' => 'DisplayUser Listing',

          'description' => 'See only Listing Of Role'

        ],

        [

          'name' => 'user-create',

          'display_name' => 'Create User',

          'description' => 'Create New User'

        ],

        [

          'name' => 'user-edit',

          'display_name' => 'Edit User',

          'description' => 'Edit User'

        ]
      ] ;
      foreach ($permission as $key => $value) {
        # code...
        Permission::create($value);
      }
        /*for($i=0 ; $i< count($permission); $i++)
        {

        }*/

    }
}
