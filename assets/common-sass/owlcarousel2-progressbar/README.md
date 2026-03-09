# Progress Bar for OwlCarousel 2
Super small (**4KB**) and customizable progress bar for OwlCarousel 2.

#### Prerequisites
Include jQuery and OwlCarousel 2.

```html
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
```

## Getting Started

1. Add `owlcarousel2-progressbar` script after jQuery and OwlCarousel 2.

```html
<script src="https://unpkg.com/owlcarousel2-progressbar"></script>
```

2. Create progress bar for your carousel/s **(please note that for correct work you should create progress bar before owl carousel instance/s creation)**.

Default options:
```html
<script>
    $('.owl-carousel').owlCarouselProgressBar();
</script>
```

Custom options:
```html
<script>
    $('.owl-carousel').owlCarouselProgressBar({
        size: '10px',
        margin: '20px 50px',
        foregroundColor: 'darkseagreen',
        color: 'green',
        borderRadius: 0,
        transitionInterval: 1,
        progressBarClassName: 'my-custom-class-name',
        scrollerClassName: 'my-custom-scroller-class-name'
    });
</script>
```

3. Create [OwlCarousel 2 instance](https://owlcarousel2.github.io/OwlCarousel2/demos/basic.html) **(Currently this plugin does not support `loop: true` option of Owl Carousel. It will be added in further version)**.
```html
<script>
    $('.owl-carousel').owlCarousel();
</script>
```

4. That's it :innocent:.

## Available options

Prop | Value (default) | Description
------------ | ------------- | -------------
`size` (string) | `'2px'` | Progress bar height
`foregroundColor` (string) | `'#f0f0f0'` | Progress bar background color
`color` (string) | `'#313131'` | Scroller background color
`borderRadius` (string) | `'5px'` | Progress bar border radius
`margin` (string) | `'10px 0'` | Vertical and horizontal spacers
`transitionInterval` (number) | `0.25` | Easing transition interval in seconds
`progressBarClassName` (string) | `'owl-carousel-progress-bar'` | CSS class name for progress bar element
`scrollerClassName` (string) | `'owl-carousel-progress-bar-scroller'` | CSS class name for scroller element

## Demo

You can see progress bar in action in `demo.html` file.

---

## Development

1. Install all npm packages using by running `npm i`.
2. Run development mode with file watcher by running `npm run dev`.
3. Create production ready bundle using `npm run build`.

## Versioning
I use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Author
**Karen Grigoryan** - [GitHub](https://github.com/karengrigoryan)

## License
This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
