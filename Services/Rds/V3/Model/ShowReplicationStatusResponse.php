<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowReplicationStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowReplicationStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * replicationStatus  复制状态。
    * abnormalReason  复制异常原因。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'replicationStatus' => 'string',
            'abnormalReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * replicationStatus  复制状态。
    * abnormalReason  复制异常原因。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'replicationStatus' => null,
        'abnormalReason' => null
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
    * replicationStatus  复制状态。
    * abnormalReason  复制异常原因。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'replicationStatus' => 'replication_status',
            'abnormalReason' => 'abnormal_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * replicationStatus  复制状态。
    * abnormalReason  复制异常原因。
    *
    * @var string[]
    */
    protected static $setters = [
            'replicationStatus' => 'setReplicationStatus',
            'abnormalReason' => 'setAbnormalReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * replicationStatus  复制状态。
    * abnormalReason  复制异常原因。
    *
    * @var string[]
    */
    protected static $getters = [
            'replicationStatus' => 'getReplicationStatus',
            'abnormalReason' => 'getAbnormalReason'
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
        $this->container['replicationStatus'] = isset($data['replicationStatus']) ? $data['replicationStatus'] : null;
        $this->container['abnormalReason'] = isset($data['abnormalReason']) ? $data['abnormalReason'] : null;
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
    * Gets replicationStatus
    *  复制状态。
    *
    * @return string|null
    */
    public function getReplicationStatus()
    {
        return $this->container['replicationStatus'];
    }

    /**
    * Sets replicationStatus
    *
    * @param string|null $replicationStatus 复制状态。
    *
    * @return $this
    */
    public function setReplicationStatus($replicationStatus)
    {
        $this->container['replicationStatus'] = $replicationStatus;
        return $this;
    }

    /**
    * Gets abnormalReason
    *  复制异常原因。
    *
    * @return string|null
    */
    public function getAbnormalReason()
    {
        return $this->container['abnormalReason'];
    }

    /**
    * Sets abnormalReason
    *
    * @param string|null $abnormalReason 复制异常原因。
    *
    * @return $this
    */
    public function setAbnormalReason($abnormalReason)
    {
        $this->container['abnormalReason'] = $abnormalReason;
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

