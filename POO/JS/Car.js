class Car{
    constructor(license, driver) {    
        this.id;
        this.license = license;
        this.driver = driver;
        this.passenger;
    }

    set takePassenger(passenger){
        if (passenger == 4) {
            this.passenger = passenger;
        }else{
           console.log("Se necesita minimo 4 pasajeros"); 
        }
    }

    get givePassenger(){
        return this.passenger;
    }

    
    printDataCar(){
        console.log(this.driver);
        console.log(this.driver.name);
        console.log(this.driver.document);
        console.log(this.passenger);
    }

}

