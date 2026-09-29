//Šachovnice zadam velikost,vypiše to nahoře a dole A,B,C.. vlevo vpravo čisla, veprostřed normalě šachovnice bila/černa,a pak jestli chce znovu A/N
#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(){
    
//Zadani vel.
    printf("Zadejte velikost sachovnice (2-26): ");
    int n;
    scanf("%d", &n);
//kontrola
if(n < 2 || n > 26){
    printf("Zadana velikost neni v rozsahu 2-26.\n");
    return 1;
}
//Vypis pismen nahoře
printf("  ");
for(int i = 0; i < n; i++){
    
        printf("%c ", 'A' + i);
    }

printf("\n");
    //Vypis sachovnice + čisel vlevo i vpravo
    for(int i = 0; i < n; i++){
        printf("%d ", n-i);
        for(int j = 0; j < n; j++){
            if((i + j) % 2 == 0){
                printf("* ");
            } else {
                printf("# ");
            }
        }
        
        printf("%d", n-i);
        printf("\n");
    
    }


   
    //Vypis pismen  dole
    printf("  ");
 for(int i = 0; i < n; i++){
        printf("%c ", 'A' + i);
    }
    printf("\n");
//opakovani
printf("chcete opakovat? a/n: ");
char opakovat;
scanf(" %c", &opakovat);
if(opakovat == 'a' || opakovat == 'A'){
    main();
    
}
}