// on page load
window.onload = function () {
  $('.loader').fadeOut(750);
}

document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('.resreview-container');
  const stars = Array.from(document.querySelectorAll('input[name="rating"]'));

  stars.forEach((star, index) => {
    star.addEventListener('change', function () {
      stars.forEach((star, starIndex) => {
        const label = document.querySelector(`label[for="${star.id}"]`);
        if (starIndex <= index) {
          label.style.color = 'gold';
        } else {
          label.style.color = 'gray';
        }
      });
    });
  });

  form.addEventListener('submit', function (event) {
    event.preventDefault();

    const rating = document.querySelector('input[name="rating"]:checked').value;
    const description = document.querySelector('#description').value;

    console.log(`Rating: ${rating}`);
    console.log(`Description: ${description}`);
  });
});

function validateReview(event) {
  var radios = document.getElementsByName('rating');
  var selected = false;

  for (var i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      selected = true;
      break;
    }
  }

  if (!selected) {
    alert('If you want to review, you have to choose stars.');
    event.preventDefault();
  }
  else{
    alert('Thank you for your review!');
   
  }
}

// document.querySelector('form').addEventListener('submit', validateReview);


document.addEventListener('DOMContentLoaded', function () {
  var dtToday = new Date();

  var month = dtToday.getMonth() + 1;
  var day = dtToday.getDate();
  var year = dtToday.getFullYear();
  if (month < 10)
    month = '0' + month.toString();
  if (day < 10)
    day = '0' + day.toString();

  var maxDate = year + '-' + month + '-' + day;
  document.getElementById('pickupdate').setAttribute('min', maxDate);
});

document.getElementById('pickupdate').addEventListener('change', function () {
  var pickupdate = this.value;
  document.getElementById('dropdate').min = pickupdate;
});

document.getElementById('pickupdate').addEventListener('change', function() {
  var pickupdate = this.value;
  if (pickupdate) {
    document.getElementById('dropdate').disabled = false;
  }
});




