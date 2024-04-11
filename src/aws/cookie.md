# Cookieとセッションについて説明できる
## ステートレスとはなにか
- 言葉そのままに状態を維持しないということ
- HTTPプロトコルでは、通信を行なった前と後の状態を維持しないという意味になる

## Cookieとセッション
### Cookieとは
- ブラウザの一時保存領域のことを意味する
- ブラウザを起動している期間は、情報を保持することができる
### セッションとは
- サーバーの一時保存領域のことを意味する
- セッションに一時的な情報を保持させ、IDを付与して管理する
- そのセッションIDをクッキーに保持させることで、サーバーに一時保存している情報にアクセスすることが可能
- そうすることで一時的に状態を保持して、UI/UXの向上をはかることができる

## Cookie とセッションを利用してどのようにログイン状態を実現しているのか？
- 認証が確認されたときに返却された認証情報をセッションに一時保存をする
- その保存されたセッション情報のIDをブラウザのクッキーに保持する
- そのクッキーに保存されているセッションIDがセッションにアクセスできる期間はログインしている状態と認識することが可能である