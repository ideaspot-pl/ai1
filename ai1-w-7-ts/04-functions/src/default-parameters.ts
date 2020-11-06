function defaultParameters() {
    function power(base: number, exponent : number = 2) {
        let value = 1;
        while (--exponent > 0) {
            value *= base;
        }
        return value;
    }
    console.log(power(2));
    //--> 2
    console.log(power(2, 2));
    //--> 2
    console.log(power(2, 3));
    //--> 4
    console.log(power(2, 4));
    //--> 8
}
defaultParameters();
