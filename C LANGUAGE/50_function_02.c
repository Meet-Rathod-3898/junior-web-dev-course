#include<stdio.h>

int getpi()
{
    int pi = 11;
    return pi;
}

void main()
{
    int radius, area, pi;

    printf("Enter radius of circle: ");
    scanf("%d", &radius);

    pi = getpi();

    area = (pi * radius * radius) / 7;a

    printf("The Area of circle is : %d", area);
}