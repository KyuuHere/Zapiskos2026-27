import random

zacatekrozsah = int(input("Zadejte zacatek rozsahu: "))
if zacatekrozsah <= 0:
    print("Error: rozsah musi byt kladne cislo")
else:
    konecrozsah = int(input("Zadejte konec rozsahu: "))
    if zacatekrozsah <= 0:
        print("Error: rozsah musi byt kladne cislo")
    else:
        print("Moznosti: A cislo si mysli pocitac nebo B cislo si mysli uzivatel")
        volba = input("Zadej A nebo B: ").upper()

    if volba == "A":
        randomcislo = random.randint(zacatekrozsah, konecrozsah)
        print("Myslim si cislo :)")

        while True:
            hadej = int(input("-- Hadej: "))
            if hadej == randomcislo:
                print("Gratuluji, vyhrals!")
                break
            elif hadej < randomcislo:
                print("Myslim si vetsi cislo!")
            else:
                print("Myslim si mensi cislo!")

    elif volba == "B":
        print(f"Mysli si cislo od {zacatekrozsah} do {konecrozsah}. Napovidej mi, pomoci M (mensi), V (vetsi) nebo S (spravne).")
        dolni_mez = zacatekrozsah
        horni_mez = konecrozsah

        while dolni_mez <= horni_mez:
            tip = (dolni_mez + horni_mez) // 2
            odpoved = input(f"Je to cislo {tip}? [M/V/S]: ").upper()

            if odpoved == "S":
                print("Nice")
                break
            if odpoved == "M":
                horni_mez = tip - 1
            elif odpoved == "V":
                dolni_mez = tip + 1
            else:
                print("Zadej M, V nebo S.")
        else:
            print("mhmm neco mi nevychadza...")

    else:
        print("Tady mi jakoze VUBEC nic nevychazi.")       