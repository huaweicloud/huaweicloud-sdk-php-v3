<?php

namespace HuaweiCloud\SDK\Eps\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrateResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrateResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  资源所属RegionID。迁移OBS服务资源时为必选项。
    * projectId  项目ID。resource_type为region级别服务时为必选项。
    * resourceId  资源ID
    * resourceType  资源类型
    * associated  是否关联迁移。目前仅支持ECS关联资源EVS、EIP迁移。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'projectId' => 'string',
            'resourceId' => 'string',
            'resourceType' => 'string',
            'associated' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  资源所属RegionID。迁移OBS服务资源时为必选项。
    * projectId  项目ID。resource_type为region级别服务时为必选项。
    * resourceId  资源ID
    * resourceType  资源类型
    * associated  是否关联迁移。目前仅支持ECS关联资源EVS、EIP迁移。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'projectId' => null,
        'resourceId' => null,
        'resourceType' => null,
        'associated' => null
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
    * regionId  资源所属RegionID。迁移OBS服务资源时为必选项。
    * projectId  项目ID。resource_type为region级别服务时为必选项。
    * resourceId  资源ID
    * resourceType  资源类型
    * associated  是否关联迁移。目前仅支持ECS关联资源EVS、EIP迁移。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'region_id',
            'projectId' => 'project_id',
            'resourceId' => 'resource_id',
            'resourceType' => 'resource_type',
            'associated' => 'associated'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  资源所属RegionID。迁移OBS服务资源时为必选项。
    * projectId  项目ID。resource_type为region级别服务时为必选项。
    * resourceId  资源ID
    * resourceType  资源类型
    * associated  是否关联迁移。目前仅支持ECS关联资源EVS、EIP迁移。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'projectId' => 'setProjectId',
            'resourceId' => 'setResourceId',
            'resourceType' => 'setResourceType',
            'associated' => 'setAssociated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  资源所属RegionID。迁移OBS服务资源时为必选项。
    * projectId  项目ID。resource_type为region级别服务时为必选项。
    * resourceId  资源ID
    * resourceType  资源类型
    * associated  是否关联迁移。目前仅支持ECS关联资源EVS、EIP迁移。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'projectId' => 'getProjectId',
            'resourceId' => 'getResourceId',
            'resourceType' => 'getResourceType',
            'associated' => 'getAssociated'
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['associated'] = isset($data['associated']) ? $data['associated'] : false;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
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
    * Gets regionId
    *  资源所属RegionID。迁移OBS服务资源时为必选项。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 资源所属RegionID。迁移OBS服务资源时为必选项。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID。resource_type为region级别服务时为必选项。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID。resource_type为region级别服务时为必选项。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID
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
    * @param string $resourceId 资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型
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
    * @param string $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets associated
    *  是否关联迁移。目前仅支持ECS关联资源EVS、EIP迁移。
    *
    * @return bool|null
    */
    public function getAssociated()
    {
        return $this->container['associated'];
    }

    /**
    * Sets associated
    *
    * @param bool|null $associated 是否关联迁移。目前仅支持ECS关联资源EVS、EIP迁移。
    *
    * @return $this
    */
    public function setAssociated($associated)
    {
        $this->container['associated'] = $associated;
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

