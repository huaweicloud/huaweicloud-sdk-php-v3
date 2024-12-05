<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RelationVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RelationVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码，ID字符串。
    * sourceTableId  源表ID，ID字符串。
    * targetTableId  目标表ID，ID字符串。
    * name  关系名称。
    * sourceTableName  源表名称。
    * targetTableName  目的表名称。
    * role  角色。
    * tenantId  租户ID。
    * sourceType  sourceType
    * targetType  targetType
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * mappings  表属性信息，只读。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'sourceTableId' => 'string',
            'targetTableId' => 'string',
            'name' => 'string',
            'sourceTableName' => 'string',
            'targetTableName' => 'string',
            'role' => 'string',
            'tenantId' => 'string',
            'sourceType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RelationType',
            'targetType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RelationType',
            'createBy' => 'string',
            'updateBy' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'mappings' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RelationMappingVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码，ID字符串。
    * sourceTableId  源表ID，ID字符串。
    * targetTableId  目标表ID，ID字符串。
    * name  关系名称。
    * sourceTableName  源表名称。
    * targetTableName  目的表名称。
    * role  角色。
    * tenantId  租户ID。
    * sourceType  sourceType
    * targetType  targetType
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * mappings  表属性信息，只读。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'sourceTableId' => null,
        'targetTableId' => null,
        'name' => null,
        'sourceTableName' => null,
        'targetTableName' => null,
        'role' => null,
        'tenantId' => null,
        'sourceType' => null,
        'targetType' => null,
        'createBy' => null,
        'updateBy' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'mappings' => null
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
    * id  编码，ID字符串。
    * sourceTableId  源表ID，ID字符串。
    * targetTableId  目标表ID，ID字符串。
    * name  关系名称。
    * sourceTableName  源表名称。
    * targetTableName  目的表名称。
    * role  角色。
    * tenantId  租户ID。
    * sourceType  sourceType
    * targetType  targetType
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * mappings  表属性信息，只读。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'sourceTableId' => 'source_table_id',
            'targetTableId' => 'target_table_id',
            'name' => 'name',
            'sourceTableName' => 'source_table_name',
            'targetTableName' => 'target_table_name',
            'role' => 'role',
            'tenantId' => 'tenant_id',
            'sourceType' => 'source_type',
            'targetType' => 'target_type',
            'createBy' => 'create_by',
            'updateBy' => 'update_by',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'mappings' => 'mappings'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码，ID字符串。
    * sourceTableId  源表ID，ID字符串。
    * targetTableId  目标表ID，ID字符串。
    * name  关系名称。
    * sourceTableName  源表名称。
    * targetTableName  目的表名称。
    * role  角色。
    * tenantId  租户ID。
    * sourceType  sourceType
    * targetType  targetType
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * mappings  表属性信息，只读。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'sourceTableId' => 'setSourceTableId',
            'targetTableId' => 'setTargetTableId',
            'name' => 'setName',
            'sourceTableName' => 'setSourceTableName',
            'targetTableName' => 'setTargetTableName',
            'role' => 'setRole',
            'tenantId' => 'setTenantId',
            'sourceType' => 'setSourceType',
            'targetType' => 'setTargetType',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'mappings' => 'setMappings'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码，ID字符串。
    * sourceTableId  源表ID，ID字符串。
    * targetTableId  目标表ID，ID字符串。
    * name  关系名称。
    * sourceTableName  源表名称。
    * targetTableName  目的表名称。
    * role  角色。
    * tenantId  租户ID。
    * sourceType  sourceType
    * targetType  targetType
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * mappings  表属性信息，只读。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'sourceTableId' => 'getSourceTableId',
            'targetTableId' => 'getTargetTableId',
            'name' => 'getName',
            'sourceTableName' => 'getSourceTableName',
            'targetTableName' => 'getTargetTableName',
            'role' => 'getRole',
            'tenantId' => 'getTenantId',
            'sourceType' => 'getSourceType',
            'targetType' => 'getTargetType',
            'createBy' => 'getCreateBy',
            'updateBy' => 'getUpdateBy',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'mappings' => 'getMappings'
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
        $this->container['sourceTableId'] = isset($data['sourceTableId']) ? $data['sourceTableId'] : null;
        $this->container['targetTableId'] = isset($data['targetTableId']) ? $data['targetTableId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sourceTableName'] = isset($data['sourceTableName']) ? $data['sourceTableName'] : null;
        $this->container['targetTableName'] = isset($data['targetTableName']) ? $data['targetTableName'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['mappings'] = isset($data['mappings']) ? $data['mappings'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    *  编码，ID字符串。
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
    * @param string|null $id 编码，ID字符串。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets sourceTableId
    *  源表ID，ID字符串。
    *
    * @return string|null
    */
    public function getSourceTableId()
    {
        return $this->container['sourceTableId'];
    }

    /**
    * Sets sourceTableId
    *
    * @param string|null $sourceTableId 源表ID，ID字符串。
    *
    * @return $this
    */
    public function setSourceTableId($sourceTableId)
    {
        $this->container['sourceTableId'] = $sourceTableId;
        return $this;
    }

    /**
    * Gets targetTableId
    *  目标表ID，ID字符串。
    *
    * @return string|null
    */
    public function getTargetTableId()
    {
        return $this->container['targetTableId'];
    }

    /**
    * Sets targetTableId
    *
    * @param string|null $targetTableId 目标表ID，ID字符串。
    *
    * @return $this
    */
    public function setTargetTableId($targetTableId)
    {
        $this->container['targetTableId'] = $targetTableId;
        return $this;
    }

    /**
    * Gets name
    *  关系名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 关系名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sourceTableName
    *  源表名称。
    *
    * @return string|null
    */
    public function getSourceTableName()
    {
        return $this->container['sourceTableName'];
    }

    /**
    * Sets sourceTableName
    *
    * @param string|null $sourceTableName 源表名称。
    *
    * @return $this
    */
    public function setSourceTableName($sourceTableName)
    {
        $this->container['sourceTableName'] = $sourceTableName;
        return $this;
    }

    /**
    * Gets targetTableName
    *  目的表名称。
    *
    * @return string|null
    */
    public function getTargetTableName()
    {
        return $this->container['targetTableName'];
    }

    /**
    * Sets targetTableName
    *
    * @param string|null $targetTableName 目的表名称。
    *
    * @return $this
    */
    public function setTargetTableName($targetTableName)
    {
        $this->container['targetTableName'] = $targetTableName;
        return $this;
    }

    /**
    * Gets role
    *  角色。
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role 角色。
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户ID。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets sourceType
    *  sourceType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\RelationType|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\RelationType|null $sourceType sourceType
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets targetType
    *  targetType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\RelationType|null
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\RelationType|null $targetType targetType
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人。
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建人。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets updateBy
    *  更新人。
    *
    * @return string|null
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string|null $updateBy 更新人。
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets mappings
    *  表属性信息，只读。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\RelationMappingVO[]|null
    */
    public function getMappings()
    {
        return $this->container['mappings'];
    }

    /**
    * Sets mappings
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\RelationMappingVO[]|null $mappings 表属性信息，只读。
    *
    * @return $this
    */
    public function setMappings($mappings)
    {
        $this->container['mappings'] = $mappings;
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

