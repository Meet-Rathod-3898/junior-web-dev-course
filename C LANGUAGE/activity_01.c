#include<stdio.h>
void main()
{
    int arr[50],n,i,largest;
    printf("Enter a number of element :");
    scanf("%d",&n);
    printf("Enter a element : \n");
    for(i=0;i<n;i++){
        scanf("%d",&arr[i]);
    }
    largest= arr[0];
    for(i=1 ; i < n ;i++){
        if(arr[i] > largest){
            largest = arr[i];
        }
    }
   printf("Largest number = %d", largest);
}