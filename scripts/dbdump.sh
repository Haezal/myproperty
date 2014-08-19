#!/bin/sh

mysqldump -d -uroot -p myproperty > ../sql-myproperty/myproperty-structure-tmp.sql

mysqldump --skip-dump-date --skip-compact --complete-insert --skip-extended-insert --no-create-info -uroot -p myproperty > ../sql-myproperty/myproperty-data.sql

cat ../sql-myproperty/myproperty-structure-tmp.sql | sed "s/ AUTO_INCREMENT=[0-9]*//g" > ../sql-myproperty/myproperty-structure.sql
rm ../sql-myproperty/myproperty-structure-tmp.sql

# git add docs
# git commit -m 'production commit'
# git push