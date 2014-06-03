from urllib.request import Request, urlopen
from urllib import parse,error
url = 'http://192.168.12.30/post.php'
value = {"test" : 'testing' , "data" : 'haidar123' }
parse_data = parse.urlencode(value)
try:
    ropen = urlopen(url, parse_data.encode('utf-8'))
    print(ropen.read())
except error.URLError as e: print("URL Error:",e.read() , url)