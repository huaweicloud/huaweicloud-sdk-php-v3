<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVolumeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVolumeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bssParam' => '\HuaweiCloud\SDK\Evs\V2\Model\BssParamForCreateVolume',
            'volume' => '\HuaweiCloud\SDK\Evs\V2\Model\CreateVolumeOption',
            'serverId' => 'string',
            'osSchHnTschedulerHints' => '\HuaweiCloud\SDK\Evs\V2\Model\CreateVolumeSchedulerHints'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bssParam' => null,
        'volume' => null,
        'serverId' => null,
        'osSchHnTschedulerHints' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bssParam' => 'bssParam',
            'volume' => 'volume',
            'serverId' => 'server_id',
            'osSchHnTschedulerHints' => 'OS-SCH-HNT:scheduler_hints'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'bssParam' => 'setBssParam',
            'volume' => 'setVolume',
            'serverId' => 'setServerId',
            'osSchHnTschedulerHints' => 'setOsSchHnTschedulerHints'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'bssParam' => 'getBssParam',
            'volume' => 'getVolume',
            'serverId' => 'getServerId',
            'osSchHnTschedulerHints' => 'getOsSchHnTschedulerHints'
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
        $this->container['bssParam'] = isset($data['bssParam']) ? $data['bssParam'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['osSchHnTschedulerHints'] = isset($data['osSchHnTschedulerHints']) ? $data['osSchHnTschedulerHints'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
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
    * Gets bssParam
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\BssParamForCreateVolume|null
    */
    public function getBssParam()
    {
        return $this->container['bssParam'];
    }

    /**
    * Sets bssParam
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\BssParamForCreateVolume|null $bssParam bssParam
    *
    * @return $this
    */
    public function setBssParam($bssParam)
    {
        $this->container['bssParam'] = $bssParam;
        return $this;
    }

    /**
    * Gets volume
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\CreateVolumeOption
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\CreateVolumeOption $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets serverId
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 创建云硬盘并挂载到目标虚拟机。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets osSchHnTschedulerHints
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\CreateVolumeSchedulerHints|null
    */
    public function getOsSchHnTschedulerHints()
    {
        return $this->container['osSchHnTschedulerHints'];
    }

    /**
    * Sets osSchHnTschedulerHints
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\CreateVolumeSchedulerHints|null $osSchHnTschedulerHints osSchHnTschedulerHints
    *
    * @return $this
    */
    public function setOsSchHnTschedulerHints($osSchHnTschedulerHints)
    {
        $this->container['osSchHnTschedulerHints'] = $osSchHnTschedulerHints;
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

