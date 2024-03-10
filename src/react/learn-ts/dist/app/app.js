"use strict";
function extractAndConvert(obj, key) {
    return 'value: ' + obj[key];
}
const result = extractAndConvert({ name: 'yosuke' }, 'name');
console.log(result);
