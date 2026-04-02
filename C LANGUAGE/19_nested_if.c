#include<stdio.h>
void main()
{
    int month_number;
    printf("Enter a month");
    scanf("%d",&month_number);

    if(month_number>=1 && month_number<12)
    {
        if (month_number==1)
        {
           printf("this is a january");
        }
        else if(month_number==2)
        {
            printf("ths is february");
        }
        else if(month_number==3)
        {
            printf("ths is march");
        }
        else if(month_number==4)
        {
            printf("ths is april");
        }
        else if(month_number==5)
        {
            printf("ths is may");
        }
        else if(month_number==6)
        {
            printf("ths is june");
        }
        else if(month_number==7)
        {
            printf("ths is july");
        }
        else if(month_number==8)
        {
            printf("ths is august");
        }
        else if(month_number==9)
        {
            printf("ths is september");
        }
        else if(month_number==10)
        {
            printf("ths is octomber");
        }
        else if(month_number==11)
        {
            printf("ths is november");
        }
        
        else if(month_number==12)
        {
            printf("ths is december");
        }
        
    }
    else{
        printf("invalid month number");
    }
}