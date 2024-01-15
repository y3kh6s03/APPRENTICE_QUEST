console.log('Hello World');

const num_1 = 5;
const num_2 = 3;
let sum = num_1 + num_2;
let difference = num_1 - num_2;
console.log(sum, difference);

const greet = (name) => {
    console.log('Hello,' + name);
}
greet('Hikaru');

// 温度チェッカー
const checkTemperature = (t) => {
    if (t >= 30 && t <= 50) {
        console.log("Hot");
    } else if (t < 30 && t >= 15) {
        console.log("Warm");
    } else if (t < 15) {
        console.log("Cold");
    } else {
        console.log("-50 <= t <= 50 で引数を渡してください")
    }
}
checkTemperature(10);

// 偶数チェッカー
const checkOddOrEven = (num) => {
    if (num % 2 === 0) {
        console.log("Even");
    } else {
        console.log("Odd");
    }
}
checkOddOrEven(9);

// 1. 奇数が含まれるかの判定
const hasOdd = (array) => {
    for (let i = 0; i < array.length; i++) {
        if (array[i] % 2 !== 0) {
            console.log(true);
            break;
        } else {
            console.log(false);
        }
    }
}

// 2. 奇数の抽出
const odd = (array) => {
    console.log(array.filter((val) => val % 2 !== 0));
}
odd([1, 2, 3, 4, 5]);

// 3. 2乗の計算
const square = (array) => {
    console.log(array.map((val) => val * val))
}
square([1, 2, 3, 4, 5]);

// オブジェクトを使うことができる
// 1. 書籍プリンター
books = [
    {
        title: "JavaScript入門",
        writer: "山田太郎"
    },
    {
        title: "JavaScriptの絵本",
        writer: "山田太郎"
    }
]
console.log(books);
const printbooks = (array) => {
    for (let i = 0; i < array.length; i++) {
        console.log("『" + array[i].title + "』" + array[i].writer);
    }
}
printbooks(books);

// 2. ユーザーパーミッションチェッカー
let users = [
    {
        username: '山田',
        permissions: {
            canRead: true,
            canWrite: true,
            canDelete: false
        }
    },
    {
        username: '佐藤',
        permissions: {
            canRead: false,
            canWrite: true,
            canDelete: false
        }
    },
    {
        username: '田中',
        permissions: {
            canRead: true,
            canWrite: false,
            canDelete: true
        }
    },
    {
        username: '鈴木',
        permissions: {
            canRead: true,
            canWrite: true,
            canDelete: true
        }
    },
    {
        username: '斎藤',
        permissions: {
            canRead: false,
            canWrite: false,
            canDelete: false
        }
    }
];

const checkPermission = (name, permission) => {
    for (let i = 0; i < users.length; i++) {
        if(users[i].username === name){
            console.log(users[i].permissions[permission]);
        }
    }
}
checkPermission('山田', 'canDelete');
