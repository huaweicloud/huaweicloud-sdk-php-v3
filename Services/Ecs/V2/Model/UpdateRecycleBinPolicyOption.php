<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRecycleBinPolicyOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRecycleBinPolicyOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * retentionHour  虚拟机进入回收站后多久删除
    * recycleThresholdDay  创建多久的虚拟机可以进入回收站
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'retentionHour' => 'int',
            'recycleThresholdDay' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * retentionHour  虚拟机进入回收站后多久删除
    * recycleThresholdDay  创建多久的虚拟机可以进入回收站
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'retentionHour' => 'int32',
        'recycleThresholdDay' => 'int32'
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
    * retentionHour  虚拟机进入回收站后多久删除
    * recycleThresholdDay  创建多久的虚拟机可以进入回收站
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'retentionHour' => 'retention_hour',
            'recycleThresholdDay' => 'recycle_threshold_day'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * retentionHour  虚拟机进入回收站后多久删除
    * recycleThresholdDay  创建多久的虚拟机可以进入回收站
    *
    * @var string[]
    */
    protected static $setters = [
            'retentionHour' => 'setRetentionHour',
            'recycleThresholdDay' => 'setRecycleThresholdDay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * retentionHour  虚拟机进入回收站后多久删除
    * recycleThresholdDay  创建多久的虚拟机可以进入回收站
    *
    * @var string[]
    */
    protected static $getters = [
            'retentionHour' => 'getRetentionHour',
            'recycleThresholdDay' => 'getRecycleThresholdDay'
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
        $this->container['retentionHour'] = isset($data['retentionHour']) ? $data['retentionHour'] : null;
        $this->container['recycleThresholdDay'] = isset($data['recycleThresholdDay']) ? $data['recycleThresholdDay'] : null;
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
    * Gets retentionHour
    *  虚拟机进入回收站后多久删除
    *
    * @return int|null
    */
    public function getRetentionHour()
    {
        return $this->container['retentionHour'];
    }

    /**
    * Sets retentionHour
    *
    * @param int|null $retentionHour 虚拟机进入回收站后多久删除
    *
    * @return $this
    */
    public function setRetentionHour($retentionHour)
    {
        $this->container['retentionHour'] = $retentionHour;
        return $this;
    }

    /**
    * Gets recycleThresholdDay
    *  创建多久的虚拟机可以进入回收站
    *
    * @return int|null
    */
    public function getRecycleThresholdDay()
    {
        return $this->container['recycleThresholdDay'];
    }

    /**
    * Sets recycleThresholdDay
    *
    * @param int|null $recycleThresholdDay 创建多久的虚拟机可以进入回收站
    *
    * @return $this
    */
    public function setRecycleThresholdDay($recycleThresholdDay)
    {
        $this->container['recycleThresholdDay'] = $recycleThresholdDay;
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

