<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->truncate();

        $baseURL = 'https://alperick.com/';

        $imagenes = [
            [
                'file_name' => 'DSC_6333-2.webp',
                'file_path' => 'assets/BAUTIZO/DSC_6333-2.webp',
                'category' => 'COBERTURA',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'DSC_6412.webp',
                'file_path' => 'assets/BAUTIZO/DSC_6412.webp',
                'category' => 'COBERTURA',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'DSC_6421.webp',
                'file_path' => 'assets/BAUTIZO/DSC_6421.webp',
                'category' => 'COBERTURA',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'DSC6831ALPE.webp',
                'file_path' => 'assets/BODA/DSC6831ALPE.webp',
                'category' => 'COBERTURA',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'DSC_2224.webp',
                'file_path' => 'assets/BODA/DSC_2224.webp',
                'category' => 'COBERTURA',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'DSC_2386.webp',
                'file_path' => 'assets/BODA/DSC_2386.webp',
                'category' => 'COBERTURA',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'DSC_2398.webp',
                'file_path' => 'assets/BODA/DSC_2398.webp',
                'category' => 'COBERTURA',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'DSC_5910.webp',
                'file_path' => 'assets/BODA/DSC_5910.webp',
                'category' => 'COBERTURA',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'DSC_5922.webp',
                'file_path' => 'assets/BODA/DSC_5922.webp',
                'category' => 'COBERTURA',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'DSC_5986.webp',
                'file_path' => 'assets/BODA/DSC_5986.webp',
                'category' => 'COBERTURA',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'DSC_6149.webp',
                'file_path' => 'assets/BODA/DSC_6149.webp',
                'category' => 'COBERTURA',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'DSC_6150.webp',
                'file_path' => 'assets/BODA/DSC_6150.webp',
                'category' => 'COBERTURA',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'DSC_6467.webp',
                'file_path' => 'assets/BODA/DSC_6467.webp',
                'category' => 'COBERTURA',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'DSC_7352.webp',
                'file_path' => 'assets/BODA/DSC_7352.webp',
                'category' => 'COBERTURA',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'DSC_7380.webp',
                'file_path' => 'assets/BODA/DSC_7380.webp',
                'category' => 'COBERTURA',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'DSC_7436.webp',
                'file_path' => 'assets/BODA/DSC_7436.webp',
                'category' => 'COBERTURA',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'DSC_7558.webp',
                'file_path' => 'assets/BODA/DSC_7558.webp',
                'category' => 'COBERTURA',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'DSC_7619.webp',
                'file_path' => 'assets/BODA/DSC_7619.webp',
                'category' => 'COBERTURA',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'DSC_7700.webp',
                'file_path' => 'assets/BODA/DSC_7700.webp',
                'category' => 'COBERTURA',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'DSC_7783.webp',
                'file_path' => 'assets/BODA/DSC_7783.webp',
                'category' => 'COBERTURA',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'DSC_7820.webp',
                'file_path' => 'assets/BODA/DSC_7820.webp',
                'category' => 'COBERTURA',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'chiapas-1.webp',
                'file_path' => 'assets/CHIAPAS/chiapas-1.webp',
                'category' => 'CHIAPAS',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'chiapas-2.webp',
                'file_path' => 'assets/CHIAPAS/chiapas-2.webp',
                'category' => 'CHIAPAS',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'chiapas-3.webp',
                'file_path' => 'assets/CHIAPAS/chiapas-3.webp',
                'category' => 'CHIAPAS',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'chiapas-4.webp',
                'file_path' => 'assets/CHIAPAS/chiapas-4.webp',
                'category' => 'CHIAPAS',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'chiapas-5.webp',
                'file_path' => 'assets/CHIAPAS/chiapas-5.webp',
                'category' => 'CHIAPAS',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'chiapas-6.webp',
                'file_path' => 'assets/CHIAPAS/chiapas-6.webp',
                'category' => 'CHIAPAS',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'chiapas-7.webp',
                'file_path' => 'assets/CHIAPAS/chiapas-7.webp',
                'category' => 'CHIAPAS',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'chiapas-8.webp',
                'file_path' => 'assets/CHIAPAS/chiapas-8.webp',
                'category' => 'CHIAPAS',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'chiapas-9.webp',
                'file_path' => 'assets/CHIAPAS/chiapas-9.webp',
                'category' => 'CHIAPAS',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'chiapas-11.webp',
                'file_path' => 'assets/CHIAPAS/chiapas-11.webp',
                'category' => 'CHIAPAS',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'vert1.webp',
                'file_path' => 'assets/CHIAPAS/vert1.webp',
                'category' => 'CHIAPAS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'vert2.webp',
                'file_path' => 'assets/CHIAPAS/vert2.webp',
                'category' => 'CHIAPAS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'vert3.webp',
                'file_path' => 'assets/CHIAPAS/vert3.webp',
                'category' => 'CHIAPAS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'vert4.webp',
                'file_path' => 'assets/CHIAPAS/vert4.webp',
                'category' => 'CHIAPAS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'DSC_1435CUNJAMA.webp',
                'file_path' => 'assets/DIA_DE_MUERTOS/DSC_1435CUNJAMA.webp',
                'category' => 'DIA_MUERTOS',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'DSC_9475CUNJAMA.webp',
                'file_path' => 'assets/DIA_DE_MUERTOS/DSC_9475CUNJAMA.webp',
                'category' => 'DIA_MUERTOS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'DSC_9494CUNJAMA.webp',
                'file_path' => 'assets/DIA_DE_MUERTOS/DSC_9494CUNJAMA.webp',
                'category' => 'DIA_MUERTOS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'BackgroundMobile.webp',
                'file_path' => 'assets/IMG/BackgroundMobile.webp',
                'category' => 'LOGOS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'LOGOBYN.png',
                'file_path' => 'assets/IMG/LOGOBYN.png',
                'category' => 'LOGOS',
                'image_type' => 'logo'
            ],

            [
                'file_name' => 'retrato-1.webp',
                'file_path' => 'assets/RETRATOS/retrato-1.webp',
                'category' => 'RETRATOS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'retrato-2.webp',
                'file_path' => 'assets/RETRATOS/retrato-2.webp',
                'category' => 'RETRATOS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'retrato-3.webp',
                'file_path' => 'assets/RETRATOS/retrato-3.webp',
                'category' => 'RETRATOS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'retrato-4.webp',
                'file_path' => 'assets/RETRATOS/retrato-4.webp',
                'category' => 'RETRATOS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'retrato-5.webp',
                'file_path' => 'assets/RETRATOS/retrato-5.webp',
                'category' => 'RETRATOS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'retrato-6.webp',
                'file_path' => 'assets/RETRATOS/retrato-6.webp',
                'category' => 'RETRATOS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'retrato-7.webp',
                'file_path' => 'assets/RETRATOS/retrato-7.webp',
                'category' => 'RETRATOS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'retrato-8.webp',
                'file_path' => 'assets/RETRATOS/retrato-8.webp',
                'category' => 'RETRATOS',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'retrato-9.webp',
                'file_path' => 'assets/RETRATOS/retrato-9.webp',
                'category' => 'RETRATOS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'retrato-10.webp',
                'file_path' => 'assets/RETRATOS/retrato-10.webp',
                'category' => 'RETRATOS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'retrato-11.webp',
                'file_path' => 'assets/RETRATOS/retrato-11.webp',
                'category' => 'RETRATOS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'retrato-12.webp',
                'file_path' => 'assets/RETRATOS/retrato-12.webp',
                'category' => 'RETRATOS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'retrato-13.webp',
                'file_path' => 'assets/RETRATOS/retrato-13.webp',
                'category' => 'RETRATOS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'retrato-14.webp',
                'file_path' => 'assets/RETRATOS/retrato-14.webp',
                'category' => 'RETRATOS',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'sesion-1.webp',
                'file_path' => 'assets/SESIONES/sesion-1.webp',
                'category' => 'NAVIDAD',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'sesion-2.webp',
                'file_path' => 'assets/SESIONES/sesion-2.webp',
                'category' => 'NAVIDAD',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'sesion-3.webp',
                'file_path' => 'assets/SESIONES/sesion-3.webp',
                'category' => 'NAVIDAD',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'sesion-4.webp',
                'file_path' => 'assets/SESIONES/sesion-4.webp',
                'category' => 'NAVIDAD',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'sesion-5.webp',
                'file_path' => 'assets/SESIONES/sesion-5.webp',
                'category' => 'NAVIDAD',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'sesion-6.webp',
                'file_path' => 'assets/SESIONES/sesion-6.webp',
                'category' => 'SESIONES',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'sesion-7.webp',
                'file_path' => 'assets/SESIONES/sesion-7.webp',
                'category' => 'SESIONES',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'sesion-8.webp',
                'file_path' => 'assets/SESIONES/sesion-8.webp',
                'category' => 'SESIONES',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'sesion-9.webp',
                'file_path' => 'assets/SESIONES/sesion-9.webp',
                'category' => 'SESIONES',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'sesion-10.webp',
                'file_path' => 'assets/SESIONES/sesion-10.webp',
                'category' => 'SESIONES',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'sesion-11.webp',
                'file_path' => 'assets/SESIONES/sesion-11.webp',
                'category' => 'SESIONES',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'sesion-12.webp',
                'file_path' => 'assets/SESIONES/sesion-12.webp',
                'category' => 'SESIONES',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'sesion-12.webp',
                'file_path' => 'assets/SESIONES/sesion-12.webp',
                'category' => 'SESIONES',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'xv1.webp',
                'file_path' => 'assets/XV/xv1.webp',
                'category' => 'SESIONES',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'xv2.webp',
                'file_path' => 'assets/XV/xv2.webp',
                'category' => 'SESIONES',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'xv3.webp',
                'file_path' => 'assets/XV/xv3.webp',
                'category' => 'SESIONES',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'xv4.webp',
                'file_path' => 'assets/XV/xv4.webp',
                'category' => 'SESIONES',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'xv5.webp',
                'file_path' => 'assets/XV/xv5.webp',
                'category' => 'SESIONES',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'xv6.webp',
                'file_path' => 'assets/XV/xv6.webp',
                'category' => 'SESIONES',
                'image_type' => 'horizontal'
            ],

            [
                'file_name' => 'xv7.webp',
                'file_path' => 'assets/XV/xv7.webp',
                'category' => 'SESIONES',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'xv8.webp',
                'file_path' => 'assets/XV/xv8.webp',
                'category' => 'SESIONES',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'xv9.webp',
                'file_path' => 'assets/XV/xv9.webp',
                'category' => 'SESIONES',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'xv10.webp',
                'file_path' => 'assets/XV/xv10.webp',
                'category' => 'SESIONES',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'xv11.webp',
                'file_path' => 'assets/XV/xv11.webp',
                'category' => 'SESIONES',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'xv12.webp',
                'file_path' => 'assets/XV/xv12.webp',
                'category' => 'SESIONES',
                'image_type' => 'vertical'
            ],

            [
                'file_name' => 'xv13.webp',
                'file_path' => 'assets/XV/xv13.webp',
                'category' => 'SESIONES',
                'image_type' => 'vertical'
            ],



        ];


        foreach ($imagenes as $imagen) {
            DB::table('images')->insert([
                'file_name' => $imagen['file_name'],
                'file_path' => $baseURL . $imagen['file_path'],
                'category' => $imagen['category'],
                'image_type' => $imagen['image_type']
            ]);
        }
    }
}
