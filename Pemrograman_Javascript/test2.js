function isPalindrome(str) {
    // Remove any non-alphanumeric characters and convert to lowercase
    const cleanedStr = str.replace(/[\W_]/g, '').toLowerCase();
  
    // Reverse the cleaned string
    const reversedStr = cleanedStr.split('').reverse().join('');
  
    // Check if the cleaned string is the same as the reversed string
    return cleanedStr === reversedStr;
  }

  console.log(isPalindrome("Yi aejcaxoz acpjooosjauajxn Xja Uajs-Ooojpc, Az, oxacje aiy")); // true
  console.log(isPalindrome("kodok")); // false
  console.log(isPalindrome("Psao ygih-uhxnytty, nhuhigyoa Sp")); // false
  console.log(isPalindrome("U-a-akafg-e Kxohe Fwviiulaiiuuiialuiivwfehoxkeg F-A, k aau javascript")); // false