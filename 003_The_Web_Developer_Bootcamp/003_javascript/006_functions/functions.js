//isEven

// function isEven(num){
// 	//return true if even
// 	if(num % 2 === 0) {
// 		return true;
// 	}
// 	//return false otherwise
// 	else {
// 		return false
// 	}
// }

function isEven(num){
	return num % 2 === 0;
}

console.log(isEven(4));
console.log(isEven(21));
console.log(isEven(68));
console.log(isEven(333));


function factorial(num){
  //define a result variable
  var result = 1;
  //calculate factorial and store value in result
  for(var i = 2; i <= num; i++){
  	result *= i;
  }
  //return the result variable
  return result;
}

console.log(factorial(5));
console.log(factorial(2));
console.log(factorial(10));
console.log(factorial(0));


function kebabToSnake(str) {
	//replace all '-' with "_"'s
	var newStr = str.replace(/-/g , "_");
	//return str
	return newStr;

}


console.log(kebabToSnake("hello-world"));
console.log(kebabToSnake("dogs-are-awesome"));
console.log(kebabToSnake("blah"));
