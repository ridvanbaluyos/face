<?php 
namespace Ridvanbaluyos\Face;

use Noodlehaus\Config as Config;
/**
 * Microsoft Cognitive Services- Face API
 * https://www.microsoft.com/cognitive-services/en-us/face-api/documentation/overview
 *
 * @package    Cognitive Services
 * @author     Ridvan Baluyos <ridvan@baluyos.net>
 * @link       https://github.com/ridvanbaluyos/face
 * @license    MIT
 */
class FaceDetection
{
	private $url;
	private $subscriptionKey;
	private $image;
	private $returnFaceId = false;
	private $returnFaceLandmarks = false;
	private $returnFaceAttributes = '';

	/**
	 * Constructor
	 */
	public function __construct($image) {
		$conf = Config::load(__DIR__ . '/config.json');
		$this->subscriptionKey = $conf['subscriptionKey'];
		$this->url = $conf['url'];
		$this->image = $image;
	}

	/**
	 * Get all the face/s detected in an image.
	 *
	 */
	public function getFaces() 
	{
		$params = array(
			'returnFaceId' => $this->returnFaceId,
			'returnFaceLandmarks' => $this->returnFaceLandmarks,
			'returnFaceAttributes' => $this->returnFaceAttributes
		);
		
		$query = http_build_query($params);
		$image = json_encode($this->image);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->url . '?' . $query);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $image);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Ocp-Apim-Subscription-Key: ' . $this->subscriptionKey,
			'Content-Type: application/json',
			'Content-Length: ' . strlen($image)
			)
		);
		$response = curl_exec($ch);
		
		return $response;
	}

	/**
	 * Optional parameter to get face landmarks.
	 *
	 */
	public function analyzeFaceLandmarks() {
		$this->returnFaceLandmarks = 'true';

		return $this;
	}

	/**
	 * Optional parameter to get face attributes.
	 *
	 */
	public function analyzeFaceAttributes() {
		$this->returnFaceAttributes = 'age,gender,headPose,smile,facialHair,glasses';

		return $this;
	}

	/**
	 * Alternatively, you can enable all options.
	 *
	 */
	public function analyzeAll() {
		$this->returnFaceLandmarks = 'true';
		$this->returnFaceAttributes = 'age,gender,headPose,smile,facialHair,glasses';

		return $this;
	}
}
