#include<stdio.h>
void main()
{
    int number,factoria=1;
    printf("Enter a number :");
    scanf("%d",&number);

    while (number>+1)
    {
        factoria=factoria*number;
        number--;

    }
    printf("%d",factoria);
}