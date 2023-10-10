# nagoyaphp21

[Nagoya.php #21](https://nagoyaphp.connpass.com/event/298072/) のプログラミング問題の出題用リポジトリです。

# まずはこちらをご覧ください

* https://www.youtube.com/watch?v=4mh9qsH0Zhs （〜1:30ぐらいまで）
* https://youtu.be/4mh9qsH0Zhs?si=m7La57kl79QS7pV5&t=228 （〜5:03ぐらいまで）

この動画の課題の **簡易版** をみんなで解いてみましょう！

# 問題（簡易版）

* 0〜9の正の整数が4つ与えられるので、四則演算とカッコだけを使って **答えが10になる** 計算式を作ってください
* 例えば、`6322` が与えられた場合、`(6 - 3 + 2) * 2` などが有効な解答になります
* 問題によっては有効な解答が複数存在し得ますが、何か1つ出力できればOKです

## ⚠️考慮しなくていいこと

今回は簡易版なので、以下のようなケースは考慮しなくてOKです！

**（後述の雛形に、簡易版用のテストケースが同梱されているので、それらの問題さえ解ければOKです）**

1. 数字の並べ替えは対応不要です
    * 例えば、通常のルールでは、`2326` が与えられた場合でも `(6 - 3 + 2) * 2` と解答できる必要がありますが、今回はこれはできなくてOKです
    * `6322` のように、前から順に処理していくだけで解ける問題しか出題されません
1. 後ろを先に計算するパターンは対応不要です
    * 例えば、通常のルールでは、`8331` が与えられた場合は `(8 - 3) * (3 - 1)` のように解答できる必要がありますが、今回はこのように後ろで先に `(3 - 1)` を計算しておくようなパターンは対応できなくてOKです
1. 割り切れない分数を経由する計算には対応不要です
    * 例えば、`8374` が与えられた場合、本来なら `8 * (3 - 7 / 4)` のような解答が可能ですが、この計算には `8 * (5 / 4) = 10` という、割り切れない分数に分母の倍数を掛けて整数に戻す操作が含まれます。これはPHPで厳密に処理するのがやや面倒なので、このようなパターンは対応できなくてOKです

# 雛形

https://github.com/ttskch/nagoyaphp21/blob/main/templates/easy.php

これを手元にコピペするか `git clone` して、 `💡ここにあなたのコードを書いてください` の部分を実装してください。

未実装のまま実行すると、すべてのテストケースに対して `解けませんでした` と出力されます。

すべてのテストケースに対して解答できるように頑張って実装してみましょう！

# 解答例

https://github.com/ttskch/nagoyaphp21/blob/main/answers/easy.php

ここに解答例がありますが、まずはできるだけ見ずに頑張ってみましょう！💪

**でもどうしても無理そうなら見てもOKです！コピペでもいいのでとにかく動くところまで持っていきましょう！🙆‍♂️**

# 🔥上級者向けチャレンジ課題

我こそはという方は、ぜひ簡易版でなく、QuizKnockの動画内の問題をすべて解けるプログラムを完成させてみましょう！

* 与えられる数が5つ以上でも解けるように
* 10に限らず、与えられた答えになる計算式を作れるように
* 数字の並べ替えが必要な問題も解けるように
* 後ろを先に計算するパターンの問題も解けるように
* 割り切れない分数を経由する計算にも対応できるように

に対応したプログラムを作る課題です。

https://github.com/ttskch/nagoyaphp21/blob/main/templates/hard.php

こちらに雛形を用意したので、PHPプログラミングに慣れている人なら十分に時間内に完成できると思います！

> ttskchの解答例を元にした雛形ですが、ttskchは競プロ初心者なので、雛形の時点であまりかっこいいコードにはなっていないと思います🙏
>
> 競プロに自信がある人は、雛形なしでゼロから書いてみるのもいいかもしれません！（たぶん結構時間きついと思いますが…）

# その他参考リンク

* [テンパズル - Wikipedia](https://ja.wikipedia.org/wiki/%E3%83%86%E3%83%B3%E3%83%91%E3%82%BA%E3%83%AB)
* [ttskch/make10: Make 10 puzzle solver](https://github.com/ttskch/make10)
* [markrogoyski/math-php](https://github.com/markrogoyski/math-php)
* [brick/math](https://github.com/brick/math)
