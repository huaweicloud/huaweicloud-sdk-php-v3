<?php

namespace HuaweiCloud\SDK\Frs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Landmark implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Landmark';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eyesContour  眼睛轮廓，Point为轮廓坐标值。
    * mouthContour  嘴巴轮廓，Point为轮廓坐标值。
    * faceContour  人脸轮廓，Point为轮廓坐标值。
    * eyebrowContour  眉毛轮廓，Point为轮廓坐标值。
    * noseContour  鼻子轮廓，Point为轮廓坐标值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eyesContour' => '\HuaweiCloud\SDK\Frs\V1\Model\Point[]',
            'mouthContour' => '\HuaweiCloud\SDK\Frs\V1\Model\Point[]',
            'faceContour' => '\HuaweiCloud\SDK\Frs\V1\Model\Point[]',
            'eyebrowContour' => '\HuaweiCloud\SDK\Frs\V1\Model\Point[]',
            'noseContour' => '\HuaweiCloud\SDK\Frs\V1\Model\Point[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eyesContour  眼睛轮廓，Point为轮廓坐标值。
    * mouthContour  嘴巴轮廓，Point为轮廓坐标值。
    * faceContour  人脸轮廓，Point为轮廓坐标值。
    * eyebrowContour  眉毛轮廓，Point为轮廓坐标值。
    * noseContour  鼻子轮廓，Point为轮廓坐标值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eyesContour' => null,
        'mouthContour' => null,
        'faceContour' => null,
        'eyebrowContour' => null,
        'noseContour' => null
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
    * eyesContour  眼睛轮廓，Point为轮廓坐标值。
    * mouthContour  嘴巴轮廓，Point为轮廓坐标值。
    * faceContour  人脸轮廓，Point为轮廓坐标值。
    * eyebrowContour  眉毛轮廓，Point为轮廓坐标值。
    * noseContour  鼻子轮廓，Point为轮廓坐标值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eyesContour' => 'eyes_contour',
            'mouthContour' => 'mouth_contour',
            'faceContour' => 'face_contour',
            'eyebrowContour' => 'eyebrow_contour',
            'noseContour' => 'nose_contour'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eyesContour  眼睛轮廓，Point为轮廓坐标值。
    * mouthContour  嘴巴轮廓，Point为轮廓坐标值。
    * faceContour  人脸轮廓，Point为轮廓坐标值。
    * eyebrowContour  眉毛轮廓，Point为轮廓坐标值。
    * noseContour  鼻子轮廓，Point为轮廓坐标值。
    *
    * @var string[]
    */
    protected static $setters = [
            'eyesContour' => 'setEyesContour',
            'mouthContour' => 'setMouthContour',
            'faceContour' => 'setFaceContour',
            'eyebrowContour' => 'setEyebrowContour',
            'noseContour' => 'setNoseContour'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eyesContour  眼睛轮廓，Point为轮廓坐标值。
    * mouthContour  嘴巴轮廓，Point为轮廓坐标值。
    * faceContour  人脸轮廓，Point为轮廓坐标值。
    * eyebrowContour  眉毛轮廓，Point为轮廓坐标值。
    * noseContour  鼻子轮廓，Point为轮廓坐标值。
    *
    * @var string[]
    */
    protected static $getters = [
            'eyesContour' => 'getEyesContour',
            'mouthContour' => 'getMouthContour',
            'faceContour' => 'getFaceContour',
            'eyebrowContour' => 'getEyebrowContour',
            'noseContour' => 'getNoseContour'
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
        $this->container['eyesContour'] = isset($data['eyesContour']) ? $data['eyesContour'] : null;
        $this->container['mouthContour'] = isset($data['mouthContour']) ? $data['mouthContour'] : null;
        $this->container['faceContour'] = isset($data['faceContour']) ? $data['faceContour'] : null;
        $this->container['eyebrowContour'] = isset($data['eyebrowContour']) ? $data['eyebrowContour'] : null;
        $this->container['noseContour'] = isset($data['noseContour']) ? $data['noseContour'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['eyesContour'] === null) {
            $invalidProperties[] = "'eyesContour' can't be null";
        }
        if ($this->container['mouthContour'] === null) {
            $invalidProperties[] = "'mouthContour' can't be null";
        }
        if ($this->container['faceContour'] === null) {
            $invalidProperties[] = "'faceContour' can't be null";
        }
        if ($this->container['eyebrowContour'] === null) {
            $invalidProperties[] = "'eyebrowContour' can't be null";
        }
        if ($this->container['noseContour'] === null) {
            $invalidProperties[] = "'noseContour' can't be null";
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
    * Gets eyesContour
    *  眼睛轮廓，Point为轮廓坐标值。
    *
    * @return \HuaweiCloud\SDK\Frs\V1\Model\Point[]
    */
    public function getEyesContour()
    {
        return $this->container['eyesContour'];
    }

    /**
    * Sets eyesContour
    *
    * @param \HuaweiCloud\SDK\Frs\V1\Model\Point[] $eyesContour 眼睛轮廓，Point为轮廓坐标值。
    *
    * @return $this
    */
    public function setEyesContour($eyesContour)
    {
        $this->container['eyesContour'] = $eyesContour;
        return $this;
    }

    /**
    * Gets mouthContour
    *  嘴巴轮廓，Point为轮廓坐标值。
    *
    * @return \HuaweiCloud\SDK\Frs\V1\Model\Point[]
    */
    public function getMouthContour()
    {
        return $this->container['mouthContour'];
    }

    /**
    * Sets mouthContour
    *
    * @param \HuaweiCloud\SDK\Frs\V1\Model\Point[] $mouthContour 嘴巴轮廓，Point为轮廓坐标值。
    *
    * @return $this
    */
    public function setMouthContour($mouthContour)
    {
        $this->container['mouthContour'] = $mouthContour;
        return $this;
    }

    /**
    * Gets faceContour
    *  人脸轮廓，Point为轮廓坐标值。
    *
    * @return \HuaweiCloud\SDK\Frs\V1\Model\Point[]
    */
    public function getFaceContour()
    {
        return $this->container['faceContour'];
    }

    /**
    * Sets faceContour
    *
    * @param \HuaweiCloud\SDK\Frs\V1\Model\Point[] $faceContour 人脸轮廓，Point为轮廓坐标值。
    *
    * @return $this
    */
    public function setFaceContour($faceContour)
    {
        $this->container['faceContour'] = $faceContour;
        return $this;
    }

    /**
    * Gets eyebrowContour
    *  眉毛轮廓，Point为轮廓坐标值。
    *
    * @return \HuaweiCloud\SDK\Frs\V1\Model\Point[]
    */
    public function getEyebrowContour()
    {
        return $this->container['eyebrowContour'];
    }

    /**
    * Sets eyebrowContour
    *
    * @param \HuaweiCloud\SDK\Frs\V1\Model\Point[] $eyebrowContour 眉毛轮廓，Point为轮廓坐标值。
    *
    * @return $this
    */
    public function setEyebrowContour($eyebrowContour)
    {
        $this->container['eyebrowContour'] = $eyebrowContour;
        return $this;
    }

    /**
    * Gets noseContour
    *  鼻子轮廓，Point为轮廓坐标值。
    *
    * @return \HuaweiCloud\SDK\Frs\V1\Model\Point[]
    */
    public function getNoseContour()
    {
        return $this->container['noseContour'];
    }

    /**
    * Sets noseContour
    *
    * @param \HuaweiCloud\SDK\Frs\V1\Model\Point[] $noseContour 鼻子轮廓，Point为轮廓坐标值。
    *
    * @return $this
    */
    public function setNoseContour($noseContour)
    {
        $this->container['noseContour'] = $noseContour;
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

