# HTTPについて説明できる
## HTTPとは
- TCP/IPのプロトコル群の一種である
- ４階層モデルで分類したときに、アプリケーション層で利用されるプロトコル
- 主にブラウザとWEBサーバー間のHTMLやJSONのメディアリソースのやりとりに利用されるプロトコル

## プロトコルとは
- ネットワークを利用してコンピュータ間のやり取りをするときに決められたルールをプロトコルという。

## HTTPリクエストとは
リクエストライン: HTTPメソッド 利用するプロトコル HTTPバージョン
ヘッダ: リクエスト側の受け付けるファイル形式、IPアドレス、認証情報、利用ブラウザなどの情報
ボディ: リクエスト側から送りたい付加情報

## HTTPレスポンスとは
ステータスライン: HTTPのバーsジョン、リクエストに対する結果のステータスコード、ステータスコードに付随するテキスト
ヘッダ: レスポンスのコンテンツのファイル形式、レスポンス生成の日時情報、
メッセージボディ: リクエストに対するコンテンツ

代表的なステータスコード一覧
200: リクエストに対して成功したときのステータスコード。問題なくリソースが返却されたことを示す
201: POSTリクエストやPUTリクエストから新しいリソースの生成が成功したことを示す。
204: リクエストは成功しているが、返却されたリソースがないことを示す。
301: リクエストをしたリソースのURLが変更され、新しいURLが与えられたことを示す
400: 構文エラーによって、サーバーがリソースの返却をすることができなかったことを示す。
401: アクセスしたリソースに認証が必要であり、認証がされていないためリソースが返却されなかったことを示す。
403: 認証、認可が適切にされていないため、サーバーから適切にリソースの返却ができないことを示す
404: リクエストしたURLが不適切であったためサーバーがリソースを見つけられず、なにも返却されなかったことを示す。
500: サーバー側のエラーによってリソースが適切に返却されなかったことを示す。

## HTTP通信
- google.comへアクセスしたときにリクエストからレスポンスがあり、描写されている流れを読みとく
- https://www.google.com/どいうドメインアドレスに対して、GETメソッドでリクエストを送信している
- その結果ステータスコード200でリクエストが成功していることを示している

リクエストはどのようなことをしていたのか
- 利用したブラウザとして利用な可能なファイル形式をhtml、xmlのテキストファイルや画像ファイルなどを示している
- 利用な可能な圧縮ファイル形式、言語についても明示している。
- 暗号化された通信を実現したり、クライアントに合わせたコンテンツを提供するためなどに必要なクッキー情報が含まれている
- セキュリティが適切に保たれた状態でデータ通信を行うために必要な情報を付与されている。

レスポンスについて
- セキュリティ情報が適切に処理されてレスポンスが返されている。
- クロスオリジンのチェックやオリジンが異なるかどうかのチェックの結果も付与されている。
- 返却されたデータ形式が明示されている
- 返却された日時についてもリクエストの時間とほぼ同時刻となっている

リソースが返却されたため、ブラウザでリソースを解析して描画されている
