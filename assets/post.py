from urllib.request import Request, urlopen
from urllib import parse,error
url = 'http://hadits.dev/post'
value = {"test" : 'testing' , "data" : 'bebas' }
parse_data = parse.urlencode(value)
try:
    ropen = urlopen(url, parse_data.encode('utf-8'))
    print(ropen.read())
except error.URLError as e: print("URL Error:",e.read() , url)