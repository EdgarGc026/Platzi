var car = new Car("AWS3202", new Account("Luis Mendoza", "S1450ERS"));
car.takePassenger = 4;
car.printDataCar(); 

var uberX = new UberX("AXT7406", new Account("Pedrito Sola", "S15013908"), "TIIDA", "Vochido");
uberX.takePassenger = 6;
uberX.printDataCar();  

var uberVan = new UberVan("AXT7406", new Account("Pedrito Sola", "S15013908"), "TIIDA", "Vochido");
uberVan.takePassenger(6);
uberVan.printDataCar(); 
