<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Remix\RemixService;
use Illuminate\Http\Request;

class RemixController extends Controller
{
    public function store(Request $request, RemixService $remixService)
    {
        // TODO (candidate): validate request properly (min/max, required, string)
        // TODO (candidate): generate exactly 4 variants via RemixService
        // TODO (candidate): return { variants: [...] }

        return response()->json([
            'variants' => [
                $request->input('text', ''),
                $request->input('text', ''),
                $request->input('text', ''),
                $request->input('text', ''),
            ],
        ]);
    }
}
