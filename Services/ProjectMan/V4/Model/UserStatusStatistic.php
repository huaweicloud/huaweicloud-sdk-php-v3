<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserStatusStatistic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserStatusStatistic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * user  user
    * itemCount  满足条件的工作项总数
    * data  工作项对应状态的统计计数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'user' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser',
            'itemCount' => 'int',
            'data' => 'map[string,int]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * user  user
    * itemCount  满足条件的工作项总数
    * data  工作项对应状态的统计计数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'user' => null,
        'itemCount' => 'int32',
        'data' => 'int32'
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
    * user  user
    * itemCount  满足条件的工作项总数
    * data  工作项对应状态的统计计数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'user' => 'user',
            'itemCount' => 'item_count',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * user  user
    * itemCount  满足条件的工作项总数
    * data  工作项对应状态的统计计数
    *
    * @var string[]
    */
    protected static $setters = [
            'user' => 'setUser',
            'itemCount' => 'setItemCount',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * user  user
    * itemCount  满足条件的工作项总数
    * data  工作项对应状态的统计计数
    *
    * @var string[]
    */
    protected static $getters = [
            'user' => 'getUser',
            'itemCount' => 'getItemCount',
            'data' => 'getData'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['itemCount'] = isset($data['itemCount']) ? $data['itemCount'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
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
    * Gets user
    *  user
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser|null $user user
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets itemCount
    *  满足条件的工作项总数
    *
    * @return int|null
    */
    public function getItemCount()
    {
        return $this->container['itemCount'];
    }

    /**
    * Sets itemCount
    *
    * @param int|null $itemCount 满足条件的工作项总数
    *
    * @return $this
    */
    public function setItemCount($itemCount)
    {
        $this->container['itemCount'] = $itemCount;
        return $this;
    }

    /**
    * Gets data
    *  工作项对应状态的统计计数
    *
    * @return map[string,int]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param map[string,int]|null $data 工作项对应状态的统计计数
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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

