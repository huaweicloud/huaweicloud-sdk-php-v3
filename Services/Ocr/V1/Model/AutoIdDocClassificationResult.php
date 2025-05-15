<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoIdDocClassificationResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoIdDocClassificationResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  证件的类型，支持的证件类型如表1所示：   **表1* 支持的证件类型 | 证件类型               | 类型描述                 | | ---------------------- | ------------------------ | | peru_id_card           | 秘鲁身份证               | | cambodian_id_card      | 柬文身份证               | | hongkong_id_card       | 香港身份证               | | macao_id_card          | 澳门身份证               | | myanmar_driver_license | 缅文驾驶证               | | myanmar_id_card        | 缅文身份证               | | passport               | 护照                     | | thailand_id_card       | 泰文身份证               | | id_card                | 中华人民共和国居民身份证 |
    * location  证件的位置。
    * confidence  证件位置的置信度。
    * alarmResult  alarmResult
    * alarmConfidence  alarmConfidence
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'location' => 'int[][]',
            'confidence' => 'float',
            'alarmResult' => '\HuaweiCloud\SDK\Ocr\V1\Model\AutoIdDocClassificationAlarmResult',
            'alarmConfidence' => '\HuaweiCloud\SDK\Ocr\V1\Model\AutoIdDocClassificationAlarmConfidence'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  证件的类型，支持的证件类型如表1所示：   **表1* 支持的证件类型 | 证件类型               | 类型描述                 | | ---------------------- | ------------------------ | | peru_id_card           | 秘鲁身份证               | | cambodian_id_card      | 柬文身份证               | | hongkong_id_card       | 香港身份证               | | macao_id_card          | 澳门身份证               | | myanmar_driver_license | 缅文驾驶证               | | myanmar_id_card        | 缅文身份证               | | passport               | 护照                     | | thailand_id_card       | 泰文身份证               | | id_card                | 中华人民共和国居民身份证 |
    * location  证件的位置。
    * confidence  证件位置的置信度。
    * alarmResult  alarmResult
    * alarmConfidence  alarmConfidence
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'location' => 'int32',
        'confidence' => 'float',
        'alarmResult' => null,
        'alarmConfidence' => null
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
    * type  证件的类型，支持的证件类型如表1所示：   **表1* 支持的证件类型 | 证件类型               | 类型描述                 | | ---------------------- | ------------------------ | | peru_id_card           | 秘鲁身份证               | | cambodian_id_card      | 柬文身份证               | | hongkong_id_card       | 香港身份证               | | macao_id_card          | 澳门身份证               | | myanmar_driver_license | 缅文驾驶证               | | myanmar_id_card        | 缅文身份证               | | passport               | 护照                     | | thailand_id_card       | 泰文身份证               | | id_card                | 中华人民共和国居民身份证 |
    * location  证件的位置。
    * confidence  证件位置的置信度。
    * alarmResult  alarmResult
    * alarmConfidence  alarmConfidence
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'location' => 'location',
            'confidence' => 'confidence',
            'alarmResult' => 'alarm_result',
            'alarmConfidence' => 'alarm_confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  证件的类型，支持的证件类型如表1所示：   **表1* 支持的证件类型 | 证件类型               | 类型描述                 | | ---------------------- | ------------------------ | | peru_id_card           | 秘鲁身份证               | | cambodian_id_card      | 柬文身份证               | | hongkong_id_card       | 香港身份证               | | macao_id_card          | 澳门身份证               | | myanmar_driver_license | 缅文驾驶证               | | myanmar_id_card        | 缅文身份证               | | passport               | 护照                     | | thailand_id_card       | 泰文身份证               | | id_card                | 中华人民共和国居民身份证 |
    * location  证件的位置。
    * confidence  证件位置的置信度。
    * alarmResult  alarmResult
    * alarmConfidence  alarmConfidence
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'location' => 'setLocation',
            'confidence' => 'setConfidence',
            'alarmResult' => 'setAlarmResult',
            'alarmConfidence' => 'setAlarmConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  证件的类型，支持的证件类型如表1所示：   **表1* 支持的证件类型 | 证件类型               | 类型描述                 | | ---------------------- | ------------------------ | | peru_id_card           | 秘鲁身份证               | | cambodian_id_card      | 柬文身份证               | | hongkong_id_card       | 香港身份证               | | macao_id_card          | 澳门身份证               | | myanmar_driver_license | 缅文驾驶证               | | myanmar_id_card        | 缅文身份证               | | passport               | 护照                     | | thailand_id_card       | 泰文身份证               | | id_card                | 中华人民共和国居民身份证 |
    * location  证件的位置。
    * confidence  证件位置的置信度。
    * alarmResult  alarmResult
    * alarmConfidence  alarmConfidence
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'location' => 'getLocation',
            'confidence' => 'getConfidence',
            'alarmResult' => 'getAlarmResult',
            'alarmConfidence' => 'getAlarmConfidence'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['alarmResult'] = isset($data['alarmResult']) ? $data['alarmResult'] : null;
        $this->container['alarmConfidence'] = isset($data['alarmConfidence']) ? $data['alarmConfidence'] : null;
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
    * Gets type
    *  证件的类型，支持的证件类型如表1所示：   **表1* 支持的证件类型 | 证件类型               | 类型描述                 | | ---------------------- | ------------------------ | | peru_id_card           | 秘鲁身份证               | | cambodian_id_card      | 柬文身份证               | | hongkong_id_card       | 香港身份证               | | macao_id_card          | 澳门身份证               | | myanmar_driver_license | 缅文驾驶证               | | myanmar_id_card        | 缅文身份证               | | passport               | 护照                     | | thailand_id_card       | 泰文身份证               | | id_card                | 中华人民共和国居民身份证 |
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 证件的类型，支持的证件类型如表1所示：   **表1* 支持的证件类型 | 证件类型               | 类型描述                 | | ---------------------- | ------------------------ | | peru_id_card           | 秘鲁身份证               | | cambodian_id_card      | 柬文身份证               | | hongkong_id_card       | 香港身份证               | | macao_id_card          | 澳门身份证               | | myanmar_driver_license | 缅文驾驶证               | | myanmar_id_card        | 缅文身份证               | | passport               | 护照                     | | thailand_id_card       | 泰文身份证               | | id_card                | 中华人民共和国居民身份证 |
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets location
    *  证件的位置。
    *
    * @return int[][]|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param int[][]|null $location 证件的位置。
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
    *  证件位置的置信度。
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
    * @param float|null $confidence 证件位置的置信度。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets alarmResult
    *  alarmResult
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\AutoIdDocClassificationAlarmResult|null
    */
    public function getAlarmResult()
    {
        return $this->container['alarmResult'];
    }

    /**
    * Sets alarmResult
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\AutoIdDocClassificationAlarmResult|null $alarmResult alarmResult
    *
    * @return $this
    */
    public function setAlarmResult($alarmResult)
    {
        $this->container['alarmResult'] = $alarmResult;
        return $this;
    }

    /**
    * Gets alarmConfidence
    *  alarmConfidence
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\AutoIdDocClassificationAlarmConfidence|null
    */
    public function getAlarmConfidence()
    {
        return $this->container['alarmConfidence'];
    }

    /**
    * Sets alarmConfidence
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\AutoIdDocClassificationAlarmConfidence|null $alarmConfidence alarmConfidence
    *
    * @return $this
    */
    public function setAlarmConfidence($alarmConfidence)
    {
        $this->container['alarmConfidence'] = $alarmConfidence;
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

