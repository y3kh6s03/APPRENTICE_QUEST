# Todo APIリファレンス
- TodoAPIは、todoを取得・新規作成・更新・削除を行うことができます。
- リソースは、JSONオブジェクトとして表しています。
- todoリソースは以下のURIとメソッド一覧となります。

## APIの呼び出し
- パスパラメータ http://localhost:80/api/
こちらのリソースにはユーザーが保持しているtodo一覧が格納されています。
GET以外のメソッドを利用する場合には、headers情報としてmeta情報のtokenを含める必要があります。

| HTTP Request  | description               |
| GET /         | ユーザーが保持しているtodoをすべて取得します  |
| POST /        | 新しいtodoタイトルを新規作成することができます |
| PUT /  {id}   | 既存のtodoタイトルを更新することができます   |
| DELETE / {id} | 該当のtodoタイトルを削除することができます。  |

## リクエストの例
```
POST /
{
    "title": "example text"
}
```
```
PUT /{id}
{
    "id": 1,
    "title": "example text"
}
```
## ステータスコード
APIコールの後で、以下のHTTPステータスコードを返します。
| status code | description                    |
| 200         | リクエストが成功しました。                  |
| 204         | リクエストが成功して、レスポンスにはなにも含まれていません。 |
|

## レスポンス
```
GET /
{
    "id": 1,
    "title": "example text"
}
```
