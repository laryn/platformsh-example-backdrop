# Backdrop project template for Platform.sh

This project provides a starter kit for Backdrop projects hosted on [Platform.sh](http://platform.sh). It
mirrors the latest tagged release of [Backdrop CMS](https://github.com/backdrop/backdrop/releases/latest).

## Starting a new project

To start a new Backdrop project on Platform.sh, you have 2 options:

1. Create a new project through the Platform.sh user interface and select "start
   new project from a template".  Then select Backdrop as the template. That will
   create a new project using this repository as a starting point.

2. Take an existing project, add the necessary Platform.sh files, and push it
   to a Platform.sh Git repository. This template includes examples of how to
   set up a Backdrop site.  (See the "differences" section below.)

## Using as a reference

You can also use this repository as a reference for your own Backdrop projects, and borrow whatever code is needed.  The most important parts are the [`.platform.app.yaml`](/.platform.app.yaml) file and the [`.platform`](/.platform) directory.

Also see:

* [`settings.php`](/settings.php) - The customized `settings.php` file works for both Platform.sh and local development, setting only those values that are needed in both.  You can add additional values as documented in `default.settings.php` as desired.
* [`settings.platformsh.php`](/settings.platformsh.php) - This file contains Platform.sh-specific code to map environment variables into Backdrop configuration.  You can add to it as needed.

## How does this starter kit differ from vanilla Backdrop from BackdropCMS.org?

1. The `settings.php` and `settings.platformsh.php` files are provided by
   default. The `settings.platformsh.php` file automatically sets up the database connection on Platform.sh, and allows controlling Backdrop configuration from environment variables.

2. We include recommended `.platform.app.yaml` and `.platform` files that should suffice
   for most use cases. You are free to tweak them as needed for your particular site.
