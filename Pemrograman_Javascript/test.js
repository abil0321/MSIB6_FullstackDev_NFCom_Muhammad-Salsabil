function combinations(n, k) {
    if (k > n) {
      return 0;
    }
    if (k === 0 || n === k) {
      return 1;
    }
    return combinations(n - 1, k - 1) + combinations(n - 1, k);
  }
  
  const numFemaleParticipants = 5;
  const numMaleParticipants = 3;
  const numFemaleStudents = 12;
  const numMaleStudents = 8;
  
  const numFemaleCombinations = combinations(numFemaleStudents, numFemaleParticipants);
  const numMaleCombinations = combinations(numMaleStudents, numMaleParticipants);
  
  const totalCombinations = numFemaleCombinations * numMaleCombinations;
  console.log(`The total number of combinations is: ${totalCombinations}`);