<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceDrRelation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'instance_dr_relation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  当前区域实例ID。
    * masterInstance  masterInstance
    * slaveInstances  容灾实例信息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'masterInstance' => '\HuaweiCloud\SDK\Rds\V3\Model\MasterInstance',
            'slaveInstances' => '\HuaweiCloud\SDK\Rds\V3\Model\SlaveInstance[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  当前区域实例ID。
    * masterInstance  masterInstance
    * slaveInstances  容灾实例信息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'masterInstance' => null,
        'slaveInstances' => null
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
    * instanceId  当前区域实例ID。
    * masterInstance  masterInstance
    * slaveInstances  容灾实例信息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'masterInstance' => 'master_instance',
            'slaveInstances' => 'slave_instances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  当前区域实例ID。
    * masterInstance  masterInstance
    * slaveInstances  容灾实例信息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'masterInstance' => 'setMasterInstance',
            'slaveInstances' => 'setSlaveInstances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  当前区域实例ID。
    * masterInstance  masterInstance
    * slaveInstances  容灾实例信息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'masterInstance' => 'getMasterInstance',
            'slaveInstances' => 'getSlaveInstances'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['masterInstance'] = isset($data['masterInstance']) ? $data['masterInstance'] : null;
        $this->container['slaveInstances'] = isset($data['slaveInstances']) ? $data['slaveInstances'] : null;
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
    * Gets instanceId
    *  当前区域实例ID。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 当前区域实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets masterInstance
    *  masterInstance
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\MasterInstance|null
    */
    public function getMasterInstance()
    {
        return $this->container['masterInstance'];
    }

    /**
    * Sets masterInstance
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\MasterInstance|null $masterInstance masterInstance
    *
    * @return $this
    */
    public function setMasterInstance($masterInstance)
    {
        $this->container['masterInstance'] = $masterInstance;
        return $this;
    }

    /**
    * Gets slaveInstances
    *  容灾实例信息列表。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SlaveInstance[]|null
    */
    public function getSlaveInstances()
    {
        return $this->container['slaveInstances'];
    }

    /**
    * Sets slaveInstances
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SlaveInstance[]|null $slaveInstances 容灾实例信息列表。
    *
    * @return $this
    */
    public function setSlaveInstances($slaveInstances)
    {
        $this->container['slaveInstances'] = $slaveInstances;
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

