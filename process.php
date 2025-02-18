<?php

// stop Words Filtering
$stopWordsList = [
    'the', 'and', 'in', 'on', 'at', 'to', 'a', 
    'an', 'of', 'for', 'is', 'it', 'this','that', 
    'with', 'as', 'by', 'was', 'were', 'are',
    'be', 'or', 'but', 'from', 'did', 'doing'
];

function tokenizeText($text) {
    // Text Tokenizer
    $text = strtolower($text);
    $text = preg_replace('/[^a-z\s]/', '', $text);
    $words = explode(' ', $text);

    return array_values(array_filter($words, fn($word) => $word !== ''));

}

function calculateWordFrequency($words, $stopWordsList) {
    // Will filter out the stop Words
    $filteredWords = array_diff($words, $stopWordsList);
    return array_count_values($filteredWords);
}

function sortWordFrequency($wordFrequencyCounter, $order) {
    if ($order == 'desc') {
        arsort($wordFrequencyCounter);
    } else {
        asort($wordFrequencyCounter);
    }
    return $wordFrequencyCounter;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputText = $_POST['text'] ?? '';
    $sortingOrder = $_POST['sort'] ?? 'desc';
    $displayLimit = $_POST['limit'] ?? 10;


    $words = tokenizeText($inputText);
    $wordFrequencyCounter = calculateWordFrequency($words, $stopWordsList);
    $sortedWords = sortWordFrequency($wordFrequencyCounter, $sortingOrder);
    // Minimum of 1 word, 50 max
    $sortedWords = array_slice($sortedWords, 0, min(50, max(1, $displayLimit)));
}
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
    <body>

        <h1>Word Frequency Counter Results</h1>
        <?php if (!empty($sortedWords)): ?>

            <table border ="1">
                <tr>
                    <th>Word</th>
                    <th>Frequency</th>
                </tr>
                <?php foreach ($sortedWords as $word => $count): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($word); ?></td>
                        <td><?php echo $count; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        <?php else: ?>
            <p>No words have been found.</p>
        <?php endif; ?>

        <br><br>
        <a href="index.html">Return</a>

    </body>
</html>