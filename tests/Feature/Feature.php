<?php

namespace Tests\Feature;


use App\Admin;
use App\Employee;
use App\Technician;
use App\User;
use Tests\TestCase;


class Feature extends TestCase {

    /**
     * @return mixed
     */
    protected function makeTechnician()
    {
        return factory(User::class)
            ->create()
            ->roles()
            ->attach(Technician::ROLE_ID);
    }


    public function makeAdmin()
    {
        return factory(User::class)
            ->create()
            ->roles()
            ->attach(Admin::ROLE_ID);
    }


    public function makeEmployee()
    {
        return factory(User::class)
            ->create()
            ->roles()
            ->attach(Employee::ROLE_ID);
    }


    public function makeUser()
    {
        return factory(User::class)
            ->create();
    }

}