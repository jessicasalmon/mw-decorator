(function () {
  var accordions, i;

  // Make sure the browser supports what we are about to do.
  if (!document.querySelectorAll || !document.body.classList) return;

    // Using a function helps isolate each accordion from the others
  function makeAccordion(accordion) {
    var targets, currentTarget, i;

    targets = accordion.querySelectorAll('.faq-question');
    for(i = 0; i < targets.length; i++) {
      targets[i].addEventListener('click', function () {
        if (currentTarget) {
            currentTarget.classList.remove('expanded');
            // effects on close here
          }

        currentTarget = this.parentNode;
        currentTarget.classList.add('expanded');
      }, false);
    }


    accordion.classList.add('js');
  }

  // Find all the accordions to enable
  accordions = document.querySelectorAll('.accordion');

  // Array functions don't apply well to NodeLists
  for(i = 0; i < accordions.length; i++) {
    makeAccordion(accordions[i]);
  }

})();
