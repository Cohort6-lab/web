#include <windows.h>


/**
This program was re-written by Dumka .B (Cohort-6) 
and is aimed at Windows OS 
A basic Windows.exe Application 

requires an already installed mingw_x64 for compilation
*/


int WINAPI WinMain (HINSTANCE hInstance, HINSTANCE hPrevInstance,
 PSTR szCmdLine, int iCmdShow)
{
 MessageBox (NULL, TEXT ("Hello, Alx!"), TEXT ("Alx Cohort-6"), NULL | MB_OKCANCEL |  MB_ICONQUESTION ) ;
 return 0 ;
}
