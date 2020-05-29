file=open("data.csv","r+")
text=file.read()
file.close()
lines=text.split("\n")
all_data=[]
previous_temp=30
for x in lines:
    if x!='':
        temp_arr=x.split(',')[2:]
        temp_arr.pop(2)
        temperature=temp_arr[-1]
        temp_arr[-1]=round(abs(previous_temp-float(temp_arr[-1])),3)
        previous_temp=float(temperature)
        all_data.append(temp_arr)

print(len(all_data))

fileText=""
fileText+="["
for x in all_data:
    fileText+="["
    for y in x:
        fileText+=str(y)+","
    fileText+="],"

fileText+="]"

file=open("output.txt","w+")
file.write(fileText)
file.close()

