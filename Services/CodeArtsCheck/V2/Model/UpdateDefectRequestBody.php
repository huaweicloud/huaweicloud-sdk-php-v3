<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDefectRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDefectRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * defectId  问题id,多个时英文逗号分隔
    * defectStatus  状态2：已忽略 1：已解决 0：未解决
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'defectId' => 'string',
            'defectStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * defectId  问题id,多个时英文逗号分隔
    * defectStatus  状态2：已忽略 1：已解决 0：未解决
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'defectId' => null,
        'defectStatus' => null
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
    * defectId  问题id,多个时英文逗号分隔
    * defectStatus  状态2：已忽略 1：已解决 0：未解决
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'defectId' => 'defect_id',
            'defectStatus' => 'defect_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * defectId  问题id,多个时英文逗号分隔
    * defectStatus  状态2：已忽略 1：已解决 0：未解决
    *
    * @var string[]
    */
    protected static $setters = [
            'defectId' => 'setDefectId',
            'defectStatus' => 'setDefectStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * defectId  问题id,多个时英文逗号分隔
    * defectStatus  状态2：已忽略 1：已解决 0：未解决
    *
    * @var string[]
    */
    protected static $getters = [
            'defectId' => 'getDefectId',
            'defectStatus' => 'getDefectStatus'
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
        $this->container['defectId'] = isset($data['defectId']) ? $data['defectId'] : null;
        $this->container['defectStatus'] = isset($data['defectStatus']) ? $data['defectStatus'] : null;
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
    * Gets defectId
    *  问题id,多个时英文逗号分隔
    *
    * @return string|null
    */
    public function getDefectId()
    {
        return $this->container['defectId'];
    }

    /**
    * Sets defectId
    *
    * @param string|null $defectId 问题id,多个时英文逗号分隔
    *
    * @return $this
    */
    public function setDefectId($defectId)
    {
        $this->container['defectId'] = $defectId;
        return $this;
    }

    /**
    * Gets defectStatus
    *  状态2：已忽略 1：已解决 0：未解决
    *
    * @return string|null
    */
    public function getDefectStatus()
    {
        return $this->container['defectStatus'];
    }

    /**
    * Sets defectStatus
    *
    * @param string|null $defectStatus 状态2：已忽略 1：已解决 0：未解决
    *
    * @return $this
    */
    public function setDefectStatus($defectStatus)
    {
        $this->container['defectStatus'] = $defectStatus;
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

