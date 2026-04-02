#include<stdio.h>
void main()
{
    int a[5]={1,2,3,4,5};
    int b[5];
    int top,bottom;
    for ( top=0,bottom=4;top<=4;top++,bottom--)
    {
       b[top]=a[bottom];
    }
    for ( i = 0; i <=4; i++)
      {
        printf("5d",a[i]);
      }
       printf("\n");
    for(int i=0;i<=4;i++)
    {
        printf("%5d",b[i]);
    }
    
    
    
}