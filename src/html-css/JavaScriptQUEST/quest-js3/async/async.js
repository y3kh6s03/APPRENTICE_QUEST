// 2. Promise

function promiseSort(numbers) {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            const result = numbers.toSorted();
            resolve(result);
        }, 2000);
    });
}

const numbers = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5];

asyncSort(numbers).then((sortedNumbers) => {
    console.log(sortedNumbers);
}).catch((error) => {
    console.error(`Error: ${error}`);
});

console.log('同期処理');


// 3. async/await
function asyncSort(numbers) {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            const result = numbers.toSorted();
            resolve(result);
        }, 2000);
    });
}

async function sortNumbers(){
    const numbers = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5];
    const sortedNumbers = await asyncSort(numbers);
    console.log(sortedNumbers);
}

sortNumbers();
console.log('同期処理');