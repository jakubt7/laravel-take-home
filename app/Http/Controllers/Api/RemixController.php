<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Remix\RemixService;
use Illuminate\Http\Request;

class RemixController extends Controller
{
    public function store(Request $request, RemixService $remixService)
    {
        $validated = $request->validate([
            'text' => ['required', 'string', 'min:20', 'max:280'],
        ]);

        $variants = $remixService->variants($validated['text']);

        return response()->json([
            'variants' => $variants,
        ]);
    }
}
