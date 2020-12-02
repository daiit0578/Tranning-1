import requests
from bs4 import BeautifulSoup
import urllib
data ={'log': 'admin', 'pwd': '123456aA'}
res = requests.post("http://45.79.43.178/source_carts/wordpress/wp-login.php", data =data)
soup = BeautifulSoup(res.text,'lxml')
result = soup.select('#wp-admin-bar-site-name > a')
print(result[0].text)
