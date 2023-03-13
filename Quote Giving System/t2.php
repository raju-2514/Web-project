

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>

      <link rel="stylesheet" href="http://localhost/test/demo.css">
      <script src="https://kit.fontawesome.com/616fb309b8.js" crossorigin="anonymous"></script>

</head>
<body>
      






   <label id="dislike-display">0</label> 
   <button type="checkbox" id="my-button1"><label class="fa-regular fa-thumbs-down" id="like2"></label> </button> 


   <script>

const button = document.getElementById('my-button1');
const numberDisplay = document.getElementById('dislike-display');
let number = 0;
let isIncreasing = true;

button.addEventListener('click', () => {
  if (isIncreasing) {
    number++;
  } else {
    number--;
  }

  numberDisplay.textContent = number;
  isIncreasing = !isIncreasing;
});

</script>


</body>
</html>