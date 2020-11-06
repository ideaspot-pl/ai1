function parameters() {
    function add(a: number, b: number) {
        return a + b;
    }

    let x = 5;
    let y = 10;
    let z = add(x, y);
    console.log(z, typeof z);
    //--> 15 number
}
parameters();
