function classes() {
    class Dog {
        private sound;

        constructor(private times: number = 1) {
            this.sound = "woff...";
        }

        makeSound() {
            console.log(this.sound.repeat(this.times))
        }
    }

    let dog = new Dog(3);
    dog.makeSound();
    //--> woff...woff...woff...
}
classes();
