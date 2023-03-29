<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Goutte\Client;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class ImageController extends Controller
{
    public function searchImages($name)
{
    $client = new Client();

    $crawler = $client->request('GET', "https://www.google.com/search?q=$name&tbm=isch");

    $images = $crawler->filter('img')->images();

    for ($i=0; $i = 5 ; $i++) { 

        foreach ($images as $key => $image) {
            $imageContent = file_get_contents($image['uri']);
    
            // Storage::put("images/$name/$key.jpg", $imageContent);
    
            Storage::putFile(
                storage_path('C:\xampp\htdocs\puntos de interes\image_generator'),
                request()->file('uploadedFile')
            );
    }
   
    }
}

}
