<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subscriptions')->insert([
                'name' => 'Lorem Ipsum',
                'package_name' => 'STARTER',
                'price' => '0',
                'type' => 'month',
                'days' => '30',
                'characters_allowed' => '10000',
                'currency' => '$',
                'description' => '<ul class="ul-icon-1">
                                    <li>Lorem Ipsum is simply </li>
                                    <li>Dummy text of the </li>
                                    <li>Printing and typesetting </li>
                                    <li>Industry. </li>
                                    <li>Lorem Ipsum has been</li>
                                    <li>The industry`s standard dummy</li>
                                    <li>Text ever since the 1500s, </li>
                                    <li>When an unknown printer </li>
                                    <li>Took a galley</li>
                                </ul>',
           
            ]);
            DB::table('subscriptions')->insert([
                'name' => 'Lorem Ipsum',
                'package_name' => 'CREATOR',
                'price' => '50',
                'type' => 'month',
                'days' => '30',
                'characters_allowed' => '40000',
                'currency' => '$',
                'description' => '<ul class="ul-icon-2">
                                    <li>Lorem Ipsum is simply </li>
                                    <li>Dummy text of the </li>
                                    <li>Printing and typesetting </li>
                                    <li>Industry. </li>
                                    <li>Lorem Ipsum has been</li>
                                    <li>The industry`s standard dummy</li>
                                    <li>Text ever since the 1500s, </li>
                                    <li>When an unknown printer </li>
                                    <li>Took a galley</li>
                                </ul>',
           
            ]);
            DB::table('subscriptions')->insert([
                'name' => 'Lorem Ipsum',
                'package_name' => 'ENTERPRISE',
                'price' => '100',
                'type' => 'month',
                'days' => '30',
                'characters_allowed' => '90000',
                'currency' => '$',
                'description' => '<ul class="ul-icon-1">
                                    <li>Lorem Ipsum is simply </li>
                                    <li>Dummy text of the </li>
                                    <li>Printing and typesetting </li>
                                    <li>Industry. </li>
                                    <li>Lorem Ipsum has been</li>
                                    <li>The industry`s standard dummy</li>
                                    <li>Text ever since the 1500s, </li>
                                    <li>When an unknown printer </li>
                                    <li>Took a galley</li>
                                </ul>',
           
            ]);
    }
}
