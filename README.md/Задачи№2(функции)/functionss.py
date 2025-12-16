def alphabeticalOrder(str):
    return ''.join(sorted(str))

def findPerfectNumber(arr):
    perfect_numbers = []
    
    for num in arr:
        if num <= 0:
            continue
        
        divisors = [i for i in range(1, num) if num % i == 0]
        sum_of_divisors = sum(divisors)
        
        if sum_of_divisors == num:
            perfect_numbers.append(num)
    
    return perfect_numbers

def mostRecent(text):
    words = text.lower().split()
    
    word_count = {}
    
    for word in words:
        if word not in word_count:
            word_count[word] = 0
        word_count[word] += 1
    
    most_frequent_word = max(word_count, key=word_count.get)
    
    return most_frequent_word

print(alphabeticalOrder('alphabetical'))  # 'aaabcehillpt'
print(findPerfectNumber([6, 28, 12, 496]))  # [6, 28, 496]
print(mostRecent("This is a test. This test is only a test."))  # 'test'
