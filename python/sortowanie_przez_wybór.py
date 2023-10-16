tablica = [1, 2, 34, 5, 2346, 456, 324, 0, 1234, 41234, 214, 6, 12367]
class sortujprzezwybor:
    tab = []
    posortowana = []
    def __init__(self):
        self.tab = tablica
        self.sortuj()
    def sortuj(self):
        for x in range(len(self.tab)):
            self.posortowana.append(self.tab[self.__index_najwiekszej__()])
            self.tab.pop(self.__index_najwiekszej__())
        print(self.posortowana)
    def __index_najwiekszej__(self):
        najwieksza = self.tab[0]
        for x in self.tab:
            if x >= najwieksza:
                najwieksza = x
            else:
                continue
        return self.tab.index(najwieksza)
a = sortujprzezwybor()
