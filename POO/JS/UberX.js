class UberX extends Car{

    constructor(license, driver, brand, model) {    
        super(license, driver)
        this.brand = brand;
        this.model = model;
    }

    set takePassenger(passenger){
        if (passenger == 6) {
            this.passenger = passenger;
        }else{
           console.log("Se necesita minimo 4 pasajeros"); 
        }
    }

    get givePassenger(){
        return this.passenger;
    }
}