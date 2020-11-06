function averageAfter() {
    function average(...values: number[]) : number {
        if (! values.length) {
            return 0;
        }

        let total = 0;
        for (let value of values) {
            total += value;
        }
        let average = total / values.length;
        return average;
    }

    console.log(average());
    //--> 0
    console.log(average(5));
    //--> 5
    console.log(average(5, 10, 15));
    //--> 10

    let values = [5, 10, 15];
    console.log(average(...values));
    //--> 10
}
averageAfter();
