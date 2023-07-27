<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityPoliciesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityPoliciesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * securityPolicies  自定义安全策略列表返回对象。
    * requestId  请求ID。  注：自动生成 。
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'securityPolicies' => '\HuaweiCloud\SDK\Elb\V3\Model\SecurityPolicy[]',
            'requestId' => 'string',
            'pageInfo' => '\HuaweiCloud\SDK\Elb\V3\Model\PageInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * securityPolicies  自定义安全策略列表返回对象。
    * requestId  请求ID。  注：自动生成 。
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'securityPolicies' => null,
        'requestId' => null,
        'pageInfo' => null
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
    * securityPolicies  自定义安全策略列表返回对象。
    * requestId  请求ID。  注：自动生成 。
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'securityPolicies' => 'security_policies',
            'requestId' => 'request_id',
            'pageInfo' => 'page_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * securityPolicies  自定义安全策略列表返回对象。
    * requestId  请求ID。  注：自动生成 。
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'securityPolicies' => 'setSecurityPolicies',
            'requestId' => 'setRequestId',
            'pageInfo' => 'setPageInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * securityPolicies  自定义安全策略列表返回对象。
    * requestId  请求ID。  注：自动生成 。
    * pageInfo  pageInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'securityPolicies' => 'getSecurityPolicies',
            'requestId' => 'getRequestId',
            'pageInfo' => 'getPageInfo'
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
        $this->container['securityPolicies'] = isset($data['securityPolicies']) ? $data['securityPolicies'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['pageInfo'] = isset($data['pageInfo']) ? $data['pageInfo'] : null;
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
    * Gets securityPolicies
    *  自定义安全策略列表返回对象。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\SecurityPolicy[]|null
    */
    public function getSecurityPolicies()
    {
        return $this->container['securityPolicies'];
    }

    /**
    * Sets securityPolicies
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\SecurityPolicy[]|null $securityPolicies 自定义安全策略列表返回对象。
    *
    * @return $this
    */
    public function setSecurityPolicies($securityPolicies)
    {
        $this->container['securityPolicies'] = $securityPolicies;
        return $this;
    }

    /**
    * Gets requestId
    *  请求ID。  注：自动生成 。
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
    * @param string|null $requestId 请求ID。  注：自动生成 。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets pageInfo
    *  pageInfo
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\PageInfo|null
    */
    public function getPageInfo()
    {
        return $this->container['pageInfo'];
    }

    /**
    * Sets pageInfo
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\PageInfo|null $pageInfo pageInfo
    *
    * @return $this
    */
    public function setPageInfo($pageInfo)
    {
        $this->container['pageInfo'] = $pageInfo;
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

