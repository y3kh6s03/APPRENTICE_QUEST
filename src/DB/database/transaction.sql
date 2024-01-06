-- # トランザクションとは何か
-- - データベースの更新処理を確定するか、取り消しを管理を実現できる。
--   複数のデータベース更新処理を行っていた場合、データの行き来をさせている途中で処理をなにかしらの障害によって失敗してしまった場合にデータの不整合が発生してしまう。このような不整合などを防ぐために、利用できるのがトランザクションの機能。

--   - 例えば小売業などの商品管理テーブルで、店舗Aから店舗Bに在庫を移したいとき。
--     まずは店舗Aから移動させる在庫数を引く。
--     そのあとい店舗Bへ店舗Aの分の在庫を加えようとしたときに処理が失敗した。
--     この状況では、実際には在庫が存在するのにデータベース上では在庫が減ったままの状態になってデータに不整合が発生する。
--     トランザクションを利用していれば、どちらの処理も正常に完了したときにデータベースへの反映を確定させることができる。
--     このようにデータの管理をしやすくしてくれる。
       ACID特性を担保してくれる。
       A Atomicity = SQLが全て成功。もしくは失敗することが保証されている。
       C Consistency = トランザクションの結果に整合性が保たれることを保証する
       I Isolation = トランザクション処理中の状態はほかのセッションから独立している
       D Durability = トランザクション完了後のデータは永続的に保持される

USE employees;

START TRANSACTION;

INSERT INTO employees(emp_no, birth_date, first_name, last_name, gender, hire_date)
VALUES(99999999, '1985-02-24', 'hirose', 'yosuke', 'M', '1985-02-24');

SELECT * FROM employees
WHERE emp_no = "99999999";

ROLLBACK;

INSERT INTO employees(emp_no, birth_date, first_name, last_name, gender, hire_date)
VALUES(99999999, '1985-02-24', 'hirose', 'yosuke', 'M', '1985-02-24');

SELECT * FROM employees
WHERE emp_no = "99999999";

COMMIT;

SELECT * FROM employees
WHERE emp_no = "99999999";

