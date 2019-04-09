import os

path='/var/www/html/petfinder/dataset'

file_list=os.listdir(path)

file_list.sort()

first=file_list[0].split('-')[0]
print(first)
cnt=0
for item in file_list:
    step=item.split('-')[0]
    print (step)
    if step==first:
        os.remove(path+"/"+item)
        print(item)
    first=step

