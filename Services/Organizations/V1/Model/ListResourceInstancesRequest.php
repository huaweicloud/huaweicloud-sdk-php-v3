<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListResourceInstancesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListResourceInstancesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  页面中最大结果数量。
    * offset  分页标记。
    * resourceType  资源类型 organizations:policies服务策略 organizations:ous组织OU organizations:accounts账号信息 organizations:roots根
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'offset' => 'string',
            'resourceType' => 'string',
            'body' => '\HuaweiCloud\SDK\Organizations\V1\Model\ResourceInstanceReqBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  页面中最大结果数量。
    * offset  分页标记。
    * resourceType  资源类型 organizations:policies服务策略 organizations:ous组织OU organizations:accounts账号信息 organizations:roots根
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'offset' => null,
        'resourceType' => null,
        'body' => null
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
    * limit  页面中最大结果数量。
    * offset  分页标记。
    * resourceType  资源类型 organizations:policies服务策略 organizations:ous组织OU organizations:accounts账号信息 organizations:roots根
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'offset' => 'offset',
            'resourceType' => 'resource_type',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  页面中最大结果数量。
    * offset  分页标记。
    * resourceType  资源类型 organizations:policies服务策略 organizations:ous组织OU organizations:accounts账号信息 organizations:roots根
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'resourceType' => 'setResourceType',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  页面中最大结果数量。
    * offset  分页标记。
    * resourceType  资源类型 organizations:policies服务策略 organizations:ous组织OU organizations:accounts账号信息 organizations:roots根
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'resourceType' => 'getResourceType',
            'body' => 'getBody'
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
    const RESOURCE_TYPE_ORGANIZATIONSPOLICIES = 'organizations:policies';
    const RESOURCE_TYPE_ORGANIZATIONSOUS = 'organizations:ous';
    const RESOURCE_TYPE_ORGANIZATIONSACCOUNTS = 'organizations:accounts';
    const RESOURCE_TYPE_ORGANIZATIONSROOTS = 'organizations:roots';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_ORGANIZATIONSPOLICIES,
            self::RESOURCE_TYPE_ORGANIZATIONSOUS,
            self::RESOURCE_TYPE_ORGANIZATIONSACCOUNTS,
            self::RESOURCE_TYPE_ORGANIZATIONSROOTS,
        ];
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && !preg_match("/[0-9]+/", $this->container['offset'])) {
                $invalidProperties[] = "invalid value for 'offset', must be conform to the pattern /[0-9]+/.";
            }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            $allowedValues = $this->getResourceTypeAllowableValues();
                if (!is_null($this->container['resourceType']) && !in_array($this->container['resourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets limit
    *  页面中最大结果数量。
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
    * @param int|null $limit 页面中最大结果数量。
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
    *  分页标记。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 分页标记。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型 organizations:policies服务策略 organizations:ous组织OU organizations:accounts账号信息 organizations:roots根
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 资源类型 organizations:policies服务策略 organizations:ous组织OU organizations:accounts账号信息 organizations:roots根
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Organizations\V1\Model\ResourceInstanceReqBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Organizations\V1\Model\ResourceInstanceReqBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

