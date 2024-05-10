#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'miniMaxSum' function below.
#
# The function accepts INTEGER_ARRAY arr as parameter.
#


def miniMaxSum(arr):
    lista = []

    for i in arr:
        arrIterator = arr.copy()
        arrIterator.remove(i)

        lista.append(sum(arrIterator))

    print(min(lista), max(lista), sep=" ")


if __name__ == "__main__":

    arr = list(map(int, input().rstrip().split()))

    miniMaxSum(arr)
