function polymorphism5() {
    type Filter = {
        (array: object[], f: (element: object) => boolean) : object[]
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

    let ages = [
        {age: 17},
        {age: 18},
        {age: 19},
    ];
    // let filtered = filter(ages, (a) => {return a.age > 18});
    // TS2339: Property 'age' does not exist on type 'object'.

}
polymorphism5();
