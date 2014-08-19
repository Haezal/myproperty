#!/bin/sh

mysqldump -u root -p myproperty > ../sql-myproperty/myproperty-tmp.sql

cat ../sql-myproperty/myproperty-tmp.sql | sed "s/ AUTO_INCREMENT=[0-9]*//g" > ../sql-myproperty/myproperty.sql
rm ../sql-myproperty/myproperty-tmp.sql

# git add docs
# git commit -m 'production commit'
# git push