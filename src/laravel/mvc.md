# MVCとはなにか
- WEBアプリケーションを作成する上で、利用される開発手法。
- MVC(Model, Controller, View)の頭文字のように大枠の処理にディレクトリを分けて開発をしていきます。
## Models
- データベースの処理を行うディレクトリ・ファイル
- データベースに対して、データの取得・登録・更新・削除の処理を行う
- コントローラーから受け取った情報をもとに、データベースに処理をする
- 逆にデータベースの処理をコントローラーに返却する処理をする。

## Controller
- クライアントサイドのリクエストに応じた処理を行う。
- URLやGET、POSTからの情報を受け取り、データベースの処理を進めたり、クライアントサイドへ出力するデータ処理を行う。

## View
- コントローラーからのデータをもとにクライアントサイドへの表示処理を行う。
