<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller{

    public function index(){

        //$cities = DB::table('city')->select('id', 'name')->whereIn('id', [1, 2, 3])->get();
        //$cities = DB::table('city')->select('id', 'name')->where('name', 'like', 'am%')->get();
        //$cities = DB::table('users')->whereDate('created_at', '>', '2024-02-01')->get();
        /* $cities = DB::table('city')
            ->select('city.id', 'city.name', 'city.CountryCode', 'country.name as country_name')
            ->leftJoin('country', 'city.CountryCode', '=', 'country.Code')
            ->limit(10)
            ->offset(10)
            ->get(); */
        /* $cities = DB::table('city')
            ->selectRaw('sum(Population) as s_p, CountryCode, Name')
            ->groupBy('CountryCode')
            ->having('s_p', '>' , 10_000_000)
            ->get(); */


        /* dump($cities); */
        /* dump(
            DB::table('users')->insertOrIgnore([
                [
                'name' => 'User 2',
                'email' => 'user2@mail.com',
                'password' => '222',
                ],
                [
                'name' => 'User 4',
                'email' => 'user4@mail.com',
                'password' => '444',
                ]
            ])
        ); */

        /* dump(
            DB::table('users')->insertGetId([
                'name' => 'User 5',
                'email' => 'user5@mail.com',
                'password' => '222'
            ])
        ); */

        /* dump(
            DB::table('users')
                ->where('id', '=', 8)
                ->update(['name' => 'Darc', 'email'=> 'darc@mail.com'])
        ); */

        /* dump(
            DB::table('users')
                ->updateOrInsert(
                    ['email' => 'darc2@mail.com'],
                    ['name' => 'Darc New 3', 'password' => 'new_password3']
                )
        ); */

        dump(
            DB::table('users')->where('id', '>', 3)->delete()
        );

    }

}
