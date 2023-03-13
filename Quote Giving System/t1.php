

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>

      <link rel="stylesheet" href="http://localhost/test/t1.css">
      <script src="https://kit.fontawesome.com/616fb309b8.js" crossorigin="anonymous"></script>

</head>
<body>
      



<label id='number-display'> 0 </label>
 <button type='checkbox' id='my-button'><label class='fa-regular fa-thumbs-up' > </label> </button> 

 
<label id='dislike-display'>0</label> 
   <button type='checkbox' id='my-button1'><label class='fa-regular fa-thumbs-down' ></label> </button> 


<script>

const button = document.getElementById('my-button');
const numberDisplay = document.getElementById('number-display');
let number = 0;
let isIncreasing = true;

button.addEventListener('click', () => {
  if (isIncreasing) {

      button.style.backgroundColor = 'MediumSpringGreen';
    number++;
  } else {
    number--;
    button.style.backgroundColor = 'white';
  }

  numberDisplay.textContent = number;
  isIncreasing = !isIncreasing;
});



const button1 = document.getElementById('my-button1');
const numberDisplay1 = document.getElementById('dislike-display');
let number1 = 0;
let isIncreasing1 = true;

button1.addEventListener('click', () => {
  if (isIncreasing1) {
     
    number1++;
    button1.style.backgroundColor = 'MediumSpringGreen';
  } else {
    number1--;
    button1.style.backgroundColor = 'white';
  }

  numberDisplay1.textContent = number1;
  isIncreasing1 = !isIncreasing1;
});


</script>









</body>
</html>