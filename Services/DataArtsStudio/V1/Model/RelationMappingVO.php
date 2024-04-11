<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RelationMappingVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RelationMappingVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码。
    * relationId  关系ID。
    * sourceFieldId  源字段ID。
    * targetFieldId  目标字段ID。
    * sourceFieldName  源表名称。
    * targetFieldName  目的表名称。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'relationId' => 'int',
            'sourceFieldId' => 'int',
            'targetFieldId' => 'int',
            'sourceFieldName' => 'string',
            'targetFieldName' => 'string',
            'createBy' => 'string',
            'updateBy' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码。
    * relationId  关系ID。
    * sourceFieldId  源字段ID。
    * targetFieldId  目标字段ID。
    * sourceFieldName  源表名称。
    * targetFieldName  目的表名称。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'relationId' => 'int64',
        'sourceFieldId' => 'int64',
        'targetFieldId' => 'int64',
        'sourceFieldName' => null,
        'targetFieldName' => null,
        'createBy' => null,
        'updateBy' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time'
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
    * id  编码。
    * relationId  关系ID。
    * sourceFieldId  源字段ID。
    * targetFieldId  目标字段ID。
    * sourceFieldName  源表名称。
    * targetFieldName  目的表名称。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'relationId' => 'relation_id',
            'sourceFieldId' => 'source_field_id',
            'targetFieldId' => 'target_field_id',
            'sourceFieldName' => 'source_field_name',
            'targetFieldName' => 'target_field_name',
            'createBy' => 'create_by',
            'updateBy' => 'update_by',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码。
    * relationId  关系ID。
    * sourceFieldId  源字段ID。
    * targetFieldId  目标字段ID。
    * sourceFieldName  源表名称。
    * targetFieldName  目的表名称。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'relationId' => 'setRelationId',
            'sourceFieldId' => 'setSourceFieldId',
            'targetFieldId' => 'setTargetFieldId',
            'sourceFieldName' => 'setSourceFieldName',
            'targetFieldName' => 'setTargetFieldName',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码。
    * relationId  关系ID。
    * sourceFieldId  源字段ID。
    * targetFieldId  目标字段ID。
    * sourceFieldName  源表名称。
    * targetFieldName  目的表名称。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'relationId' => 'getRelationId',
            'sourceFieldId' => 'getSourceFieldId',
            'targetFieldId' => 'getTargetFieldId',
            'sourceFieldName' => 'getSourceFieldName',
            'targetFieldName' => 'getTargetFieldName',
            'createBy' => 'getCreateBy',
            'updateBy' => 'getUpdateBy',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['relationId'] = isset($data['relationId']) ? $data['relationId'] : null;
        $this->container['sourceFieldId'] = isset($data['sourceFieldId']) ? $data['sourceFieldId'] : null;
        $this->container['targetFieldId'] = isset($data['targetFieldId']) ? $data['targetFieldId'] : null;
        $this->container['sourceFieldName'] = isset($data['sourceFieldName']) ? $data['sourceFieldName'] : null;
        $this->container['targetFieldName'] = isset($data['targetFieldName']) ? $data['targetFieldName'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
    * Gets id
    *  编码。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 编码。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets relationId
    *  关系ID。
    *
    * @return int|null
    */
    public function getRelationId()
    {
        return $this->container['relationId'];
    }

    /**
    * Sets relationId
    *
    * @param int|null $relationId 关系ID。
    *
    * @return $this
    */
    public function setRelationId($relationId)
    {
        $this->container['relationId'] = $relationId;
        return $this;
    }

    /**
    * Gets sourceFieldId
    *  源字段ID。
    *
    * @return int|null
    */
    public function getSourceFieldId()
    {
        return $this->container['sourceFieldId'];
    }

    /**
    * Sets sourceFieldId
    *
    * @param int|null $sourceFieldId 源字段ID。
    *
    * @return $this
    */
    public function setSourceFieldId($sourceFieldId)
    {
        $this->container['sourceFieldId'] = $sourceFieldId;
        return $this;
    }

    /**
    * Gets targetFieldId
    *  目标字段ID。
    *
    * @return int|null
    */
    public function getTargetFieldId()
    {
        return $this->container['targetFieldId'];
    }

    /**
    * Sets targetFieldId
    *
    * @param int|null $targetFieldId 目标字段ID。
    *
    * @return $this
    */
    public function setTargetFieldId($targetFieldId)
    {
        $this->container['targetFieldId'] = $targetFieldId;
        return $this;
    }

    /**
    * Gets sourceFieldName
    *  源表名称。
    *
    * @return string|null
    */
    public function getSourceFieldName()
    {
        return $this->container['sourceFieldName'];
    }

    /**
    * Sets sourceFieldName
    *
    * @param string|null $sourceFieldName 源表名称。
    *
    * @return $this
    */
    public function setSourceFieldName($sourceFieldName)
    {
        $this->container['sourceFieldName'] = $sourceFieldName;
        return $this;
    }

    /**
    * Gets targetFieldName
    *  目的表名称。
    *
    * @return string|null
    */
    public function getTargetFieldName()
    {
        return $this->container['targetFieldName'];
    }

    /**
    * Sets targetFieldName
    *
    * @param string|null $targetFieldName 目的表名称。
    *
    * @return $this
    */
    public function setTargetFieldName($targetFieldName)
    {
        $this->container['targetFieldName'] = $targetFieldName;
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
    *  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
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
    * @param \DateTime|null $createTime 创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
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
    *  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
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
    * @param \DateTime|null $updateTime 更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

