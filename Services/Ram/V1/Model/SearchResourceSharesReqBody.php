<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchResourceSharesReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchResourceSharesReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页页面的最大值。
    * name  资源共享实例名称。
    * marker  页面标记。
    * permissionId  权限ID。
    * resourceOwner  检索您创建的或共享给您的（self或者other-accounts）资源共享实例。
    * resourceShareIds  资源共享实例的ID列表。
    * resourceShareStatus  资源共享实例的状态。
    * tagFilters  资源共享实例的标签。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'name' => 'string',
            'marker' => 'string',
            'permissionId' => 'string',
            'resourceOwner' => 'string',
            'resourceShareIds' => 'string[]',
            'resourceShareStatus' => 'string',
            'tagFilters' => '\HuaweiCloud\SDK\Ram\V1\Model\TagFilter[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页页面的最大值。
    * name  资源共享实例名称。
    * marker  页面标记。
    * permissionId  权限ID。
    * resourceOwner  检索您创建的或共享给您的（self或者other-accounts）资源共享实例。
    * resourceShareIds  资源共享实例的ID列表。
    * resourceShareStatus  资源共享实例的状态。
    * tagFilters  资源共享实例的标签。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'name' => null,
        'marker' => null,
        'permissionId' => null,
        'resourceOwner' => null,
        'resourceShareIds' => null,
        'resourceShareStatus' => null,
        'tagFilters' => null
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
    * limit  分页页面的最大值。
    * name  资源共享实例名称。
    * marker  页面标记。
    * permissionId  权限ID。
    * resourceOwner  检索您创建的或共享给您的（self或者other-accounts）资源共享实例。
    * resourceShareIds  资源共享实例的ID列表。
    * resourceShareStatus  资源共享实例的状态。
    * tagFilters  资源共享实例的标签。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'name' => 'name',
            'marker' => 'marker',
            'permissionId' => 'permission_id',
            'resourceOwner' => 'resource_owner',
            'resourceShareIds' => 'resource_share_ids',
            'resourceShareStatus' => 'resource_share_status',
            'tagFilters' => 'tag_filters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页页面的最大值。
    * name  资源共享实例名称。
    * marker  页面标记。
    * permissionId  权限ID。
    * resourceOwner  检索您创建的或共享给您的（self或者other-accounts）资源共享实例。
    * resourceShareIds  资源共享实例的ID列表。
    * resourceShareStatus  资源共享实例的状态。
    * tagFilters  资源共享实例的标签。
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'name' => 'setName',
            'marker' => 'setMarker',
            'permissionId' => 'setPermissionId',
            'resourceOwner' => 'setResourceOwner',
            'resourceShareIds' => 'setResourceShareIds',
            'resourceShareStatus' => 'setResourceShareStatus',
            'tagFilters' => 'setTagFilters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页页面的最大值。
    * name  资源共享实例名称。
    * marker  页面标记。
    * permissionId  权限ID。
    * resourceOwner  检索您创建的或共享给您的（self或者other-accounts）资源共享实例。
    * resourceShareIds  资源共享实例的ID列表。
    * resourceShareStatus  资源共享实例的状态。
    * tagFilters  资源共享实例的标签。
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'name' => 'getName',
            'marker' => 'getMarker',
            'permissionId' => 'getPermissionId',
            'resourceOwner' => 'getResourceOwner',
            'resourceShareIds' => 'getResourceShareIds',
            'resourceShareStatus' => 'getResourceShareStatus',
            'tagFilters' => 'getTagFilters'
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
    const RESOURCE_OWNER_SELF = 'self';
    const RESOURCE_OWNER_OTHER_ACCOUNTS = 'other-accounts';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceOwnerAllowableValues()
    {
        return [
            self::RESOURCE_OWNER_SELF,
            self::RESOURCE_OWNER_OTHER_ACCOUNTS,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['permissionId'] = isset($data['permissionId']) ? $data['permissionId'] : null;
        $this->container['resourceOwner'] = isset($data['resourceOwner']) ? $data['resourceOwner'] : null;
        $this->container['resourceShareIds'] = isset($data['resourceShareIds']) ? $data['resourceShareIds'] : null;
        $this->container['resourceShareStatus'] = isset($data['resourceShareStatus']) ? $data['resourceShareStatus'] : null;
        $this->container['tagFilters'] = isset($data['tagFilters']) ? $data['tagFilters'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 64)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 1)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/^\\d{1,}$/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /^\\d{1,}$/.";
            }
            if (!is_null($this->container['permissionId']) && (mb_strlen($this->container['permissionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'permissionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['permissionId']) && (mb_strlen($this->container['permissionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'permissionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['permissionId']) && !preg_match("/^[\\w-]+$/", $this->container['permissionId'])) {
                $invalidProperties[] = "invalid value for 'permissionId', must be conform to the pattern /^[\\w-]+$/.";
            }
        if ($this->container['resourceOwner'] === null) {
            $invalidProperties[] = "'resourceOwner' can't be null";
        }
            $allowedValues = $this->getResourceOwnerAllowableValues();
                if (!is_null($this->container['resourceOwner']) && !in_array($this->container['resourceOwner'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceOwner', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['resourceShareStatus']) && (mb_strlen($this->container['resourceShareStatus']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceShareStatus', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['resourceShareStatus']) && (mb_strlen($this->container['resourceShareStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceShareStatus', the character length must be bigger than or equal to 0.";
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
    *  分页页面的最大值。
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
    * @param int|null $limit 分页页面的最大值。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets name
    *  资源共享实例名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 资源共享实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets marker
    *  页面标记。
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
    * @param string|null $marker 页面标记。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets permissionId
    *  权限ID。
    *
    * @return string|null
    */
    public function getPermissionId()
    {
        return $this->container['permissionId'];
    }

    /**
    * Sets permissionId
    *
    * @param string|null $permissionId 权限ID。
    *
    * @return $this
    */
    public function setPermissionId($permissionId)
    {
        $this->container['permissionId'] = $permissionId;
        return $this;
    }

    /**
    * Gets resourceOwner
    *  检索您创建的或共享给您的（self或者other-accounts）资源共享实例。
    *
    * @return string
    */
    public function getResourceOwner()
    {
        return $this->container['resourceOwner'];
    }

    /**
    * Sets resourceOwner
    *
    * @param string $resourceOwner 检索您创建的或共享给您的（self或者other-accounts）资源共享实例。
    *
    * @return $this
    */
    public function setResourceOwner($resourceOwner)
    {
        $this->container['resourceOwner'] = $resourceOwner;
        return $this;
    }

    /**
    * Gets resourceShareIds
    *  资源共享实例的ID列表。
    *
    * @return string[]|null
    */
    public function getResourceShareIds()
    {
        return $this->container['resourceShareIds'];
    }

    /**
    * Sets resourceShareIds
    *
    * @param string[]|null $resourceShareIds 资源共享实例的ID列表。
    *
    * @return $this
    */
    public function setResourceShareIds($resourceShareIds)
    {
        $this->container['resourceShareIds'] = $resourceShareIds;
        return $this;
    }

    /**
    * Gets resourceShareStatus
    *  资源共享实例的状态。
    *
    * @return string|null
    */
    public function getResourceShareStatus()
    {
        return $this->container['resourceShareStatus'];
    }

    /**
    * Sets resourceShareStatus
    *
    * @param string|null $resourceShareStatus 资源共享实例的状态。
    *
    * @return $this
    */
    public function setResourceShareStatus($resourceShareStatus)
    {
        $this->container['resourceShareStatus'] = $resourceShareStatus;
        return $this;
    }

    /**
    * Gets tagFilters
    *  资源共享实例的标签。
    *
    * @return \HuaweiCloud\SDK\Ram\V1\Model\TagFilter[]|null
    */
    public function getTagFilters()
    {
        return $this->container['tagFilters'];
    }

    /**
    * Sets tagFilters
    *
    * @param \HuaweiCloud\SDK\Ram\V1\Model\TagFilter[]|null $tagFilters 资源共享实例的标签。
    *
    * @return $this
    */
    public function setTagFilters($tagFilters)
    {
        $this->container['tagFilters'] = $tagFilters;
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

