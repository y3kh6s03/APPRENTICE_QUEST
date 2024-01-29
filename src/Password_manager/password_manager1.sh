#! /bin/bash

echo "パスワードマネージャーへようこそ！"

# サービス名、ユーザー名、パウワードの入力
read -p "サービス名を入力してください:" service
read -p "ユーザー名を入力してください:" user
read -p "パスワードを入力してください:" password

#入力された情報をpassword.txtに保存する
echo "$service:$user:$password" >> ./password.txt

echo "Thank you!"