import random
import numpy

def find_list_expression(L,total_ref):
    list_result=[]

    L_expand=[]
    
    for i in L:
        L_expand.append(['%s+'%i,'%s-'%i,'%s'%i])
    L_expand=L_expand[:-1]
    # print(L_expand)

    for i0 in range(3):
        for i1 in range(3):
            for i2 in range(3):
                for i3 in range(3):
                    for i4 in range(3):
                        for i5 in range(3):
                            for i6 in range(3):
                                for i7 in range(3):
                                    L_expression=''
                                    L_expression+=L_expand[0][i0]+L_expand[1][i1]+L_expand[2][i2]
                                    L_expression+=L_expand[3][i3]+L_expand[4][i4]+L_expand[5][i5]
                                    L_expression+=L_expand[6][i6]+L_expand[7][i7]+L[-1]
                                    
                                    # input(L_expression)
                                    total=eval(L_expression)
                                    if total==total_ref:
                                        list_result.append(L_expression)

    

    return list_result
    
if __name__=='__main__':
    L='123456789'
    list_operator=['','+','-']
    total_ref=100

    list_result=find_list_expression(L,total_ref)
    print('list_result',list_result)