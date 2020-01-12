# Translation Key Helper

Laravel plugin for displaying translation key inside HTML
comments nearby text strings.

    composer require evilfreelancer/translation-key-helper --dev

Please use this plugin only on development environment.

## Example of usage

After installation of this plugin you can find lines like this in HTML source code on your site:

```html
<ul id="navbar-main" class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link active" href="http://localhost/posts"><!-- navbar.posts -->Posts</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="http://localhost/news"><!-- navbar.news -->News</a>
  </li>
</ul>
```

### Note

If you use VueJs, then you need to allow comments inside the div#app block

```js
const app = new Vue({
    el: '#app',
	comments: true, // When set to true, HTML comments found in templates will be saved and rendered. Default: false
});
```
