<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSlowLogTopInfoNewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSlowLogTopInfoNewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topUserList  Top用户列表
    * topIpList  Top IP列表
    * topDbList  Top数据库列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topUserList' => '\HuaweiCloud\SDK\Das\V3\Model\SlowLogTopInfo[]',
            'topIpList' => '\HuaweiCloud\SDK\Das\V3\Model\SlowLogTopInfo[]',
            'topDbList' => '\HuaweiCloud\SDK\Das\V3\Model\SlowLogTopInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topUserList  Top用户列表
    * topIpList  Top IP列表
    * topDbList  Top数据库列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topUserList' => null,
        'topIpList' => null,
        'topDbList' => null
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
    * topUserList  Top用户列表
    * topIpList  Top IP列表
    * topDbList  Top数据库列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topUserList' => 'top_user_list',
            'topIpList' => 'top_ip_list',
            'topDbList' => 'top_db_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topUserList  Top用户列表
    * topIpList  Top IP列表
    * topDbList  Top数据库列表
    *
    * @var string[]
    */
    protected static $setters = [
            'topUserList' => 'setTopUserList',
            'topIpList' => 'setTopIpList',
            'topDbList' => 'setTopDbList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topUserList  Top用户列表
    * topIpList  Top IP列表
    * topDbList  Top数据库列表
    *
    * @var string[]
    */
    protected static $getters = [
            'topUserList' => 'getTopUserList',
            'topIpList' => 'getTopIpList',
            'topDbList' => 'getTopDbList'
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
        $this->container['topUserList'] = isset($data['topUserList']) ? $data['topUserList'] : null;
        $this->container['topIpList'] = isset($data['topIpList']) ? $data['topIpList'] : null;
        $this->container['topDbList'] = isset($data['topDbList']) ? $data['topDbList'] : null;
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
    * Gets topUserList
    *  Top用户列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\SlowLogTopInfo[]|null
    */
    public function getTopUserList()
    {
        return $this->container['topUserList'];
    }

    /**
    * Sets topUserList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\SlowLogTopInfo[]|null $topUserList Top用户列表
    *
    * @return $this
    */
    public function setTopUserList($topUserList)
    {
        $this->container['topUserList'] = $topUserList;
        return $this;
    }

    /**
    * Gets topIpList
    *  Top IP列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\SlowLogTopInfo[]|null
    */
    public function getTopIpList()
    {
        return $this->container['topIpList'];
    }

    /**
    * Sets topIpList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\SlowLogTopInfo[]|null $topIpList Top IP列表
    *
    * @return $this
    */
    public function setTopIpList($topIpList)
    {
        $this->container['topIpList'] = $topIpList;
        return $this;
    }

    /**
    * Gets topDbList
    *  Top数据库列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\SlowLogTopInfo[]|null
    */
    public function getTopDbList()
    {
        return $this->container['topDbList'];
    }

    /**
    * Sets topDbList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\SlowLogTopInfo[]|null $topDbList Top数据库列表
    *
    * @return $this
    */
    public function setTopDbList($topDbList)
    {
        $this->container['topDbList'] = $topDbList;
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

