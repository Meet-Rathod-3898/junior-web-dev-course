#include<stdio.h>
void main()
{
    int number,multipy,answer;
     
    printf("Enter a number");
    scanf("%d",&number);
    multipy=1;

    while (multipy<=10)
    {
       answer=multipy*number;
       printf("%2d * %2d=%2d\n",number,multipy,answer);
       multipy++;
    }
    
}