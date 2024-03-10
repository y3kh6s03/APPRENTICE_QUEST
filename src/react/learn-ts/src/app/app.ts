function extractAndConvert<T extends object, U extends keyof T>(obj: T,key: U){
  return 'value: ' + obj[key]
}
const result = extractAndConvert({name: 'yosuke'},'name');
console.log(result)
