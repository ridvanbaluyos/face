ridvanbaluyos/face
=======
A PHP Library built for the Microsoft's Cognitive Services.
> Cognitive Services: [Face API](https://www.microsoft.com/cognitive-services/en-us/face-api/documentation/overview)
<br/><br/>

[![Latest Stable Version](https://poser.pugx.org/ridvanbaluyos/face/v/stable.svg)](https://packagist.org/packages/ridvanbaluyos/face) [![Total Downloads](https://poser.pugx.org/ridvanbaluyos/face/downloads.svg)](https://packagist.org/packages/ridvanbaluyos/face) [![Latest Unstable Version](https://poser.pugx.org/ridvanbaluyos/face/v/unstable.svg)](https://packagist.org/packages/ridvanbaluyos/face) [![License](https://poser.pugx.org/ridvanbaluyos/face/license.svg)](https://packagist.org/packages/ridvanbaluyos/face)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/42b377321bd14833a81d15c88cb82ed1)](https://www.codacy.com/app/ewoklabs/face?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=ridvanbaluyos/face&amp;utm_campaign=Badge_Grade)

## Table of contents ##
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
    - [Detecting a Face](#detecting-a-face)
    - [Analyzing Face Landmarks](#analyzing-face-landmarks)
    - [Analyzing Face Attributes](#analyzing-face-attributes)
    - [Chaining options](#chaining-options)
- [References](#references)

### Requirements ##
Kindly subscribe for an API key to [Microsoft's Cognitive Services API page](https://www.microsoft.com/cognitive-services/en-us/sign-up).

### Installation ##
Open your `composer.json` file and add the following to the `require` key:

    "ridvanbaluyos/face": "v1.0"

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
