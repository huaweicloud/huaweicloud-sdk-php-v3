<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOverviewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOverviewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * waiting  等待中
    * replicating  复制中
    * syncing  同步中
    * other  其它
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'waiting' => 'int',
            'replicating' => 'int',
            'syncing' => 'int',
            'other' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * waiting  等待中
    * replicating  复制中
    * syncing  同步中
    * other  其它
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'waiting' => 'int32',
        'replicating' => 'int32',
        'syncing' => 'int32',
        'other' => 'int32'
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
    * waiting  等待中
    * replicating  复制中
    * syncing  同步中
    * other  其它
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'waiting' => 'waiting',
            'replicating' => 'replicating',
            'syncing' => 'syncing',
            'other' => 'other'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * waiting  等待中
    * replicating  复制中
    * syncing  同步中
    * other  其它
    *
    * @var string[]
    */
    protected static $setters = [
            'waiting' => 'setWaiting',
            'replicating' => 'setReplicating',
            'syncing' => 'setSyncing',
            'other' => 'setOther'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * waiting  等待中
    * replicating  复制中
    * syncing  同步中
    * other  其它
    *
    * @var string[]
    */
    protected static $getters = [
            'waiting' => 'getWaiting',
            'replicating' => 'getReplicating',
            'syncing' => 'getSyncing',
            'other' => 'getOther'
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
        $this->container['waiting'] = isset($data['waiting']) ? $data['waiting'] : null;
        $this->container['replicating'] = isset($data['replicating']) ? $data['replicating'] : null;
        $this->container['syncing'] = isset($data['syncing']) ? $data['syncing'] : null;
        $this->container['other'] = isset($data['other']) ? $data['other'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['waiting']) && ($this->container['waiting'] > 1000)) {
                $invalidProperties[] = "invalid value for 'waiting', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['waiting']) && ($this->container['waiting'] < 0)) {
                $invalidProperties[] = "invalid value for 'waiting', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['replicating']) && ($this->container['replicating'] > 1000)) {
                $invalidProperties[] = "invalid value for 'replicating', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['replicating']) && ($this->container['replicating'] < 0)) {
                $invalidProperties[] = "invalid value for 'replicating', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['syncing']) && ($this->container['syncing'] > 1000)) {
                $invalidProperties[] = "invalid value for 'syncing', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['syncing']) && ($this->container['syncing'] < 0)) {
                $invalidProperties[] = "invalid value for 'syncing', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['other']) && ($this->container['other'] > 1000)) {
                $invalidProperties[] = "invalid value for 'other', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['other']) && ($this->container['other'] < 0)) {
                $invalidProperties[] = "invalid value for 'other', must be bigger than or equal to 0.";
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
    * Gets waiting
    *  等待中
    *
    * @return int|null
    */
    public function getWaiting()
    {
        return $this->container['waiting'];
    }

    /**
    * Sets waiting
    *
    * @param int|null $waiting 等待中
    *
    * @return $this
    */
    public function setWaiting($waiting)
    {
        $this->container['waiting'] = $waiting;
        return $this;
    }

    /**
    * Gets replicating
    *  复制中
    *
    * @return int|null
    */
    public function getReplicating()
    {
        return $this->container['replicating'];
    }

    /**
    * Sets replicating
    *
    * @param int|null $replicating 复制中
    *
    * @return $this
    */
    public function setReplicating($replicating)
    {
        $this->container['replicating'] = $replicating;
        return $this;
    }

    /**
    * Gets syncing
    *  同步中
    *
    * @return int|null
    */
    public function getSyncing()
    {
        return $this->container['syncing'];
    }

    /**
    * Sets syncing
    *
    * @param int|null $syncing 同步中
    *
    * @return $this
    */
    public function setSyncing($syncing)
    {
        $this->container['syncing'] = $syncing;
        return $this;
    }

    /**
    * Gets other
    *  其它
    *
    * @return int|null
    */
    public function getOther()
    {
        return $this->container['other'];
    }

    /**
    * Sets other
    *
    * @param int|null $other 其它
    *
    * @return $this
    */
    public function setOther($other)
    {
        $this->container['other'] = $other;
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

