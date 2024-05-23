<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTagResourcesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTagResourcesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceType  资源类型 organizations:policies服务策略 organizations:ous组织OU organizations:accounts账号信息 organizations:roots根
    * resourceId  根、组织单元、账号或策略的唯一标识符（ID）。
    * limit  页面中最大结果数量。
    * marker  分页标记。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceType' => 'string',
            'resourceId' => 'string',
            'limit' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceType  资源类型 organizations:policies服务策略 organizations:ous组织OU organizations:accounts账号信息 organizations:roots根
    * resourceId  根、组织单元、账号或策略的唯一标识符（ID）。
    * limit  页面中最大结果数量。
    * marker  分页标记。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceType' => null,
        'resourceId' => null,
        'limit' => 'int32',
        'marker' => null
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
    * resourceType  资源类型 organizations:policies服务策略 organizations:ous组织OU organizations:accounts账号信息 organizations:roots根
    * resourceId  根、组织单元、账号或策略的唯一标识符（ID）。
    * limit  页面中最大结果数量。
    * marker  分页标记。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceType' => 'resource_type',
            'resourceId' => 'resource_id',
            'limit' => 'limit',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceType  资源类型 organizations:policies服务策略 organizations:ous组织OU organizations:accounts账号信息 organizations:roots根
    * resourceId  根、组织单元、账号或策略的唯一标识符（ID）。
    * limit  页面中最大结果数量。
    * marker  分页标记。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceType' => 'setResourceType',
            'resourceId' => 'setResourceId',
            'limit' => 'setLimit',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceType  资源类型 organizations:policies服务策略 organizations:ous组织OU organizations:accounts账号信息 organizations:roots根
    * resourceId  根、组织单元、账号或策略的唯一标识符（ID）。
    * limit  页面中最大结果数量。
    * marker  分页标记。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceType' => 'getResourceType',
            'resourceId' => 'getResourceId',
            'limit' => 'getLimit',
            'marker' => 'getMarker'
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
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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

        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if ((mb_strlen($this->container['resourceId']) > 130)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 130.";
            }
            if (!preg_match("/^(?:r-[0-9a-z]{4,32}|[\\w-]+|ou-[0-9a-z]{8,32}|p-[0-9a-zA-Z_]{8,128})$/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /^(?:r-[0-9a-z]{4,32}|[\\w-]+|ou-[0-9a-z]{8,32}|p-[0-9a-zA-Z_]{8,128})$/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 400)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 400.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 4)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/^[A-Za-z0-9+\/=\\-_.]+$/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /^[A-Za-z0-9+\/=\\-_.]+$/.";
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
    * Gets resourceId
    *  根、组织单元、账号或策略的唯一标识符（ID）。
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 根、组织单元、账号或策略的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
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
    * Gets marker
    *  分页标记。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页标记。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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

