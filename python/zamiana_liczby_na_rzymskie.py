class liczby:
    liczba = 0
    przetworzona = ""
    def __init__(self, liczba):
        if type(liczba) == str:
            self.przetworzona=liczba
        else:
            self.liczba = liczba
    def rzymskie(self):
        slownik = {'M': '1000', 'CM': '900', 'D': '500','CD': '400', 'C': '100', 'XC': '90', 'L': '50', 'XL': '40', 'X': '10', 'IX': '9', 'V': '5', 'IV': '4', 'I': '1'}
        for x in slownik:
            if self.liczba/int(slownik[x]) >= 1:
                a = self.liczba/int(slownik[x])
                a = math.floor(a)
                a = int(a)
                for y in range(a):
                    self.przetworzona = self.przetworzona + x
                self.liczba = self.liczba-a*int(slownik[x])

        print(self.przetworzona)
    def arabskie(self):
        slownik = {'M': '1000', 'CM': '900', 'D': '500', 'CD': '400', 'C': '100', 'XC': '90', 'L': '50', 'XL': '40', 'X':'10', 'IX': '9', 'V': '5', 'IV': '4', 'I': '1', 'm': '1000', 'cm': '900', 'd': '500', 'cd': '400', 'c': '100', 'xc': '90', 'Ll': '50', 'xl': '40', 'x': '10', 'ix': '9', 'v': '5', 'iv': '4', 'i': '1'}
        i = 0
        while i < len(self.przetworzona):
            a = int(slownik[self.przetworzona[i]])
            if i+1 == len(self.przetworzona):
                self.liczba += a
                print(self.liczba)
                return
            elif i+1 > len(self.przetworzona):
                return
            x = self.przetworzona[i]
            if self.przetworzona[i:i+2] == x+x:
                self.liczba += 2*int(slownik[x])
                i += 1
            else:
                if a > int(slownik[self.przetworzona[i+1]]):
                    self.liczba += a
                else:
                    self.liczba += (int(slownik[self.przetworzona[i+1]])-a)
                    i += 1
            i += 1
        print(self.liczba)
        return

l = int(input("podaj liczbe"))
l1 = liczby(l)
liczby.rzymskie(l1)
l = input("podaj cyfre rzymska duze m c d i l x itp")
l2 = liczby(l)
liczby.arabskie(l2)
