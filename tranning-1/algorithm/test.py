import random
import numpy

def find_list_expression(L,total_ref):
    list_result=[]

    L_expand=[]

    for i in L:
        L_expand.append(['%s+'%i,'%s-'%i,'%s'%i])
    L_expand=L_expand[:-1]
    # print(L_expand)

    a = [[0,1,2]]*8
    L_a=[list(x) for x in numpy.array(numpy.meshgrid(*a)).T.reshape(-1,len(a))]
    for e_L_a in L_a:
        i0,i1,i2,i3,i4,i5,i6,i7=e_L_a
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


    # L_expression=find_random_expression(L,list_operator,total_ref)
    # print('L_expression',L_expression)
    
    list_result=find_list_expression(L,total_ref)
    print('list_result',list_result)