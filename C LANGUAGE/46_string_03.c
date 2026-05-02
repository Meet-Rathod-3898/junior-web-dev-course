/*write a program to find the length of string*/
#include<stdio.h>
void main()
{
    char str[100];
    int i,length=0;
    printf("enter a string:");
    gets(str);

    for(i=0;str[i]!='\0';i++)
    {
        length++;
    }
    printf("length of string=%d",length);
}