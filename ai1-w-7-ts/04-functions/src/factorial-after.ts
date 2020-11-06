function factorialAfter() {
    function* createFactorialGenerator() {
        let ordinal = 2;
        let factorial = 1;
        while (true) {
            yield factorial;
            factorial *= ordinal ++;
        }
    }

    let factorial = createFactorialGenerator();
    console.log(factorial.next()); //--> 1
    console.log(factorial.next()); //--> 2
    console.log(factorial.next()); //--> 6
    console.log(factorial.next()); //--> 24
    console.log(factorial.next()); //--> 120
}
factorialAfter();
