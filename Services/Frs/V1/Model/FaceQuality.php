<?php

namespace HuaweiCloud\SDK\Frs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FaceQuality implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FaceQuality';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalScore  人脸质量总分，取值范围[0-1]，分值越大质量越高。
    * blur  模糊度，取值范围[0-1]，分值越大模糊问题越严重。
    * pose  姿态，取值范围[0-1]，分值越大姿态问题越严重。
    * occlusion  遮挡，取值范围[0-1]，分值越大遮挡问题越严重。
    * illumination  光照，取值范围[0-1]，分值越大光照问题越严重。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalScore' => 'double',
            'blur' => 'double',
            'pose' => 'double',
            'occlusion' => 'double',
            'illumination' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalScore  人脸质量总分，取值范围[0-1]，分值越大质量越高。
    * blur  模糊度，取值范围[0-1]，分值越大模糊问题越严重。
    * pose  姿态，取值范围[0-1]，分值越大姿态问题越严重。
    * occlusion  遮挡，取值范围[0-1]，分值越大遮挡问题越严重。
    * illumination  光照，取值范围[0-1]，分值越大光照问题越严重。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalScore' => 'double',
        'blur' => 'double',
        'pose' => 'double',
        'occlusion' => 'double',
        'illumination' => 'double'
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
    * totalScore  人脸质量总分，取值范围[0-1]，分值越大质量越高。
    * blur  模糊度，取值范围[0-1]，分值越大模糊问题越严重。
    * pose  姿态，取值范围[0-1]，分值越大姿态问题越严重。
    * occlusion  遮挡，取值范围[0-1]，分值越大遮挡问题越严重。
    * illumination  光照，取值范围[0-1]，分值越大光照问题越严重。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalScore' => 'total_score',
            'blur' => 'blur',
            'pose' => 'pose',
            'occlusion' => 'occlusion',
            'illumination' => 'illumination'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalScore  人脸质量总分，取值范围[0-1]，分值越大质量越高。
    * blur  模糊度，取值范围[0-1]，分值越大模糊问题越严重。
    * pose  姿态，取值范围[0-1]，分值越大姿态问题越严重。
    * occlusion  遮挡，取值范围[0-1]，分值越大遮挡问题越严重。
    * illumination  光照，取值范围[0-1]，分值越大光照问题越严重。
    *
    * @var string[]
    */
    protected static $setters = [
            'totalScore' => 'setTotalScore',
            'blur' => 'setBlur',
            'pose' => 'setPose',
            'occlusion' => 'setOcclusion',
            'illumination' => 'setIllumination'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalScore  人脸质量总分，取值范围[0-1]，分值越大质量越高。
    * blur  模糊度，取值范围[0-1]，分值越大模糊问题越严重。
    * pose  姿态，取值范围[0-1]，分值越大姿态问题越严重。
    * occlusion  遮挡，取值范围[0-1]，分值越大遮挡问题越严重。
    * illumination  光照，取值范围[0-1]，分值越大光照问题越严重。
    *
    * @var string[]
    */
    protected static $getters = [
            'totalScore' => 'getTotalScore',
            'blur' => 'getBlur',
            'pose' => 'getPose',
            'occlusion' => 'getOcclusion',
            'illumination' => 'getIllumination'
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
        $this->container['totalScore'] = isset($data['totalScore']) ? $data['totalScore'] : null;
        $this->container['blur'] = isset($data['blur']) ? $data['blur'] : null;
        $this->container['pose'] = isset($data['pose']) ? $data['pose'] : null;
        $this->container['occlusion'] = isset($data['occlusion']) ? $data['occlusion'] : null;
        $this->container['illumination'] = isset($data['illumination']) ? $data['illumination'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['totalScore'] === null) {
            $invalidProperties[] = "'totalScore' can't be null";
        }
        if ($this->container['blur'] === null) {
            $invalidProperties[] = "'blur' can't be null";
        }
        if ($this->container['pose'] === null) {
            $invalidProperties[] = "'pose' can't be null";
        }
        if ($this->container['occlusion'] === null) {
            $invalidProperties[] = "'occlusion' can't be null";
        }
        if ($this->container['illumination'] === null) {
            $invalidProperties[] = "'illumination' can't be null";
        }
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
    * Gets totalScore
    *  人脸质量总分，取值范围[0-1]，分值越大质量越高。
    *
    * @return double
    */
    public function getTotalScore()
    {
        return $this->container['totalScore'];
    }

    /**
    * Sets totalScore
    *
    * @param double $totalScore 人脸质量总分，取值范围[0-1]，分值越大质量越高。
    *
    * @return $this
    */
    public function setTotalScore($totalScore)
    {
        $this->container['totalScore'] = $totalScore;
        return $this;
    }

    /**
    * Gets blur
    *  模糊度，取值范围[0-1]，分值越大模糊问题越严重。
    *
    * @return double
    */
    public function getBlur()
    {
        return $this->container['blur'];
    }

    /**
    * Sets blur
    *
    * @param double $blur 模糊度，取值范围[0-1]，分值越大模糊问题越严重。
    *
    * @return $this
    */
    public function setBlur($blur)
    {
        $this->container['blur'] = $blur;
        return $this;
    }

    /**
    * Gets pose
    *  姿态，取值范围[0-1]，分值越大姿态问题越严重。
    *
    * @return double
    */
    public function getPose()
    {
        return $this->container['pose'];
    }

    /**
    * Sets pose
    *
    * @param double $pose 姿态，取值范围[0-1]，分值越大姿态问题越严重。
    *
    * @return $this
    */
    public function setPose($pose)
    {
        $this->container['pose'] = $pose;
        return $this;
    }

    /**
    * Gets occlusion
    *  遮挡，取值范围[0-1]，分值越大遮挡问题越严重。
    *
    * @return double
    */
    public function getOcclusion()
    {
        return $this->container['occlusion'];
    }

    /**
    * Sets occlusion
    *
    * @param double $occlusion 遮挡，取值范围[0-1]，分值越大遮挡问题越严重。
    *
    * @return $this
    */
    public function setOcclusion($occlusion)
    {
        $this->container['occlusion'] = $occlusion;
        return $this;
    }

    /**
    * Gets illumination
    *  光照，取值范围[0-1]，分值越大光照问题越严重。
    *
    * @return double
    */
    public function getIllumination()
    {
        return $this->container['illumination'];
    }

    /**
    * Sets illumination
    *
    * @param double $illumination 光照，取值范围[0-1]，分值越大光照问题越严重。
    *
    * @return $this
    */
    public function setIllumination($illumination)
    {
        $this->container['illumination'] = $illumination;
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

