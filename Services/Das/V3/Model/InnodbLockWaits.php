<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InnodbLockWaits implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InnodbLockWaits';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestingTrxId  申请锁资源的事务ID
    * requestedLockId  申请的锁的ID
    * blockingTrxId  阻塞的事务ID
    * blockingLockId  阻塞的锁的ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestingTrxId' => 'string',
            'requestedLockId' => 'string',
            'blockingTrxId' => 'string',
            'blockingLockId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestingTrxId  申请锁资源的事务ID
    * requestedLockId  申请的锁的ID
    * blockingTrxId  阻塞的事务ID
    * blockingLockId  阻塞的锁的ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestingTrxId' => null,
        'requestedLockId' => null,
        'blockingTrxId' => null,
        'blockingLockId' => null
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
    * requestingTrxId  申请锁资源的事务ID
    * requestedLockId  申请的锁的ID
    * blockingTrxId  阻塞的事务ID
    * blockingLockId  阻塞的锁的ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestingTrxId' => 'requesting_trx_id',
            'requestedLockId' => 'requested_lock_id',
            'blockingTrxId' => 'blocking_trx_id',
            'blockingLockId' => 'blocking_lock_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestingTrxId  申请锁资源的事务ID
    * requestedLockId  申请的锁的ID
    * blockingTrxId  阻塞的事务ID
    * blockingLockId  阻塞的锁的ID
    *
    * @var string[]
    */
    protected static $setters = [
            'requestingTrxId' => 'setRequestingTrxId',
            'requestedLockId' => 'setRequestedLockId',
            'blockingTrxId' => 'setBlockingTrxId',
            'blockingLockId' => 'setBlockingLockId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestingTrxId  申请锁资源的事务ID
    * requestedLockId  申请的锁的ID
    * blockingTrxId  阻塞的事务ID
    * blockingLockId  阻塞的锁的ID
    *
    * @var string[]
    */
    protected static $getters = [
            'requestingTrxId' => 'getRequestingTrxId',
            'requestedLockId' => 'getRequestedLockId',
            'blockingTrxId' => 'getBlockingTrxId',
            'blockingLockId' => 'getBlockingLockId'
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
        $this->container['requestingTrxId'] = isset($data['requestingTrxId']) ? $data['requestingTrxId'] : null;
        $this->container['requestedLockId'] = isset($data['requestedLockId']) ? $data['requestedLockId'] : null;
        $this->container['blockingTrxId'] = isset($data['blockingTrxId']) ? $data['blockingTrxId'] : null;
        $this->container['blockingLockId'] = isset($data['blockingLockId']) ? $data['blockingLockId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['requestingTrxId'] === null) {
            $invalidProperties[] = "'requestingTrxId' can't be null";
        }
        if ($this->container['requestedLockId'] === null) {
            $invalidProperties[] = "'requestedLockId' can't be null";
        }
        if ($this->container['blockingTrxId'] === null) {
            $invalidProperties[] = "'blockingTrxId' can't be null";
        }
        if ($this->container['blockingLockId'] === null) {
            $invalidProperties[] = "'blockingLockId' can't be null";
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
    * Gets requestingTrxId
    *  申请锁资源的事务ID
    *
    * @return string
    */
    public function getRequestingTrxId()
    {
        return $this->container['requestingTrxId'];
    }

    /**
    * Sets requestingTrxId
    *
    * @param string $requestingTrxId 申请锁资源的事务ID
    *
    * @return $this
    */
    public function setRequestingTrxId($requestingTrxId)
    {
        $this->container['requestingTrxId'] = $requestingTrxId;
        return $this;
    }

    /**
    * Gets requestedLockId
    *  申请的锁的ID
    *
    * @return string
    */
    public function getRequestedLockId()
    {
        return $this->container['requestedLockId'];
    }

    /**
    * Sets requestedLockId
    *
    * @param string $requestedLockId 申请的锁的ID
    *
    * @return $this
    */
    public function setRequestedLockId($requestedLockId)
    {
        $this->container['requestedLockId'] = $requestedLockId;
        return $this;
    }

    /**
    * Gets blockingTrxId
    *  阻塞的事务ID
    *
    * @return string
    */
    public function getBlockingTrxId()
    {
        return $this->container['blockingTrxId'];
    }

    /**
    * Sets blockingTrxId
    *
    * @param string $blockingTrxId 阻塞的事务ID
    *
    * @return $this
    */
    public function setBlockingTrxId($blockingTrxId)
    {
        $this->container['blockingTrxId'] = $blockingTrxId;
        return $this;
    }

    /**
    * Gets blockingLockId
    *  阻塞的锁的ID
    *
    * @return string
    */
    public function getBlockingLockId()
    {
        return $this->container['blockingLockId'];
    }

    /**
    * Sets blockingLockId
    *
    * @param string $blockingLockId 阻塞的锁的ID
    *
    * @return $this
    */
    public function setBlockingLockId($blockingLockId)
    {
        $this->container['blockingLockId'] = $blockingLockId;
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

