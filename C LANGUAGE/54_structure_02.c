/*example of structure.*/
#include<stdio.h>
struct student
{
    //member variable
    char name[33];//1d array of char(string)
    char gender;
    int age;
    float weight;
};
void main()
{
    //create structure type variable
    struct student s1;
    //input
    printf("enter name:");
    gets(s1.name);
    fflush(stdin);
    printf("enter gender:");
    scanf("%c",&s1.gender);
    printf("enter age:");
    scanf("%d",&s1.age);
    printf("enter weight:");
    scanf("%f",&s1.weight);
    //output
    printf("name=%s \n gender=%c \n weight=%.2f \n age=%d",s1.name,s1.gender,s1.weight,s1.age);
}