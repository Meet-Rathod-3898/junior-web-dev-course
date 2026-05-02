/*example square of a number.
with return value&with argument
*/

#include<stdio.h>

int getsqr(int number)
{
   
    return number*number;
}

void main()
{
    int n,sq;
    printf("Enter a Number :");
    scanf("%d",&n);
    sq=getsqr(n);
    printf("square is : %d",sq);
}