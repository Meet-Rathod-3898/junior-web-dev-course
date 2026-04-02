#include<stdio.h>
void main()
{
    int arr[10]={1,2,3,4,5,6,7,8,9,11};
    int i,sum=0;
    for ( i = 0; i <=9; i++)
    {
      sum=sum+arr[i];
    }
    printf("sum : %d",sum);
}