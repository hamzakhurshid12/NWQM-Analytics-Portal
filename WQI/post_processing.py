def getClass(inp):
    inp=int(inp)
    if inp<0 or inp>100:
        return "Out of Range"
    elif inp<=44:
        return "Class 6 - Very Polluted Water"
    elif inp<=65:
        return "Class 5 - Polluted Water"
    elif inp<=79:
        return "Class 4 - Medium Quality Water"
    elif inp<=89:
        return "Class 3 - Good Quality Water"
    elif inp<=94:
        return "Class 2 - Very oGod Quality Water"
    else:
        return "Class 1 - Excellent Quality Water"

#opening output data file
file=open("WQI_all.txt","r+")
text=file.read()
file.close()
output=text.split(",")

#Opening input data file
file=open("data.csv","r+")
text=file.read()
file.close()
lines=text.split("\n")
all_data=[]
for x in lines:
    if x!='':
        temp_arr=x.split(',')
        all_data.append(temp_arr)

final_output=''
for x in range(len(all_data)):
    for y in all_data[x]:
        final_output+=y+','
    final_output+=output[x]+','+getClass(output[x])
    final_output+='\n'

file=open("withClasses.csv","w+")
file.write(final_output)
file.close()
