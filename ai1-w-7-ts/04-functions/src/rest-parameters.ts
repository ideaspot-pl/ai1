function restParameters() {
    function sum(...values: number[]) : number {
        let total = 0;
        for (let value of values) {
            total += value;
        }
        return total;
    }

    console.log(sum());
    //--> 0
    console.log(sum(5));
    //--> 5
    console.log(sum(5, 10, 15));
    //--> 30

    let values = [5, 10, 15];
    console.log(sum(...values));
    //--> 30
}
restParameters();
