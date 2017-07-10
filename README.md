<img src="https://crossbrowsertesting.com/design/images/cbt-sb_logo.svg" width="50%">
----
# Codeception and CBT

[Codeception](http://codeception.com/) is a [Behavioral Driven Development](https://dannorth.net/introducing-bdd/) test framework for PHP. With Codeception, and BDD in general for that maatter, your tests define how your application should *behave* in different *scenarios*

## Getting set up

### Installing Composer

First, make sure you have PHP Dependency Manager [**Composer**](https://getcomposer.org/) installed. You can do this by following the instructions on their [download page](https://getcomposer.org/download/).

### Installing Codeception

Once you have Composer, you can then follow the instructions in step 1 of [Codeception's Quickstart](http://codeception.com/quickstart) guide, choosing whether to install for reference or global use. Once that has been taken care of, clone this repository and use these files as a skeleton for your tests with CBT using Codeception.

### Setting up Acceptance Test

In order to run tests through our service, you'll need to make a few changes to the file *tests/acceptance.suite.yml*

In this file you'll need to first specify within the WebDriver the `url` you're testing. Then within the host field, you'll need to provide your email that's associated with your CBT account where `you@yourdomain.com` is. After the colon you'll need to replace `yourauthkey` with the authkey associated with your [account](https://app.crossbrowsertesting.com/account)

There's also the option to change your `capabilities` to rename/re-version your test, extend the `max_duration`, or change your target browser(s).

To find the os_api_name and browser_api_name that corresponds to your targeted platform, you can either go to CrossBrowserTesting's [Selenium Page](https://app.crossbrowsertesting.com/selenium/run), open the wizard, and watch the capabilities in the sample script change as you select different browers, OR you can parse the os/browser you want out of the JSON response from https://crossbrowsertesting.com/api/v3/selenium/browsers

If you run into any trouble or have any questions, send an email to support@crossbrowsertesting.com



