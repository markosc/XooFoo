TITLE UNIFORM SERVER - Stop
rem ###################################################
rem # Name: Server_Stop.bat
rem # Location: uniform_server
rem # Created By: The Uniform Server Development Team
rem # Edited Last By: MPG (ric)
rem # V 1.0 30-12-2008
rem ##################################################
cls
@echo off
COLOR CF
echo.

rem working directory current folder 
pushd %~dp0

rem ## Delete drive letter file.
if exist udrive\usr\local\apache2\logs\drive.txt del udrive\usr\local\apache2\logs\drive.txt

rem Stop Apache indirectly stops MySQL
udrive\home\admin\program\pskill.exe Apache.exe C

rem ### Check for system error jump to Pause allows error message to be displayed.
if errorlevel 2 goto :PAUSE
goto :END
:PAUSE
echo.
pause

:END

rem restore original working directory
popd