# churro
A blog service written with PHP using CodeIgniter. Users are able to sign up and create their blogs, which can have custom pages and styling.

🌎 [View Live](https://coco.lat/c)

![Blog page](https://raw.githubusercontent.com/tomual/mini-blog/master/images/blog.png)

## Features

* Custom CSS
* Custom pages - create/edit/delete
* Blog posts - create/edit/delete
* Draft posts
* Archives

To use this as a single user - Change `single_blog_mode` in `config.php`

## Installation

1. Enable PHP's `tidy` extension
2. Create MySQL database and run `sql/tables.sql`
3. Edit database information in `application/config/database.php`
4. Make `base_url` the blog URL in `application/config/config.php`

## Screenshots

![Home page](https://raw.githubusercontent.com/tomual/mini-blog/master/images/home.png)

![Admin page](https://raw.githubusercontent.com/tomual/mini-blog/master/images/admin.png)
