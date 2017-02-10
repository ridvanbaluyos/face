ridvanbaluyos/face
=======
A PHP Library built for the Microsoft's Cognitive Services.
> Cognitive Services: [Face API](https://www.microsoft.com/cognitive-services/en-us/face-api/documentation/overview)
<br/><br/>

[![Latest Stable Version](https://poser.pugx.org/ridvanbaluyos/face/v/stable.svg)](https://packagist.org/packages/ridvanbaluyos/face) [![Latest Unstable Version](https://poser.pugx.org/ridvanbaluyos/face/v/unstable.svg)](https://packagist.org/packages/ridvanbaluyos/face) [![Total Downloads](https://poser.pugx.org/ridvanbaluyos/face/downloads.svg)](https://packagist.org/packages/ridvanbaluyos/face) [![Build Status](https://scrutinizer-ci.com/g/ridvanbaluyos/face/badges/build.png?b=master)](https://scrutinizer-ci.com/g/ridvanbaluyos/face/build-status/master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ridvanbaluyos/face/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ridvanbaluyos/face/?branch=master) [![License](https://poser.pugx.org/ridvanbaluyos/face/license.svg)](https://packagist.org/packages/ridvanbaluyos/face)

## Table of contents ##
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
    - [Detecting a Face](#detecting-a-face)
    - [Analyzing Face Landmarks](#analyzing-face-landmarks)
    - [Analyzing Face Attributes](#analyzing-face-attributes)
    - [Chaining options](#chaining-options)
- [References](#references)

### Requirements ###
Kindly subscribe for an API key to [Microsoft's Cognitive Services API page](https://www.microsoft.com/cognitive-services/en-us/sign-up).

### Installation ###
Open your `composer.json` file and add the following to the `require` key:

    "ridvanbaluyos/face": "v1.1"

---

After adding the key, run composer update from the command line to install the package

```bash
composer install
```

or

```bash
composer update
```

### Configuration ###
Add your subscription key in `src/Ridvanbaluyos/Face/config.json` file
```json
{
	"url" : "https://westus.api.cognitive.microsoft.com/face/v1.0/detect",
	"subscriptionKey" : "zWwPD7BGWYEArX6u6QxvS25TTsNge2Qw"
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

#### Analyzing Face Attributes
```php
$face->analyzeFaceAttributes()->getFaces();

```

#### Chaining options
```php
$face->analyzeFaceLandmarks()->analyzeFaceAttributes()->getFaces();

```

#### Alternatively, you can analyze all possible options
```php
$face->analyzeAll()->getFaces();

```

## References
* [Microsoft Cognitive Services](https://www.microsoft.com/cognitive-services/en-us/)
* [Face API Documentation](https://www.microsoft.com/cognitive-services/en-us/face-api/documentation/overview)
* [Face Open API Testing Console](https://westus.dev.cognitive.microsoft.com/docs/services/563879b61984550e40cbbe8d/operations/563879b61984550f30395236/console)
* [Test on RapidAPI](https://rapidapi.com/package/MicrosoftFaceApi/functions?utm_source=MicrosoftFaceGitHub-PHP&utm_medium=button&utm_content=Vendor_GitHub)
