const checkDivisibleByFive = (num) => {
    if (typeof (num) === "number") {
        if (num % 5 === 0) {
            console.log("5で割り切れる整数です!");
            return true;
        } else {
            console.log("数値は5で割り切れません");
            throw new Error("またのチャレンジをお待ちしております。")
        }
    } else {
        throw new Error("変数numには整数値を入力してください。");
    }
}

try {
    checkDivisibleByFive("10");
} catch(e) {
    console.log(e.message);
} finally {
    console.log("処理が終わったよーー！");
}