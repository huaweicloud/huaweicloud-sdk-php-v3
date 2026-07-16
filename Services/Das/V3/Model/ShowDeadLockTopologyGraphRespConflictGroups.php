<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDeadLockTopologyGraphRespConflictGroups implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDeadLockTopologyGraphResp_conflict_groups';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  冲突组唯一标识
    * waitingLockId  等待锁节点唯一标识
    * grantedLockId  持有锁节点唯一标识
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'waitingLockId' => 'string',
            'grantedLockId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  冲突组唯一标识
    * waitingLockId  等待锁节点唯一标识
    * grantedLockId  持有锁节点唯一标识
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'waitingLockId' => null,
        'grantedLockId' => null
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
    * groupId  冲突组唯一标识
    * waitingLockId  等待锁节点唯一标识
    * grantedLockId  持有锁节点唯一标识
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'waitingLockId' => 'waiting_lock_id',
            'grantedLockId' => 'granted_lock_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  冲突组唯一标识
    * waitingLockId  等待锁节点唯一标识
    * grantedLockId  持有锁节点唯一标识
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'waitingLockId' => 'setWaitingLockId',
            'grantedLockId' => 'setGrantedLockId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  冲突组唯一标识
    * waitingLockId  等待锁节点唯一标识
    * grantedLockId  持有锁节点唯一标识
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'waitingLockId' => 'getWaitingLockId',
            'grantedLockId' => 'getGrantedLockId'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['waitingLockId'] = isset($data['waitingLockId']) ? $data['waitingLockId'] : null;
        $this->container['grantedLockId'] = isset($data['grantedLockId']) ? $data['grantedLockId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
        if ($this->container['waitingLockId'] === null) {
            $invalidProperties[] = "'waitingLockId' can't be null";
        }
        if ($this->container['grantedLockId'] === null) {
            $invalidProperties[] = "'grantedLockId' can't be null";
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
    * Gets groupId
    *  冲突组唯一标识
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId 冲突组唯一标识
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets waitingLockId
    *  等待锁节点唯一标识
    *
    * @return string
    */
    public function getWaitingLockId()
    {
        return $this->container['waitingLockId'];
    }

    /**
    * Sets waitingLockId
    *
    * @param string $waitingLockId 等待锁节点唯一标识
    *
    * @return $this
    */
    public function setWaitingLockId($waitingLockId)
    {
        $this->container['waitingLockId'] = $waitingLockId;
        return $this;
    }

    /**
    * Gets grantedLockId
    *  持有锁节点唯一标识
    *
    * @return string
    */
    public function getGrantedLockId()
    {
        return $this->container['grantedLockId'];
    }

    /**
    * Sets grantedLockId
    *
    * @param string $grantedLockId 持有锁节点唯一标识
    *
    * @return $this
    */
    public function setGrantedLockId($grantedLockId)
    {
        $this->container['grantedLockId'] = $grantedLockId;
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

