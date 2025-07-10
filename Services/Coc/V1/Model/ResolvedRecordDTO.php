<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResolvedRecordDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResolvedRecordDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resolvedTime  清除汇聚告警的时间
    * createName  执行人
    * remarks  清除时填写的备注
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resolvedTime' => 'int',
            'createName' => 'string',
            'remarks' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resolvedTime  清除汇聚告警的时间
    * createName  执行人
    * remarks  清除时填写的备注
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resolvedTime' => 'int64',
        'createName' => null,
        'remarks' => null
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
    * resolvedTime  清除汇聚告警的时间
    * createName  执行人
    * remarks  清除时填写的备注
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resolvedTime' => 'resolved_time',
            'createName' => 'create_name',
            'remarks' => 'remarks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resolvedTime  清除汇聚告警的时间
    * createName  执行人
    * remarks  清除时填写的备注
    *
    * @var string[]
    */
    protected static $setters = [
            'resolvedTime' => 'setResolvedTime',
            'createName' => 'setCreateName',
            'remarks' => 'setRemarks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resolvedTime  清除汇聚告警的时间
    * createName  执行人
    * remarks  清除时填写的备注
    *
    * @var string[]
    */
    protected static $getters = [
            'resolvedTime' => 'getResolvedTime',
            'createName' => 'getCreateName',
            'remarks' => 'getRemarks'
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
        $this->container['resolvedTime'] = isset($data['resolvedTime']) ? $data['resolvedTime'] : null;
        $this->container['createName'] = isset($data['createName']) ? $data['createName'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
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
    * Gets resolvedTime
    *  清除汇聚告警的时间
    *
    * @return int|null
    */
    public function getResolvedTime()
    {
        return $this->container['resolvedTime'];
    }

    /**
    * Sets resolvedTime
    *
    * @param int|null $resolvedTime 清除汇聚告警的时间
    *
    * @return $this
    */
    public function setResolvedTime($resolvedTime)
    {
        $this->container['resolvedTime'] = $resolvedTime;
        return $this;
    }

    /**
    * Gets createName
    *  执行人
    *
    * @return string|null
    */
    public function getCreateName()
    {
        return $this->container['createName'];
    }

    /**
    * Sets createName
    *
    * @param string|null $createName 执行人
    *
    * @return $this
    */
    public function setCreateName($createName)
    {
        $this->container['createName'] = $createName;
        return $this;
    }

    /**
    * Gets remarks
    *  清除时填写的备注
    *
    * @return string|null
    */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
    * Sets remarks
    *
    * @param string|null $remarks 清除时填写的备注
    *
    * @return $this
    */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;
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

