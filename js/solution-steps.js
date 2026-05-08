document.addEventListener("DOMContentLoaded", function () {
  var section = document.querySelector(".section-solution");
  if (!section) {
    return;
  }

  var navButtons = Array.prototype.slice.call(
    section.querySelectorAll(".solution-progress__link[data-solution-step]")
  );
  var stepCards = Array.prototype.slice.call(
    section.querySelectorAll(".solution-step--track[data-solution-step]")
  );
  var stepAnchors = Array.prototype.slice.call(
    section.querySelectorAll(".solution-step-anchor[data-solution-step]")
  );

  if (!navButtons.length || !stepCards.length || !stepAnchors.length) {
    return;
  }

  var activeStep = null;
  var rafPending = false;
  var suppressSyncUntil = 0;

  function getStickyOffset() {
    var sampleCard = stepCards[0];
    if (!sampleCard) {
      return 40;
    }

    var computedTop = window.getComputedStyle(sampleCard).top;
    var parsedTop = parseFloat(computedTop);
    return Number.isFinite(parsedTop) ? parsedTop : 40;
  }

  function getAnchorTopY(anchor) {
    var rect = anchor.getBoundingClientRect();
    return rect.top + window.scrollY;
  }

  function getAnchorByStepId(stepId) {
    return section.querySelector('#solution-step-anchor-' + stepId);
  }

  function clampToSectionY(y) {
    var sectionTop = section.getBoundingClientRect().top + window.scrollY;
    var sectionBottom = sectionTop + section.offsetHeight;
    var minY = Math.max(0, sectionTop);
    var maxY = Math.max(minY, sectionBottom - window.innerHeight);

    return Math.min(maxY, Math.max(minY, y));
  }

  function getStepByScrollPosition() {
    var stickyOffset = getStickyOffset();
    var triggerY = window.scrollY + stickyOffset + 24;
    var currentCard = stepCards[0];

    stepAnchors.forEach(function (anchor) {
      var stepId = anchor.getAttribute("data-solution-step");
      if (triggerY >= getAnchorTopY(anchor)) {
        var matchedCard = section.querySelector('#solution-step-' + stepId);
        if (matchedCard) {
          currentCard = matchedCard;
        }
      }
    });

    return currentCard ? currentCard.getAttribute("data-solution-step") : null;
  }

  function setActive(stepId) {
    if (!stepId || activeStep === stepId) {
      return;
    }

    activeStep = stepId;

    navButtons.forEach(function (button) {
      var isActive = button.getAttribute("data-solution-step") === stepId;
      var arrow = button.querySelector(".solution-progress__arrow");
      var label = button.querySelector(".solution-progress__label");

      button.classList.toggle("is-active", isActive);
      button.setAttribute("aria-current", isActive ? "step" : "false");

      if (arrow) {
        arrow.classList.toggle("text-gradient", isActive);
      }

      if (label) {
        label.classList.toggle("text-gradient", isActive);
      }
    });

    stepCards.forEach(function (card) {
      var isActive = card.getAttribute("data-solution-step") === stepId;
      card.classList.toggle("is-active", isActive);
    });
  }

  navButtons.forEach(function (button) {
    button.addEventListener("click", function () {
      var stepId = button.getAttribute("data-solution-step");
      var targetAnchor = getAnchorByStepId(stepId);

      if (!targetAnchor) {
        return;
      }

      setActive(stepId);

      var stickyOffset = getStickyOffset();
      var targetY = getAnchorTopY(targetAnchor) - stickyOffset;
      targetY = clampToSectionY(targetY);
      var distance = Math.abs(window.scrollY - targetY);
      var syncDelay = Math.min(1800, Math.max(700, Math.round(distance * 0.45)));

      suppressSyncUntil = Date.now() + syncDelay;
      window.scrollTo({ top: Math.max(0, targetY), behavior: "smooth" });

      window.setTimeout(function () {
        syncActiveByScroll();
      }, syncDelay + 50);
    });
  });

  function syncActiveByScroll() {
    if (Date.now() < suppressSyncUntil) {
      return;
    }

    if (rafPending) {
      return;
    }

    rafPending = true;
    window.requestAnimationFrame(function () {
      rafPending = false;
      setActive(getStepByScrollPosition());
    });
  }

  window.addEventListener("scroll", syncActiveByScroll, { passive: true });
  window.addEventListener("resize", syncActiveByScroll);

  syncActiveByScroll();
});
