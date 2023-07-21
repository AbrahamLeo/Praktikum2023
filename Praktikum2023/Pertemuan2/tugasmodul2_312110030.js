for (let i = 5; i >= 1; i--) {
  let stars = '';

  for (let j = 1; j <= i; j++) {
    stars += '*';
  }

  console.log(stars);
}