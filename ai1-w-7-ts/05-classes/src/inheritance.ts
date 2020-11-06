function inheritance() {
    class Dog {
        protected sound;

        constructor(protected times: number = 1) {
            this.sound = "woff...";
        }

        makeSound() {
            console.log(this.sound.repeat(this.times))
        }
    }

    class LoudDog extends Dog {
        constructor(protected times: number = 1) {
            super(times);
            this.sound = "WOFF...";
        }
    }

    let dog = new LoudDog(3);
    dog.makeSound();
    //--> WOFF...WOFF...WOFF...
}
inheritance();
