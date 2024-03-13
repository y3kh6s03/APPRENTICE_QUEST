# 純関数
## 純関数の特徴
- 副作用を起こさない
  関数外の状態を変化させないこと
  グローバルに定義されている変数を変化さえてしまうことや、オブジェクトに対して変化を生み出してしまうこと
- 関数実行したときに、与えた値が同じであれば常に結果が同じになる関数である。
  関数外の影響を一切受けない関数である

## 純関数でないことのデメリット
- 副作用が発生していることによって、異なる関数で処理を行った際に意図しない結果となってしまう
- 与えた値は同じであっても、状況によって出力結果が変化してしまうため、意図しない結果となってしまう


## 順関数にするためにはどのようなことに気をつけるのか
- 関数外の変数を直接変更をしない
- 受け取った実引数を変更していくのではなく、異なる変数に格納して処理をしていく
- 関数外の変数参照をしない

```純関数ではない状態
import React, { useState } from 'react';

let outsideCounter = 0;

export default function NonPureComponent() {
    const [counter, setCounter] = useState(0);

    function increment() {
        outsideCounter++;
        setCounter(counter + 1);
    }

    return (
        <div>
            <p>Counter: {counter}</p>
            <p>Outside Counter: {outsideCounter}</p>
            <button onClick={increment}>Increment</button>
        </div>
    );
}
```

```純関数
import React, { useState } from 'react';

export default function NonPureComponent({outsideCounter}) {
    const [counter, setCounter] = useState(0);

    function increment() {
        setCounter(counter + 1);
    }

    return (
        <div>
            <p>Counter: {counter}</p>
            <p>Outside Counter: {outsideCounter}</p>
            <button onClick={increment}>Increment</button>
        </div>
    );
}
```