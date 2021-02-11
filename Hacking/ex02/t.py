import sys
import hashlib
def generate_numeric_hash(char):
    m = hashlib.sha1()
    m.update(char.encode('utf-8'))
    return int(m.hexdigest(), 16)
alpha = "abcdefghijklmnopqrstuvxyz"
big = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
num = "0123456789"
spe = "!%&/()=?*^_-:.,; []+#$<>@|{}~"
for i in range(0, len(alpha)) :
    print(alpha[i], end = " :")
    print(generate_numeric_hash(alpha[i]))
for i in range(0, len(num)) :
    print(num[i], end = " :")
    print(generate_numeric_hash(num[i]))
for i in range(0, len(big)) :
    print(big[i], end = " :")
    print(generate_numeric_hash(big[i]))
for i in range(0, len(spe)) :
    print(spe[i], end = " :")
    print(generate_numeric_hash(spe[i]))
