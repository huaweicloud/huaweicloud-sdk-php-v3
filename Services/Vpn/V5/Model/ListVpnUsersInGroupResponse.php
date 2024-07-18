<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVpnUsersInGroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVpnUsersInGroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * users  用户列表信息
    * totalCount  总数
    * pageInfo  pageInfo
    * requestId  请求ID
    * headerResponseToken  headerResponseToken
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'users' => '\HuaweiCloud\SDK\Vpn\V5\Model\VpnUserInGroup[]',
            'totalCount' => 'int',
            'pageInfo' => '\HuaweiCloud\SDK\Vpn\V5\Model\PageInfo',
            'requestId' => 'string',
            'headerResponseToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * users  用户列表信息
    * totalCount  总数
    * pageInfo  pageInfo
    * requestId  请求ID
    * headerResponseToken  headerResponseToken
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'users' => null,
        'totalCount' => 'int32',
        'pageInfo' => null,
        'requestId' => null,
        'headerResponseToken' => null
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
    * users  用户列表信息
    * totalCount  总数
    * pageInfo  pageInfo
    * requestId  请求ID
    * headerResponseToken  headerResponseToken
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'users' => 'users',
            'totalCount' => 'total_count',
            'pageInfo' => 'page_info',
            'requestId' => 'request_id',
            'headerResponseToken' => 'header-response-token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * users  用户列表信息
    * totalCount  总数
    * pageInfo  pageInfo
    * requestId  请求ID
    * headerResponseToken  headerResponseToken
    *
    * @var string[]
    */
    protected static $setters = [
            'users' => 'setUsers',
            'totalCount' => 'setTotalCount',
            'pageInfo' => 'setPageInfo',
            'requestId' => 'setRequestId',
            'headerResponseToken' => 'setHeaderResponseToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * users  用户列表信息
    * totalCount  总数
    * pageInfo  pageInfo
    * requestId  请求ID
    * headerResponseToken  headerResponseToken
    *
    * @var string[]
    */
    protected static $getters = [
            'users' => 'getUsers',
            'totalCount' => 'getTotalCount',
            'pageInfo' => 'getPageInfo',
            'requestId' => 'getRequestId',
            'headerResponseToken' => 'getHeaderResponseToken'
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
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['pageInfo'] = isset($data['pageInfo']) ? $data['pageInfo'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['headerResponseToken'] = isset($data['headerResponseToken']) ? $data['headerResponseToken'] : null;
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
    * Gets users
    *  用户列表信息
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\VpnUserInGroup[]|null
    */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
    * Sets users
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\VpnUserInGroup[]|null $users 用户列表信息
    *
    * @return $this
    */
    public function setUsers($users)
    {
        $this->container['users'] = $users;
        return $this;
    }

    /**
    * Gets totalCount
    *  总数
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 总数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets pageInfo
    *  pageInfo
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\PageInfo|null
    */
    public function getPageInfo()
    {
        return $this->container['pageInfo'];
    }

    /**
    * Sets pageInfo
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\PageInfo|null $pageInfo pageInfo
    *
    * @return $this
    */
    public function setPageInfo($pageInfo)
    {
        $this->container['pageInfo'] = $pageInfo;
        return $this;
    }

    /**
    * Gets requestId
    *  请求ID
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 请求ID
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets headerResponseToken
    *  headerResponseToken
    *
    * @return string|null
    */
    public function getHeaderResponseToken()
    {
        return $this->container['headerResponseToken'];
    }

    /**
    * Sets headerResponseToken
    *
    * @param string|null $headerResponseToken headerResponseToken
    *
    * @return $this
    */
    public function setHeaderResponseToken($headerResponseToken)
    {
        $this->container['headerResponseToken'] = $headerResponseToken;
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

