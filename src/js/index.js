import 'nodelist-foreach-polyfill';
import 'mdn-polyfills/Array.prototype.forEach';
import 'mdn-polyfills/Array.prototype.find';
import 'mdn-polyfills/Array.prototype.includes';
import 'mdn-polyfills/String.prototype.includes';
import lazySizes from 'lazysizes';

import Website from './_modules/website';
import Home from './_modules/home';

document.addEventListener('DOMContentLoaded', function() {
  Website.init();
  Home.init();
});
