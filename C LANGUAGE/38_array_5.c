#include<stdio.h>
void main()
{
    float weight[10]={10.2,5.6,6.7,8.9,7.9,3.6,3.6,4.5,7.8,9.5};
    float search;
    int position;
    printf("enter the value of search :");
    scanf("%f",&search);
    for(position=0;position<=9;position++)
    {
        if (search==weight[position])
        {
          printf("value found s the %d position",position+1);
          break;
        }
        
    }
    if (position==10)
    {
       printf("value is not found");
    }
    
}