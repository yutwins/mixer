＜Todo＞
・CTA部分の調整
・font-familyの調整（日本語はnoto sans JP）
・FVのスライダーは簡単に画像を追加できる仕様に！ 
→ 一旦swiperで実装して、改善していく！
・事例セクションは将来的に数を増やしてカルーセルで流すから、それを踏まえて設計する

・使用しないSCSSのクラス指定を削除する
・固定imgタグにwidthとheightをつける


＜Question＞
・fvのタイトルは、PC/SP版で変更しているのは意図的か？
→ 僕が考えた方向性はどうか？

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