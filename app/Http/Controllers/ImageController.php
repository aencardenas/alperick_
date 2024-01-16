<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
   

    public function getAllImages()
    {
        // Recupera todas las imágenes
        $images = Image::all();

        // Crea un array vacío para almacenar las imágenes organizadas
        $organizedImages = [];

        // Organiza las imágenes por categoría y orientación
        foreach ($images as $image) {
            $category = $image->category;
            $orientation = $image->image_type;

            // Agrega la imagen al array correspondiente
            $organizedImages[$category][$orientation][] = $image;
        }

        // Devuelve las imágenes organizadas como respuesta en formato JSON
        return response()->json($organizedImages);
    }
}
