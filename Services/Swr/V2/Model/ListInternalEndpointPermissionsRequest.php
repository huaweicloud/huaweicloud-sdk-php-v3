<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInternalEndpointPermissionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInternalEndpointPermissionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  企业仓库实例ID
    * limit  返回条数，默认为10，最大值为500。**注意：offset和limit参数需要配套使用。**
    * offset  起始索引，默认为0。**注意：offset和limit参数需要配套使用。**
    * permission  权限ID，用于过滤白名单权限，格式为“iam:domain::domain_id”。 其中\"domain_id\"为授权用户的账号ID， 例如“iam:domain::6e9dfd51d1124e8d8498dce894923a0d”，支持模糊搜索。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'permission' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  企业仓库实例ID
    * limit  返回条数，默认为10，最大值为500。**注意：offset和limit参数需要配套使用。**
    * offset  起始索引，默认为0。**注意：offset和limit参数需要配套使用。**
    * permission  权限ID，用于过滤白名单权限，格式为“iam:domain::domain_id”。 其中\"domain_id\"为授权用户的账号ID， 例如“iam:domain::6e9dfd51d1124e8d8498dce894923a0d”，支持模糊搜索。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'permission' => null
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
    * instanceId  企业仓库实例ID
    * limit  返回条数，默认为10，最大值为500。**注意：offset和limit参数需要配套使用。**
    * offset  起始索引，默认为0。**注意：offset和limit参数需要配套使用。**
    * permission  权限ID，用于过滤白名单权限，格式为“iam:domain::domain_id”。 其中\"domain_id\"为授权用户的账号ID， 例如“iam:domain::6e9dfd51d1124e8d8498dce894923a0d”，支持模糊搜索。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'permission' => 'permission'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  企业仓库实例ID
    * limit  返回条数，默认为10，最大值为500。**注意：offset和limit参数需要配套使用。**
    * offset  起始索引，默认为0。**注意：offset和limit参数需要配套使用。**
    * permission  权限ID，用于过滤白名单权限，格式为“iam:domain::domain_id”。 其中\"domain_id\"为授权用户的账号ID， 例如“iam:domain::6e9dfd51d1124e8d8498dce894923a0d”，支持模糊搜索。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'permission' => 'setPermission'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  企业仓库实例ID
    * limit  返回条数，默认为10，最大值为500。**注意：offset和limit参数需要配套使用。**
    * offset  起始索引，默认为0。**注意：offset和limit参数需要配套使用。**
    * permission  权限ID，用于过滤白名单权限，格式为“iam:domain::domain_id”。 其中\"domain_id\"为授权用户的账号ID， 例如“iam:domain::6e9dfd51d1124e8d8498dce894923a0d”，支持模糊搜索。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'permission' => 'getPermission'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets instanceId
    *  企业仓库实例ID
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 企业仓库实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets limit
    *  返回条数，默认为10，最大值为500。**注意：offset和limit参数需要配套使用。**
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 返回条数，默认为10，最大值为500。**注意：offset和limit参数需要配套使用。**
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  起始索引，默认为0。**注意：offset和limit参数需要配套使用。**
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 起始索引，默认为0。**注意：offset和limit参数需要配套使用。**
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets permission
    *  权限ID，用于过滤白名单权限，格式为“iam:domain::domain_id”。 其中\"domain_id\"为授权用户的账号ID， 例如“iam:domain::6e9dfd51d1124e8d8498dce894923a0d”，支持模糊搜索。
    *
    * @return string|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param string|null $permission 权限ID，用于过滤白名单权限，格式为“iam:domain::domain_id”。 其中\"domain_id\"为授权用户的账号ID， 例如“iam:domain::6e9dfd51d1124e8d8498dce894923a0d”，支持模糊搜索。
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
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

