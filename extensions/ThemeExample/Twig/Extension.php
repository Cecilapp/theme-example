<?php

namespace ThemeExample\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Example theme Twig extension.
 */
class Extension extends AbstractExtension
{
    /** Average reading speed, in words per minute. */
    private const WORDS_PER_MINUTE = 200;

    public function getFilters(): array
    {
        return [
            new TwigFilter('example_reading_time', [$this, 'readingTime']),
        ];
    }

    /**
     * Returns the estimated reading time of a content (HTML or text), in minutes (at least 1).
     */
    public function readingTime(?string $content): int
    {
        $words = str_word_count(strip_tags((string) $content));

        return max(1, (int) ceil($words / self::WORDS_PER_MINUTE));
    }
}
