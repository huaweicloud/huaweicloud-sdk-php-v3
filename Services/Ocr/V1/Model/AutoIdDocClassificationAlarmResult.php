<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoIdDocClassificationAlarmResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoIdDocClassificationAlarmResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * detectBlurResult  证件图像模糊告警结果。 - true：表示证件图片较模糊。 - false：表示证件清晰。
    * detectGlareResult  证件图像反光告警结果。 - true：表示证件图片存在反光。 - false：表示证件图片不存在反光。
    * detectBlockingWithinBorderResult  证件图像框内遮挡告警结果。 - true：表示证件图片存在框内遮挡。 - false：表示证件图片不存在框内遮挡。
    * detectInsufficientLightingResult  证件图像过暗告警结果。 - true：表示证件图片过暗。 - false：表示证件图片光线正常。
    * detectCopyResult  证件图像是否黑白复印件告警结果。 - true：表示证件是复印件。 - false：表示证件是原件。
    * detectBorderIntegrityResult  证件图像边框完整性告警结果。 - true：表示边框不完整。 - false：表示边框完整。
    * detectReproduceResult  证件图像是否翻拍告警结果。 - true：表示证件图片经过翻拍。 - false：表示证件图片未经过翻拍。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'detectBlurResult' => 'bool',
            'detectGlareResult' => 'bool',
            'detectBlockingWithinBorderResult' => 'bool',
            'detectInsufficientLightingResult' => 'bool',
            'detectCopyResult' => 'bool',
            'detectBorderIntegrityResult' => 'bool',
            'detectReproduceResult' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * detectBlurResult  证件图像模糊告警结果。 - true：表示证件图片较模糊。 - false：表示证件清晰。
    * detectGlareResult  证件图像反光告警结果。 - true：表示证件图片存在反光。 - false：表示证件图片不存在反光。
    * detectBlockingWithinBorderResult  证件图像框内遮挡告警结果。 - true：表示证件图片存在框内遮挡。 - false：表示证件图片不存在框内遮挡。
    * detectInsufficientLightingResult  证件图像过暗告警结果。 - true：表示证件图片过暗。 - false：表示证件图片光线正常。
    * detectCopyResult  证件图像是否黑白复印件告警结果。 - true：表示证件是复印件。 - false：表示证件是原件。
    * detectBorderIntegrityResult  证件图像边框完整性告警结果。 - true：表示边框不完整。 - false：表示边框完整。
    * detectReproduceResult  证件图像是否翻拍告警结果。 - true：表示证件图片经过翻拍。 - false：表示证件图片未经过翻拍。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'detectBlurResult' => null,
        'detectGlareResult' => null,
        'detectBlockingWithinBorderResult' => null,
        'detectInsufficientLightingResult' => null,
        'detectCopyResult' => null,
        'detectBorderIntegrityResult' => null,
        'detectReproduceResult' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * detectBlurResult  证件图像模糊告警结果。 - true：表示证件图片较模糊。 - false：表示证件清晰。
    * detectGlareResult  证件图像反光告警结果。 - true：表示证件图片存在反光。 - false：表示证件图片不存在反光。
    * detectBlockingWithinBorderResult  证件图像框内遮挡告警结果。 - true：表示证件图片存在框内遮挡。 - false：表示证件图片不存在框内遮挡。
    * detectInsufficientLightingResult  证件图像过暗告警结果。 - true：表示证件图片过暗。 - false：表示证件图片光线正常。
    * detectCopyResult  证件图像是否黑白复印件告警结果。 - true：表示证件是复印件。 - false：表示证件是原件。
    * detectBorderIntegrityResult  证件图像边框完整性告警结果。 - true：表示边框不完整。 - false：表示边框完整。
    * detectReproduceResult  证件图像是否翻拍告警结果。 - true：表示证件图片经过翻拍。 - false：表示证件图片未经过翻拍。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'detectBlurResult' => 'detect_blur_result',
            'detectGlareResult' => 'detect_glare_result',
            'detectBlockingWithinBorderResult' => 'detect_blocking_within_border_result',
            'detectInsufficientLightingResult' => 'detect_insufficient_lighting_result',
            'detectCopyResult' => 'detect_copy_result',
            'detectBorderIntegrityResult' => 'detect_border_integrity_result',
            'detectReproduceResult' => 'detect_reproduce_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * detectBlurResult  证件图像模糊告警结果。 - true：表示证件图片较模糊。 - false：表示证件清晰。
    * detectGlareResult  证件图像反光告警结果。 - true：表示证件图片存在反光。 - false：表示证件图片不存在反光。
    * detectBlockingWithinBorderResult  证件图像框内遮挡告警结果。 - true：表示证件图片存在框内遮挡。 - false：表示证件图片不存在框内遮挡。
    * detectInsufficientLightingResult  证件图像过暗告警结果。 - true：表示证件图片过暗。 - false：表示证件图片光线正常。
    * detectCopyResult  证件图像是否黑白复印件告警结果。 - true：表示证件是复印件。 - false：表示证件是原件。
    * detectBorderIntegrityResult  证件图像边框完整性告警结果。 - true：表示边框不完整。 - false：表示边框完整。
    * detectReproduceResult  证件图像是否翻拍告警结果。 - true：表示证件图片经过翻拍。 - false：表示证件图片未经过翻拍。
    *
    * @var string[]
    */
    protected static $setters = [
            'detectBlurResult' => 'setDetectBlurResult',
            'detectGlareResult' => 'setDetectGlareResult',
            'detectBlockingWithinBorderResult' => 'setDetectBlockingWithinBorderResult',
            'detectInsufficientLightingResult' => 'setDetectInsufficientLightingResult',
            'detectCopyResult' => 'setDetectCopyResult',
            'detectBorderIntegrityResult' => 'setDetectBorderIntegrityResult',
            'detectReproduceResult' => 'setDetectReproduceResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * detectBlurResult  证件图像模糊告警结果。 - true：表示证件图片较模糊。 - false：表示证件清晰。
    * detectGlareResult  证件图像反光告警结果。 - true：表示证件图片存在反光。 - false：表示证件图片不存在反光。
    * detectBlockingWithinBorderResult  证件图像框内遮挡告警结果。 - true：表示证件图片存在框内遮挡。 - false：表示证件图片不存在框内遮挡。
    * detectInsufficientLightingResult  证件图像过暗告警结果。 - true：表示证件图片过暗。 - false：表示证件图片光线正常。
    * detectCopyResult  证件图像是否黑白复印件告警结果。 - true：表示证件是复印件。 - false：表示证件是原件。
    * detectBorderIntegrityResult  证件图像边框完整性告警结果。 - true：表示边框不完整。 - false：表示边框完整。
    * detectReproduceResult  证件图像是否翻拍告警结果。 - true：表示证件图片经过翻拍。 - false：表示证件图片未经过翻拍。
    *
    * @var string[]
    */
    protected static $getters = [
            'detectBlurResult' => 'getDetectBlurResult',
            'detectGlareResult' => 'getDetectGlareResult',
            'detectBlockingWithinBorderResult' => 'getDetectBlockingWithinBorderResult',
            'detectInsufficientLightingResult' => 'getDetectInsufficientLightingResult',
            'detectCopyResult' => 'getDetectCopyResult',
            'detectBorderIntegrityResult' => 'getDetectBorderIntegrityResult',
            'detectReproduceResult' => 'getDetectReproduceResult'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['detectBlurResult'] = isset($data['detectBlurResult']) ? $data['detectBlurResult'] : null;
        $this->container['detectGlareResult'] = isset($data['detectGlareResult']) ? $data['detectGlareResult'] : null;
        $this->container['detectBlockingWithinBorderResult'] = isset($data['detectBlockingWithinBorderResult']) ? $data['detectBlockingWithinBorderResult'] : null;
        $this->container['detectInsufficientLightingResult'] = isset($data['detectInsufficientLightingResult']) ? $data['detectInsufficientLightingResult'] : null;
        $this->container['detectCopyResult'] = isset($data['detectCopyResult']) ? $data['detectCopyResult'] : null;
        $this->container['detectBorderIntegrityResult'] = isset($data['detectBorderIntegrityResult']) ? $data['detectBorderIntegrityResult'] : null;
        $this->container['detectReproduceResult'] = isset($data['detectReproduceResult']) ? $data['detectReproduceResult'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets detectBlurResult
    *  证件图像模糊告警结果。 - true：表示证件图片较模糊。 - false：表示证件清晰。
    *
    * @return bool|null
    */
    public function getDetectBlurResult()
    {
        return $this->container['detectBlurResult'];
    }

    /**
    * Sets detectBlurResult
    *
    * @param bool|null $detectBlurResult 证件图像模糊告警结果。 - true：表示证件图片较模糊。 - false：表示证件清晰。
    *
    * @return $this
    */
    public function setDetectBlurResult($detectBlurResult)
    {
        $this->container['detectBlurResult'] = $detectBlurResult;
        return $this;
    }

    /**
    * Gets detectGlareResult
    *  证件图像反光告警结果。 - true：表示证件图片存在反光。 - false：表示证件图片不存在反光。
    *
    * @return bool|null
    */
    public function getDetectGlareResult()
    {
        return $this->container['detectGlareResult'];
    }

    /**
    * Sets detectGlareResult
    *
    * @param bool|null $detectGlareResult 证件图像反光告警结果。 - true：表示证件图片存在反光。 - false：表示证件图片不存在反光。
    *
    * @return $this
    */
    public function setDetectGlareResult($detectGlareResult)
    {
        $this->container['detectGlareResult'] = $detectGlareResult;
        return $this;
    }

    /**
    * Gets detectBlockingWithinBorderResult
    *  证件图像框内遮挡告警结果。 - true：表示证件图片存在框内遮挡。 - false：表示证件图片不存在框内遮挡。
    *
    * @return bool|null
    */
    public function getDetectBlockingWithinBorderResult()
    {
        return $this->container['detectBlockingWithinBorderResult'];
    }

    /**
    * Sets detectBlockingWithinBorderResult
    *
    * @param bool|null $detectBlockingWithinBorderResult 证件图像框内遮挡告警结果。 - true：表示证件图片存在框内遮挡。 - false：表示证件图片不存在框内遮挡。
    *
    * @return $this
    */
    public function setDetectBlockingWithinBorderResult($detectBlockingWithinBorderResult)
    {
        $this->container['detectBlockingWithinBorderResult'] = $detectBlockingWithinBorderResult;
        return $this;
    }

    /**
    * Gets detectInsufficientLightingResult
    *  证件图像过暗告警结果。 - true：表示证件图片过暗。 - false：表示证件图片光线正常。
    *
    * @return bool|null
    */
    public function getDetectInsufficientLightingResult()
    {
        return $this->container['detectInsufficientLightingResult'];
    }

    /**
    * Sets detectInsufficientLightingResult
    *
    * @param bool|null $detectInsufficientLightingResult 证件图像过暗告警结果。 - true：表示证件图片过暗。 - false：表示证件图片光线正常。
    *
    * @return $this
    */
    public function setDetectInsufficientLightingResult($detectInsufficientLightingResult)
    {
        $this->container['detectInsufficientLightingResult'] = $detectInsufficientLightingResult;
        return $this;
    }

    /**
    * Gets detectCopyResult
    *  证件图像是否黑白复印件告警结果。 - true：表示证件是复印件。 - false：表示证件是原件。
    *
    * @return bool|null
    */
    public function getDetectCopyResult()
    {
        return $this->container['detectCopyResult'];
    }

    /**
    * Sets detectCopyResult
    *
    * @param bool|null $detectCopyResult 证件图像是否黑白复印件告警结果。 - true：表示证件是复印件。 - false：表示证件是原件。
    *
    * @return $this
    */
    public function setDetectCopyResult($detectCopyResult)
    {
        $this->container['detectCopyResult'] = $detectCopyResult;
        return $this;
    }

    /**
    * Gets detectBorderIntegrityResult
    *  证件图像边框完整性告警结果。 - true：表示边框不完整。 - false：表示边框完整。
    *
    * @return bool|null
    */
    public function getDetectBorderIntegrityResult()
    {
        return $this->container['detectBorderIntegrityResult'];
    }

    /**
    * Sets detectBorderIntegrityResult
    *
    * @param bool|null $detectBorderIntegrityResult 证件图像边框完整性告警结果。 - true：表示边框不完整。 - false：表示边框完整。
    *
    * @return $this
    */
    public function setDetectBorderIntegrityResult($detectBorderIntegrityResult)
    {
        $this->container['detectBorderIntegrityResult'] = $detectBorderIntegrityResult;
        return $this;
    }

    /**
    * Gets detectReproduceResult
    *  证件图像是否翻拍告警结果。 - true：表示证件图片经过翻拍。 - false：表示证件图片未经过翻拍。
    *
    * @return bool|null
    */
    public function getDetectReproduceResult()
    {
        return $this->container['detectReproduceResult'];
    }

    /**
    * Sets detectReproduceResult
    *
    * @param bool|null $detectReproduceResult 证件图像是否翻拍告警结果。 - true：表示证件图片经过翻拍。 - false：表示证件图片未经过翻拍。
    *
    * @return $this
    */
    public function setDetectReproduceResult($detectReproduceResult)
    {
        $this->container['detectReproduceResult'] = $detectReproduceResult;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

