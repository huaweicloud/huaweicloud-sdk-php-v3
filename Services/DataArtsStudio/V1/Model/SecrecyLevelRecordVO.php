<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecrecyLevelRecordVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecrecyLevelRecordVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  属性关联密级的ID，ID字符串。
    * secrecyLevelId  密级的ID，ID字符串。
    * secrecyLevelName  密级名称。
    * uuid  数据安全主键。
    * slevel  密级等级。
    * description  密级描述。
    * bizId  业务对象ID，ID字符串。
    * bizType  bizType
    * createBy  创建者。
    * updateBy  更新者。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'secrecyLevelId' => 'string',
            'secrecyLevelName' => 'string',
            'uuid' => 'string',
            'slevel' => 'int',
            'description' => 'string',
            'bizId' => 'string',
            'bizType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum',
            'createBy' => 'string',
            'updateBy' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  属性关联密级的ID，ID字符串。
    * secrecyLevelId  密级的ID，ID字符串。
    * secrecyLevelName  密级名称。
    * uuid  数据安全主键。
    * slevel  密级等级。
    * description  密级描述。
    * bizId  业务对象ID，ID字符串。
    * bizType  bizType
    * createBy  创建者。
    * updateBy  更新者。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'secrecyLevelId' => null,
        'secrecyLevelName' => null,
        'uuid' => null,
        'slevel' => 'int32',
        'description' => null,
        'bizId' => null,
        'bizType' => null,
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
    * id  属性关联密级的ID，ID字符串。
    * secrecyLevelId  密级的ID，ID字符串。
    * secrecyLevelName  密级名称。
    * uuid  数据安全主键。
    * slevel  密级等级。
    * description  密级描述。
    * bizId  业务对象ID，ID字符串。
    * bizType  bizType
    * createBy  创建者。
    * updateBy  更新者。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'secrecyLevelId' => 'secrecyLevel_id',
            'secrecyLevelName' => 'secrecyLevel_name',
            'uuid' => 'uuid',
            'slevel' => 'slevel',
            'description' => 'description',
            'bizId' => 'biz_id',
            'bizType' => 'biz_type',
            'createBy' => 'create_by',
            'updateBy' => 'update_by',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  属性关联密级的ID，ID字符串。
    * secrecyLevelId  密级的ID，ID字符串。
    * secrecyLevelName  密级名称。
    * uuid  数据安全主键。
    * slevel  密级等级。
    * description  密级描述。
    * bizId  业务对象ID，ID字符串。
    * bizType  bizType
    * createBy  创建者。
    * updateBy  更新者。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'secrecyLevelId' => 'setSecrecyLevelId',
            'secrecyLevelName' => 'setSecrecyLevelName',
            'uuid' => 'setUuid',
            'slevel' => 'setSlevel',
            'description' => 'setDescription',
            'bizId' => 'setBizId',
            'bizType' => 'setBizType',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  属性关联密级的ID，ID字符串。
    * secrecyLevelId  密级的ID，ID字符串。
    * secrecyLevelName  密级名称。
    * uuid  数据安全主键。
    * slevel  密级等级。
    * description  密级描述。
    * bizId  业务对象ID，ID字符串。
    * bizType  bizType
    * createBy  创建者。
    * updateBy  更新者。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'secrecyLevelId' => 'getSecrecyLevelId',
            'secrecyLevelName' => 'getSecrecyLevelName',
            'uuid' => 'getUuid',
            'slevel' => 'getSlevel',
            'description' => 'getDescription',
            'bizId' => 'getBizId',
            'bizType' => 'getBizType',
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
        $this->container['secrecyLevelId'] = isset($data['secrecyLevelId']) ? $data['secrecyLevelId'] : null;
        $this->container['secrecyLevelName'] = isset($data['secrecyLevelName']) ? $data['secrecyLevelName'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['slevel'] = isset($data['slevel']) ? $data['slevel'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['bizId'] = isset($data['bizId']) ? $data['bizId'] : null;
        $this->container['bizType'] = isset($data['bizType']) ? $data['bizType'] : null;
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
        if ($this->container['secrecyLevelId'] === null) {
            $invalidProperties[] = "'secrecyLevelId' can't be null";
        }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 255)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 600)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 600.";
            }
        if ($this->container['bizId'] === null) {
            $invalidProperties[] = "'bizId' can't be null";
        }
        if ($this->container['bizType'] === null) {
            $invalidProperties[] = "'bizType' can't be null";
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
    *  属性关联密级的ID，ID字符串。
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
    * @param string|null $id 属性关联密级的ID，ID字符串。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets secrecyLevelId
    *  密级的ID，ID字符串。
    *
    * @return string
    */
    public function getSecrecyLevelId()
    {
        return $this->container['secrecyLevelId'];
    }

    /**
    * Sets secrecyLevelId
    *
    * @param string $secrecyLevelId 密级的ID，ID字符串。
    *
    * @return $this
    */
    public function setSecrecyLevelId($secrecyLevelId)
    {
        $this->container['secrecyLevelId'] = $secrecyLevelId;
        return $this;
    }

    /**
    * Gets secrecyLevelName
    *  密级名称。
    *
    * @return string|null
    */
    public function getSecrecyLevelName()
    {
        return $this->container['secrecyLevelName'];
    }

    /**
    * Sets secrecyLevelName
    *
    * @param string|null $secrecyLevelName 密级名称。
    *
    * @return $this
    */
    public function setSecrecyLevelName($secrecyLevelName)
    {
        $this->container['secrecyLevelName'] = $secrecyLevelName;
        return $this;
    }

    /**
    * Gets uuid
    *  数据安全主键。
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid 数据安全主键。
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets slevel
    *  密级等级。
    *
    * @return int|null
    */
    public function getSlevel()
    {
        return $this->container['slevel'];
    }

    /**
    * Sets slevel
    *
    * @param int|null $slevel 密级等级。
    *
    * @return $this
    */
    public function setSlevel($slevel)
    {
        $this->container['slevel'] = $slevel;
        return $this;
    }

    /**
    * Gets description
    *  密级描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 密级描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets bizId
    *  业务对象ID，ID字符串。
    *
    * @return string
    */
    public function getBizId()
    {
        return $this->container['bizId'];
    }

    /**
    * Sets bizId
    *
    * @param string $bizId 业务对象ID，ID字符串。
    *
    * @return $this
    */
    public function setBizId($bizId)
    {
        $this->container['bizId'] = $bizId;
        return $this;
    }

    /**
    * Gets bizType
    *  bizType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum
    */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
    * Sets bizType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum $bizType bizType
    *
    * @return $this
    */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;
        return $this;
    }

    /**
    * Gets createBy
    *  创建者。
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
    * @param string|null $createBy 创建者。
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
    *  更新者。
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
    * @param string|null $updateBy 更新者。
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

