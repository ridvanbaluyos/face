ridvanbaluyos/face
=======
A PHP Library built for the Microsoft's Face API.
> Project Oxford: [Face API](https://www.projectoxford.ai/doc/face/overview)
<br/><br/>

[![Latest Stable Version](https://poser.pugx.org/ridvanbaluyos/face/v/stable.svg)](https://packagist.org/packages/ridvanbaluyos/face) [![Total Downloads](https://poser.pugx.org/ridvanbaluyos/face/downloads.svg)](https://packagist.org/packages/ridvanbaluyos/face) [![Latest Unstable Version](https://poser.pugx.org/ridvanbaluyos/face/v/unstable.svg)](https://packagist.org/packages/ridvanbaluyos/face) [![License](https://poser.pugx.org/ridvanbaluyos/face/license.svg)](https://packagist.org/packages/ridvanbaluyos/face)

## Table of contents ##
- [Installation](#installation)
- [Requirements](#requirements)
- [Usage](#usage)
    - [Detecting a Face](#detecting-a-face)
    - [Analyzing Face Landmarks](#analyzing-face-landmarks)
    - [Analyzing Age](#analyzing-age)
    - [Analyzing Gender](#analyzing-gender)
    - [Analyzing Head Pose](#analyzing-head-pose)
    - [Chaining options](#chaining-options)
- [References](#references)

### Installation ##
Open your `composer.json` file and add the following to the `require` key:

    "ridvanbaluyos/face": "v0.5"

---

After adding the key, run composer update from the command line to install the package

```bash
composer install
```

or

```bash
composer update
```
### Requirements ##
Subscription for Microsoft's Face API. Please follow these [steps](https://www.projectoxford.ai/doc/face/Get-Started/csharp#step1) on how to get a subscription key.


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
```
$face->analyzeFaceLandmarks()->analyzeAge()->analyzeGender()analyzeHeadPose()->getFaces();

```

#### Alternatively, you can analyze all possible options
```
$face->analyzeAll()->getFaces();

```

## References
* [Subscription Key Management](https://www.projectoxford.ai/doc/general/subscription-key-mgmt)
* [Face API Documentation](https://dev.projectoxford.ai/docs/services/54d85c1d5eefd00dc474a0ef/operations/54f0375749c3f70a50e79b82)
