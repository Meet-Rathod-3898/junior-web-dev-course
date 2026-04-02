#include<stdio.h>
void main()
{
    int number1,number2,choice;
    float result;
    printf("Enter a Number");
    scanf("%d",&number1);
    printf("Enter a Number");
    scanf("%d",&number2);
    printf("1.addition  2.substaraction 3.multiplication  4.division");
    printf("\n Enter a choice");
    scanf("%d",&choice);


    switch (choice)
    {
    case 1:
       result=number1+number2;
        break;
    case 2:
        result=number1-number2;
        break;
    
    case 3:
        result=number1*number2;
        break;
    
    case 4:
        result=number1/number2;
        break;
    
    default:
    printf("invalid choice");
        break;
    }
    if (choice>=1 && choice<=4)
    {
      printf("result : %f",result);
    }
    
}