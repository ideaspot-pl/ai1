function polymorphism4() {
    type Filter = {
        (array: string[], f: (element: string) => boolean) : string[]
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

    let filtered = filter(['banana', 'apple', 'pear'], (a) => {return a.includes('e')});
    console.log(filtered);
    //--> [ 'apple', 'pear' ]
}
polymorphism4();
