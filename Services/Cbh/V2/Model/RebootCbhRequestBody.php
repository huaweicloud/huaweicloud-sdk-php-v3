<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RebootCbhRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RebootCbhRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverId  serverId
    * rebootType  重启方式，不区分大小写。 - SOFT：普通重启，关闭虚拟机服务 - HARD：强制重启，重启虚拟机
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverId' => 'object',
            'rebootType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverId  serverId
    * rebootType  重启方式，不区分大小写。 - SOFT：普通重启，关闭虚拟机服务 - HARD：强制重启，重启虚拟机
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverId' => null,
        'rebootType' => null
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
    * serverId  serverId
    * rebootType  重启方式，不区分大小写。 - SOFT：普通重启，关闭虚拟机服务 - HARD：强制重启，重启虚拟机
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverId' => 'server_id',
            'rebootType' => 'reboot_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverId  serverId
    * rebootType  重启方式，不区分大小写。 - SOFT：普通重启，关闭虚拟机服务 - HARD：强制重启，重启虚拟机
    *
    * @var string[]
    */
    protected static $setters = [
            'serverId' => 'setServerId',
            'rebootType' => 'setRebootType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverId  serverId
    * rebootType  重启方式，不区分大小写。 - SOFT：普通重启，关闭虚拟机服务 - HARD：强制重启，重启虚拟机
    *
    * @var string[]
    */
    protected static $getters = [
            'serverId' => 'getServerId',
            'rebootType' => 'getRebootType'
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
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['rebootType'] = isset($data['rebootType']) ? $data['rebootType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serverId'] === null) {
            $invalidProperties[] = "'serverId' can't be null";
        }
        if ($this->container['rebootType'] === null) {
            $invalidProperties[] = "'rebootType' can't be null";
        }
            if ((mb_strlen($this->container['rebootType']) > 64)) {
                $invalidProperties[] = "invalid value for 'rebootType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['rebootType']) < 0)) {
                $invalidProperties[] = "invalid value for 'rebootType', the character length must be bigger than or equal to 0.";
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
    * Gets serverId
    *  serverId
    *
    * @return object
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param object $serverId serverId
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets rebootType
    *  重启方式，不区分大小写。 - SOFT：普通重启，关闭虚拟机服务 - HARD：强制重启，重启虚拟机
    *
    * @return string
    */
    public function getRebootType()
    {
        return $this->container['rebootType'];
    }

    /**
    * Sets rebootType
    *
    * @param string $rebootType 重启方式，不区分大小写。 - SOFT：普通重启，关闭虚拟机服务 - HARD：强制重启，重启虚拟机
    *
    * @return $this
    */
    public function setRebootType($rebootType)
    {
        $this->container['rebootType'] = $rebootType;
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

