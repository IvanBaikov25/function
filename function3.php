<?php
function mostRecent($text) {
    if (strlen($text) > 1000) {
        return "Текст превышает лимит в 1000 символов.";
    }
    $text = strtolower($text);
    $text = preg_replace('/[^ws]/u', ' ', $text);
    $words = preg_split('/s+/', trim($text));
    $wordCount = array_count_values($words);
    $mostFrequentWord = '';
    $maxCount = 0;
    foreach ($wordCount as $word => $count) {
        if ($count > $maxCount) {
            $mostFrequentWord = $word;
            $maxCount = $count;
        }
    }
    return $mostFrequentWord ? $mostFrequentWord : "Нет слов в тексте.";
}
echo "Введите текст (не более 1000 символов):\n";
$text = trim(fgets(STDIN));
$result = mostRecent($text);
echo "Самое часто встречающееся слово: " . $result . "\n";

