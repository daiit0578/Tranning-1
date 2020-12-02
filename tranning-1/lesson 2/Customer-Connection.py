import csv  
import mysql.connector as conn
import datetime
myConn = conn.connect(host = "localhost",user = "root",passwd = "daipro13245",database = "customerDb")
# sql = """create table  Customer( customerId int,firstName varchar(20),  lastName varchar(20), 
#  companyName varchar(50),  billingAddress1 varchar(100),  billingAddress2 varchar(100), 
#   city varchar(30),  state varchar(10),  postalCode varchar(20), 
#    country varchar(30),  phoneNumber varchar(15),  emailAddress varchar(50), 
#     createDate datetime  ) """
# cur = myConn.cursor()
 
# try:
#     dbs = cur.execute(sql)
# except:
#     print('that bai')
cur = myConn.cursor()
sql = """ insert into customer (customerId,firstName,lastName,companyName,billingAddress1,billingAddress2,city,state,postalCode,country,phoneNumber,emailAddress,createDate) values (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)"""
with open('customer.csv') as csv_file:
    csv_reader = csv.reader(csv_file, delimiter=',')
    line_count = 0
    for row in csv_reader:
        if line_count == 0:
            line_count += 1
        else:
            # customerId = row[0]
            # firstName = row[1]
            # lastName = row[2]
            # companyName = row[3]
            # billingAddress1 = row[4]
            # billingAddress2 = row[5]
            # city = row[6]
            # state = row[7]
            # postalCode = row[8]
            # country = row[9]
            # phoneNumber = row[10]
            # emailAddress = row[11]
            # createDate = row[12]
            
            # values = (customerId,firstName,lastName,companyName,billingAddress1,
            #         billingAddress2,city,state,postalCode,country,phoneNumber,emailAddress,createDate)
            row[12] += ':00'
            row[12] = datetime.datetime.strptime(row[12],'%m/%d/%Y %H:%M:%S')
            cur.execute(sql,row)
    
myConn.commit()
cur.close()