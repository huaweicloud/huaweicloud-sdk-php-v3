<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteDisasterRecoveryRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteDisasterRecoveryRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetInstanceId  解除目标的实例id
    * targetProjectId  解除目标的project id
    * targetRegion  解除目标的region
    * targetIp  解除目标的数据浮动ip
    * isMaster  当前操作对象是否是主实例
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetInstanceId' => 'string',
            'targetProjectId' => 'string',
            'targetRegion' => 'string',
            'targetIp' => 'string',
            'isMaster' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetInstanceId  解除目标的实例id
    * targetProjectId  解除目标的project id
    * targetRegion  解除目标的region
    * targetIp  解除目标的数据浮动ip
    * isMaster  当前操作对象是否是主实例
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetInstanceId' => null,
        'targetProjectId' => null,
        'targetRegion' => null,
        'targetIp' => null,
        'isMaster' => null
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
    * targetInstanceId  解除目标的实例id
    * targetProjectId  解除目标的project id
    * targetRegion  解除目标的region
    * targetIp  解除目标的数据浮动ip
    * isMaster  当前操作对象是否是主实例
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetInstanceId' => 'target_instance_id',
            'targetProjectId' => 'target_project_id',
            'targetRegion' => 'target_region',
            'targetIp' => 'target_ip',
            'isMaster' => 'is_master'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetInstanceId  解除目标的实例id
    * targetProjectId  解除目标的project id
    * targetRegion  解除目标的region
    * targetIp  解除目标的数据浮动ip
    * isMaster  当前操作对象是否是主实例
    *
    * @var string[]
    */
    protected static $setters = [
            'targetInstanceId' => 'setTargetInstanceId',
            'targetProjectId' => 'setTargetProjectId',
            'targetRegion' => 'setTargetRegion',
            'targetIp' => 'setTargetIp',
            'isMaster' => 'setIsMaster'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetInstanceId  解除目标的实例id
    * targetProjectId  解除目标的project id
    * targetRegion  解除目标的region
    * targetIp  解除目标的数据浮动ip
    * isMaster  当前操作对象是否是主实例
    *
    * @var string[]
    */
    protected static $getters = [
            'targetInstanceId' => 'getTargetInstanceId',
            'targetProjectId' => 'getTargetProjectId',
            'targetRegion' => 'getTargetRegion',
            'targetIp' => 'getTargetIp',
            'isMaster' => 'getIsMaster'
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
        $this->container['targetInstanceId'] = isset($data['targetInstanceId']) ? $data['targetInstanceId'] : null;
        $this->container['targetProjectId'] = isset($data['targetProjectId']) ? $data['targetProjectId'] : null;
        $this->container['targetRegion'] = isset($data['targetRegion']) ? $data['targetRegion'] : null;
        $this->container['targetIp'] = isset($data['targetIp']) ? $data['targetIp'] : null;
        $this->container['isMaster'] = isset($data['isMaster']) ? $data['isMaster'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetInstanceId'] === null) {
            $invalidProperties[] = "'targetInstanceId' can't be null";
        }
        if ($this->container['targetProjectId'] === null) {
            $invalidProperties[] = "'targetProjectId' can't be null";
        }
        if ($this->container['targetRegion'] === null) {
            $invalidProperties[] = "'targetRegion' can't be null";
        }
        if ($this->container['targetIp'] === null) {
            $invalidProperties[] = "'targetIp' can't be null";
        }
        if ($this->container['isMaster'] === null) {
            $invalidProperties[] = "'isMaster' can't be null";
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
    * Gets targetInstanceId
    *  解除目标的实例id
    *
    * @return string
    */
    public function getTargetInstanceId()
    {
        return $this->container['targetInstanceId'];
    }

    /**
    * Sets targetInstanceId
    *
    * @param string $targetInstanceId 解除目标的实例id
    *
    * @return $this
    */
    public function setTargetInstanceId($targetInstanceId)
    {
        $this->container['targetInstanceId'] = $targetInstanceId;
        return $this;
    }

    /**
    * Gets targetProjectId
    *  解除目标的project id
    *
    * @return string
    */
    public function getTargetProjectId()
    {
        return $this->container['targetProjectId'];
    }

    /**
    * Sets targetProjectId
    *
    * @param string $targetProjectId 解除目标的project id
    *
    * @return $this
    */
    public function setTargetProjectId($targetProjectId)
    {
        $this->container['targetProjectId'] = $targetProjectId;
        return $this;
    }

    /**
    * Gets targetRegion
    *  解除目标的region
    *
    * @return string
    */
    public function getTargetRegion()
    {
        return $this->container['targetRegion'];
    }

    /**
    * Sets targetRegion
    *
    * @param string $targetRegion 解除目标的region
    *
    * @return $this
    */
    public function setTargetRegion($targetRegion)
    {
        $this->container['targetRegion'] = $targetRegion;
        return $this;
    }

    /**
    * Gets targetIp
    *  解除目标的数据浮动ip
    *
    * @return string
    */
    public function getTargetIp()
    {
        return $this->container['targetIp'];
    }

    /**
    * Sets targetIp
    *
    * @param string $targetIp 解除目标的数据浮动ip
    *
    * @return $this
    */
    public function setTargetIp($targetIp)
    {
        $this->container['targetIp'] = $targetIp;
        return $this;
    }

    /**
    * Gets isMaster
    *  当前操作对象是否是主实例
    *
    * @return bool
    */
    public function getIsMaster()
    {
        return $this->container['isMaster'];
    }

    /**
    * Sets isMaster
    *
    * @param bool $isMaster 当前操作对象是否是主实例
    *
    * @return $this
    */
    public function setIsMaster($isMaster)
    {
        $this->container['isMaster'] = $isMaster;
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

