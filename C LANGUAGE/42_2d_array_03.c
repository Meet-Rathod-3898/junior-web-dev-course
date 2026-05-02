// Online C compiler to run C program online
#include <stdio.h>

void main() {
    // Write C code here
  int a[2][3]={{2,3,34},{3,4,45}};
  int i,j,max;
  for(i=0;i<2;i++){
      for(j=0;j<3;j++){
        if(a[i][j]>max){
            max=a[i][j];
        }
      }
  }
     printf("largest number :%d",max);
}