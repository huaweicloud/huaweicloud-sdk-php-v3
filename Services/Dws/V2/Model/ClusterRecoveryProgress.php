<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterRecoveryProgress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterRecoveryProgress';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  key
    * actionType  action_type
    * unrestoreKeys  unrestore_keys
    * actionStartTime  action_start_time
    * actionEndTime  action_end_time
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'actionType' => 'string',
            'unrestoreKeys' => 'string',
            'actionStartTime' => 'string',
            'actionEndTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  key
    * actionType  action_type
    * unrestoreKeys  unrestore_keys
    * actionStartTime  action_start_time
    * actionEndTime  action_end_time
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'actionType' => null,
        'unrestoreKeys' => null,
        'actionStartTime' => null,
        'actionEndTime' => null
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
    * key  key
    * actionType  action_type
    * unrestoreKeys  unrestore_keys
    * actionStartTime  action_start_time
    * actionEndTime  action_end_time
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'actionType' => 'action_type',
            'unrestoreKeys' => 'unrestore_keys',
            'actionStartTime' => 'action_start_time',
            'actionEndTime' => 'action_end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  key
    * actionType  action_type
    * unrestoreKeys  unrestore_keys
    * actionStartTime  action_start_time
    * actionEndTime  action_end_time
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'actionType' => 'setActionType',
            'unrestoreKeys' => 'setUnrestoreKeys',
            'actionStartTime' => 'setActionStartTime',
            'actionEndTime' => 'setActionEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  key
    * actionType  action_type
    * unrestoreKeys  unrestore_keys
    * actionStartTime  action_start_time
    * actionEndTime  action_end_time
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'actionType' => 'getActionType',
            'unrestoreKeys' => 'getUnrestoreKeys',
            'actionStartTime' => 'getActionStartTime',
            'actionEndTime' => 'getActionEndTime'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
        $this->container['unrestoreKeys'] = isset($data['unrestoreKeys']) ? $data['unrestoreKeys'] : null;
        $this->container['actionStartTime'] = isset($data['actionStartTime']) ? $data['actionStartTime'] : null;
        $this->container['actionEndTime'] = isset($data['actionEndTime']) ? $data['actionEndTime'] : null;
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
    * Gets key
    *  key
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key key
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets actionType
    *  action_type
    *
    * @return string|null
    */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
    * Sets actionType
    *
    * @param string|null $actionType action_type
    *
    * @return $this
    */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;
        return $this;
    }

    /**
    * Gets unrestoreKeys
    *  unrestore_keys
    *
    * @return string|null
    */
    public function getUnrestoreKeys()
    {
        return $this->container['unrestoreKeys'];
    }

    /**
    * Sets unrestoreKeys
    *
    * @param string|null $unrestoreKeys unrestore_keys
    *
    * @return $this
    */
    public function setUnrestoreKeys($unrestoreKeys)
    {
        $this->container['unrestoreKeys'] = $unrestoreKeys;
        return $this;
    }

    /**
    * Gets actionStartTime
    *  action_start_time
    *
    * @return string|null
    */
    public function getActionStartTime()
    {
        return $this->container['actionStartTime'];
    }

    /**
    * Sets actionStartTime
    *
    * @param string|null $actionStartTime action_start_time
    *
    * @return $this
    */
    public function setActionStartTime($actionStartTime)
    {
        $this->container['actionStartTime'] = $actionStartTime;
        return $this;
    }

    /**
    * Gets actionEndTime
    *  action_end_time
    *
    * @return string|null
    */
    public function getActionEndTime()
    {
        return $this->container['actionEndTime'];
    }

    /**
    * Sets actionEndTime
    *
    * @param string|null $actionEndTime action_end_time
    *
    * @return $this
    */
    public function setActionEndTime($actionEndTime)
    {
        $this->container['actionEndTime'] = $actionEndTime;
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

