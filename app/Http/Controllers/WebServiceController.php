<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WebServiceController 
{
    //private  $url = "https://efricamw.com/api/v1/";
    private  $url = "http://127.0.0.1:1111/api/v1/";
    //
    public function GetAllBlogs():string{
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $blogUrl = $this->url."articles/getblogs";
        $response = Http::withHeaders($headers)->get($blogUrl);
        if ($response->failed()) {
            echo 'HTTP error: ' . $response->status();
            Log::error('HTTP error: ' . $response->status());
        }
        return $response->body();

    }
    public function GetAllNews():string{
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $blogUrl = $this->url."articles/getnews";
        $response = Http::withHeaders($headers)->get($blogUrl);
        if ($response->failed()) {
            echo 'HTTP error: ' . $response->status();
            Log::error('HTTP error: ' . $response->status());
        }
        return $response->body();

    }
    public function GetBlogBySlug(string $slug):string{
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $blogUrl = $this->url."articles/article/".$slug;
        $response = Http::withHeaders($headers)->get($blogUrl);
        if ($response->failed()) {
            echo 'HTTP error: ' . $response->status();
            Log::error('HTTP error: ' . $response->status());
        }
        return $response->body();

    }
}
