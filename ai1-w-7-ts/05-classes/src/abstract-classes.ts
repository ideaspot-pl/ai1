function abstractClasses() {
    abstract class Dog {
        protected sound;

        constructor(protected times: number = 1) {
            this.sound = "woff...";
        }

        makeSound() {
            console.log(this.sound.repeat(this.times))
        }
    }

    // let dog = new Dog(3);
    // TS2511: Cannot create an instance of an abstract class.

    class LoudDog extends Dog {
        constructor(protected times: number = 1) {
            super(times);
            this.sound = "WOFF...";
        }
    }

    let loudDog = new LoudDog(3);
    loudDog.makeSound();
    //--> WOFF...WOFF...WOFF...
}
abstractClasses();
