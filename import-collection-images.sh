#!/bin/bash
cd public/fileadmin/
if [[ -d groups ]]
then
    cd groups
else
    mkdir groups
    cd groups
fi

if [[ -d collections ]]
then
    cd collections
else
    mkdir collections
    cd collections
fi

if [[ -d images ]]
then
    cd images
else
    mkdir images
    cd images
fi

wget https://digi.bib.uni-mannheim.de/fileadmin/ddev-kitodo-temp/dlf_hp_VirtuellesKartenforum.jpg
