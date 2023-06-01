<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListApplicationEndpointsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListApplicationEndpointsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applicationUrn  Application的唯一资源标识，可通过[查询Application](smn_api_57004.xml)获取该标识。
    * offset  偏移量。  偏移量为一个大于0小于资源总个数的整数，表示查询该偏移量后面的所有的资源，默认值为0。
    * limit  查询的数量限制。  取值范围：1~100，取值一般为10，20，50。功能说明：每页返回的资源个数。默认值为100。
    * enabled  设备是否可用，值为true或false字符串。
    * token  设备token，最大长度512个字节。
    * userData  用户数据，最大长度2048个字节。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applicationUrn' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'enabled' => 'string',
            'token' => 'string',
            'userData' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applicationUrn  Application的唯一资源标识，可通过[查询Application](smn_api_57004.xml)获取该标识。
    * offset  偏移量。  偏移量为一个大于0小于资源总个数的整数，表示查询该偏移量后面的所有的资源，默认值为0。
    * limit  查询的数量限制。  取值范围：1~100，取值一般为10，20，50。功能说明：每页返回的资源个数。默认值为100。
    * enabled  设备是否可用，值为true或false字符串。
    * token  设备token，最大长度512个字节。
    * userData  用户数据，最大长度2048个字节。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applicationUrn' => null,
        'offset' => null,
        'limit' => null,
        'enabled' => null,
        'token' => null,
        'userData' => null
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
    * applicationUrn  Application的唯一资源标识，可通过[查询Application](smn_api_57004.xml)获取该标识。
    * offset  偏移量。  偏移量为一个大于0小于资源总个数的整数，表示查询该偏移量后面的所有的资源，默认值为0。
    * limit  查询的数量限制。  取值范围：1~100，取值一般为10，20，50。功能说明：每页返回的资源个数。默认值为100。
    * enabled  设备是否可用，值为true或false字符串。
    * token  设备token，最大长度512个字节。
    * userData  用户数据，最大长度2048个字节。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applicationUrn' => 'application_urn',
            'offset' => 'offset',
            'limit' => 'limit',
            'enabled' => 'enabled',
            'token' => 'token',
            'userData' => 'user_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applicationUrn  Application的唯一资源标识，可通过[查询Application](smn_api_57004.xml)获取该标识。
    * offset  偏移量。  偏移量为一个大于0小于资源总个数的整数，表示查询该偏移量后面的所有的资源，默认值为0。
    * limit  查询的数量限制。  取值范围：1~100，取值一般为10，20，50。功能说明：每页返回的资源个数。默认值为100。
    * enabled  设备是否可用，值为true或false字符串。
    * token  设备token，最大长度512个字节。
    * userData  用户数据，最大长度2048个字节。
    *
    * @var string[]
    */
    protected static $setters = [
            'applicationUrn' => 'setApplicationUrn',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'enabled' => 'setEnabled',
            'token' => 'setToken',
            'userData' => 'setUserData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applicationUrn  Application的唯一资源标识，可通过[查询Application](smn_api_57004.xml)获取该标识。
    * offset  偏移量。  偏移量为一个大于0小于资源总个数的整数，表示查询该偏移量后面的所有的资源，默认值为0。
    * limit  查询的数量限制。  取值范围：1~100，取值一般为10，20，50。功能说明：每页返回的资源个数。默认值为100。
    * enabled  设备是否可用，值为true或false字符串。
    * token  设备token，最大长度512个字节。
    * userData  用户数据，最大长度2048个字节。
    *
    * @var string[]
    */
    protected static $getters = [
            'applicationUrn' => 'getApplicationUrn',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'enabled' => 'getEnabled',
            'token' => 'getToken',
            'userData' => 'getUserData'
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
        $this->container['applicationUrn'] = isset($data['applicationUrn']) ? $data['applicationUrn'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : 0;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 100;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['applicationUrn'] === null) {
            $invalidProperties[] = "'applicationUrn' can't be null";
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
    * Gets applicationUrn
    *  Application的唯一资源标识，可通过[查询Application](smn_api_57004.xml)获取该标识。
    *
    * @return string
    */
    public function getApplicationUrn()
    {
        return $this->container['applicationUrn'];
    }

    /**
    * Sets applicationUrn
    *
    * @param string $applicationUrn Application的唯一资源标识，可通过[查询Application](smn_api_57004.xml)获取该标识。
    *
    * @return $this
    */
    public function setApplicationUrn($applicationUrn)
    {
        $this->container['applicationUrn'] = $applicationUrn;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量。  偏移量为一个大于0小于资源总个数的整数，表示查询该偏移量后面的所有的资源，默认值为0。
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
    * @param int|null $offset 偏移量。  偏移量为一个大于0小于资源总个数的整数，表示查询该偏移量后面的所有的资源，默认值为0。
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
    *  查询的数量限制。  取值范围：1~100，取值一般为10，20，50。功能说明：每页返回的资源个数。默认值为100。
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
    * @param int|null $limit 查询的数量限制。  取值范围：1~100，取值一般为10，20，50。功能说明：每页返回的资源个数。默认值为100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets enabled
    *  设备是否可用，值为true或false字符串。
    *
    * @return string|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param string|null $enabled 设备是否可用，值为true或false字符串。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets token
    *  设备token，最大长度512个字节。
    *
    * @return string|null
    */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
    * Sets token
    *
    * @param string|null $token 设备token，最大长度512个字节。
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
        return $this;
    }

    /**
    * Gets userData
    *  用户数据，最大长度2048个字节。
    *
    * @return string|null
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string|null $userData 用户数据，最大长度2048个字节。
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
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

