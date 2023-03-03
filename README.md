＜Todo＞
・FVのスライダーは簡単に画像を追加できる仕様に！ 
→ 一旦swiperで実装して、改善していく！
・fvの実績の縦横比605×405
・事例セクションは将来的に数を増やしてカルーセルで流すから、それを踏まえて設計する
・使用しないSCSSのクラス指定を削除する

＜Question＞
・ヘッダーのメニューをホバーした時の仕様はどうするか？
・fvのタイトルは、PC/SP版で変更しているのは意図的か？
・workセクションのテキスト部分がテストになっている？

<components>
<!-- ボタン（白） -->
<a href="#" class="btn whiteBtn">
    <span class="whiteBtn-text">実績を見る</span>
</a>

<!-- ボタン（黒） -->
<a href="#" class="btn blackBtn">
    <span class="blackBtn-text">実績を見る</span>
</a>

<memo>
・colorに関する情報（変数）は_color.scssファイルに格納しております。
・fontに関する情報（変数）は_variable.scssファイルに格納しております。
・sectionクラスにpadding-top:200px;を指定して、細かい数字は各セクションのpadding-bottomで調整 