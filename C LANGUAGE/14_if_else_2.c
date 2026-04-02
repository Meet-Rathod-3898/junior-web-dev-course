#include<stdio.h>
void main()
{
    int age;
    printf("enter a age :");
    scanf("%d",&age);

    if(age>19 && age<34) {

        printf("your eligible to give civil services ");
    }
    else{
         printf("your not eligible to give civil services ");
    }
    
}