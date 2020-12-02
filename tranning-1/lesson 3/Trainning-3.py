import requests
import json
import pandas as pd

response = requests.get("https://9d9959273ccc2e879a3192184cc0c5db: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@meo-meo123.myshopify.com/admin/api/2020-10/customers.json")
# print(response.status_code)/

result = response.json()
# print(len(result['customers']))
for x in range(0,len(result['customers'])):
    result['customers'][x].pop("addresses")
    result['customers'][x].pop("default_address")


# print(result['customers'])
with open("data.json", "w") as write_file:
    json.dump(result['customers'], write_file)
try:
    df = pd.read_json(r'data.json')
    
    df.to_csv(r'data.csv',index = 0)
except:
    print('that bai')