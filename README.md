ridvanbaluyos/face
=======
A PHP Library built for the Microsoft's Face API.
> Project Oxford: [Face API](https://www.projectoxford.ai/doc/face/overview)
<br/><br/>

[![Latest Stable Version](https://poser.pugx.org/ridvanbaluyos/face/v/stable.svg)](https://packagist.org/packages/ridvanbaluyos/face) [![Total Downloads](https://poser.pugx.org/ridvanbaluyos/face/downloads.svg)](https://packagist.org/packages/ridvanbaluyos/face) [![Latest Unstable Version](https://poser.pugx.org/ridvanbaluyos/face/v/unstable.svg)](https://packagist.org/packages/ridvanbaluyos/face) [![License](https://poser.pugx.org/ridvanbaluyos/face/license.svg)](https://packagist.org/packages/ridvanbaluyos/face)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/42b377321bd14833a81d15c88cb82ed1)](https://www.codacy.com/app/ewoklabs/face?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=ridvanbaluyos/face&amp;utm_campaign=Badge_Grade)

<div style="margin: 25px;">
<a href="https://rapidapi.com/package/MicrosoftFaceApi/functions?utm_source=MicrosoftFaceGitHub-PHP&utm_medium=button&utm_content=Vendor_GitHub" style="
    all: initial;
    background-color: #498FE1;
    border-width: 0;
    border-radius: 5px;
    padding: 10px 20px;
    color: white;
    font-family: 'Helvetica';
    font-size: 12pt;
    background-image: url(https://scdn.rapidapi.com/logo-small.png);
    background-size: 25px;
    background-repeat: no-repeat;
    background-position-y: center;
    background-position-x: 10px;
    padding-left: 44px;
    cursor: pointer;">
  Run now on <b>RapidAPI</b>
</a>
</div>

## Table of contents ##
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
    - [Detecting a Face](#detecting-a-face)
    - [Analyzing Face Landmarks](#analyzing-face-landmarks)
    - [Analyzing Age](#analyzing-age)
    - [Analyzing Gender](#analyzing-gender)
    - [Analyzing Head Pose](#analyzing-head-pose)
    - [Chaining options](#chaining-options)
- [References](#references)

### Requirements ##
Subscription for Microsoft's Face API. Please follow these [steps](https://www.projectoxford.ai/doc/face/Get-Started/csharp#step1) on how to get a subscription key.

### Installation ##
Open your `composer.json` file and add the following to the `require` key:

    "ridvanbaluyos/face": "v0.7"

---

After adding the key, run composer update from the command line to install the package

```bash
composer install
```

or

```bash
composer update
```

Add your subscription key in the FaceDetection.php class
```php
    public function __construct($image) {
        $this->subscriptionKey = 'abul3abul3abul3';
        // ... codes
    }

```


### Usage ##
```php
<?php
// namespace and autoloaders
use Ridvanbaluyos\Face\FaceDetection as FaceDetection;
require_once __DIR__ . '/vendor/autoload.php';

// let's use Justin Bieber's photo
$image = array(
    'url' => 'http://img2.timeinc.net/people/i/2014/database/140831/justin-bieber-300.jpg',
);

// instantiate face detection object
$face = new FaceDetection($image);
?>
```

#### Detecting a face
```php
$face->getFaces();

```

#### Analyzing Face Landmarks
```php
$face->analyzeFaceLandmarks()->getFaces();

```

#### Analyzing Age
```php
$face->analyzeAge()->getFaces();

```

#### Analyzing Gender
```php
$face->analyzeGender()->getFaces();

```

#### Analyzing Head Pose
```php
$face->analyzeHeadPose()->getFaces();

```

#### Chaining options
```php
$face->analyzeFaceLandmarks()->analyzeAge()->analyzeGender()->analyzeHeadPose()->getFaces();

```

#### Alternatively, you can analyze all possible options
```php
$face->analyzeAll()->getFaces();

```

## References
* [Subscription Key Management](https://www.projectoxford.ai/doc/general/subscription-key-mgmt)
* [Face API Documentation](https://dev.projectoxford.ai/docs/services/54d85c1d5eefd00dc474a0ef/operations/54f0375749c3f70a50e79b82)
* [How-Old.net](http://how-old.net/)
