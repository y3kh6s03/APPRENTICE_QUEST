#!/bin/bash

echo "パスワードマネージャーへようこそ！"

while true; do
  echo "次の選択肢から選んでください: Add Password/Get Password/Exit"
  read choice

  case $choice in
    "Add Password")
      read -p "サービス名を入力してください:" input_service
      read -p "ユーザー名を入力してください:" input_user
      read -p "パスワードを入力してください:" input_password
      echo "$input_service:$input_user:$input_password" >> ./password.txt
      gpg -c password.txt
      rm password.txt
      echo "パスワードの追加は成功しました."
      ;;

    "Get Password")
      read -p "サービス名を入力してください:" input_service_name
      gpg -d password.txt.gpg
      password_file="password.txt"
      found="0"
      while IFS=: read -r file_service file_user file_password; do
        if [ "$input_service_name" == "$file_service" ]; then
          found="1"
          echo "サービス名: $file_service"
          echo "ユーザー名: $file_user"
          echo "パスワード: $file_password"
          rm password.txt

        fi
      done < "$password_file"

      if [ "$found" == "0" ]; then
        echo "そのサービスは登録されていません."
      fi
      ;;

    "Exit")
      echo "Thank you!"
      exit 0
      ;;

    *)
      echo "入力が間違えています。Add Password/Get Password/Exit から入力してください."
      ;;
  esac
done
