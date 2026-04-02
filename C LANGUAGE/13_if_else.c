#include<stdio.h>
void main()
{
    float price1,price2,weight1,weight2;
    float price_per_gram1,price_per_gram2;
    printf("enter a price of 1 :");
    scanf("%f",&price1);
    printf("enter a weight of 1 :");
    scanf("%f",&weight1);
    printf("enter a price of 1 :");
    scanf("%f",&price2);
    printf("enter a weight  of 1 :");
    scanf("%f",&weight2);

    price_per_gram1=price1/weight1;
    price_per_gram2 = price2/weight2;

    if(price_per_gram1 > price_per_gram2){
        printf("product 2 is cheaper");
    }
    else{
        printf("product 1 is cheaper");
    }

}