#include<stdio.h>
void main()
{
    int qube,number;
    printf("enter number:");
    scanf("%d",&number);
    if(number<0)
    {
        number=0-number;
        printf("your number is negative so converted into the positive");
    }
    qube=number*number*number;
    printf("qube:%d",qube);
}