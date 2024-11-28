<?php

namespace HuaweiCloud\SDK\Image\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageMainObjectDetectionInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageMainObjectDetectionInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * label  主体的类别，现阶段分为：bounding_box和main_object_box
    * location  目标检测框位置信息，包括4个值：  width：检测框区域宽度  height：检测框区域高度  top_left_x：检测框左上角到垂直轴距离  top_left_y：检测框左上角到水平轴距离 properties: width: type: string description: 检测框区域高度 example: 139.58 height: type: string description: 检测框区域高度 example: 261.32 top_left_x: type: string description: 检测框左上角到垂直轴距离 example: 256.13 top_left_y: type: string description: 检测框左上角到水平轴距离 example: 85.2
    * confidence  主体框的置信度,将Float型置信度转为String类型返回,Float取值范围（0~100）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'label' => 'string',
            'location' => 'object',
            'confidence' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * label  主体的类别，现阶段分为：bounding_box和main_object_box
    * location  目标检测框位置信息，包括4个值：  width：检测框区域宽度  height：检测框区域高度  top_left_x：检测框左上角到垂直轴距离  top_left_y：检测框左上角到水平轴距离 properties: width: type: string description: 检测框区域高度 example: 139.58 height: type: string description: 检测框区域高度 example: 261.32 top_left_x: type: string description: 检测框左上角到垂直轴距离 example: 256.13 top_left_y: type: string description: 检测框左上角到水平轴距离 example: 85.2
    * confidence  主体框的置信度,将Float型置信度转为String类型返回,Float取值范围（0~100）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'label' => null,
        'location' => null,
        'confidence' => null
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
    * label  主体的类别，现阶段分为：bounding_box和main_object_box
    * location  目标检测框位置信息，包括4个值：  width：检测框区域宽度  height：检测框区域高度  top_left_x：检测框左上角到垂直轴距离  top_left_y：检测框左上角到水平轴距离 properties: width: type: string description: 检测框区域高度 example: 139.58 height: type: string description: 检测框区域高度 example: 261.32 top_left_x: type: string description: 检测框左上角到垂直轴距离 example: 256.13 top_left_y: type: string description: 检测框左上角到水平轴距离 example: 85.2
    * confidence  主体框的置信度,将Float型置信度转为String类型返回,Float取值范围（0~100）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'label' => 'label',
            'location' => 'location',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * label  主体的类别，现阶段分为：bounding_box和main_object_box
    * location  目标检测框位置信息，包括4个值：  width：检测框区域宽度  height：检测框区域高度  top_left_x：检测框左上角到垂直轴距离  top_left_y：检测框左上角到水平轴距离 properties: width: type: string description: 检测框区域高度 example: 139.58 height: type: string description: 检测框区域高度 example: 261.32 top_left_x: type: string description: 检测框左上角到垂直轴距离 example: 256.13 top_left_y: type: string description: 检测框左上角到水平轴距离 example: 85.2
    * confidence  主体框的置信度,将Float型置信度转为String类型返回,Float取值范围（0~100）。
    *
    * @var string[]
    */
    protected static $setters = [
            'label' => 'setLabel',
            'location' => 'setLocation',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * label  主体的类别，现阶段分为：bounding_box和main_object_box
    * location  目标检测框位置信息，包括4个值：  width：检测框区域宽度  height：检测框区域高度  top_left_x：检测框左上角到垂直轴距离  top_left_y：检测框左上角到水平轴距离 properties: width: type: string description: 检测框区域高度 example: 139.58 height: type: string description: 检测框区域高度 example: 261.32 top_left_x: type: string description: 检测框左上角到垂直轴距离 example: 256.13 top_left_y: type: string description: 检测框左上角到水平轴距离 example: 85.2
    * confidence  主体框的置信度,将Float型置信度转为String类型返回,Float取值范围（0~100）。
    *
    * @var string[]
    */
    protected static $getters = [
            'label' => 'getLabel',
            'location' => 'getLocation',
            'confidence' => 'getConfidence'
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
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
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
    * Gets label
    *  主体的类别，现阶段分为：bounding_box和main_object_box
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
    * @param string|null $label 主体的类别，现阶段分为：bounding_box和main_object_box
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets location
    *  目标检测框位置信息，包括4个值：  width：检测框区域宽度  height：检测框区域高度  top_left_x：检测框左上角到垂直轴距离  top_left_y：检测框左上角到水平轴距离 properties: width: type: string description: 检测框区域高度 example: 139.58 height: type: string description: 检测框区域高度 example: 261.32 top_left_x: type: string description: 检测框左上角到垂直轴距离 example: 256.13 top_left_y: type: string description: 检测框左上角到水平轴距离 example: 85.2
    *
    * @return object|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param object|null $location 目标检测框位置信息，包括4个值：  width：检测框区域宽度  height：检测框区域高度  top_left_x：检测框左上角到垂直轴距离  top_left_y：检测框左上角到水平轴距离 properties: width: type: string description: 检测框区域高度 example: 139.58 height: type: string description: 检测框区域高度 example: 261.32 top_left_x: type: string description: 检测框左上角到垂直轴距离 example: 256.13 top_left_y: type: string description: 检测框左上角到水平轴距离 example: 85.2
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets confidence
    *  主体框的置信度,将Float型置信度转为String类型返回,Float取值范围（0~100）。
    *
    * @return string|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param string|null $confidence 主体框的置信度,将Float型置信度转为String类型返回,Float取值范围（0~100）。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
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

