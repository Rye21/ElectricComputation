@echo off


cls
echo Done copying files..
set /P id=Enter commit message: 

git add .

git commit -a -m"%id%"

git push

msg "%username%" Finished