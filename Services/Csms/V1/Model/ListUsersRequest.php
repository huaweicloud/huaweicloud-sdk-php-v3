<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListUsersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListUsersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orgId  组织id，为空时查询所有用户。
    * offset  第几页。最小值：0
    * limit  每页多少条。最小值：10。最大值：100
    * userInfo  最长64位，用户名，支持模糊查询
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orgId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'userInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orgId  组织id，为空时查询所有用户。
    * offset  第几页。最小值：0
    * limit  每页多少条。最小值：10。最大值：100
    * userInfo  最长64位，用户名，支持模糊查询
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orgId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'userInfo' => null
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
    * orgId  组织id，为空时查询所有用户。
    * offset  第几页。最小值：0
    * limit  每页多少条。最小值：10。最大值：100
    * userInfo  最长64位，用户名，支持模糊查询
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orgId' => 'org_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'userInfo' => 'user_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orgId  组织id，为空时查询所有用户。
    * offset  第几页。最小值：0
    * limit  每页多少条。最小值：10。最大值：100
    * userInfo  最长64位，用户名，支持模糊查询
    *
    * @var string[]
    */
    protected static $setters = [
            'orgId' => 'setOrgId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'userInfo' => 'setUserInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orgId  组织id，为空时查询所有用户。
    * offset  第几页。最小值：0
    * limit  每页多少条。最小值：10。最大值：100
    * userInfo  最长64位，用户名，支持模糊查询
    *
    * @var string[]
    */
    protected static $getters = [
            'orgId' => 'getOrgId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'userInfo' => 'getUserInfo'
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
        $this->container['orgId'] = isset($data['orgId']) ? $data['orgId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['userInfo'] = isset($data['userInfo']) ? $data['userInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
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
    * Gets orgId
    *  组织id，为空时查询所有用户。
    *
    * @return string|null
    */
    public function getOrgId()
    {
        return $this->container['orgId'];
    }

    /**
    * Sets orgId
    *
    * @param string|null $orgId 组织id，为空时查询所有用户。
    *
    * @return $this
    */
    public function setOrgId($orgId)
    {
        $this->container['orgId'] = $orgId;
        return $this;
    }

    /**
    * Gets offset
    *  第几页。最小值：0
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 第几页。最小值：0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页多少条。最小值：10。最大值：100
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 每页多少条。最小值：10。最大值：100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets userInfo
    *  最长64位，用户名，支持模糊查询
    *
    * @return string|null
    */
    public function getUserInfo()
    {
        return $this->container['userInfo'];
    }

    /**
    * Sets userInfo
    *
    * @param string|null $userInfo 最长64位，用户名，支持模糊查询
    *
    * @return $this
    */
    public function setUserInfo($userInfo)
    {
        $this->container['userInfo'] = $userInfo;
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

