# Changelog

## [Swiper 6.3.5](https://github.com/nolimits4web/swiper/compare/v6.3.4...v6.3.5) - Released on October 30th, 2020

- Build
  - Fixed builds on Windows
- Core
  - Fixed no swiping class in shadow component (#3868)
  - Typecheck for `slideTo`'s `index` parameter

## [Swiper 6.3.4](https://github.com/nolimits4web/swiper/compare/v6.3.3...v6.3.4) - Released on October 20th, 2020

- Vue
  - Fixed issue with `Maximum recursive updates`

## [Swiper 6.3.3](https://github.com/nolimits4web/swiper/compare/v6.3.2...v6.3.3) - Released on October 9th, 2020

- Core
  - Fixed issue with wrong slides calculation when slides have inner scrollbars
- Autoplay
  - Now it will continue autoplay if it reaches the end and new slides will be added later
- React
  - Fixed issue when slide render function data was set only after interaction
- Minor fixes

## [Swiper 6.3.2](https://github.com/nolimits4web/swiper/compare/v6.3.1...v6.3.2) - Released on September 28th, 2020

- Svelte
  - Fixed issue with throwing error when using breakpoints

## [Swiper 6.3.1](https://github.com/nolimits4web/swiper/compare/v6.3.0...v6.3.1) - Released on September 25th, 2020

- Core

  - A11y
    - Init module after all other modules initialized

## [Swiper 6.3.0](https://github.com/nolimits4web/swiper/compare/v6.2.0...v6.3.0) - Released on September 25th, 2020

- Core

  - A11y
    - Added new parameters `containerMessage`, `containerRoleDescriptionMessage` and `itemRoleDescriptionMessage` (#3834 thanks to @jenemde)

- React

  - Now `SwiperSlide` component requires unique `virtualIndex` to be set so Swiper can know which slide is rendered exactly

- Vue

  - Fixed issue when `SwiperSlide` was not rendered if used with `v-for`
  - Now `SwiperSlide` component requires unique `virtualIndex` to be set so Swiper can know which slide is rendered exactly

- All new Swiper Svelte components:

  ```html
  <Swiper spaceBetween="{50}" slidesPerView="{3}">
    <SwiperSlide>Slide 1</SwiperSlide>
    <SwiperSlide>Slide 2</SwiperSlide>
    ...
  </Swiper>
  <script>
    import { Swiper, SwiperSlide } from 'swiper/svelte';
  </script>
  ```

## [Swiper 6.2.0](https://github.com/nolimits4web/swiper/compare/v6.1.3...v6.2.0) - Released on September 4rd, 2020

- All new Swiper Vue.js (v3) components:

  ```html
  <template>
    <swiper :space-between="50" :slides-per-view="3">
      <swiper-slide>Slide 1</swiper-slide>
      <swiper-slide>Slide 2</swiper-slide>
      ...
    </swiper>
  </template>
  <script>
    import { Swiper, SwiperSlide } from 'swiper/vue';

    export default {
      components: {
        Swiper,
        SwiperSlide,
      },
    };
  </script>
  ```

## [Swiper 6.1.3](https://github.com/nolimits4web/swiper/compare/v6.1.2...v6.1.3) - Released on September 3rd, 2020

- Core
  - Pagination
    - Now it won't set a11y attributes on customly rendered bullets
- React
  - Fixed issue with loop mode and breakpoints not being recalculate slides

## [Swiper 6.1.2](https://github.com/nolimits4web/swiper/compare/v6.1.1...v6.1.2) - Released on August 17th, 2020

- React
  - Fixed issue generating `useLayoutEffect` warning in Next.js
  - Fixed issue with Virtual List in RTL mode

## [Swiper 6.1.1](https://github.com/nolimits4web/swiper/compare/v6.1.0...v6.1.1) - Released on July 31th, 2020

- Fixed ESM/CJS import paths

## [Swiper 6.1.0](https://github.com/nolimits4web/swiper/compare/v6.0.4...v6.1.0) - Released on July 31th, 2020

- Core
  - Mousewheel
    - New mousewheel parameters `thresholdDelta` and `thresholdTime` (#3720)
  - Fixed issue with Navigation and Pagination `.less` files (#3724)
  - Fixed issue with setting proper `sideEffects` causing some bundlers to not include imported styles (#3708)
- React
  - Now `SwiperSlide` accepts render function with `isActive`, `isVisible`, `isPrev`, `isNext`, `isDuplicate` props:
    ```jsx
    <Swiper>
      <SwiperSlide>
        {({ isActive }) => <div>Current slide is {isActive ? 'active' : 'not active'}</div>}
      </SwiperSlide>
      <SwiperSlide>...</SwiperSlide>
      ...
    </Swiper>
    ```
- Minor fixes

## [Swiper 6.0.4](https://github.com/nolimits4web/swiper/compare/v6.0.3...v6.0.4) - Released on July 15th, 2020

- Fixed TS definitions for Swiper React component (#3692)

## [Swiper 6.0.3](https://github.com/nolimits4web/swiper/compare/v6.0.2...v6.0.3) - Released on July 14th, 2020

- Dom7 updated to latest with correct `__proto__` setters/getters

## [Swiper 6.0.2](https://github.com/nolimits4web/swiper/compare/v6.0.1...v6.0.2) - Released on July 9th, 2020

- React
  - Now Swiper will be auto updated if `pagination.el`, `scrollbar.el`, `navigation.nextEl` and `navigation.prevEl` are passed from later-available refs

## [Swiper 6.0.1](https://github.com/nolimits4web/swiper/compare/v6.0.0...v6.0.1) - Released on July 7th, 2020

- Core

  - SCSS:Fixed issue with missing `$colors` var in Navigation and Pagination

- React

  - Fixed Swiper instance argument typings in event handler props
  - Added event handler props definitions for modules events

## [Swiper 6.0.0](https://github.com/nolimits4web/swiper/compare/v5.4.5...v6.0.0) - Released on July 3rd, 2020

- New NPM package structure

  - All scripts transpiled to ES5
  - New and renamed files (**BREAKING CHANGE**):
    - `swiper.less` - core Swiper LESS
    - `swiper.scss` - core Swiper SCSS
    - `swiper-bundle.css` - Swiper bundle CSS
    - `swiper-bundle.js` - Swiper bundle JavaScript in UMD format
    - `swiper-bundle.cjs.js` - Swiper bundle JavaScript in CommonJS format
    - `swiper-bundle.esm.js` - Swiper bundle JavaScript in ESM format
    - `swiper.cjs.js` - Swiper core JavaScript in CommonJS format
    - `swiper.esm.js` - Swiper core JavaScript in ESM format
  - Following imports are now available
    - `import Swiper from 'swiper'` - imports core version
    - `import Swiper from 'swiper/bundle'` - imports bundle version
    - `import Swiper from 'swiper/core'` - imports core version
  - Components can be imported from core version using named imports, or using direct import:

    ```js
    import { Navigation } from 'swiper';
    // or
    import Navigation from 'swiper/components/navigation';

    // and styles (Less or SCSS only)
    import 'swiper/components/navigation/navigation.less';
    ```

- Full server-side rendering support (SSR) with new parameters:
  - `userAgent` - device user agent, required for some initial detection
  - `url` - required to correctly detect and set initial slide if Hash Navigation or History modules are used
- New `loopPreventsSlide` boolean parameter (by default enabled), that prevents slidePrev/Next transitions while transition is in progress
- Full support for Node.js DOM libraries like JSDOM and Domino
- Added new `onAny(callback)` listener to listen for any swiper event
- All events now emit `swiper` instance as a first argument (**BREAKING CHANGE**)
- Added official TypeScript definitions
- Updated to use next generation `dom7` and `ssr-window` libraries
- All new Swiper React components:

  ```jsx
  import { Swiper, SwiperSlide } from 'swiper/react';

  export default () => {
    return (
      <Swiper
        spaceBetween={50}
        slidesPerView={3}
        onSwiper={(swiper) => console.log(swiper)}
        onSlideChange={() => console.log('slide change')}
      >
        <SwiperSlide>Slide 1</SwiperSlide>
        <SwiperSlide>Slide 2</SwiperSlide>
        ...
      </Swiper>
    );
  };
  ```

## [Swiper 5.4.5](https://github.com/nolimits4web/swiper/compare/v5.4.3...v5.4.5) - Released on June 16th, 2020

- Core
  - Fixed issue when checkOverflow method could throw error if Navigation module wasn't installed (#3621)
- Keyboard
  - New parameter `pageUpDown` to enable/disable pageUp and pageDown keys (enabled by default)

## [Swiper 5.4.3](https://github.com/nolimits4web/swiper/compare/v5.4.2...v5.4.3) - Released on June 13th, 2020

- Core
  - Removed `UIWebView` text from code
  - Fixed resize handler calling `slideTo` to last slide when it shouldn't

## [Swiper 5.4.2](https://github.com/nolimits4web/swiper/compare/v5.4.1...v5.4.2) - Released on June 3rd, 2020

- Mousewheel
  - Fixed issue when enabling `forceToAxis` also inverted scrolling
- Coverflow Effect
  - Added support for `scale` parameter (#3598)
- Pagination
  - Fixed detectction of `uniqueNaVElements` (#3590)

## [Swiper 5.4.1](https://github.com/nolimits4web/swiper/compare/v5.4.0...v5.4.1) - Released on May 20th, 2020

- Fixed dependencies versions

## [Swiper 5.4.0](https://github.com/nolimits4web/swiper/compare/v5.3.8...v5.4.0) - Released on May 15th, 2020

- Hash Navigation
  - Added `hashChange` and `hashSet` events (#3557)
- Lazy
  - Added support for `<picture>` lazy loading (#3560)
- Mousewheel
  - Potentially improved vertical scrolling issues on Windows/Linux OS
- Updated `ssr-window` and `dom7` dependencies to latest versions
- Minor fixes

## [Swiper 5.3.8](https://github.com/nolimits4web/swiper/compare/v5.3.7...v5.3.8) - Released on April 24th, 2020

- Core
  - Fix iOS bug with double bounce on free mode momentum bounce
- A11y
  - Fixed focus ring on navigation buttons (#3544)
  - Fixed RegExp issue in `paginationBulletMessage` (#3540, #3541)
- Thumbs \* Added `thumbs.autoScrollOffset` parameter that allows to set on what thumbs active slide from edge.
  It should automaticall move scroll thumbs
- Minor fixes

## [Swiper 5.3.7](https://github.com/nolimits4web/swiper/compare/v5.3.6...v5.3.7) - Released on April 10th, 2020

- Core
  - Fixed `cssMode` behavior in RTL layout
- Zoom
  - Fixed issue with not working double-tap to toggle with virtual slides
- Minor fixes

## [Swiper 5.3.6](https://github.com/nolimits4web/swiper/compare/v5.3.1...v5.3.6) - Released on February 29th, 2020

- Core
  - Fixed wrong auto height calculation with `centeredSlides` enabled
- Lazy
  - Now it will update auto height (if enabled) on lazy image loaded (#3466)
- Zoom
  - Fixed issue when previously active slide could be zoomed with `zoom.in()` API (#3451)
  - Fixed issue when zoom didn't work on `<picture>` element (#3456)
  - Added support for custom zoom-target element by adding `swiper-zoom-target` class to such elements
- Coverflow Effect
  - `stretch` parameter now can be set in `%` (#3468)
- Minor fixes

## [Swiper 5.3.1](https://github.com/nolimits4web/swiper/compare/v5.3.0...v5.3.1) - Released on February 8th, 2020

- Core
  - Fixed issue when slider could stuck after last slide (#3414)
  - Added `label` to list of form events to keep clicks on it (#3407)

## [Swiper 5.3.0](https://github.com/nolimits4web/swiper/compare/v5.2.1...v5.3.0) - Released on January 11th, 2020

- Core
  - New `slidesPerGroupSkip` behavior (#3361)
  - New ratio-based breakpoints (#3389)
  - Added SCSS interpolation (#3373, #3374)
- Mousehweel
  - Fixed issue when it can fail on load (#3383)
- Minor fixes

## [Swiper 5.2.1](https://github.com/nolimits4web/swiper/compare/v5.2.0...v5.2.1) - Released on November 16th, 2019

- Core
  - New loop events `beforeLoopFix` and `loopFix`
  - New parameter `updateOnWindowResize` (by default `true`) that will update/recalc swiper on window resize/orientationchange
  - Added SCSS interpolation for `--swiper-theme-color` variable when not building from source (#3334)
  - Quote SCSS color names (#3316)
  - Fixed issue when `.once` could be called more than once (#3322)
- Mousewheel
  - Fixed scroll wheel unwanted frozen effect (#3328)
- Thumbs
  - New `multipleActiveThumbs` (by default `true`) option to control whether multiple thumbnail slides may get activated or not.
- Minor fixes

## [Swiper 5.2.0](https://github.com/nolimits4web/swiper/compare/v5.1.0...v5.2.0) - Released on October 26th, 2019

- Core
  - New `centeredSlidesBounds` parameter that when enabled will keep first and last slides at bounds
  - Fixed issue when `freeMode` could break position on resize (#2708, #3303)
  - Fixed transitin duration issue with `freeModeSticky` (#3302)
  - Fixed issue with wrong row/column if not full groups (#3294)
  - Fixed issue when `watchOverflow` and `slidesOffsetBefore`/`slidesOffsetAfter` couldn't work together (#3291)
- Mousewheel
  - Faster & smoother mousewheel inertial scrolling (#3304)
- Package
  - Added source maps to package builds (#3306)
  - Added minified version of browser.esm.bundle
- Minor fixes

## [Swiper 5.1.0](https://github.com/nolimits4web/swiper/compare/v5.0.4...v5.1.0) - Released on October 16th, 2019

- Core
  - Fixed issues with touch on iOS 13
  - New `translateTo` method #3268
- Pagination
  - Improved dynamic bullets behavior when `loop: true` #3255
- Zoom
  - Fixed issue with pinch to zoom on Android
- Minor fixes

## [Swiper 5.0.4](https://github.com/nolimits4web/swiper/compare/v5.0.3...v5.0.4) - Released on September 30th, 2019

- Core
  - Now on short swipes over navigation buttons, it will treat it like nav button click (#3237 by @robpop)
  - Fixed issue when passing float `slidesPerView` could break loop mode (#3225 by @robpop)
- Scrollbar
  - Fixed issue with wrong "pointer" position calculation on scroll bar tap
- Autoplay
  - Fixed issue when it was `paused` after returning from hidden tab
- Minor fixes

## [Swiper 5.0.3](https://github.com/nolimits4web/swiper/compare/v5.0.2...v5.0.3) - Released on September 19th, 2019

- Core
  - `touchEventsTarget` defaults back to `container`
  - Added handling of `touchcancel` event #3219
  - Fixed issue with wrong order calculation in `slidesPerColumnFill: 'row'` mode
  - Fixed issue with slides missplacing when prepending slides in virutal mode
  - Fixed issue when zoomed image still swiped to another slide on mobiles

## [Swiper 5.0.1](https://github.com/nolimits4web/swiper/compare/v5.0.0...v5.0.1) - Released on September 17th, 2019

- Core
  - Fixed typo in code

## [Swiper 5.0.0](https://github.com/nolimits4web/swiper/compare/v4.5.1...v5.0.0) - Released on September 17th, 2019

- Core
  - All new CSS Scroll Snap mode (can be enabled with `cssMode: true`). It doesn't support all of Swiper's features, but potentially should bring a much better performance in simple configurations
  - Fully removed Internet Explorer support
  - `breakpointsInverse` parameter has been removed and now `breakpoints` behave like with `breakpointsInverse: true` before.
  - `touchMoveStopPropagation` parameter now defaults to `false`
  - `click` event won't be fired with 300ms delay anymore. Now it will be fired at the same time as `tap` event
  - When `slidesPerColumnFill: 'column'` it now uses `flex-direction: column` layout which requires specified height on swiper-container
  - `touchEventsTarget` now defaults to `wrapper` (rather than `container` like before)
  - `slidesPerColumn` now can be used with breakpoints
  - Now Swiper styles use CSS Custom Properties (CSS Custom Variables) to specify swiper's color theme (color of navigation buttons/pagination). It is now `--swiper-theme-color: #007aff;`
  - Improved `es` module "tree-shake-ability"
  - New `swiper.esm.browser.bundle.js` package that can be used directly in browser (`import Swiper from 'swiper.esm.browser.bundle.js'`)
- Autoplay
  - Now it will be paused when document becomes hidden (in not active tab) and continued again when document becomes visible
- Lazy
  - Swiper preloader image replaced with a little bit simpler loader. Now its color can be changed with `--swiper-preloader-color` CSS custom property (which is defaults to `--swiper-theme-color`)
- Pagination
  - Active pagination bullets and pagination theme colors now use CSS Custom Properties. It can be defined with `--swiper-pagination-color` property (which is defaults to `--swiper-theme-color`)
- Navigation
  - Navigation icons reworked with built-in (base64) icon font. It allows to apply any color and size without replacing image
  - Navigation buttons colors now use CSS Custom Properties. It can be defined with `--swiper-navigation-color` property (which is defaults to `--swiper-theme-color`)
  - With `--swiper-navigation-size` (defaults to `44px`) it is now possible to change size of the navigation buttons (and icons)
- Minor fixes and improvements

## [Swiper 4.5.1](https://github.com/nolimits4web/swiper/compare/v4.5.0...v4.5.1) - Released on September 13th, 2019

- Core
  - Fixed issue when callbacks fires on init even if it disabled (#2807)
  - Fixed issue when "swiper-slide-visible" class name in some situations shows up when it shouldn't
  - `slidesPerColumnFill: 'row'` now considers groups (#3077)
- Thumbs
  - Fixes bug 'Cannot read property `indexOf` of undefined' that sometimes occurs on use of thumbnails
- Keyboard
  - Added `PageUp`/`PageDown` keybindings.
- Autoplay
  - Fixed issue when window resize stopped autoplay
- Parallax
  - Fixed issue when parallax opacity didn't work (#3147)
- Minor fixes and improvements

## [Swiper 4.5.0](https://github.com/nolimits4web/swiper/compare/v4.4.5...v4.5.0) - Released on February 22nd, 2019

- Core
  - New `swiper.changeDirection()` method to change direction from horizontal to vertical (and back) dynamically
  - `direction` parameter can be used in breakpoints
- Virtual Slides
  - `swiper.virtual.appendSlide` now accepts array of slides to add
  - `swiper.virtual.prependSlide` now accepts array of slides to prepend
  - New `swiper.virtual.removeSlide(indexes)` to remove virtual selected slides
  - New `swiper.virtual.removeAllSlides()` to remove all virtual slides
- Navigation
  - Now it emits `navigationHide` and `navigationShow` events when on nav hide/show
- Pagination
  - Now it emits `paginationHide` and `paginationShow` events when on pagination hide/show
- Dom7 updated to latest 2.1.3
  - Fixed issue when `.once` bound event could still be there after unbinding it with `.off`
- Source
  - Source styles are now available in SCSS in addition to LESS
- Minor fixes and improvements

## [Swiper 4.4.6](https://github.com/nolimits4web/swiper/compare/v4.4.5...v4.4.6) - Released on December 19th, 2018

- Core
  - Fixed issue with wrong slide size calculation in some cases

## [Swiper 4.4.5](https://github.com/nolimits4web/swiper/compare/v4.4.2...v4.4.5) - Released on December 14th, 2018

- Core
  - New `observeSlideChildren` parameter to enable auto update on slide children update
  - Fixed issue when slide padding was not considered when calculating sizes
  - Fixed issue with wrong touch support detection on Windows Chrome
  - Fixed some issues with wrong slides grid calculation in multi row mode
- Zoom
  - Now it emits `zoomChange` event with `scale`, `imageEl` and `slideEl` arguments
- Minor fixes

## [Swiper 4.4.2](https://github.com/nolimits4web/swiper/compare/v4.4.1...v4.4.2) - Released on November 1st, 2018

- New `touchStartForcePreventDefault` parameter to force touch start event prevent default
- Breakpoints fix when breakpoint keys are strings
- Fixed issue when draggable scrollbar may not work on desktop Safari
- Fixed issue with wrong sort of Virtual Slides
- Minor fixes

## [Swiper 4.4.1](https://github.com/nolimits4web/swiper/compare/v4.4.0...v4.4.1) - Released on September 14th, 2018

- Fixed issue with preventing touchstart event

## [Swiper 4.4.0](https://github.com/nolimits4web/swiper/compare/v4.3.5...v4.4.0) - Released on September 14th, 2018

- Core
  - New `centerInsufficientSlides` parameter to center slides if the amount of slides less than `slidesPerView`
  - New `breakpointsInverse` parameter (boolean), if enabled then it will count breakpoints in reversed direction, e.g. will override parameters if window width is more than specified breakpoint
- Virtual Slides
  - New `addSlidesBefore` and `addSlidesAfter` parameters to increase amount of pre-rendered slides
- Thumbs
  - All new "Thumbs" module/component designed to control slider thumbnails, in more logical and correct way than with Controller module.
- Lots of minor fixes

## [Swiper 4.3.5](https://github.com/nolimits4web/swiper/compare/v4.3.3...v4.3.5) - Released on July 31th, 2018

- Core
  - `iOSEdgeSwipeThreshold` parameter renamed to just `edgeSwipeThreshold`. Old `iOSEdgeSwipeThreshold` name is still supported
  - Improved observer performance if there are many mutations at a time. Thanks to @rayvincent-bsd
- Controller
  - Fixed issue with wrong auto height resizing
- Scrollbar
  - Fixed issue when it was using active event listeners instead of passive. Thanks to @nyon
- Minor fixes

## [Swiper 4.3.3](https://github.com/nolimits4web/swiper/compare/v4.3.2...v4.3.3) - Released on June 5th, 2018

- Core
  - Fixed issue when slidePrev goes to wrong slide #2650
  - Fixed issue when roundLength was not considered for grids calculation #2656
  - Fixed typo in API #2659

## [Swiper 4.3.2](https://github.com/nolimits4web/swiper/compare/v4.3.0...v4.3.2) - Released on June 1st, 2018

- Core
  - Added `addSlide(index, slide)` method to add slide at required position. Thanks to @kochizufan
  - Fixed issue with loop #2647. Thanks to @kochizufan
- Pagination
  - New `formatFractionCurrent(number)` parameter to format current number in Fraction pagination
  - New `formatFractionTotal(number)` parameter to format total number in Fraction pagination
- Minor fixes

## [Swiper 4.3.0](https://github.com/nolimits4web/swiper/compare/v4.2.6...v4.3.0) - Released on May 27th, 2018

- Core
  - Fixed issue when `swipeBack` sometimes slides to wrong slide
  - Fixed issue when window resizing can break Coverflow effect layout
  - Fixed issue with wrong detection of `iOSEdgeSwipeDetection`. Thanks to @langjun
- Dom7 update to latest v2.0.6:
  - Fixed issue with remove event listeners when they was not added
- Minor fixes

## [Swiper 4.2.6](https://github.com/nolimits4web/swiper/compare/v4.2.5...v4.2.6) - Released on May 1st, 2018

- `console.log` cleanup

## [Swiper 4.2.5](https://github.com/nolimits4web/swiper/compare/v4.2.2...v4.2.5) - Released on April 29th, 2018

- Core
  - Prevent apply grab cursor when swiper is locked
  - Fixed breakpoint with loop getting wrong realIndex when on init
  - Fixed "transformed" slides sizes calculation that could cause issues in with Coverflow effect
- Autoplay
  - Fixed issue that can cause memory leak
- Dom7 update to latest
  \*Imporved internal events proxies logic for better memory management
- Minor fixes

## [Swiper 4.2.2](https://github.com/nolimits4web/swiper/compare/v4.2.0...v4.2.2) - Released on April 1st, 2018

- Core
  - Respect and update breakpoints when calling Swiper's `.update()` method
- Pagination
  - New `progressbarOpposite` parameter to make pagination progressbar opposite to `direction` parameter, means vertical progressbar for horizontal swiper direction and horizontal progressbar for vertical swiper direction
- Mousewheel
  - Fixed issue in `loop` + `freeMode` for loop not being set correctly
- Minor fixes

## [Swiper 4.2.0](https://github.com/nolimits4web/swiper/compare/v4.1.6...v4.2.0) - Released on March 16th, 2018

- Core
  - `swiper.updateAutoHeight(speed)` now supports `speed` parameter to resize swiper wrapper with duration
  - Fixed issues in free mode with `freeModeSticky` not being able to snap to closest snap point
  - New `swiper.slideToClosest()` method to slide to closest snap point when it is somewhere in between
- A11y (Accessibility)
  - It is now enabled by default (if installed)
- Controller
  - Fixed RTL issue when vertical swiper controls horizontal one
- Lazy
  - Fixed issue when lazy loading not always triggered on window resize
- Minor fixes

## [Swiper 4.1.6](https://github.com/nolimits4web/swiper/compare/v4.1.5...v4.1.6) - Released on February 11th, 2018

- Fixed onTouchMoveOpposite event on touch devices

## [Swiper 4.1.5](https://github.com/nolimits4web/swiper/compare/v4.1.0...v4.1.5) - Released on February 10th, 2018

- Improved touch events support on desktop Windows devices with touch screen
- Improved "loop fix" when slider is in the free mode
- New `noSwipingSelector` parameter that can be used instead of `noSwipingClass`
- New `preventIntercationOnTransition` parameter to prevent interaction during slice change transition
- New `.slideToLoop` method to be used in loop mode
- Fixed issue with `slideChange` events being fired when slide wasn't actually changed
- Scrollbar
  - Now doesn't require to enable `simulateTouch` for desktops when it is `draggable`
- Keyboard
  - Fixed detection statement whether a swiper is in the viewport
- Pagination
  - Added new multiple main bullets support for dynamic bullets pagination
- Zoom
  - Now supports Virtual Slides
- Minor fixes

## [Swiper 4.1.0](https://github.com/nolimits4web/swiper/compare/v4.0.7...v4.1.0) - Released on January 13th, 2018

- Improved IE 10 support. But it is recommended to use [**proto** polyfill](https://www.npmjs.com/package/proto-polyfill)
- Improved touch support for Edge
- New `watchOverflow` (disabled by default). When enabled Swiper will be disabled and hide navigation buttons on case there are not enough slides for sliding
- Autoplay
  - New `reverseDirection` to enable autoplay in reverse direction
  - New `waitForTransition` parameter when autoplay will wait for wrapper transition to continue (enabled by default). Can be disabled in case of using Virtual Translate when your slider may not have transition
- Keyboard
  - New `onlyInViewport` parameter (enabled by default). When enabled it will control sliders that are currently in viewport

## [Swiper 4.0.7](https://github.com/nolimits4web/swiper/compare/v4.0.6...v4.0.7) - Released on November 28th, 2017

- Fixed issue with not working correctly `touchReleaseOnEdges` on iOS
- Fixed issue with not working allowSlideNext/Prev change on Breakpoints
- Fixed wrong scrollbar dragging when using custom `dragSize`
- Minor fixes

## [Swiper 4.0.6](https://github.com/nolimits4web/swiper/compare/v4.0.5...v4.0.6) - Released on November 13th, 2017

- Fixed Coverflow effect issue using with breakpoints
- `iOSEdgeSwipeDetection` will also be in consideration with right-edge swipe
- Fixed `freeModeSticky` behavior in RTL mode
- Swiper now emits `breakpoint` event on breakpoint change
- Minor fixes

## [Swiper 4.0.5](https://github.com/nolimits4web/swiper/compare/v4.0.3...v4.0.5) - Released on November 7th, 2017

- Fixed issue with not working `noSwiping` parameter
- Parallax now considers `slidesPerGroup` parameter
- Zoom: imporved gestures handling
- Pagination: fixed issues with wrong positioned dynamic-bullets when there are not enough slides
- Fixed issues with some effects being broken with enabled `breakpoints`
- Minor fixes

## [Swiper 4.0.3](https://github.com/nolimits4web/swiper/compare/v4.0.2...v4.0.3) - Released on October 27th, 2017

- Fixed Parallax opacity and scale transitions
- Better compatability with SSR by using dummy `document` object
- Fixed styles for dynamic pagination buttons in RTL mode
- Fixed issue with last pagination button not being active with `slidesPerView: 'auto'`
- Renamed build tasks: `build-dev` -> `build:dev`, `build-prod` -> `build:prod`

## [Swiper 4.0.2](https://github.com/nolimits4web/swiper/compare/v4.0.1...v4.0.2) - Released on October 18th, 2017

- Lazy loading support for Virtual slides
- Added `beforeResize` event
- Minor fixes

## [Swiper 4.0.1](https://github.com/nolimits4web/swiper/compare/v4.0.0...v4.0.1) - Released on October 11th, 2017

- Fixed issue with pagination being broken with loop mode
- Reworked `realIndex` calculation ordering
- ES-module files renamed (**possible breaking change**):
  - `swiper.module.js` -> `swiper.esm.bundle.js` (exported by default)
  - `swiper.modular.js` -> `swiper.esm.js`
- Minor fixes

## [Swiper 4.0.0](https://github.com/nolimits4web/swiper/compare/v3.4.2...v4.0.0) - Released on October 4th, 2017 🎉

- New API (check [Documentation](http://idangero.us/swiper/api/))
- Virtual Slides - new module that keeps in DOM just required amount of slides
- Source code has been fully rewritten in ES-next syntax
- Dist package contains additional ES-next modules:
  - `swiper.module.js` - swiper bundle for `import Swiper from 'swiper'`
  - `swiper.modular.js` - modular version for using Swiper with required components only
- New `scripts/build-config.js` for creating custom Swiper build with required components and custom color theme
- jQuery version of Swiper has been removed
- Imporved compatibility with server-side rendering
- Hundreds of improvements and fixes

## Swiper 4.0.0-beta.4 - Released on September 20th, 2017

- Fixed issue with draggable Scrollbar in RTL layout
- Minor fixes

## Swiper 4.0.0-beta.3 - Released on September 13th, 2017

- Dom7 update to latest version
- Small core refactoring to get better results within tree-shaking bundles

## Swiper 4.0.0-beta.2 - Released on September 2nd, 2017

- Disable a11y by default
- Fixed issue with events sharing between multiple swipers
- Fixed issue with resize handling after destroy
- Few minor fixes

## Swiper 4.0.0-beta.1 - Released on August 30th, 2017

- Initial 4.0.0 release

## Swiper 3.4.2 - Released on March 10th, 2017

- Fixed an issue with lazy loading callbacks when swiper is destroyed
- New `onAfterResize` and `onBeforeResize` callbacks
- New `onKeyPress` callback when keyboard control is used
- Fixed Chrome+Windows issue with not clickable links that have "title" attribute
- Minor fixes

## Swiper 3.4.1 - Released on December 13th, 2016

- Fixed Zoom for RTL
- Improved slideToClickedSlide behavior when loop is enabled
- Minor fixes

## Swiper 3.4.0 - Released on October 16th, 2016

- **Custom build** available. Now you can create custom swiper build using the folowing modules: effects, lazy-load, scrollbar, controller, hashnav, history, keyboard, mousewheel, parallax, zoom, a11y. Using cli `gulp custom -zoom,effects,lazy-loading`
- New **zoom** functionality that enables double tap and pinch to zoom slide's inner image:
  - Required slide layout for zoom:
    ```
    <div class="swiper-slide">
      <div class="swiper-zoom-container">
        <img src="path/to/image">
      </div>
    </div>
    ```
  - New zoom parameters:
    - `zoom` - enable zoom functionality
    - `zoomMax` - maximum image zoom multiplier, by default is `3`
    - `zoomMin` - minimum image zoom multiplier, by default is `1`
    - `zoomToggle` - enable/disable zoom-in by slide's double tap
  - `zoomMax` can be also overridden for specific slide by using `data-swiper-zoom` attribute
- New `swiper.enableTouchControl()` and `swiper.disableTouchControl()` methods to enable disable touch control (it toggles `onlyExternal` parameter)
- New `swiper.realIndex` property in addition to `swiper.activeIndex` that returns index of active slide considering loop
- New **History API** with new `history` parameter. It uses history pushState to set active slide URL
- New `hashnavWatchState` parameter to navigate through slides (when hashnav is enabled) by browser history or by setting directly hash on document location
- New `replaceState` parameter that work in addition to hashnav or history to replace current url state with the new one instead of adding it to history
- New methods `s.unsetGrabCursor()` and `s.setGrabCursor()` to enable/disable grab cursor
- Draggable Scrollbar now works when `simulateTouch:false`
- New `normalizeSlideIndex` parameter to improve work of controller (see #1766)
- `lazyLoadingInPrevNextAmount` now works with `slidesPerView: 'auto'`
- New `passiveListeners` parameter to use passive event listeners to improve scrolling performance on mobile devices. Enabled by default
- New `freeModeMomentumVelocityRatio` parameter to control moment velocity
- Now it is possible to specify autoplay delay for every (or specific) slides by using `data-swiper-autoplay` attribute on them
- Lazy loading now also respects `sizes` responsive images attribute
- Improved mousewheel cross browser behavior (see #1797)
- New `mousewheelEventsTarged` parameter (by default 'container') where you can specify mousewheel events target
- New `onScroll` event/callback that triggers when swiping/scrolling happens with mousewheel
- New `touchReleaseOnEdges` parameter to release touch events on slider edge position (beginning, end) and allow for further page scrolling
- Multirow (slidesPerColumn) support for vertical direction, which is in this case becomes multicolumn
- `paginationBulletRender` now accepts `swiper` instance as a first argument, `paginationBulletRender(index, className)` -> `paginationBulletRender(swiper, index, className)`
- New "swiper-slide-duplicate-active", "swiper-slide-duplicate-next", "swiper-slide-duplicate-prev" classes that will be added in loop mode to the slides representing duplicated looped slides
- All css classes are now configurable via new parameters: lazyLoadingClass, notificationClass, containerModifierClass, paginationClickableClass, paginationModifierClass, lazyStatusLoadingClass, lazyStatusLoadedClass, lazyPreloaderClass, notificationClass, preloaderClass, zoomContainerClass, slideDuplicateActiveClass, slideDuplicateNextClass, slideDuplicatePrevClass

## Swiper 3.3.1 - Released on February 7th, 2016

- New `uniqueNavElements` parameter. If enabled (by default) and navigation elements' parameters passed as the string (like `.pagination`) then Swiper will look for such elements through child elements first. Applies for pagination, prev/next buttons and scrollbar
- New `onPaginationRendered` callback. Will be fired after pagination elements generated and added to DOM
- New `.reLoop()` method, which combines `.destroyLoop()` + `.createLoop()` methods with additional positioning fixes. Useful to call after you have changed `slidesPerView` parameter, it will dynamically recreate duplicated slides required for loop
- New `.nextButton` and `.prevButton` properties with Dom7/jQuery element with next/prev button HTML element
- Fixed not working mousewheel control in IE 11
- Fixed issue with lazy loading images not being recalculated after window resize
- Fixed issues when using loop with breakpoints changing `slidesPerView/Group` parameters
- Numerous minor fixes

## Swiper 3.3.0 - Released on January 10th, 2016

- New 3D Flip effect. Can be enabled with `effect: 'flip' parameter
- New types of pagination with new parameters:
  - `paginationType` - type of pagination. Can be `'bullets'` (default) or `'fraction'` or `'progress'` or `'custom'`
  - `paginationFractionRender(swiper, currentClass, totalClass)` - custom function to render "fraction" type pagination
  - `paginationProgressRender(swiper, progressbarClass)` - custom function to render "progress" type pagination
  - `paginationCustomRender(swiper, current, total)` - custom function to render "custom" type pagination
- New `lazyLoadingInPrevNextAmount` parameter allows to lazy load images in specified amount of next/prev slides
- New `autoplayStopOnLast` parameter (`true` by default) tells to autoplay should it stop on last slide or start from first slide
- New `onAutoplay(swiper)` callback
- Minor fixes

## Swiper 3.2.7 - Released on December 7th, 2015

- Fixed issue with using HTMLElements for next/prevButton parameters with breakpoints
- Fixed issue with not working Auto Height when using Controller

## Swiper 3.2.6 - Released on November 28th, 2015

- Fixed issue in RTL layout using `mousewheelControl`
- Fixed issue in RTL layout using Parallax

## Swiper 3.2.5 - Released on November 21st, 2015

- New "Auto Height" mode when container/wrapper adopts to the height of currently active slide. Can be enabled with `autoHeight: true` parameter
- Fixed issue with break points in FireFox
- Fixed issue with wrong slides position when using effects
- Fixed issue with none-updated scroll bar after using `setWrapperTranslate`
- Minor fixes

## Swiper 3.2.0 - Released on November 7th, 2015

- Added responsive breakpoints support using new `breakpoints` parameter. Now you can specify different `slidesPerView` and other similar parameters for different sizes:

  ```js
  slidesPerView: 5,
  spaceBetween: 50,
  breakpoints: {
    1024: {
      slidesPerView: 4,
      spaceBetween: 40
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 10
    }
  }
  ```

- New callbacks: `onSlideNextStart`, `onSlideNextEnd`, `onSlidePrevStart`, `onSlidePrevEnd`
- Added Meteor package `meteor add nolimits4web:swiper`
- Fixed issue with mouse touchMove/End callbacks firing all the time
- Fixed issue with mousewheel in Chrome
- Minor fixes

## Swiper 3.1.7 - Released on October 10th, 2015

- Fixed issue with lazy loading trying to download `undefined`-src images
- Fixed lazy loading on slides using jQuery version
- Fixed issue with `slideToClickedSlide` with `loop` and `centeredSlides`
- Fixed issue with wrong slides fill when number of slides less than `slidesPerView * slidesPerColumn` with `slidesPerColumnFill: 'row'`
- Minor fixes

## Swiper 3.1.5 - Released on September 28th, 2015

- Added support for images `srcset` with lazy loading using `data-srcset` attribute
- Fixed new Chrome errors with `WebkitCSSMatrix`
- Fixed issue with `slideToClickedSlide` with `loop` and `centeredSlides`
- New `freeModeMinimumVelocity` parameter to set minimum required touch velocity to trigger free mode momentum
- Ability to make the Scrollbar draggable using new paramaters:
  - `scrollbarDraggable` - (boolean) by default is `false`. Allows to enable draggable scrollbar
  - `scrollbarSnapOnRelease` - (boolean) by default is `false`. Control slider snap on scrollbar release
- Minor fixes

## Swiper 3.1.2 - Released on August 22nd, 2015

- Fixed issues with loop and mousewheel when swiper stopped on last slide
- Imporved mouse wheel behavior in latest Chrome
- Fixed issue with `slidesPerView: 'auto'` and enabled `loop:true` mode to set `loopedSlides` to the amount of slides by default (if not specified)
- New `mousewheelSensitivity: 1` parameter allows to tweak mouse wheel sensitivity
- Fixed issue with updating swiper when swiping is locked (with `allowSwipeToNext`/`allowSwipeToPrev`)
- Fixed issue with wrong calculating of "visible" slides with enabled `centeredSlides`
- CSS fixes for 3D effects
- New options to release Swiper events for swipe-to-go-back work in iOS UIWebView with two options:
  - `iOSEdgeSwipeDetection` (by default is `false`) - enable ios edge detection and release Swiper events
  - `iOSEdgeSwipeThreshold` (default value is `20`) - area in `px` from left edge of screen to release events
- Improved source maps
- Minor fixes

## Swiper 3.1.0 - Released on July 14th, 2015

- Accessibility (a11y)
  - Fixed issue with wrong buttons labels
  - Added support for pagination bullets
  - New accessibility parameter for pagination label `paginationBulletMessage: 'Go to slide {{index}}'`
- Controler
  - New parameter `controlBy` which can be 'slide' (by default) or 'container'. Defines a way how to control another slider: slide by slide or depending on all slides/container (like before)
  - Now controllers in `controlBy: 'slide'` (default) mode will respect grid of each other
- Pagination
  - New `paginationElement` parameter defines which HTML tag will be use to represent single pagination bullet. By default it is `span`
- New `roundLengths` parameter (by default is `false`) to round values of slides width and height to prevent blurry texts on usual resolution screens
- New `slidesOffsetBefore: 0` and `slidesOffsetAfter: 0` (in px) parameters to add additional slide offset within a container
- Correct calculation for slides size when use CSS padding on `.swiper-container`
- Fixed issue with not working onResize handler when swipes are locked
- Fixed issue with "jumping" effect when you disable `onlyExternal` during touchmove
- Fixed issue when slider goes to previos slide from last slide after window resize
- Added new `swiper.jquery.umd.js` version for the environment where both Swiper and jQuery included as modules
- Minor fixes

## Swiper 3.0.8 - Released on June 14th, 2015

- Fixed issue with wrong active index and callbacks in Fade effect
- New mousewheel parameters:
  - `mousewheelReleaseOnEdges` - will release mousewheel event and allow page scrolling when swiper is on edge positions (in the beginning or in the end)
  - `mousewheelInvert` - option to invert mousewheel slides
- Fixed issue with lazy loading in next slides when `slidesPerView` > 1
- Fixed issue with resistance bounds when swiping is locked
- Fixed issue with wrong slides order in multi-row mode (when `slidesPerColumn` > 1)
- Fixed issue with not working keyboard control in RTL mode
- Fixed issue with nested fade-effect swipers
- Minor fixes

## Swiper 3.0.7 - Released on April 25th, 2015

- New `width` and `height` parameters to force Swiper size, useful when it is hidden on intialization
- Better support for "Scroll Container". So now Swiper can be used as a scroll container with one single "scrollable"/"swipeable" slide
- Added lazy loading for background images with `data-background` attribute on required elements
- New "Sticky Free Mode" (with `freeModeSticky` parameter) which will snap to slides positions in free mode
- Fixed issues with lazy loading
- Fixed slide removing when loop mode is enabled
- Fixed issues with Autoplay and Fade effect
- Minor fixes

## Swiper 3.0.6 - Released on March 27th, 2015

- Fixed sometimes wrong slides position when using "Fade" effect
- `.destroy(deleteInstance, cleanupStyles)` method now has second `cleanupStyles` argument, when passed - all custom styles will be removed from slides, wrapper and container. Useful if you need to destroy Swiper and to init again with new options or in different direction
- Minor fixes

## Swiper 3.0.5 - Released on March 21st, 2015

- New Keyboard accessibility module to provide foucsable navigation buttons and basic ARIA for screen readers with new parameters:
  - `a11y: false` - enable accessibility
  - `prevSlideMessage: 'Previous slide'` - message for screen readers for previous button
  - `nextSlideMessage: 'Next slide'` - message for screen readers for next button
  - `firstSlideMessage: 'This is the first slide'` - message for screen readers for previous button when swiper is on first slide
  - `lastSlideMessage: 'This is the last slide'` - message for screen readers for next button when swiper is on last slide
- New Emitter module. It allows to work with callbacks like with events, even adding them after initialization with new methods:
  - `.on(event, handler)` - add event/callback
  - `.off(event, handler)` - remove this event/callback
  - `.once(event, handler)` - add event/callback that will be executed only once
- Plugins API is back. It allows to write custom Swiper plugins
- Better support for browser that don't support flexbox layout
- New parameter `setWrapperSize` (be default it is `false`) to provide better compatibility with browser without flexbox support. Enabled this option and plugin will set width/height on swiper wrapper equal to total size of all slides
- New `virtualTranslate` parameter. When it is enabled swiper will be operated as usual except it will not move. Useful when you may need to create custom slide transition
- Added support for multiple Pagination containers
- Fixed `onLazyImage...` callbacks
- Fixed issue with not accessible links inside of Slides on Android < 4.4
- Fixed pagination bullets behavior in loop mode with specified `slidesPerGroup`
- Fixed issues with clicks on IE 10+ touch devices
- Fixed issues with Coverflow support on IE 10+
- Hashnav now will update document hash after transition to prevent browsers UI lags, not in the beginning like before
- Super basic support for IE 9 with swiper.jquery version. No animation and transitions, but basic stuff like switching slides/pagination/scrollbars works

## Swiper 3.0.4 - Released on March 6th, 2015

- New Images Lazy Load component
  - With new parameters `lazyLoading`, `lazyLoadingInPrevNext`, `lazyLoadingOnTransitionStart` (all disabled by default)
  - With new callbacks `onLazyImageLoad` and `onLazyImageReady`
- `updateOnImages` ready split into 2 parameters:
  - `preloadImages` (by default is true) - to preload all images on swiper init
  - `updateOnImages` (by default is true) - update swiper when all images loaded
- Fixed issues with touchmove on fouces form elements
- New `onObserverUpdate` callback function to be called after updates by ovserver
- Fixed issue with not working inputs with keyboard control for jQuery version
- New `paginationBulletRender` parameter that accepts function which allow custom pagination elements layout
- Hash Navigation will run callback dpending on `runCallbacksOnInit` parameter
- `watchVisibility` parameter renamed to `watchSlidesVisibility`

## Swiper 3.0.3 - Released on March 1st, 2015

- Fixed issue with not firing onSlideChangeEnd callback after calling .slideTo with
  runCallbacks=false
- Fixed values of isBeginning/isEnd when there is only one slide
- New `crossFade` option for fade effect
- Improved support for devices with both touch and mouse inputs, not yet on IE
- Fixed not correctly working mousewheel and keyobard control in swiper.jquery version
- New parallax module for transitions with parallax effects on internal elements
- Improved .update and .onResize methods
- Minor fixes

## Swiper 3.0.2 - Released on February 22nd, 2015

- Fixed issue with keyboard events not cleaned up with Swiper.destroy
- Encoded inline SVG images for IE support
- New callbacks
  - onInit (swiper)
  - onTouchMoveOpposite (swiper, e)
- Fixed free mode momentum in RTL layout
- `.update` method improved to fully cover what `onResize` do for full and correct update
- Exposed `swiper.touches` object with the following properties: `startX`, `startY`, `currentX`, `currentY`, `diff`
- New methods to remove slides
  - `.removeSlide(index)` or `.removeSlide([indexes])` - to remove selected slides
  - `.removeAllSlides()` - to remove all slides

## Swiper 3.0.1 - Released on February 13th, 2015

- Fixed issue with navigation buttons in Firefox in loop mode
- Fixed issue with image dragging in IE 10+

## Swiper 3.0.0 - Released on February 11th, 2015

- Initial release of all new Swiper 3
- Removed features
  - Dropped support for old browsers. Now it is compatible with:
    - iOS 7+
    - Android 4+ (multirow mode only for Android 4.4+)
    - Latest Chrome, Safari, Firefox and Opera desktop browsers
    - WP 8+, IE 10+ (3D effects may not work correctly on IE because of wrong nested 3D transform support)
  - Scroll Container. Removed in favor of pure CSS `overflow: auto` with `-webkit-overflow-scrolling: touch`
- New features
  - Swiper now uses modern flexbox layout, which by itself give more features and advantages
  - Such Swiper 2.x plugins as Hash Navigation, Smooth Progress, 3D Flow and Scrollbar are now incorporated into Swiper 3.x core
  - Full RTL support
  - Built-in navigation buttons/arrows
  - Controller. Now one Swiper could be controlled (or control itself) by another Swiper
  - Multi row slides layout with `slidesPerColumn` option
  - Better support for nested Swipers, now it is possible to use same-direction nested Swipers, like horizontal in horizontal
  - Space between slides
  - New transition effects: 3D Coverflow, 3D Cube and Fade transitions
  - Slides are `border-box` now, so it is possible to use borders and paddings directly on slides
  - Auto layout mode (`slidesPerView: 'auto'`) now gives more freedom, you can even specify slides sizes in % and use margins on them
  - Mutation Observers. If enabled, Swiper will watch for changes in Dom and update its layout automatically
  - Better clicks prevention during swiping
- Many of API methods, parameters and callbacks are changed
- Added a bit lightweight jQuery/Zepto version of Swiper that can be used if you use jQuery/Zepto in your project
