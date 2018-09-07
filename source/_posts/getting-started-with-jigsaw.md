---
title: "Getting Started with Jigsaw"
author: Evan Burrell
date: 2018-09-07
extends: _layouts.post
section: post
---
Getting started with Jigsaw has been a breeze. Tighten has made a easy to use static site generator that uses the blade that we already know an love.

Per the documentation website website:
- PHP 7
- Composer
- Node.js

1. Create a project directory
```sh
mkdir my-site
```
2. Install Jigsaw using Composer
```sh
cd my-site
composer require tightenco/jigsaw
```
3. Run the init command
```sh
./vendor/bin/jigsaw init
```

4. Run the dev script to build the site
```sh
npm install
npm run dev
```
<br>

Then off you go!
