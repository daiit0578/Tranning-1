i = 0
def compare(x,y):
    global i
    if(x >= y):
        print(' x phải bé hơn y')
    else:
        while x < y:
            x = x*2
            i +=1
            if(x<y):
                continue
            elif(x==y):
                break
            else:
                i += x-y
                return i

compare(1,100)
print(i)
        # for x in range(1,100):
        #     if(x*2> y):
        #         i += 2
        #     else:
        #         if(x*2 == y):                    
        #             i += 1