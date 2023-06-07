<?php

namespace App\Console\Commands;

use App\Models\Role;
use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Laratrust\Models\LaratrustRole;

class ChangeUserRole extends Command
{
    protected $signature = 'user:change-role {email : The email address of the user} {role : The new role name}';
    protected $description = 'Change the role of a user';

    public function handle()
    {
        // Get the email and new role name from the command arguments
        $email = $this->argument('email');
        $roleName = $this->argument('role');

        // Find the user by email
        $user = User::where('email', $email)->first();

        // Validate the new role name
        $role = Role::where('name', $roleName)->first();
        if (!$role) {
            $this->error("Role '$roleName' not found.");
            return;
        }

        // Assign the new role to the user
        $user->syncRoles([$role->id]);

        // Output a success message
        $this->info("Role of user '$email' changed to '$roleName'");
    }
}
