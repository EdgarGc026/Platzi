class UberVan extends Car{

    constructor(license, driver, typeCarAccepted, seatsMaterial) {    
        super(license, driver)
        this.typeCarAccepted = typeCarAccepted;
        this.seatsMaterial = seatsMaterial;
    }

    takePassenger(passenger){
        if (passenger == 6) {
            this.passenger = passenger;
        }else{
           console.log("Se necesita minimo 6 pasajeros"); 
        }
    }

    get givePassenger(){
        return this.passenger;
    }
}