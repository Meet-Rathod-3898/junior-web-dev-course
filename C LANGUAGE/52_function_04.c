/*without return value & with argument function.
exaple:print multiplication table.
*/

#include<stdio.h>

int printtable(int num)
{
   
  for(int i=1;i<=10;i++)
  printf("%d*%d=%d\n",num,i,num*i);
}

void main()
{
   int n;
   printf("Enter number");
   scanf("%d",&n);
   printtable(n);
}