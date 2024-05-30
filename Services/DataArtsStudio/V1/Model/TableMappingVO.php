<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableMappingVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableMappingVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码，填写String类型替代Long类型。
    * name  名称。
    * description  描述。
    * targetTableId  目的表ID，填写String类型替代Long类型。
    * srcModelId  来源表在关系建模中的模型ID，填写String类型替代Long类型。
    * srcModelName  来源模型名称。
    * viewText  采集的视图来源，dws视图逆向使用。
    * targetTableName  目的表名称。
    * details  详情。
    * sourceTables  映射的表信息。
    * sourceFields  映射的字段信息。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'targetTableId' => 'string',
            'srcModelId' => 'string',
            'srcModelName' => 'string',
            'viewText' => 'string',
            'targetTableName' => 'string',
            'details' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableMappingDetailVO[]',
            'sourceTables' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\MappingSourceTableVO[]',
            'sourceFields' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\MappingSourceFieldVO[]',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'createBy' => 'string',
            'updateBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码，填写String类型替代Long类型。
    * name  名称。
    * description  描述。
    * targetTableId  目的表ID，填写String类型替代Long类型。
    * srcModelId  来源表在关系建模中的模型ID，填写String类型替代Long类型。
    * srcModelName  来源模型名称。
    * viewText  采集的视图来源，dws视图逆向使用。
    * targetTableName  目的表名称。
    * details  详情。
    * sourceTables  映射的表信息。
    * sourceFields  映射的字段信息。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'targetTableId' => null,
        'srcModelId' => null,
        'srcModelName' => null,
        'viewText' => null,
        'targetTableName' => null,
        'details' => null,
        'sourceTables' => null,
        'sourceFields' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'createBy' => null,
        'updateBy' => null
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
    * id  编码，填写String类型替代Long类型。
    * name  名称。
    * description  描述。
    * targetTableId  目的表ID，填写String类型替代Long类型。
    * srcModelId  来源表在关系建模中的模型ID，填写String类型替代Long类型。
    * srcModelName  来源模型名称。
    * viewText  采集的视图来源，dws视图逆向使用。
    * targetTableName  目的表名称。
    * details  详情。
    * sourceTables  映射的表信息。
    * sourceFields  映射的字段信息。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'targetTableId' => 'target_table_id',
            'srcModelId' => 'src_model_id',
            'srcModelName' => 'src_model_name',
            'viewText' => 'view_text',
            'targetTableName' => 'target_table_name',
            'details' => 'details',
            'sourceTables' => 'source_tables',
            'sourceFields' => 'source_fields',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'createBy' => 'create_by',
            'updateBy' => 'update_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码，填写String类型替代Long类型。
    * name  名称。
    * description  描述。
    * targetTableId  目的表ID，填写String类型替代Long类型。
    * srcModelId  来源表在关系建模中的模型ID，填写String类型替代Long类型。
    * srcModelName  来源模型名称。
    * viewText  采集的视图来源，dws视图逆向使用。
    * targetTableName  目的表名称。
    * details  详情。
    * sourceTables  映射的表信息。
    * sourceFields  映射的字段信息。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'targetTableId' => 'setTargetTableId',
            'srcModelId' => 'setSrcModelId',
            'srcModelName' => 'setSrcModelName',
            'viewText' => 'setViewText',
            'targetTableName' => 'setTargetTableName',
            'details' => 'setDetails',
            'sourceTables' => 'setSourceTables',
            'sourceFields' => 'setSourceFields',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码，填写String类型替代Long类型。
    * name  名称。
    * description  描述。
    * targetTableId  目的表ID，填写String类型替代Long类型。
    * srcModelId  来源表在关系建模中的模型ID，填写String类型替代Long类型。
    * srcModelName  来源模型名称。
    * viewText  采集的视图来源，dws视图逆向使用。
    * targetTableName  目的表名称。
    * details  详情。
    * sourceTables  映射的表信息。
    * sourceFields  映射的字段信息。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'targetTableId' => 'getTargetTableId',
            'srcModelId' => 'getSrcModelId',
            'srcModelName' => 'getSrcModelName',
            'viewText' => 'getViewText',
            'targetTableName' => 'getTargetTableName',
            'details' => 'getDetails',
            'sourceTables' => 'getSourceTables',
            'sourceFields' => 'getSourceFields',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'createBy' => 'getCreateBy',
            'updateBy' => 'getUpdateBy'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['targetTableId'] = isset($data['targetTableId']) ? $data['targetTableId'] : null;
        $this->container['srcModelId'] = isset($data['srcModelId']) ? $data['srcModelId'] : null;
        $this->container['srcModelName'] = isset($data['srcModelName']) ? $data['srcModelName'] : null;
        $this->container['viewText'] = isset($data['viewText']) ? $data['viewText'] : null;
        $this->container['targetTableName'] = isset($data['targetTableName']) ? $data['targetTableName'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['sourceTables'] = isset($data['sourceTables']) ? $data['sourceTables'] : null;
        $this->container['sourceFields'] = isset($data['sourceFields']) ? $data['sourceFields'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
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
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 600)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 600.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^\\\\\\\\]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^\\\\\\\\]*$/.";
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
    *  编码，填写String类型替代Long类型。
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
    * @param string|null $id 编码，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  名称。
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
    * @param string $name 名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  描述。
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
    * @param string|null $description 描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets targetTableId
    *  目的表ID，填写String类型替代Long类型。
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
    * @param string|null $targetTableId 目的表ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setTargetTableId($targetTableId)
    {
        $this->container['targetTableId'] = $targetTableId;
        return $this;
    }

    /**
    * Gets srcModelId
    *  来源表在关系建模中的模型ID，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getSrcModelId()
    {
        return $this->container['srcModelId'];
    }

    /**
    * Sets srcModelId
    *
    * @param string|null $srcModelId 来源表在关系建模中的模型ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setSrcModelId($srcModelId)
    {
        $this->container['srcModelId'] = $srcModelId;
        return $this;
    }

    /**
    * Gets srcModelName
    *  来源模型名称。
    *
    * @return string|null
    */
    public function getSrcModelName()
    {
        return $this->container['srcModelName'];
    }

    /**
    * Sets srcModelName
    *
    * @param string|null $srcModelName 来源模型名称。
    *
    * @return $this
    */
    public function setSrcModelName($srcModelName)
    {
        $this->container['srcModelName'] = $srcModelName;
        return $this;
    }

    /**
    * Gets viewText
    *  采集的视图来源，dws视图逆向使用。
    *
    * @return string|null
    */
    public function getViewText()
    {
        return $this->container['viewText'];
    }

    /**
    * Sets viewText
    *
    * @param string|null $viewText 采集的视图来源，dws视图逆向使用。
    *
    * @return $this
    */
    public function setViewText($viewText)
    {
        $this->container['viewText'] = $viewText;
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
    * Gets details
    *  详情。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableMappingDetailVO[]|null
    */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
    * Sets details
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableMappingDetailVO[]|null $details 详情。
    *
    * @return $this
    */
    public function setDetails($details)
    {
        $this->container['details'] = $details;
        return $this;
    }

    /**
    * Gets sourceTables
    *  映射的表信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\MappingSourceTableVO[]|null
    */
    public function getSourceTables()
    {
        return $this->container['sourceTables'];
    }

    /**
    * Sets sourceTables
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\MappingSourceTableVO[]|null $sourceTables 映射的表信息。
    *
    * @return $this
    */
    public function setSourceTables($sourceTables)
    {
        $this->container['sourceTables'] = $sourceTables;
        return $this;
    }

    /**
    * Gets sourceFields
    *  映射的字段信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\MappingSourceFieldVO[]|null
    */
    public function getSourceFields()
    {
        return $this->container['sourceFields'];
    }

    /**
    * Sets sourceFields
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\MappingSourceFieldVO[]|null $sourceFields 映射的字段信息。
    *
    * @return $this
    */
    public function setSourceFields($sourceFields)
    {
        $this->container['sourceFields'] = $sourceFields;
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

