<?php
$tests = [
    [6, 3, 2, 2],
    [8, 0, 4, 6],
    [1, 9, 2, 5],
    [3, 3, 2, 1],
    [4, 4, 6, 8],
    [9, 9, 9, 9],
    // 以下は簡易版では解けない
    // [4, 0, 6, 8],
    // [9, 5, 2, 1],
    // [1, 3, 2, 3],
    // [6, 4, 8, 4],
    // [1, 1, 5, 8],
    // [3, 4, 7, 8],
];

foreach ($tests as $test) {

    // 組み立てた数式とその計算結果を全パターン溜めておく配列
    $results = [];

    foreach ($test as $i => $number) {
        // 最初は1つ目の数自体をここまでの結果として溜める
        if ($i === 0) {
            $results = [
                [
                    'expression' => $number,
                    'value' => $number,
                ],
            ];
            continue;
        }

        // ここまでに溜まっている計算結果すべてに対して、次の数との四則演算をすべて試し、その結果で $results を上書きする
        $newResults = [];
        foreach ($results as $result) {
            $newResults[] = [
                'expression' => sprintf('(%s + %d)', $result['expression'], $number),
                'value' => $result['value'] + $number,
            ];
            $newResults[] = [
                'expression' => sprintf('(%s - %d)', $result['expression'], $number),
                'value' => $result['value'] - $number,
            ];
            $newResults[] = [
                'expression' => sprintf('%s * %d', $result['expression'], $number),
                'value' => $result['value'] * $number,
            ];
            if ($number !== 0) {
                $newResults[] = [
                    'expression' => sprintf('%s / %d', $result['expression'], $number),
                    'value' => $result['value'] / $number,
                ];
            }
        }
        $results = $newResults;
    }

    $answered = false;
    foreach ($results as $result) {
        if ($result['value'] === 10) {
            echo $result['expression'] . PHP_EOL;
            $answered = true;
            break;
        }
    }
    if (!$answered) {
        echo '解けませんでした' . PHP_EOL;
    }
}
