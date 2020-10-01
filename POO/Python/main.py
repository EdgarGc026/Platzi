from car import Car
from account import Account

if __name__ == "__main__":
    print("Hello World!!")
    
    car = Car("AMDX86", Account("Pedro Porro", "WINBUGS023"))
    print(vars(car))
    print(vars(car.driver))