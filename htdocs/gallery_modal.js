var DETAIL_IMAGE_SELECTOR = "[data-image-role=\"target\"]",
  DETAIL_TITLE_SELECTOR = "[data-image-role=\"title\"]",
  THUMBNAIL_LINK_SELECTOR = "[data-image-role=\"trigger\"]",
  PREV_BUTTON = "[data-previous-button=\"trigger\"]",
  NEXT_BUTTON = "[data-next-button=\"trigger\"]",
  curr_index = 0;
var ESC_KEY = 27;
var HIDDEN_DETAIL_CLASS = 'hidden-detail';
var DETAIL_FRAME_SELECTOR = '[data-image-role="frame"]';
var TINY_EFFECT_CLASS = 'is-tiny';

function setDetails(image, titleText) {
  "use strict";

  var detailImage =
    document.querySelector(DETAIL_IMAGE_SELECTOR);
  detailImage.setAttribute("src", image);

  var detailTitle =
    document.querySelector(DETAIL_TITLE_SELECTOR);
  detailTitle.textContent = titleText;
}

function showDetails() {
  'use strict';
  var frame = document.querySelector(DETAIL_FRAME_SELECTOR);
  document.body.classList.remove(HIDDEN_DETAIL_CLASS);
  frame.classList.add(TINY_EFFECT_CLASS);
  setTimeout(function() {
    frame.classList.remove(TINY_EFFECT_CLASS);
  }, 50);
}

function addKeyPressHandler() {
  'use strict';
  document.body.addEventListener('keyup', function(event) {
    event.preventDefault();
    console.log(event.keyCode);
    if (event.keyCode === ESC_KEY) {
      hideDetails();
    }
  });
}

// function addButtonClickHandler(button) {
//   "use strict";
//   button.addEventListener("click", function() {
//     if (button == PREV_BUTTON) {
//       prev();
//     } else {
//       next();
//     }
//   });
// }

function getButton(button) {
  "use strict";
  return document.querySelector(button);
}

function prev() {
  "use strict";
  var thumbArr = getThumbsArray();
  var thumbNum = thumbArr.length;

  if (--curr_index < 0) {
    curr_index = thumbNum - 1;
  }

  setDetailsFromThumb(thumbArr[curr_index]);
}

function next() {
  "use strict";
  var thumbArr = getThumbsArray();
  var thumbNum = thumbArr.length;

  curr_index = ++curr_index % thumbNum;

  setDetailsFromThumb(thumbArr[curr_index]);
}

function getThumbsArray() {
  "use strict";
  var thumbs = document.querySelectorAll(THUMBNAIL_LINK_SELECTOR);
  var thumbArr = [].slice.call(thumbs);
  return thumbArr;
}

function imageFromThumb(thumb) {
  "use strict";
  return thumb.getAttribute("data-image-url");
}

function titleFromThumb(thumb) {
  "use strict";
  return thumb.getAttribute("data-image-title");
}

function setDetailsFromThumb(thumb) {
  "use strict";
  setDetails(imageFromThumb(thumb),
    titleFromThumb(thumb));
}

function addThumbClickHandler(thumb) {
  "use strict";
  thumb.addEventListener("click", function(event) {
    event.preventDefault();
    setDetailsFromThumb(thumb);
    showDetails();
  });
}

function initializeEvents() {
  "use strict";
  var thumbs = getThumbsArray();
  thumbs.forEach(addThumbClickHandler);

  var previousButton = getButton(PREV_BUTTON);
  addButtonClickHandler(previousButton);

  var nextButton = getButton(NEXT_BUTTON);
  addButtonClickHandler(nextButton);
}

initializeEvents();