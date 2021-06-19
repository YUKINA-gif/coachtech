const leapYear = (year) => {
  if (year % 4 === 0 && !year % 100 === 0) {
    return "うるう年です"
  } else {
    return "うるう年ではありません"
  }
}

console.log(leapYear(2046));