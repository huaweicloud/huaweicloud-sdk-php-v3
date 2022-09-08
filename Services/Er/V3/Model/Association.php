<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Association implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Association';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  关联唯一标识
    * routeTableId  路由表唯一标识
    * attachmentId  连接唯一标识
    * resourceType  连接的类型
    * resourceId  连接的资源唯一标识
    * state  状态
    * createdAt  资源创建时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    * updatedAt  资源更新时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    * routePolicy  routePolicy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'routeTableId' => 'string',
            'attachmentId' => 'string',
            'resourceType' => 'string',
            'resourceId' => 'string',
            'state' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'routePolicy' => '\HuaweiCloud\SDK\Er\V3\Model\ExportRoutePolicy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  关联唯一标识
    * routeTableId  路由表唯一标识
    * attachmentId  连接唯一标识
    * resourceType  连接的类型
    * resourceId  连接的资源唯一标识
    * state  状态
    * createdAt  资源创建时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    * updatedAt  资源更新时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    * routePolicy  routePolicy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'routeTableId' => null,
        'attachmentId' => null,
        'resourceType' => null,
        'resourceId' => null,
        'state' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'routePolicy' => null
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
    * id  关联唯一标识
    * routeTableId  路由表唯一标识
    * attachmentId  连接唯一标识
    * resourceType  连接的类型
    * resourceId  连接的资源唯一标识
    * state  状态
    * createdAt  资源创建时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    * updatedAt  资源更新时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    * routePolicy  routePolicy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'routeTableId' => 'route_table_id',
            'attachmentId' => 'attachment_id',
            'resourceType' => 'resource_type',
            'resourceId' => 'resource_id',
            'state' => 'state',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'routePolicy' => 'route_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  关联唯一标识
    * routeTableId  路由表唯一标识
    * attachmentId  连接唯一标识
    * resourceType  连接的类型
    * resourceId  连接的资源唯一标识
    * state  状态
    * createdAt  资源创建时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    * updatedAt  资源更新时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    * routePolicy  routePolicy
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'routeTableId' => 'setRouteTableId',
            'attachmentId' => 'setAttachmentId',
            'resourceType' => 'setResourceType',
            'resourceId' => 'setResourceId',
            'state' => 'setState',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'routePolicy' => 'setRoutePolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  关联唯一标识
    * routeTableId  路由表唯一标识
    * attachmentId  连接唯一标识
    * resourceType  连接的类型
    * resourceId  连接的资源唯一标识
    * state  状态
    * createdAt  资源创建时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    * updatedAt  资源更新时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    * routePolicy  routePolicy
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'routeTableId' => 'getRouteTableId',
            'attachmentId' => 'getAttachmentId',
            'resourceType' => 'getResourceType',
            'resourceId' => 'getResourceId',
            'state' => 'getState',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'routePolicy' => 'getRoutePolicy'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['routeTableId'] = isset($data['routeTableId']) ? $data['routeTableId'] : null;
        $this->container['attachmentId'] = isset($data['attachmentId']) ? $data['attachmentId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['routePolicy'] = isset($data['routePolicy']) ? $data['routePolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && !preg_match("/[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/.";
            }
            if (!is_null($this->container['routeTableId']) && (mb_strlen($this->container['routeTableId']) > 36)) {
                $invalidProperties[] = "invalid value for 'routeTableId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['routeTableId']) && !preg_match("/[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/", $this->container['routeTableId'])) {
                $invalidProperties[] = "invalid value for 'routeTableId', must be conform to the pattern /[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/.";
            }
            if (!is_null($this->container['attachmentId']) && (mb_strlen($this->container['attachmentId']) > 36)) {
                $invalidProperties[] = "invalid value for 'attachmentId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['attachmentId']) && !preg_match("/[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/", $this->container['attachmentId'])) {
                $invalidProperties[] = "invalid value for 'attachmentId', must be conform to the pattern /[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/.";
            }
            if (!is_null($this->container['resourceId']) && !preg_match("/[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/.";
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
    * Gets id
    *  关联唯一标识
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
    * @param string|null $id 关联唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets routeTableId
    *  路由表唯一标识
    *
    * @return string|null
    */
    public function getRouteTableId()
    {
        return $this->container['routeTableId'];
    }

    /**
    * Sets routeTableId
    *
    * @param string|null $routeTableId 路由表唯一标识
    *
    * @return $this
    */
    public function setRouteTableId($routeTableId)
    {
        $this->container['routeTableId'] = $routeTableId;
        return $this;
    }

    /**
    * Gets attachmentId
    *  连接唯一标识
    *
    * @return string|null
    */
    public function getAttachmentId()
    {
        return $this->container['attachmentId'];
    }

    /**
    * Sets attachmentId
    *
    * @param string|null $attachmentId 连接唯一标识
    *
    * @return $this
    */
    public function setAttachmentId($attachmentId)
    {
        $this->container['attachmentId'] = $attachmentId;
        return $this;
    }

    /**
    * Gets resourceType
    *  连接的类型
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
    * @param string|null $resourceType 连接的类型
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
    *  连接的资源唯一标识
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 连接的资源唯一标识
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets state
    *  状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets createdAt
    *  资源创建时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 资源创建时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  资源更新时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 资源更新时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets routePolicy
    *  routePolicy
    *
    * @return \HuaweiCloud\SDK\Er\V3\Model\ExportRoutePolicy|null
    */
    public function getRoutePolicy()
    {
        return $this->container['routePolicy'];
    }

    /**
    * Sets routePolicy
    *
    * @param \HuaweiCloud\SDK\Er\V3\Model\ExportRoutePolicy|null $routePolicy routePolicy
    *
    * @return $this
    */
    public function setRoutePolicy($routePolicy)
    {
        $this->container['routePolicy'] = $routePolicy;
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

