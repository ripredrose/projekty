def Cezar_koduj(txt, skok, kod=0, zaszyfrowany=""):
    if skok > 26:
        return "za duże przesuniecie, podaj mniejsze lub rowne 26"
    if kod == 1:
        skok = -skok
    for i in range(len(txt)):
        if ord(txt[i]) >= 97:
            if ord(txt[i]) == 32:
                zaszyfrowany += chr(32)
            elif ord(txt[i]) > 122 - skok:
                zaszyfrowany += chr(ord(txt[i]) + skok - 26)
            elif ord(txt[i]) < 97 - skok:  #dodane zeby mozna dawać ujemne przesunięcie
                zaszyfrowany += chr(ord(txt[i]) + skok + 26)
            else:
                zaszyfrowany += chr(ord(txt[i]) + skok)
        else:
            if ord(txt[i]) == 32:
                zaszyfrowany += chr(32)
            elif ord(txt[i]) > 90 - skok:
                zaszyfrowany += chr((ord(txt[i]) + skok - 26))
            elif ord(txt[i]) < 65 - skok:  #dodane zeby mozna dawaćujemne przesunięcie
                zaszyfrowany += chr(ord(txt[i]) + skok + 26)
            else:
                zaszyfrowany += chr(ord(txt[i]) + skok)
    return zaszyfrowany
print(Cezar_koduj("abcz",4))
