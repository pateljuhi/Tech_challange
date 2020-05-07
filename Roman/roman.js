function roman_to_int() {
    var input = document.getElementById("roman").value;
    input = input.trim();
    console.log(input);
    var letters = /^[A-Za-z]+$/;
    if (input != '' && input.match(letters)) {
        document.getElementById("error").innerHTML = "";
        input = input.toUpperCase();
        var array = input.split('');
        var key = { M: 1000, D: 500, C: 100, L: 50, X: 10, V: 5, I: 1 };
        var i,
            j;
        var result = 0;
        for (var i in array) {
            for (j in key) {
                if (array[i] == j) {
                    array[i] = key[j];
                }
            }
        }
        var minn = Math.min(...array);
        var count = 0;
        for (i in array) {
            if (minn == array[i]) {
                count++;
            }
        }
        var index_min = array.indexOf(minn);
        console.log(index_min);

        if (array.every((val, i, arr) => val === arr[0])) {
            for (i in array) {
                result += array[i];
            }
        } else {
            for (i in array) {
                result += array[i];
            }
            if (index_min != (array.length - 1) && count < 2) {
                result = result - (minn * 2);
            }
        }

        document.getElementById("num").value = result;
    } else {
        document.getElementById("error").innerHTML = "Please enter valid Roman number";
    }
}