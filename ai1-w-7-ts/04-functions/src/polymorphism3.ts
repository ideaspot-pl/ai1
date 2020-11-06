function polymorphism3() {
    type Filter = {
        (array: number[], f: (element: number) => boolean) : number[]
    };
    const filter : Filter = (array, f) => {
        let filtered = [];
        for (let i = 0; i < array.length; i++) {
            let element = array[i];
            if (f(element)) {
                filtered.push(element);
            }
        }
        return filtered;
    }
    let filtered = filter([1,2,3,4,5,6,7,8,9,10], (a) => {return a % 2 === 0});
    console.log(filtered);
    //--> [ 2, 4, 6, 8, 10 ]

    // let filtered2 = filter(['banana', 'apple', 'pear'], (a) => {return a.includes('e')});
    // TS2322: Type 'string' is not assignable to type 'number'.
}
polymorphism3();
