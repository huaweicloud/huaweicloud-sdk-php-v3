<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListResourcesTagsByProjectIdRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListResourcesTagsByProjectIdRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceType  资源类型 取值范围： - instances：Instance实例 - namespaces：命名空间 - repositories：仓库
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用。**
    * limit  返回条数，默认为200，最小值为1，最大值为200。**注意：offset和limit参数需要配套使用。**
    * instanceId  当resource_type为repositories或namespaces时，支持通过instance_id进行过滤查询，用于获取指定注册表实例下对应资源类型的标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceType' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'instanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceType  资源类型 取值范围： - instances：Instance实例 - namespaces：命名空间 - repositories：仓库
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用。**
    * limit  返回条数，默认为200，最小值为1，最大值为200。**注意：offset和limit参数需要配套使用。**
    * instanceId  当resource_type为repositories或namespaces时，支持通过instance_id进行过滤查询，用于获取指定注册表实例下对应资源类型的标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceType' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'instanceId' => null
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
    * resourceType  资源类型 取值范围： - instances：Instance实例 - namespaces：命名空间 - repositories：仓库
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用。**
    * limit  返回条数，默认为200，最小值为1，最大值为200。**注意：offset和limit参数需要配套使用。**
    * instanceId  当resource_type为repositories或namespaces时，支持通过instance_id进行过滤查询，用于获取指定注册表实例下对应资源类型的标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceType' => 'resource_type',
            'offset' => 'offset',
            'limit' => 'limit',
            'instanceId' => 'instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceType  资源类型 取值范围： - instances：Instance实例 - namespaces：命名空间 - repositories：仓库
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用。**
    * limit  返回条数，默认为200，最小值为1，最大值为200。**注意：offset和limit参数需要配套使用。**
    * instanceId  当resource_type为repositories或namespaces时，支持通过instance_id进行过滤查询，用于获取指定注册表实例下对应资源类型的标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceType' => 'setResourceType',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'instanceId' => 'setInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceType  资源类型 取值范围： - instances：Instance实例 - namespaces：命名空间 - repositories：仓库
    * offset  起始索引，默认值为0。**注意：offset和limit参数需要配套使用。**
    * limit  返回条数，默认为200，最小值为1，最大值为200。**注意：offset和limit参数需要配套使用。**
    * instanceId  当resource_type为repositories或namespaces时，支持通过instance_id进行过滤查询，用于获取指定注册表实例下对应资源类型的标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceType' => 'getResourceType',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'instanceId' => 'getInstanceId'
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
    const RESOURCE_TYPE_INSTANCES = 'instances';
    const RESOURCE_TYPE_NAMESPACES = 'namespaces';
    const RESOURCE_TYPE_REPOSITORIES = 'repositories';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_INSTANCES,
            self::RESOURCE_TYPE_NAMESPACES,
            self::RESOURCE_TYPE_REPOSITORIES,
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
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

            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    *  资源类型 取值范围： - instances：Instance实例 - namespaces：命名空间 - repositories：仓库
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
    * @param string $resourceType 资源类型 取值范围： - instances：Instance实例 - namespaces：命名空间 - repositories：仓库
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets offset
    *  起始索引，默认值为0。**注意：offset和limit参数需要配套使用。**
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
    * @param int|null $offset 起始索引，默认值为0。**注意：offset和limit参数需要配套使用。**
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
    *  返回条数，默认为200，最小值为1，最大值为200。**注意：offset和limit参数需要配套使用。**
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
    * @param int|null $limit 返回条数，默认为200，最小值为1，最大值为200。**注意：offset和limit参数需要配套使用。**
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets instanceId
    *  当resource_type为repositories或namespaces时，支持通过instance_id进行过滤查询，用于获取指定注册表实例下对应资源类型的标签列表。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 当resource_type为repositories或namespaces时，支持通过instance_id进行过滤查询，用于获取指定注册表实例下对应资源类型的标签列表。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
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

