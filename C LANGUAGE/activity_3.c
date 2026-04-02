#include<stdio.h>
void main()
{
    int arr[50],n,i;
    printf("enter number of element");
    scanf("%d",&n);

    printf("Enter element : \n");
    for(i=0;i < n;i++){
        scanf("%d",&arr[i]);
    }
    printf("even nuber are : \n");
     for(i=0;i < n;i++){
        if(arr[i] %2 == 0){
            printf("%d",arr[i]);
        }
     }
    printf("odd nuber are : \n");
     for(i=0;i < n;i++){
        if(arr[i] %2 != 0){
            printf("%d",arr[i]);
        }
     }

}