class UberPool extends Car{
    Stirng brand;
    Stirng model;
    
    public UberPool(String license, Account driver, String brand, String model){
        super(license, driver);
        this.brand = brand;
        this.model = model;
    }

    public void setPassenger(Integer passenger){
        if(passenger == 4){
            super.setPassenger(passenger);
        }else{
            System.out.println("UberVan necesita 4 pasajeros");
        }
    }
}