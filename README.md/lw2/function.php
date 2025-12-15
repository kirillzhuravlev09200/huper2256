function alphabeticalOrder(string $str): string
{
    $chars = str_split($str);
    sort($chars);
    return implode('', $chars);
}

function findPerfectNumber(array $numbers): ?int
{
    foreach ($numbers as $number) {
        if ($number <= 0) {
            continue;
        }
        

        $divisors = [];
        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i === 0) {
                $divisors[] = $i;
            }
        }
        

        $sum = array_sum($divisors);
        

        if ($sum === 2 * $number) {
            return $number;
        }
    }
    

    return null;
}

function mostRecent(string $text): string
{
    if (strlen($text) > 1000) {
        throw new InvalidArgumentException('Текст должен содержать не более 1000 символов');
    }
    

    $words = preg_split('/\s+/', trim($text));
    $wordCount = [];
    

    foreach ($words as $word) {
        $word = strtolower($word);
        $word = preg_replace('/[^\p{L}\p{N}]/u', '', $word);
        

        if (empty($word)) {
            continue;
        }
        

        if (!isset($wordCount[$word])) {
            $wordCount[$word] = 0;
        }
        $wordCount[$word]++;
    }
    

    if (empty($wordCount)) {
        return '';
    }
    

    arsort($wordCount);
    return array_key_first($wordCount);
}
