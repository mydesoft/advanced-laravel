<?php

namespace App\Http\Controllers;

use App\PostCardService\PostCard;
use App\PostCardService\PostCardService;
use Illuminate\Http\Request;

class FacadesController extends Controller
{
    public function postcards(PostCardService $postCardService){

        $postCardService->hello('A new Welcome Message', 'olu@test.com');
    }

    public function facades(){

        PostCard::hello('Facades method of implementation', 'mide@test.com');
    }
}
