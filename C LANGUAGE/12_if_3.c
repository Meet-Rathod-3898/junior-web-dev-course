#include<stdio.h>
void main()
{
    int month_number;
    printg("enter the month");
    scanf("%d" ,&month_number);
    if(month_number==1){
        printf("january");
    }
    if(month_number==2){
        printf("february");
    }
    if(month_number==3){
        printf("march");
    }
    if(month_number==4){
        printf("april");
    }
    if(month_number==5){
        printf("may");
    }
    if(month_number==6){
        printf("june");
    }
    if(month_number==7){
        printf("july");
    }
    if(month_number==8){
        printf("august");
    }
    if(month_number==9){
        printf("september");
    }
    if(month_number==10){
        printf("octomber");
    }
    if(month_number==11){
        printf("november");
    }
    if(month_number==12){
        printf("december");
    }
    if(month_number>12){
        printf("please select 1 to 12");
    }
}