#include <stdio.h>
void main()
{
    char letter;
    printf("Enter a letter");
    scanf("%c", &letter);

    switch (letter)
    {
    case 'a':
    case 'A':
    printf("it is vowel");
    break;

    case 'e':
    case 'E':
    printf("it is vowel");
    break;

    case 'i':
    case 'I':
    printf("it is vowel");
    break;
    case 'o':
    case 'O':
    printf("it is vowel");
    break;
    case 'u':
    case 'U':
    printf("it is vowel");
    break;

    default:
        printf("it is not a vowel");
        break;
    }
}