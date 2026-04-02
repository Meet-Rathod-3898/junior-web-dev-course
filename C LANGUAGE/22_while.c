#include<stdio.h>
void main()
{
    int number1=1;
    while (number1<=99)
    {
       printf("%5d",number1);
       number1+=2;
    }
    printf("%d",number1);
}