#include<stdio.h>
void main()
{
  char str[100];
  int i,vowels=0,words=1;
  gets(str);
  for(i=0;str[i]!='\0';i++){
      
      if(str[i]=='a'||str[i]=='e'||str[i]=='i'||str[i]=='o'||str[i]=='u')
      {
          vowels++;
      }
      if(str[i]==' '){
          words++;
      }
  }
  printf("number of vowels :%d\n",vowels);
  printf("number of words :%d\n",words);

}