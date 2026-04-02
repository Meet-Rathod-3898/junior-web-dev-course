#include<stdio.h>
void main()
{
    int lengh,width;
    printf("enter a lenght");
    scanf("%d",&lengh);
    printf("enter a width");
    scanf("%d",&width);
    if(lengh>width){
        printf("shape is portrait");
    }
    if(lengh<width){
        printf("shape is lanscape");
    }
    if(lengh==width){
        printf("shape is square");
    }
}