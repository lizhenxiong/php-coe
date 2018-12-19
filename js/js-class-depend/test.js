export default class time {
    constructor() {
        this.abc = 0;
        this.init();
    }

    init() {
        setInterval(() => {
            this.abc = this.abc +1;
        }, 1000);
        console.log(this.abc);
    }
}

new time();