class NumberSwiper {

  constructor(element_id, value) {
    var NS = this;
    NS.el = document.getElementById(element_id);
    //this.init(element_id);
    // this.setColumnValue(2,"top");
  }

init(element_id,pos = 1) 
{
  var NS = this;
  NS.el = document.getElementById(element_id);
  
  let observer = new IntersectionObserver(numbers => { 
		numbers.forEach(number => {
		if(number.isIntersecting && !(number.target.classList.contains('number-swiper-active-number')))
    {
      number.target.classList.add('number-swiper-active-number');
		} 
    else number.target.parentElement.querySelector('.number-swiper-active-number').classList.remove('number-swiper-active-number');
		});
	}, 
  {root: NS.el,rootMargin: "-30px 0px -80px 0px",threshold: 1});//rootMargin: "0px 0px -"+pos+"px 0px",
  console.log("ViewportACTIV: "+pos);
  //{root: NS.el,rootMargin: '0px',threshold: 1});

	document.querySelectorAll(".number-swiper-column li").forEach(number => { observer.observe(number) });

  return this;
  
}

getNumber(column, value) {
  var NS = this;
  // value can be keyword 'active' to select the active number
  // returns the element

  if (value == 'active') {
    return NS.el.querySelector('.number-swiper-column-' + column + ' .number-swiper-active-number');
  }

  var numbers = NS.el.querySelector('.number-swiper-column-' + column).getElementsByTagName("li");

  for (var i = 0; i < numbers.length; i++) {
    if (numbers[i].textContent == value) {
      return numbers[i];
    }
  }
}
getNumbers() {
  var NS = this;
  // value can be keyword 'active' to select the active number
  // returns the element

    var z = new Array();
    z[0] = NS.el.querySelector('.number-swiper-column-2 .number-swiper-active-number').innerText;
    z[1] = NS.el.querySelector('.number-swiper-column-1 .number-swiper-active-number').innerText;
    return z;

  // var numbers = NS.el.querySelector('.number-swiper-column-' + column).getElementsByTagName("li");

  // for (var i = 0; i < numbers.length; i++) {
  //     if (numbers[i].textContent == value) {
  //         return numbers[i];
  //     }
  // }
}
getObserver() {
  return observer;
}

setColumnValue(column, value) {
  var NS = this;
  var el = NS.el.querySelector('.number-swiper-column-' + column);

  if (el) {
    var current_value = el.dataset.value;
    var new_value;
    var new_element;

    if (typeof (value) == 'number') {
      new_value = parseInt(value);
      if (new_value > 9) {
        new_value = 0;
      }
      if (new_value < 0) {
        new_value = 9;
      }
      new_element = NS.getNumber(column, new_value);
    } else {
      if (value == 'up') {
        new_element = NS.getNumber(column, 'active').nextElementSibling;
      } else if (value == 'down') {
        new_element = NS.getNumber(column, 'active').previousElementSibling;
      } else if (value == 'top') {
        new_element = NS.getNumber(column, 'active').parentElement.firstElementChild;
      }
    }
    if (new_element) {
      new_element.scrollIntoView({
        behavior: "smooth",
        block: "center"
      });
    }
  } else {
    console.log('no column ' + column);
  }
}
}