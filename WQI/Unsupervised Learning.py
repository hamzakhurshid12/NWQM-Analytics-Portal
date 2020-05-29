#input Data
from sklearn.cluster import KMeans
import numpy as np

file=open("data.csv","r+")
text=file.read()
file.close()
lines=text.split("\n")
all_data=[]
new_data=[]
previous_temp=30
for x in lines:
    if x!='':
        temp_arr=x.split(',')[2:]
        #temp_arr.pop(2)
        temperature=temp_arr[-1]
        temp_arr[-1]=round(abs(previous_temp-float(temp_arr[-1])),3)
        previous_temp=float(temperature)
        all_data.append(temp_arr)
        
for x in lines:
    if x!='':
        temp_arr=x.split(',')
        #temp_arr.pop(2)
        new_data.append(temp_arr)

        
all_data=np.array(all_data)
kmeans = KMeans(n_clusters=3, random_state=0).fit(all_data)
print(list(kmeans.labels_))

final_output=''
for x in range(len(new_data)):
    for y in new_data[x]:
        final_output+=y+','
    final_output+=str(kmeans.labels_[x])
    final_output+='\n'

file=open("withClassesML.csv","w+")
file.write(final_output)
file.close()

