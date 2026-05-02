// Online C compiler to run C program online
#include <stdio.h>

void main() {
    // Write C code here
  int a[2][2]={{2,3},{3,4}};
  int i,j,sum=0;
  for(i=0;i<2;i++){
      for(j=0;j<2;j++){
         sum=sum+a[i][j];
      }
     printf("sum :%d\n",sum);
  }
}