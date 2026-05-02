/*write a pprogram to store and display student details*/
#include<stdio.h>
//define structure
struct  student
{
    int roll;
    char name[50];
    float marks;//member-variable
};
void main()
{
    struct student s1;//declare structure variable
    //input
    printf("enter rollno:");
    scanf("%d",&s1.roll);
    printf("enter name:");
    scanf("%s",&s1.name);
    printf("enter marks:");
    scanf("%f",&s1.marks);
    //output
    printf("\n-----------------student detail-----------------\n");
    printf("roll number=%d\n",s1.roll);
    printf("name=%s\n",s1.name);
    printf("marks=%f\n",s1.marks);
}