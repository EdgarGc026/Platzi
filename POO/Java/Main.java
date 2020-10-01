class Main{
    public static void main(String[] args){
        System.out.println("Hello World");
        
        //Creas un nuevo objeto
        UberX uberX = new UberX("124KF2", new Account("Checo Perez", "AND123"), "Nissan", "TIIDA");
       uberX.setPassenger(3);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("UBFGH23", new Account("Pedrito Sola", "YES392"));
        uberVan.setPassenger(5);
        uberVan.printDataCar();
    }
} 