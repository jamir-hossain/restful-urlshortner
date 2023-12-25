<?php

namespace App\Http\Controllers\API\V1;

use App\Models\ShortenedUrl;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreShortenedUrlRequest;
use App\Http\Requests\UpdateShortenedUrlRequest;
use App\Http\Resources\ShortenedUrlResource;
use Symfony\Component\HttpFoundation\Response;

class ShortenedUrlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $urls = ShortenedUrl::query()
            ->where('user_id', auth()->user()->id)
            ->get();

        return response()->json([
            'status' => Response::HTTP_ACCEPTED,
            'message' => 'The list of your created short urls',
            'data' => ShortenedUrlResource::collection($urls)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShortenedUrlRequest $request)
    {
        $shorted = ShortenedUrl::query()
            ->where('main_url', $request->main_url)
            ->first();

        if (!$shorted) {
            $slug = Str::random(12);

            $shorted = ShortenedUrl::create([
                'slug' => $slug,
                'main_url' => $request->main_url,
                'short_url' => url("/$slug"),
                'user_id' => auth()->user()->id,
            ]);
        }

        return response()->json([
            'status' => Response::HTTP_CREATED,
            'message' => 'Url successfully shortened',
            'data' => new ShortenedUrlResource($shorted)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ShortenedUrl $shortenedUrl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShortenedUrlRequest $request, ShortenedUrl $shortenedUrl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShortenedUrl $shortenedUrl)
    {
        //
    }
}
