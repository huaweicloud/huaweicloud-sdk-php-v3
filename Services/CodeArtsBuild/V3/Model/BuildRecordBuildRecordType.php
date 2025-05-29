<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BuildRecordBuildRecordType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BuildRecord_build_record_type';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rerun  是否rerun
    * triggerType  触发类型
    * recordType  记录类型
    * isRerun  是否返回
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rerun' => 'bool',
            'triggerType' => 'string',
            'recordType' => 'string',
            'isRerun' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rerun  是否rerun
    * triggerType  触发类型
    * recordType  记录类型
    * isRerun  是否返回
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rerun' => null,
        'triggerType' => null,
        'recordType' => null,
        'isRerun' => null
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
    * rerun  是否rerun
    * triggerType  触发类型
    * recordType  记录类型
    * isRerun  是否返回
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rerun' => 'rerun',
            'triggerType' => 'trigger_type',
            'recordType' => 'record_type',
            'isRerun' => 'is_rerun'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rerun  是否rerun
    * triggerType  触发类型
    * recordType  记录类型
    * isRerun  是否返回
    *
    * @var string[]
    */
    protected static $setters = [
            'rerun' => 'setRerun',
            'triggerType' => 'setTriggerType',
            'recordType' => 'setRecordType',
            'isRerun' => 'setIsRerun'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rerun  是否rerun
    * triggerType  触发类型
    * recordType  记录类型
    * isRerun  是否返回
    *
    * @var string[]
    */
    protected static $getters = [
            'rerun' => 'getRerun',
            'triggerType' => 'getTriggerType',
            'recordType' => 'getRecordType',
            'isRerun' => 'getIsRerun'
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
        $this->container['rerun'] = isset($data['rerun']) ? $data['rerun'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['recordType'] = isset($data['recordType']) ? $data['recordType'] : null;
        $this->container['isRerun'] = isset($data['isRerun']) ? $data['isRerun'] : null;
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
    * Gets rerun
    *  是否rerun
    *
    * @return bool|null
    */
    public function getRerun()
    {
        return $this->container['rerun'];
    }

    /**
    * Sets rerun
    *
    * @param bool|null $rerun 是否rerun
    *
    * @return $this
    */
    public function setRerun($rerun)
    {
        $this->container['rerun'] = $rerun;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发类型
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType 触发类型
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets recordType
    *  记录类型
    *
    * @return string|null
    */
    public function getRecordType()
    {
        return $this->container['recordType'];
    }

    /**
    * Sets recordType
    *
    * @param string|null $recordType 记录类型
    *
    * @return $this
    */
    public function setRecordType($recordType)
    {
        $this->container['recordType'] = $recordType;
        return $this;
    }

    /**
    * Gets isRerun
    *  是否返回
    *
    * @return bool|null
    */
    public function getIsRerun()
    {
        return $this->container['isRerun'];
    }

    /**
    * Sets isRerun
    *
    * @param bool|null $isRerun 是否返回
    *
    * @return $this
    */
    public function setIsRerun($isRerun)
    {
        $this->container['isRerun'] = $isRerun;
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

