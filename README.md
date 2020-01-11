# Translation Key Helper

Laravel plugin for displaying translation key in HTML
comment nearby test string.

    composer require evilfreelancer/translation-key-helper --dev

Please use this plugin only on development environment.

## Example of usage

After installation of this plugin you can find lines like this in HTML source code on your site:

```html
<ul id="navbar-main" class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link active" href="http://localhost/posts"><!--navbar.posts--!>Posts</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="http://localhost/news"><!--navbar.news--!>News</a>
  </li>
</ul>
```