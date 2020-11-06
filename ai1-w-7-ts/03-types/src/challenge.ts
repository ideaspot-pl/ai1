function challenge() {
    let i : 5 = 5;
    // i = 10; // error

    let j = [5, 10];
    // j.push("15"); // error

    let x : unknown = 4;
    // let y = x + 5; // A
    if (typeof x === "number") {
        let z = x + 5; // B
    }
}
challenge()
