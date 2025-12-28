<?php

namespace App\Services\Remix;

class RemixService
{
    /**
     * Generate 4 variants by adding prefixes/suffixes to the original text.
     *
     * Constraints:
     * - Include the original text in each variant
     * - Add different prefixes/suffixes (hooks, CTAs, etc.)
     * - Stay under 280 characters
     * - No external APIs
     */
    public function variants(string $text): array
    {
        $prefixes = [
            'Quick tip:',
            'Hot take:',
            'This might surprise you:',
            'Friendly reminder:',
        ];

        $suffixes = [
            'Try this today.',
            'What is your opinion about it? Comment below.',
            "You can't miss it!",
            'For more information head to the link in the bio!',
        ];

        $variants = [];
        $text = trim($text);

        for ($i = 0; $i < 4; $i++) {
            $variant = $prefixes[$i] . ' ' . $text . ' ' . $suffixes[$i];

            if (mb_strlen($variant) > 280) {
                $variant = mb_substr($variant, 0, 280);
            }

            $variants[] = $variant;
        }

        return $variants;
    }
}
