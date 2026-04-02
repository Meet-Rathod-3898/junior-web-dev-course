#include<stdio.h>
void main()
{
    float fh;
    printf("enter the body tempreter in farenthit");
    scanf("%f",&fh);
    if(fh>=102.9){
        printf("high fever");
    }
    else if (fh<=102.8 && fh>=101.2)
    {
      printf(" midium fever");
    }
    else if (fh<=102.8 && fh>=99.2)
    {
      printf("normal fver");
    }
   else
   {
   printf("your a normal");
   }
   
    
    
}