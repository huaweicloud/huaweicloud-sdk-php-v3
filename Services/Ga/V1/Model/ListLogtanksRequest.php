<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLogtanksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLogtanksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页查询每页的资源个数。如果不设置，则默认为500。
    * marker  分页查询的起始的资源ID，表示上一页最后一条查询资源记录的ID。不指定时表示查询第一页。 必须与limit一起使用。
    * id  资源ID。
    * status  配置状态，可选范围: - ACTIVE：运行中 - PENDING：待定 - ERROR：错误 - DELETING：正在删除
    * resourceIds  资源ID列表。
    * resourceType  关联云日志的资源类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'id' => 'string',
            'status' => 'string',
            'resourceIds' => 'string[]',
            'resourceType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页查询每页的资源个数。如果不设置，则默认为500。
    * marker  分页查询的起始的资源ID，表示上一页最后一条查询资源记录的ID。不指定时表示查询第一页。 必须与limit一起使用。
    * id  资源ID。
    * status  配置状态，可选范围: - ACTIVE：运行中 - PENDING：待定 - ERROR：错误 - DELETING：正在删除
    * resourceIds  资源ID列表。
    * resourceType  关联云日志的资源类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'id' => null,
        'status' => null,
        'resourceIds' => null,
        'resourceType' => null
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
    * limit  分页查询每页的资源个数。如果不设置，则默认为500。
    * marker  分页查询的起始的资源ID，表示上一页最后一条查询资源记录的ID。不指定时表示查询第一页。 必须与limit一起使用。
    * id  资源ID。
    * status  配置状态，可选范围: - ACTIVE：运行中 - PENDING：待定 - ERROR：错误 - DELETING：正在删除
    * resourceIds  资源ID列表。
    * resourceType  关联云日志的资源类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'id' => 'id',
            'status' => 'status',
            'resourceIds' => 'resource_ids',
            'resourceType' => 'resource_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页查询每页的资源个数。如果不设置，则默认为500。
    * marker  分页查询的起始的资源ID，表示上一页最后一条查询资源记录的ID。不指定时表示查询第一页。 必须与limit一起使用。
    * id  资源ID。
    * status  配置状态，可选范围: - ACTIVE：运行中 - PENDING：待定 - ERROR：错误 - DELETING：正在删除
    * resourceIds  资源ID列表。
    * resourceType  关联云日志的资源类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'id' => 'setId',
            'status' => 'setStatus',
            'resourceIds' => 'setResourceIds',
            'resourceType' => 'setResourceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页查询每页的资源个数。如果不设置，则默认为500。
    * marker  分页查询的起始的资源ID，表示上一页最后一条查询资源记录的ID。不指定时表示查询第一页。 必须与limit一起使用。
    * id  资源ID。
    * status  配置状态，可选范围: - ACTIVE：运行中 - PENDING：待定 - ERROR：错误 - DELETING：正在删除
    * resourceIds  资源ID列表。
    * resourceType  关联云日志的资源类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'id' => 'getId',
            'status' => 'getStatus',
            'resourceIds' => 'getResourceIds',
            'resourceType' => 'getResourceType'
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
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_PENDING = 'PENDING';
    const STATUS_ERROR = 'ERROR';
    const STATUS_DELETING = 'DELETING';
    const RESOURCE_TYPE_LISTENER = 'LISTENER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_PENDING,
            self::STATUS_ERROR,
            self::STATUS_DELETING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_LISTENER,
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
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
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 1)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 10)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
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
    *  分页查询每页的资源个数。如果不设置，则默认为500。
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
    * @param int|null $limit 分页查询每页的资源个数。如果不设置，则默认为500。
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
    *  分页查询的起始的资源ID，表示上一页最后一条查询资源记录的ID。不指定时表示查询第一页。 必须与limit一起使用。
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
    * @param string|null $marker 分页查询的起始的资源ID，表示上一页最后一条查询资源记录的ID。不指定时表示查询第一页。 必须与limit一起使用。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets id
    *  资源ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 资源ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  配置状态，可选范围: - ACTIVE：运行中 - PENDING：待定 - ERROR：错误 - DELETING：正在删除
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 配置状态，可选范围: - ACTIVE：运行中 - PENDING：待定 - ERROR：错误 - DELETING：正在删除
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets resourceIds
    *  资源ID列表。
    *
    * @return string[]|null
    */
    public function getResourceIds()
    {
        return $this->container['resourceIds'];
    }

    /**
    * Sets resourceIds
    *
    * @param string[]|null $resourceIds 资源ID列表。
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
        return $this;
    }

    /**
    * Gets resourceType
    *  关联云日志的资源类型。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 关联云日志的资源类型。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
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

