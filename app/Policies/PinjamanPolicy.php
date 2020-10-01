<?php

namespace App\Policies;

use App\User;
use App\Pinjaman;
use Illuminate\Auth\Access\HandlesAuthorization;

class PinjamanPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update($tanggal_pengembalian,$status_ontime)
    {
        $pinjaman=Pinjaman::find(1);
        $pinjaman->tanggal_pengembalian=$tanggal_pengembalian;
       
    }
}
