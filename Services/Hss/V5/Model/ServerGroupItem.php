<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerGroupItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerGroupItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverGroupId  服务器组ID
    * serverGroupName  服务器组名称
    * hostNum  服务器组分配的主机数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverGroupId' => 'string',
            'serverGroupName' => 'string',
            'hostNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverGroupId  服务器组ID
    * serverGroupName  服务器组名称
    * hostNum  服务器组分配的主机数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverGroupId' => null,
        'serverGroupName' => null,
        'hostNum' => 'int32'
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
    * serverGroupId  服务器组ID
    * serverGroupName  服务器组名称
    * hostNum  服务器组分配的主机数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverGroupId' => 'server_group_id',
            'serverGroupName' => 'server_group_name',
            'hostNum' => 'host_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverGroupId  服务器组ID
    * serverGroupName  服务器组名称
    * hostNum  服务器组分配的主机数量
    *
    * @var string[]
    */
    protected static $setters = [
            'serverGroupId' => 'setServerGroupId',
            'serverGroupName' => 'setServerGroupName',
            'hostNum' => 'setHostNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverGroupId  服务器组ID
    * serverGroupName  服务器组名称
    * hostNum  服务器组分配的主机数量
    *
    * @var string[]
    */
    protected static $getters = [
            'serverGroupId' => 'getServerGroupId',
            'serverGroupName' => 'getServerGroupName',
            'hostNum' => 'getHostNum'
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
        $this->container['serverGroupId'] = isset($data['serverGroupId']) ? $data['serverGroupId'] : null;
        $this->container['serverGroupName'] = isset($data['serverGroupName']) ? $data['serverGroupName'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
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
    * Gets serverGroupId
    *  服务器组ID
    *
    * @return string|null
    */
    public function getServerGroupId()
    {
        return $this->container['serverGroupId'];
    }

    /**
    * Sets serverGroupId
    *
    * @param string|null $serverGroupId 服务器组ID
    *
    * @return $this
    */
    public function setServerGroupId($serverGroupId)
    {
        $this->container['serverGroupId'] = $serverGroupId;
        return $this;
    }

    /**
    * Gets serverGroupName
    *  服务器组名称
    *
    * @return string|null
    */
    public function getServerGroupName()
    {
        return $this->container['serverGroupName'];
    }

    /**
    * Sets serverGroupName
    *
    * @param string|null $serverGroupName 服务器组名称
    *
    * @return $this
    */
    public function setServerGroupName($serverGroupName)
    {
        $this->container['serverGroupName'] = $serverGroupName;
        return $this;
    }

    /**
    * Gets hostNum
    *  服务器组分配的主机数量
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum 服务器组分配的主机数量
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
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

