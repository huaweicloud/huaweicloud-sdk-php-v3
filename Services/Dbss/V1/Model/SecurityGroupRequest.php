<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityGroupRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityGroupRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID。可在查询实例列表接口的ID字段获取。
    * securitygroupIds  安全组ID列表(目前只支持传一个ID)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'securitygroupIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID。可在查询实例列表接口的ID字段获取。
    * securitygroupIds  安全组ID列表(目前只支持传一个ID)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'securitygroupIds' => null
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
    * instanceId  实例ID。可在查询实例列表接口的ID字段获取。
    * securitygroupIds  安全组ID列表(目前只支持传一个ID)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'securitygroupIds' => 'securitygroup_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID。可在查询实例列表接口的ID字段获取。
    * securitygroupIds  安全组ID列表(目前只支持传一个ID)
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'securitygroupIds' => 'setSecuritygroupIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID。可在查询实例列表接口的ID字段获取。
    * securitygroupIds  安全组ID列表(目前只支持传一个ID)
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'securitygroupIds' => 'getSecuritygroupIds'
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
        $this->container['securitygroupIds'] = isset($data['securitygroupIds']) ? $data['securitygroupIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['securitygroupIds'] === null) {
            $invalidProperties[] = "'securitygroupIds' can't be null";
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
    * Gets instanceId
    *  实例ID。可在查询实例列表接口的ID字段获取。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID。可在查询实例列表接口的ID字段获取。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets securitygroupIds
    *  安全组ID列表(目前只支持传一个ID)
    *
    * @return string[]
    */
    public function getSecuritygroupIds()
    {
        return $this->container['securitygroupIds'];
    }

    /**
    * Sets securitygroupIds
    *
    * @param string[] $securitygroupIds 安全组ID列表(目前只支持传一个ID)
    *
    * @return $this
    */
    public function setSecuritygroupIds($securitygroupIds)
    {
        $this->container['securitygroupIds'] = $securitygroupIds;
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

