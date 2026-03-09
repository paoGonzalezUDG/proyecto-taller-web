/**
 * Custom Progress Bar for Owl Carousel
 * @author K. Grigoryan
 *
 * @todo: Publish to NPM
 */
class carouselProgressBar {
  /**
   * @constructor
   *
   * @param {HTMLElement} carousel - carousel DOM element
   * @param {Object} [options] - progress bar options
   */
  constructor(carousel, options) {
    // vars
    this.carousel = carousel;
    this.$carousel = $(carousel);
    this.$carouselNamespace = 'owl.carousel';
    this.$carouselLoopDisabled = null;
    this.$carouselLoopWarningMessage =
      'Please disable "loop" option for Owl Carousel instance, we don\'t support it yet.';

    // progress bar elements
    this.progressBarEl = null;
    this.progressBarElScroller = null;

    // progress bar styling
    this.progressBarSize = options['size'] || '2px';
    this.progressBarForegroundColor = options['foregroundColor'] || '#f0f0f0';
    this.progressBarColor = options['color'] || '#313131';
    this.progressBarBorderRadius = options['borderRadius'] || '5px';
    this.progressBarTransitionInterval =
      options['transitionInterval'] || '0.25';
    this.progressBarMargins = options['margin'] || '10px 0';

    // css classes for additional user's styling
    this.progressBarClassName =
      options['progressBarClassName'] || 'owl-carousel-progress-bar';
    this.scrollerClassName =
      options['scrollerClassName'] || 'owl-carousel-progress-bar-scroller';

    // bindings
    this.destroy = this.destroy.bind(this);
    this.handleProgressBarChange = this.handleProgressBarChange.bind(this);
    this.checkForLoopMode = this.checkForLoopMode.bind(this);

    // initialize progress bars instances and attach destroy method
    this.initialize();
  }

  /**
   * Create progress bar and scroller DOM elements.
   * @private
   */
  createAndAppendProgressBarEl() {
    this.progressBarEl = document.createElement('div');
    this.progressBarElScroller = document.createElement('span');
    this.progressBarEl.appendChild(this.progressBarElScroller);

    this.progressBarEl.className = this.progressBarClassName;
    this.progressBarElScroller.className = this.scrollerClassName;

    this.styleProgressBarElements();

    this.carousel.parentNode.insertBefore(
      this.progressBarEl,
      this.carousel.nextSibling
    );
  }

  /**
   * Add nescessary CSS to progress bar and scroller DOM elements.
   * @private
   */
  styleProgressBarElements() {
    // progress bar element
    this.progressBarEl.style.height = this.progressBarSize;
    this.progressBarEl.style.backgroundColor = this.progressBarForegroundColor;
    this.progressBarEl.style.borderRadius = this.progressBarBorderRadius;
    this.progressBarEl.style.margin = this.progressBarMargins;
    this.progressBarEl.style.position = 'relative';

    // scroller element
    this.progressBarElScroller.style.height = this.progressBarSize;
    this.progressBarElScroller.style.backgroundColor = this.progressBarColor;
    this.progressBarElScroller.style.borderRadius = this.progressBarBorderRadius;
    this.progressBarElScroller.style.transition =
      'margin-left ' + this.progressBarTransitionInterval + 's ease-in-out';

    this.progressBarElScroller.style.position = 'absolute';
    this.progressBarElScroller.style.top = '0';
    this.progressBarElScroller.style.right = '0';
    this.progressBarElScroller.style.left = '0';
    this.progressBarElScroller.style.maxWidth = '100%';
  }

  /**
   * Listen for carousel initialization, change and resize events and apply progress bar calculations.
   * Additionaly throw a warning if "loop" option has been activated on carousel instance.
   * @private
   */
  reactToCarouselChanges() {
    this.$carousel.on(
      'initialized.owl.carousel resized.owl.carousel translate.owl.carousel',
      this.handleProgressBarChange
    );

    this.$carousel.on('translate.owl.carousel', this.checkForLoopMode);
  }

  /**
   * Check for "loop" option in Owl Carousel instance
   * This plugin currently not supporting that option.
   * @private
   */
  checkForLoopMode() {
    if (this.$carouselLoopDisabled) return;

    const $carouselData = this.$carousel.data();
    const $carouselDataOwlOptions = $carouselData[this.$carouselNamespace];
    const $carouselLoopEnabled = $carouselDataOwlOptions.options.loop;

    // define loop disabled flag
    if ($carouselLoopEnabled) {
      console.warn(this.$carouselLoopWarningMessage);
      this.$carouselLoopDisabled = false;
    } else this.$carouselLoopDisabled = true;
  }

  /**
   * Simulate carousel's progress by styling scroller element width and left margin.
   *
   * @param {Object} carouselData - carousel's current state information
   * @private
   */
  handleProgressBarChange(carouselData) {
    this.progressBarElScroller.style.width = `${(100 /
      carouselData.item.count) *
      carouselData.page.size}%`;

    this.progressBarElScroller.style.marginLeft = `${(carouselData.item.index /
      carouselData.item.count) *
      100}%`;
  }

  /**
   * Initialize plugin.
   * Create progress bar elements and add carousel event listeners.
   * @private
   */
  initialize() {
    this.createAndAppendProgressBarEl();
    this.reactToCarouselChanges();
  }

  /**
   * Destroy progress bar element and remove event listeners
   * @public
   */
  destroy() {
    this.$carousel.off(
      'initialized.owl.carousel resized.owl.carousel translate.owl.carousel',
      this.handleProgressBarChange
    );
    this.$carousel.off('translate.owl.carousel', this.checkForLoopMode);
    this.progressBarEl.parentNode.removeChild(this.progressBarEl);
  }
}

/**
 * Create jQuery plugin
 */
(function($) {
  $.fn.owlCarouselProgressBar = function(options) {
    const carouselElements = this;
    const settings = $.extend({}, options);

    $.each(carouselElements, function() {
      // destroy previous progress bar
      const progressBarAlreadyAttached = this.progressBarLoaded;
      if (progressBarAlreadyAttached) this.destroyProgressBar();

      // create new progress bar instance
      const progressBarInstance = new carouselProgressBar(this, settings);
      this.destroyProgressBar = progressBarInstance.destroy;
      this.progressBarLoaded = true;
    });

    return this;
  };
})(jQuery);
