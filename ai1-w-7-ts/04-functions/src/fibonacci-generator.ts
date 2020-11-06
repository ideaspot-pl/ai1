function fibonacciGenerator() {
    function* createFibonacciGenerator() {
        let current = 1;
        let prev = 0;
        let prevPrev: number;
        while (true) {
            yield current;
            prevPrev = prev;
            prev = current;
            current = prev + prevPrev;
        }
    }

    let fibonacci = createFibonacciGenerator();
    console.log(fibonacci.next()); //--> 1
    console.log(fibonacci.next()); //--> 1
    console.log(fibonacci.next()); //--> 2
    console.log(fibonacci.next()); //--> 3
    console.log(fibonacci.next()); //--> 5
}
fibonacciGenerator();
