-- 1. インデックス設定前　0.02sec
EXPLAIN ANALYZE
SELECT *
FROM employees
WHERE birth_date = '1961-08-03';

-- 2. インデックス作成
CREATE INDEX INDEX birth_index
ON employees(birth_date);

-- 3. インデックス確認
SHOW INDEX FROM employees\G

-- 4. インデックス設定後 0.00sec
EXPLAIN ANALYZE
SELECT *
FROM employees
WHERE birth_date = '1961-08-03';

-- 5. インデックスの説明
-- インデックスを作成したカラムに対して、索引をつけていると表現される。
-- カラムに対して、Btree構造を利用して検索を早くすることができる。
-- インデックスが作成されていない場合は、辞書を１ページからランダムに並べられたデータを探すような状態。
-- インデックスが作成されている場合は、辞書に一定の規則によって並べられたデータを真ん中からどんどんと検索対象データに検索していける状態。
-- そのためインデックスを作ることでクエリの高速化を実現することができる

-- 6. インデックス削除
-- DROP INDEX インデックス名 ON テーブル名;
DROP INDEX birth_index
ON employees;

-- 7. ベストプラクティス
インデックスを作成する方針として重要な点は以下の通り
