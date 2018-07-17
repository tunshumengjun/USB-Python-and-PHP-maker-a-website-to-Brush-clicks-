import urllib.request,time,re
import threading


def txt():
    while 1:
        txt=open('log.txt','r')
        txtread=txt.read()
        txt.close()
        dele=open('log.txt','w')
        dele.write('https://kada.163.com/project/814048-619535.htm')
        dele.close()
        time.sleep(5)
        return txtread
    
        
def syn():
    p=r'https://.+[$htm]' #use zhengzebiaodashi
    justread=txt()
    print(len(justread))
    html=re.findall(p,justread)
    num=len(html)
    a=0
    wo=[]
    for i in html:
        wo.append(i)
        print(wo)
    for i in range(0,num):
        a=0
        while 1:
            try:
                htmlli=urllib.request.urlopen(wo[i])
                a+=1
            except:
                print('no')
            else:
                print('YES!!')
            if a>=100:
                break


th_syn=threading.Thread(target=syn,)
th_syn.start()

th_syn=threading.Thread(target=syn,)
th_syn.start()

th_syn=threading.Thread(target=syn,)
th_syn.start()



        
    
        
