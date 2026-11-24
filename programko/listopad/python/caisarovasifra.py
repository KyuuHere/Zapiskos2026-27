print("Caisarova sifra")
print("Prejete si A) Zasifrovat. B)Desifrovat?")
volba=input("Zadejte A nebo B: ")
if volba=="A":
    vysledek=""
    Posun=int(input("Zadej posun:"))
    Zasifruj=str(input("Zadej slovo k ZASIFROVANI:"))
    for znak in Zasifruj.upper():
        if "A" <= znak <= "Z":
            pozice = ord(znak) - ord("A")
            zasifrovane = (pozice + Posun) % 26
            vysledek += chr(ord("A") + zasifrovane)
        else:
            vysledek += znak
    print(vysledek)
else:
    vysledek=""
    Posun=int(input("Zadej posun:"))
    Desifruj=str(input("Zadej slovo k DESIFROVANI:"))
    for znak in Desifruj.upper():
        if "A" <= znak <= "Z":
            pozice = ord(znak) - ord("A")
            zasifrovane = (pozice + Posun) % 26
            vysledek += chr(ord("A") + zasifrovane)
        else:
            vysledek += znak
    print(vysledek)
    

