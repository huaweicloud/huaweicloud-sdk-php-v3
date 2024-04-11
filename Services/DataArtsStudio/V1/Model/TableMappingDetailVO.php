<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableMappingDetailVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableMappingDetailVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码。
    * mappingId  名称。
    * targetAttrId  目的字段ID。
    * targetAttrName  目的字段排序。
    * srcTableIds  源表ID。
    * srcTableNames  源表名称数组。
    * srcTableDbNames  源表db名称数组。
    * srcTableModelIds  源表在关系建模中的模型ID数组。
    * srcTableIdList  源表ID数组。
    * srcAttrIds  源表字段ID。
    * srcAttrNames  源表字段名称数组。
    * srcAttrIdList  源表字段ID数组。
    * remark  备注。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    * targetAttr  目标属性。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'mappingId' => 'string',
            'targetAttrId' => 'int',
            'targetAttrName' => 'string',
            'srcTableIds' => 'string',
            'srcTableNames' => 'string[]',
            'srcTableDbNames' => 'string[]',
            'srcTableModelIds' => 'int[]',
            'srcTableIdList' => 'int[]',
            'srcAttrIds' => 'string',
            'srcAttrNames' => 'string[]',
            'srcAttrIdList' => 'int[]',
            'remark' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'createBy' => 'string',
            'updateBy' => 'string',
            'targetAttr' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码。
    * mappingId  名称。
    * targetAttrId  目的字段ID。
    * targetAttrName  目的字段排序。
    * srcTableIds  源表ID。
    * srcTableNames  源表名称数组。
    * srcTableDbNames  源表db名称数组。
    * srcTableModelIds  源表在关系建模中的模型ID数组。
    * srcTableIdList  源表ID数组。
    * srcAttrIds  源表字段ID。
    * srcAttrNames  源表字段名称数组。
    * srcAttrIdList  源表字段ID数组。
    * remark  备注。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    * targetAttr  目标属性。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'mappingId' => null,
        'targetAttrId' => 'int64',
        'targetAttrName' => null,
        'srcTableIds' => null,
        'srcTableNames' => null,
        'srcTableDbNames' => null,
        'srcTableModelIds' => 'int64',
        'srcTableIdList' => 'int64',
        'srcAttrIds' => null,
        'srcAttrNames' => null,
        'srcAttrIdList' => 'int64',
        'remark' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'createBy' => null,
        'updateBy' => null,
        'targetAttr' => null
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
    * mappingId  名称。
    * targetAttrId  目的字段ID。
    * targetAttrName  目的字段排序。
    * srcTableIds  源表ID。
    * srcTableNames  源表名称数组。
    * srcTableDbNames  源表db名称数组。
    * srcTableModelIds  源表在关系建模中的模型ID数组。
    * srcTableIdList  源表ID数组。
    * srcAttrIds  源表字段ID。
    * srcAttrNames  源表字段名称数组。
    * srcAttrIdList  源表字段ID数组。
    * remark  备注。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    * targetAttr  目标属性。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'mappingId' => 'mapping_id',
            'targetAttrId' => 'target_attr_id',
            'targetAttrName' => 'target_attr_name',
            'srcTableIds' => 'src_table_ids',
            'srcTableNames' => 'src_table_names',
            'srcTableDbNames' => 'src_table_db_names',
            'srcTableModelIds' => 'src_table_model_ids',
            'srcTableIdList' => 'src_table_id_list',
            'srcAttrIds' => 'src_attr_ids',
            'srcAttrNames' => 'src_attr_names',
            'srcAttrIdList' => 'src_attr_id_list',
            'remark' => 'remark',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'createBy' => 'create_by',
            'updateBy' => 'update_by',
            'targetAttr' => 'target_attr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码。
    * mappingId  名称。
    * targetAttrId  目的字段ID。
    * targetAttrName  目的字段排序。
    * srcTableIds  源表ID。
    * srcTableNames  源表名称数组。
    * srcTableDbNames  源表db名称数组。
    * srcTableModelIds  源表在关系建模中的模型ID数组。
    * srcTableIdList  源表ID数组。
    * srcAttrIds  源表字段ID。
    * srcAttrNames  源表字段名称数组。
    * srcAttrIdList  源表字段ID数组。
    * remark  备注。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    * targetAttr  目标属性。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'mappingId' => 'setMappingId',
            'targetAttrId' => 'setTargetAttrId',
            'targetAttrName' => 'setTargetAttrName',
            'srcTableIds' => 'setSrcTableIds',
            'srcTableNames' => 'setSrcTableNames',
            'srcTableDbNames' => 'setSrcTableDbNames',
            'srcTableModelIds' => 'setSrcTableModelIds',
            'srcTableIdList' => 'setSrcTableIdList',
            'srcAttrIds' => 'setSrcAttrIds',
            'srcAttrNames' => 'setSrcAttrNames',
            'srcAttrIdList' => 'setSrcAttrIdList',
            'remark' => 'setRemark',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy',
            'targetAttr' => 'setTargetAttr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码。
    * mappingId  名称。
    * targetAttrId  目的字段ID。
    * targetAttrName  目的字段排序。
    * srcTableIds  源表ID。
    * srcTableNames  源表名称数组。
    * srcTableDbNames  源表db名称数组。
    * srcTableModelIds  源表在关系建模中的模型ID数组。
    * srcTableIdList  源表ID数组。
    * srcAttrIds  源表字段ID。
    * srcAttrNames  源表字段名称数组。
    * srcAttrIdList  源表字段ID数组。
    * remark  备注。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    * targetAttr  目标属性。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'mappingId' => 'getMappingId',
            'targetAttrId' => 'getTargetAttrId',
            'targetAttrName' => 'getTargetAttrName',
            'srcTableIds' => 'getSrcTableIds',
            'srcTableNames' => 'getSrcTableNames',
            'srcTableDbNames' => 'getSrcTableDbNames',
            'srcTableModelIds' => 'getSrcTableModelIds',
            'srcTableIdList' => 'getSrcTableIdList',
            'srcAttrIds' => 'getSrcAttrIds',
            'srcAttrNames' => 'getSrcAttrNames',
            'srcAttrIdList' => 'getSrcAttrIdList',
            'remark' => 'getRemark',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'createBy' => 'getCreateBy',
            'updateBy' => 'getUpdateBy',
            'targetAttr' => 'getTargetAttr'
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
        $this->container['mappingId'] = isset($data['mappingId']) ? $data['mappingId'] : null;
        $this->container['targetAttrId'] = isset($data['targetAttrId']) ? $data['targetAttrId'] : null;
        $this->container['targetAttrName'] = isset($data['targetAttrName']) ? $data['targetAttrName'] : null;
        $this->container['srcTableIds'] = isset($data['srcTableIds']) ? $data['srcTableIds'] : null;
        $this->container['srcTableNames'] = isset($data['srcTableNames']) ? $data['srcTableNames'] : null;
        $this->container['srcTableDbNames'] = isset($data['srcTableDbNames']) ? $data['srcTableDbNames'] : null;
        $this->container['srcTableModelIds'] = isset($data['srcTableModelIds']) ? $data['srcTableModelIds'] : null;
        $this->container['srcTableIdList'] = isset($data['srcTableIdList']) ? $data['srcTableIdList'] : null;
        $this->container['srcAttrIds'] = isset($data['srcAttrIds']) ? $data['srcAttrIds'] : null;
        $this->container['srcAttrNames'] = isset($data['srcAttrNames']) ? $data['srcAttrNames'] : null;
        $this->container['srcAttrIdList'] = isset($data['srcAttrIdList']) ? $data['srcAttrIdList'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['targetAttr'] = isset($data['targetAttr']) ? $data['targetAttr'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetAttrName'] === null) {
            $invalidProperties[] = "'targetAttrName' can't be null";
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
    * Gets mappingId
    *  名称。
    *
    * @return string|null
    */
    public function getMappingId()
    {
        return $this->container['mappingId'];
    }

    /**
    * Sets mappingId
    *
    * @param string|null $mappingId 名称。
    *
    * @return $this
    */
    public function setMappingId($mappingId)
    {
        $this->container['mappingId'] = $mappingId;
        return $this;
    }

    /**
    * Gets targetAttrId
    *  目的字段ID。
    *
    * @return int|null
    */
    public function getTargetAttrId()
    {
        return $this->container['targetAttrId'];
    }

    /**
    * Sets targetAttrId
    *
    * @param int|null $targetAttrId 目的字段ID。
    *
    * @return $this
    */
    public function setTargetAttrId($targetAttrId)
    {
        $this->container['targetAttrId'] = $targetAttrId;
        return $this;
    }

    /**
    * Gets targetAttrName
    *  目的字段排序。
    *
    * @return string
    */
    public function getTargetAttrName()
    {
        return $this->container['targetAttrName'];
    }

    /**
    * Sets targetAttrName
    *
    * @param string $targetAttrName 目的字段排序。
    *
    * @return $this
    */
    public function setTargetAttrName($targetAttrName)
    {
        $this->container['targetAttrName'] = $targetAttrName;
        return $this;
    }

    /**
    * Gets srcTableIds
    *  源表ID。
    *
    * @return string|null
    */
    public function getSrcTableIds()
    {
        return $this->container['srcTableIds'];
    }

    /**
    * Sets srcTableIds
    *
    * @param string|null $srcTableIds 源表ID。
    *
    * @return $this
    */
    public function setSrcTableIds($srcTableIds)
    {
        $this->container['srcTableIds'] = $srcTableIds;
        return $this;
    }

    /**
    * Gets srcTableNames
    *  源表名称数组。
    *
    * @return string[]|null
    */
    public function getSrcTableNames()
    {
        return $this->container['srcTableNames'];
    }

    /**
    * Sets srcTableNames
    *
    * @param string[]|null $srcTableNames 源表名称数组。
    *
    * @return $this
    */
    public function setSrcTableNames($srcTableNames)
    {
        $this->container['srcTableNames'] = $srcTableNames;
        return $this;
    }

    /**
    * Gets srcTableDbNames
    *  源表db名称数组。
    *
    * @return string[]|null
    */
    public function getSrcTableDbNames()
    {
        return $this->container['srcTableDbNames'];
    }

    /**
    * Sets srcTableDbNames
    *
    * @param string[]|null $srcTableDbNames 源表db名称数组。
    *
    * @return $this
    */
    public function setSrcTableDbNames($srcTableDbNames)
    {
        $this->container['srcTableDbNames'] = $srcTableDbNames;
        return $this;
    }

    /**
    * Gets srcTableModelIds
    *  源表在关系建模中的模型ID数组。
    *
    * @return int[]|null
    */
    public function getSrcTableModelIds()
    {
        return $this->container['srcTableModelIds'];
    }

    /**
    * Sets srcTableModelIds
    *
    * @param int[]|null $srcTableModelIds 源表在关系建模中的模型ID数组。
    *
    * @return $this
    */
    public function setSrcTableModelIds($srcTableModelIds)
    {
        $this->container['srcTableModelIds'] = $srcTableModelIds;
        return $this;
    }

    /**
    * Gets srcTableIdList
    *  源表ID数组。
    *
    * @return int[]|null
    */
    public function getSrcTableIdList()
    {
        return $this->container['srcTableIdList'];
    }

    /**
    * Sets srcTableIdList
    *
    * @param int[]|null $srcTableIdList 源表ID数组。
    *
    * @return $this
    */
    public function setSrcTableIdList($srcTableIdList)
    {
        $this->container['srcTableIdList'] = $srcTableIdList;
        return $this;
    }

    /**
    * Gets srcAttrIds
    *  源表字段ID。
    *
    * @return string|null
    */
    public function getSrcAttrIds()
    {
        return $this->container['srcAttrIds'];
    }

    /**
    * Sets srcAttrIds
    *
    * @param string|null $srcAttrIds 源表字段ID。
    *
    * @return $this
    */
    public function setSrcAttrIds($srcAttrIds)
    {
        $this->container['srcAttrIds'] = $srcAttrIds;
        return $this;
    }

    /**
    * Gets srcAttrNames
    *  源表字段名称数组。
    *
    * @return string[]|null
    */
    public function getSrcAttrNames()
    {
        return $this->container['srcAttrNames'];
    }

    /**
    * Sets srcAttrNames
    *
    * @param string[]|null $srcAttrNames 源表字段名称数组。
    *
    * @return $this
    */
    public function setSrcAttrNames($srcAttrNames)
    {
        $this->container['srcAttrNames'] = $srcAttrNames;
        return $this;
    }

    /**
    * Gets srcAttrIdList
    *  源表字段ID数组。
    *
    * @return int[]|null
    */
    public function getSrcAttrIdList()
    {
        return $this->container['srcAttrIdList'];
    }

    /**
    * Sets srcAttrIdList
    *
    * @param int[]|null $srcAttrIdList 源表字段ID数组。
    *
    * @return $this
    */
    public function setSrcAttrIdList($srcAttrIdList)
    {
        $this->container['srcAttrIdList'] = $srcAttrIdList;
        return $this;
    }

    /**
    * Gets remark
    *  备注。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 备注。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
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
    * Gets targetAttr
    *  目标属性。
    *
    * @return object|null
    */
    public function getTargetAttr()
    {
        return $this->container['targetAttr'];
    }

    /**
    * Sets targetAttr
    *
    * @param object|null $targetAttr 目标属性。
    *
    * @return $this
    */
    public function setTargetAttr($targetAttr)
    {
        $this->container['targetAttr'] = $targetAttr;
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

