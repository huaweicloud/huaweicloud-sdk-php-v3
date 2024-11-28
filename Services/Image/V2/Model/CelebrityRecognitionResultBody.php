<?php

namespace HuaweiCloud\SDK\Image\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CelebrityRecognitionResultBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CelebrityRecognitionResultBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * confidence  置信度，取值范围 0-1。
    * faceDetail  名人的面部信息，包括4个值：  h：人脸区域高度  w：人脸区域宽度  x：人脸区域左上角到y轴距离  y：人脸区域左上角到x轴距离
    * label  label为对应的名人信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'confidence' => 'float',
            'faceDetail' => 'object',
            'label' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * confidence  置信度，取值范围 0-1。
    * faceDetail  名人的面部信息，包括4个值：  h：人脸区域高度  w：人脸区域宽度  x：人脸区域左上角到y轴距离  y：人脸区域左上角到x轴距离
    * label  label为对应的名人信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'confidence' => 'float',
        'faceDetail' => null,
        'label' => null
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
    * confidence  置信度，取值范围 0-1。
    * faceDetail  名人的面部信息，包括4个值：  h：人脸区域高度  w：人脸区域宽度  x：人脸区域左上角到y轴距离  y：人脸区域左上角到x轴距离
    * label  label为对应的名人信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'confidence' => 'confidence',
            'faceDetail' => 'face_detail',
            'label' => 'label'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * confidence  置信度，取值范围 0-1。
    * faceDetail  名人的面部信息，包括4个值：  h：人脸区域高度  w：人脸区域宽度  x：人脸区域左上角到y轴距离  y：人脸区域左上角到x轴距离
    * label  label为对应的名人信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'confidence' => 'setConfidence',
            'faceDetail' => 'setFaceDetail',
            'label' => 'setLabel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * confidence  置信度，取值范围 0-1。
    * faceDetail  名人的面部信息，包括4个值：  h：人脸区域高度  w：人脸区域宽度  x：人脸区域左上角到y轴距离  y：人脸区域左上角到x轴距离
    * label  label为对应的名人信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'confidence' => 'getConfidence',
            'faceDetail' => 'getFaceDetail',
            'label' => 'getLabel'
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
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['faceDetail'] = isset($data['faceDetail']) ? $data['faceDetail'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
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
    * Gets confidence
    *  置信度，取值范围 0-1。
    *
    * @return float|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param float|null $confidence 置信度，取值范围 0-1。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets faceDetail
    *  名人的面部信息，包括4个值：  h：人脸区域高度  w：人脸区域宽度  x：人脸区域左上角到y轴距离  y：人脸区域左上角到x轴距离
    *
    * @return object|null
    */
    public function getFaceDetail()
    {
        return $this->container['faceDetail'];
    }

    /**
    * Sets faceDetail
    *
    * @param object|null $faceDetail 名人的面部信息，包括4个值：  h：人脸区域高度  w：人脸区域宽度  x：人脸区域左上角到y轴距离  y：人脸区域左上角到x轴距离
    *
    * @return $this
    */
    public function setFaceDetail($faceDetail)
    {
        $this->container['faceDetail'] = $faceDetail;
        return $this;
    }

    /**
    * Gets label
    *  label为对应的名人信息。
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label label为对应的名人信息。
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
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

