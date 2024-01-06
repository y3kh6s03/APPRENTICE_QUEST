# 正規化

## 第一正規形

【ECサイト】
- ユーザーID
- ユーザー名
- 購入履歴ID
- 購入日
- 商品ID
- 商品名
- 商品カテゴリー
- 数量
- 商品価格

ECサイトテーブル
| user_id | user_name | history_id | date | product_id | product_name | product_category | quentity | product_price |
| ------- | --------- | ---------- | ---- | ---------- | ------------ | ---------------- | -------- | ------------- |
| primary |           | primary    |      | primary    |              |                  |          |               |



## 第二正規形
user
| id      | name |
| ------- | ---- |
| primary |      |

product
| id      | name | price | category_name |
| ------- | ---- | ----- | ------------- |
| primary |      |       |               |

history
| id      | datetime | quentity | user_id     | product_id     |
| ------- | -------- | -------- | ----------- | -------------- |
| primary |          |          | fk(user id) | fk(product id) |

## 第三正規形
user
| id      | name |
| ------- | ---- |
| primary |      |

product
| id      | name | price | category_id     |
| ------- | ---- | ----- | --------------- |
| primary |      |       | fk(category id) |

category
| id      | name |
| ------- | ---- |
| primary |      |

history
| id      | datetime | quentity | user_id     | product_id     |
| ------- | -------- | -------- | ----------- | -------------- |
| primary |          |          | fk(user id) | fk(product id) |

user_history
| user_id     | hisory_id      |
| ----------- | -------------- |
| fk(user id) | fk(history id) |

# ボイスコッド正規系
【患者テーブル】
| kanja   | shinnryouka |
| ------- | ----------- |
| primary | primary     |

【医師テーブル】
| shinnryouka | ishi |
| ----------- | ---- |
| primary     |      |

