class Car{
    private Integer id;
    private String license;
    private Account driver;
    protected Integer passenger;

    public Car(String license, Account driver){
        this.license = license;
        this.driver = driver;
    }

    // Setter y Getters
    public void setId(Integer id){
        this.id = id;
    }
    public Integer getId(){
        return id;
    }
    
    public void setLicense(String license){
        this.license = license;
    }
    public String getLicense(){
        return license;
    }

    public void setDriver(Account driver){
        this.driver = driver;
    }
    public Account getDriver(){
        return driver;
    }

    public void setPassenger(Integer passenger){
        if(passenger == 4){
            this.passenger = passenger;
        }else{
            System.out.println("Necesitas asignar 4 pasajeros");
        }
    }
    public Integer getPassenger(){
        return passenger;
    }

    

    public void printDataCar(){
        if(passenger != null){
            System.out.println("Licencia: " + license + " Nombre del conductor: " + driver.name + " Pasajeros: " + passenger);
        }
    }
}
