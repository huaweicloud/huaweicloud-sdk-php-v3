<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListResourceSharePermissionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListResourceSharePermissionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceShareId  资源共享实例的ID。
    * permissionName  共享资源权限的名称。
    * limit  分页页面的最大值。
    * marker  页面标记。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceShareId' => 'string',
            'permissionName' => 'string',
            'limit' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceShareId  资源共享实例的ID。
    * permissionName  共享资源权限的名称。
    * limit  分页页面的最大值。
    * marker  页面标记。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceShareId' => null,
        'permissionName' => null,
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
    * resourceShareId  资源共享实例的ID。
    * permissionName  共享资源权限的名称。
    * limit  分页页面的最大值。
    * marker  页面标记。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceShareId' => 'resource_share_id',
            'permissionName' => 'permission_name',
            'limit' => 'limit',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceShareId  资源共享实例的ID。
    * permissionName  共享资源权限的名称。
    * limit  分页页面的最大值。
    * marker  页面标记。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceShareId' => 'setResourceShareId',
            'permissionName' => 'setPermissionName',
            'limit' => 'setLimit',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceShareId  资源共享实例的ID。
    * permissionName  共享资源权限的名称。
    * limit  分页页面的最大值。
    * marker  页面标记。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceShareId' => 'getResourceShareId',
            'permissionName' => 'getPermissionName',
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
        $this->container['resourceShareId'] = isset($data['resourceShareId']) ? $data['resourceShareId'] : null;
        $this->container['permissionName'] = isset($data['permissionName']) ? $data['permissionName'] : null;
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
        if ($this->container['resourceShareId'] === null) {
            $invalidProperties[] = "'resourceShareId' can't be null";
        }
            if ((mb_strlen($this->container['resourceShareId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceShareId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['resourceShareId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceShareId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['resourceShareId'])) {
                $invalidProperties[] = "invalid value for 'resourceShareId', must be conform to the pattern /^[\\w-]+$/.";
            }
            if (!is_null($this->container['permissionName']) && (mb_strlen($this->container['permissionName']) > 64)) {
                $invalidProperties[] = "invalid value for 'permissionName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['permissionName']) && (mb_strlen($this->container['permissionName']) < 1)) {
                $invalidProperties[] = "invalid value for 'permissionName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets resourceShareId
    *  资源共享实例的ID。
    *
    * @return string
    */
    public function getResourceShareId()
    {
        return $this->container['resourceShareId'];
    }

    /**
    * Sets resourceShareId
    *
    * @param string $resourceShareId 资源共享实例的ID。
    *
    * @return $this
    */
    public function setResourceShareId($resourceShareId)
    {
        $this->container['resourceShareId'] = $resourceShareId;
        return $this;
    }

    /**
    * Gets permissionName
    *  共享资源权限的名称。
    *
    * @return string|null
    */
    public function getPermissionName()
    {
        return $this->container['permissionName'];
    }

    /**
    * Sets permissionName
    *
    * @param string|null $permissionName 共享资源权限的名称。
    *
    * @return $this
    */
    public function setPermissionName($permissionName)
    {
        $this->container['permissionName'] = $permissionName;
        return $this;
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

