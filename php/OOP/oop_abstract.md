# 継承を使うことができる

## 抽象クラス
### プログラムの中で、必須で実装したいメソッドやプロパティが具体的に決まっている。必ず実装はするけどポリモーフィズムにのっとってメソッドを利用したい、以上をまとめた仕様書のことを抽象クラスと言います。
1. 仕様書にそった設計図を作成することで、設計図内の項目や名前が統一され実際に作業する人が見やすく作業しやすくすることができるものです。

2. 例え話、ロボットを製作しているとして

   ロボットを製作しています。
   ロボットはいくつかの種類を製作する予定です。

   そのため以下のような仕様書を作成しました。
   すべての種類のロボットは共通して、立つ、座る、歩く、走る機能を必ず持っています。
   すべての種類のロボットは共通して攻撃を持っています。しかしこの攻撃はロボットの種類によって攻撃の仕方が異なります。
   そして他にはロボットごとに機能を追加していこうと考えています。

   以上の仕様書に合わせて、いろいろな種類のロボットの設計図を作成して
   基本機能は同じでいろいろな種類のロボットを作成することができました。

   このような仕様書を作成することを抽象クラスで実装することができます。

## インターフェース
### メソッドをポリモーフィズムにのとってクラスを定義したい場合に利用します。
1. 上記の続きで考えていくと

   立つ、座る、歩く、走るは必須で実装はするが、早く立つ・ゆっくり立つなど細かく変更したい。そういった場合に、必須要件をまとめて。機能の命名やメソッドの作成もれなどが起きないようにできる。
   この必須要件をまとめることをインターフェースと言います。