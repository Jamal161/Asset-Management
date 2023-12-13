<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert([
            0 => [
                'id' => 1,
                'name' => 'view_activity',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            1 => [
                'id' => 2,
                'name' => 'view_any_activity',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            2 => [
                'id' => 3,
                'name' => 'create_activity',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            3 => [
                'id' => 4,
                'name' => 'update_activity',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            4 => [
                'id' => 5,
                'name' => 'restore_activity',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            5 => [
                'id' => 6,
                'name' => 'restore_any_activity',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            6 => [
                'id' => 7,
                'name' => 'replicate_activity',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            7 => [
                'id' => 8,
                'name' => 'reorder_activity',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            8 => [
                'id' => 9,
                'name' => 'delete_activity',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            9 => [
                'id' => 10,
                'name' => 'delete_any_activity',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            10 => [
                'id' => 11,
                'name' => 'force_delete_activity',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            11 => [
                'id' => 12,
                'name' => 'force_delete_any_activity',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            12 => [
                'id' => 13,
                'name' => 'view_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            13 => [
                'id' => 14,
                'name' => 'view_any_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            14 => [
                'id' => 15,
                'name' => 'create_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            15 => [
                'id' => 16,
                'name' => 'update_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            16 => [
                'id' => 17,
                'name' => 'restore_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            17 => [
                'id' => 18,
                'name' => 'restore_any_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            18 => [
                'id' => 19,
                'name' => 'replicate_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            19 => [
                'id' => 20,
                'name' => 'reorder_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            20 => [
                'id' => 21,
                'name' => 'delete_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            21 => [
                'id' => 22,
                'name' => 'delete_any_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            22 => [
                'id' => 23,
                'name' => 'force_delete_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            23 => [
                'id' => 24,
                'name' => 'force_delete_any_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            24 => [
                'id' => 25,
                'name' => 'view_company::invitation',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            25 => [
                'id' => 26,
                'name' => 'view_any_company::invitation',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            26 => [
                'id' => 27,
                'name' => 'create_company::invitation',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            27 => [
                'id' => 28,
                'name' => 'update_company::invitation',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            28 => [
                'id' => 29,
                'name' => 'restore_company::invitation',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            29 => [
                'id' => 30,
                'name' => 'restore_any_company::invitation',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            30 => [
                'id' => 31,
                'name' => 'replicate_company::invitation',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            31 => [
                'id' => 32,
                'name' => 'reorder_company::invitation',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            32 => [
                'id' => 33,
                'name' => 'delete_company::invitation',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            33 => [
                'id' => 34,
                'name' => 'delete_any_company::invitation',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            34 => [
                'id' => 35,
                'name' => 'force_delete_company::invitation',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            35 => [
                'id' => 36,
                'name' => 'force_delete_any_company::invitation',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            36 => [
                'id' => 37,
                'name' => 'view_employeeship',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            37 => [
                'id' => 38,
                'name' => 'view_any_employeeship',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            38 => [
                'id' => 39,
                'name' => 'create_employeeship',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            39 => [
                'id' => 40,
                'name' => 'update_employeeship',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            40 => [
                'id' => 41,
                'name' => 'restore_employeeship',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            41 => [
                'id' => 42,
                'name' => 'restore_any_employeeship',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            42 => [
                'id' => 43,
                'name' => 'replicate_employeeship',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            43 => [
                'id' => 44,
                'name' => 'reorder_employeeship',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            44 => [
                'id' => 45,
                'name' => 'delete_employeeship',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            45 => [
                'id' => 46,
                'name' => 'delete_any_employeeship',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            46 => [
                'id' => 47,
                'name' => 'force_delete_employeeship',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            47 => [
                'id' => 48,
                'name' => 'force_delete_any_employeeship',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            48 => [
                'id' => 49,
                'name' => 'view_hardware',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            49 => [
                'id' => 50,
                'name' => 'view_any_hardware',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            50 => [
                'id' => 51,
                'name' => 'create_hardware',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            51 => [
                'id' => 52,
                'name' => 'update_hardware',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            52 => [
                'id' => 53,
                'name' => 'restore_hardware',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            53 => [
                'id' => 54,
                'name' => 'restore_any_hardware',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            54 => [
                'id' => 55,
                'name' => 'replicate_hardware',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            55 => [
                'id' => 56,
                'name' => 'reorder_hardware',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            56 => [
                'id' => 57,
                'name' => 'delete_hardware',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            57 => [
                'id' => 58,
                'name' => 'delete_any_hardware',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            58 => [
                'id' => 59,
                'name' => 'force_delete_hardware',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            59 => [
                'id' => 60,
                'name' => 'force_delete_any_hardware',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            60 => [
                'id' => 61,
                'name' => 'view_periphel',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            61 => [
                'id' => 62,
                'name' => 'view_any_periphel',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            62 => [
                'id' => 63,
                'name' => 'create_periphel',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            63 => [
                'id' => 64,
                'name' => 'update_periphel',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            64 => [
                'id' => 65,
                'name' => 'restore_periphel',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            65 => [
                'id' => 66,
                'name' => 'restore_any_periphel',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            66 => [
                'id' => 67,
                'name' => 'replicate_periphel',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            67 => [
                'id' => 68,
                'name' => 'reorder_periphel',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            68 => [
                'id' => 69,
                'name' => 'delete_periphel',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            69 => [
                'id' => 70,
                'name' => 'delete_any_periphel',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            70 => [
                'id' => 71,
                'name' => 'force_delete_periphel',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            71 => [
                'id' => 72,
                'name' => 'force_delete_any_periphel',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            72 => [
                'id' => 73,
                'name' => 'view_provaider',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            73 => [
                'id' => 74,
                'name' => 'view_any_provaider',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            74 => [
                'id' => 75,
                'name' => 'create_provaider',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            75 => [
                'id' => 76,
                'name' => 'update_provaider',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            76 => [
                'id' => 77,
                'name' => 'restore_provaider',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            77 => [
                'id' => 78,
                'name' => 'restore_any_provaider',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            78 => [
                'id' => 79,
                'name' => 'replicate_provaider',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            79 => [
                'id' => 80,
                'name' => 'reorder_provaider',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            80 => [
                'id' => 81,
                'name' => 'delete_provaider',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            81 => [
                'id' => 82,
                'name' => 'delete_any_provaider',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            82 => [
                'id' => 83,
                'name' => 'force_delete_provaider',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            83 => [
                'id' => 84,
                'name' => 'force_delete_any_provaider',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            84 => [
                'id' => 85,
                'name' => 'view_role',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            85 => [
                'id' => 86,
                'name' => 'view_any_role',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            86 => [
                'id' => 87,
                'name' => 'create_role',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            87 => [
                'id' => 88,
                'name' => 'update_role',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            88 => [
                'id' => 89,
                'name' => 'delete_role',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            89 => [
                'id' => 90,
                'name' => 'delete_any_role',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            90 => [
                'id' => 91,
                'name' => 'view_software',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            91 => [
                'id' => 92,
                'name' => 'view_any_software',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            92 => [
                'id' => 93,
                'name' => 'create_software',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            93 => [
                'id' => 94,
                'name' => 'update_software',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            94 => [
                'id' => 95,
                'name' => 'restore_software',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            95 => [
                'id' => 96,
                'name' => 'restore_any_software',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            96 => [
                'id' => 97,
                'name' => 'replicate_software',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            97 => [
                'id' => 98,
                'name' => 'reorder_software',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            98 => [
                'id' => 99,
                'name' => 'delete_software',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            99 => [
                'id' => 100,
                'name' => 'delete_any_software',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            100 => [
                'id' => 101,
                'name' => 'force_delete_software',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            101 => [
                'id' => 102,
                'name' => 'force_delete_any_software',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            102 => [
                'id' => 103,
                'name' => 'page_Profile',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            103 => [
                'id' => 104,
                'name' => 'page_APITokens',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            104 => [
                'id' => 105,
                'name' => 'page_CompanySettings',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            105 => [
                'id' => 106,
                'name' => 'page_CreateCompany',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            106 => [
                'id' => 107,
                'name' => 'widget_EmployeeChart',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            107 => [
                'id' => 108,
                'name' => 'widget_HardwareChart',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            108 => [
                'id' => 109,
                'name' => 'widget_SoftwareChart',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            109 => [
                'id' => 110,
                'name' => 'widget_StatsOverview',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
            110 => [
                'id' => 111,
                'name' => 'widget_PeriphelsChart',
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ],
        ]);

        $premission = [
            'view_user',
            'view_any_user',
            'create_user',
            'update_user',
            'restore_user',
            'restore_any_user',
            'replicate_user',
            'reorder_user',
            'delete_user',
            'delete_any_user',
            'force_delete_user',
            'force_delete_any_user',
            'view_any_schedule',
            'view_schedule',
            'delete_schedule',
            'force_delete_schedule',
            'force_delete_any_schedule',
            'restore_schedule',
            'restore_any_schedule',
            'replicate_schedule',
            'reorder_schedule',
            'page_Artisan',
        ];

        foreach ($premission as $key => $value) {
            \DB::table('permissions')->insert([
                'id' => $key + 112,
                'name' => $value,
                'guard_name' => 'web',
                'created_at' => '2023-06-25 18:53:30',
                'updated_at' => '2023-06-25 18:53:30',
            ]);
        }
    }
}
