<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkspaceVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkspaceVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编号，填写String类型替代Long类型。
    * name  工作区名字。
    * description  描述。
    * isPhysical  是否为物理表。
    * frequent  是否为常用。
    * top  分层治理。
    * level  level
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    * type  工作区类型枚举。 枚举值：   - THIRD_NF: 关系建模   - DIMENSION: 维度建模
    * bizCatalogIds  关联的业务分层的ID列表 {\"l1Ids\":[],\"l2Ids\":[],\"l3Ids\":[]}。
    * databases  数据库名称数组。
    * tableModelPrefix  模型校验前缀，长度不超过100，数字字母下划线组成，字母开头
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'isPhysical' => 'bool',
            'frequent' => 'bool',
            'top' => 'bool',
            'level' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelLevel',
            'dwType' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'createBy' => 'string',
            'updateBy' => 'string',
            'type' => 'string',
            'bizCatalogIds' => 'string',
            'databases' => 'string[]',
            'tableModelPrefix' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编号，填写String类型替代Long类型。
    * name  工作区名字。
    * description  描述。
    * isPhysical  是否为物理表。
    * frequent  是否为常用。
    * top  分层治理。
    * level  level
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    * type  工作区类型枚举。 枚举值：   - THIRD_NF: 关系建模   - DIMENSION: 维度建模
    * bizCatalogIds  关联的业务分层的ID列表 {\"l1Ids\":[],\"l2Ids\":[],\"l3Ids\":[]}。
    * databases  数据库名称数组。
    * tableModelPrefix  模型校验前缀，长度不超过100，数字字母下划线组成，字母开头
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'isPhysical' => null,
        'frequent' => null,
        'top' => null,
        'level' => null,
        'dwType' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'createBy' => null,
        'updateBy' => null,
        'type' => null,
        'bizCatalogIds' => null,
        'databases' => null,
        'tableModelPrefix' => null
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
    * id  编号，填写String类型替代Long类型。
    * name  工作区名字。
    * description  描述。
    * isPhysical  是否为物理表。
    * frequent  是否为常用。
    * top  分层治理。
    * level  level
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    * type  工作区类型枚举。 枚举值：   - THIRD_NF: 关系建模   - DIMENSION: 维度建模
    * bizCatalogIds  关联的业务分层的ID列表 {\"l1Ids\":[],\"l2Ids\":[],\"l3Ids\":[]}。
    * databases  数据库名称数组。
    * tableModelPrefix  模型校验前缀，长度不超过100，数字字母下划线组成，字母开头
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'isPhysical' => 'is_physical',
            'frequent' => 'frequent',
            'top' => 'top',
            'level' => 'level',
            'dwType' => 'dw_type',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'createBy' => 'create_by',
            'updateBy' => 'update_by',
            'type' => 'type',
            'bizCatalogIds' => 'biz_catalog_ids',
            'databases' => 'databases',
            'tableModelPrefix' => 'table_model_prefix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编号，填写String类型替代Long类型。
    * name  工作区名字。
    * description  描述。
    * isPhysical  是否为物理表。
    * frequent  是否为常用。
    * top  分层治理。
    * level  level
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    * type  工作区类型枚举。 枚举值：   - THIRD_NF: 关系建模   - DIMENSION: 维度建模
    * bizCatalogIds  关联的业务分层的ID列表 {\"l1Ids\":[],\"l2Ids\":[],\"l3Ids\":[]}。
    * databases  数据库名称数组。
    * tableModelPrefix  模型校验前缀，长度不超过100，数字字母下划线组成，字母开头
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'isPhysical' => 'setIsPhysical',
            'frequent' => 'setFrequent',
            'top' => 'setTop',
            'level' => 'setLevel',
            'dwType' => 'setDwType',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy',
            'type' => 'setType',
            'bizCatalogIds' => 'setBizCatalogIds',
            'databases' => 'setDatabases',
            'tableModelPrefix' => 'setTableModelPrefix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编号，填写String类型替代Long类型。
    * name  工作区名字。
    * description  描述。
    * isPhysical  是否为物理表。
    * frequent  是否为常用。
    * top  分层治理。
    * level  level
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    * type  工作区类型枚举。 枚举值：   - THIRD_NF: 关系建模   - DIMENSION: 维度建模
    * bizCatalogIds  关联的业务分层的ID列表 {\"l1Ids\":[],\"l2Ids\":[],\"l3Ids\":[]}。
    * databases  数据库名称数组。
    * tableModelPrefix  模型校验前缀，长度不超过100，数字字母下划线组成，字母开头
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'isPhysical' => 'getIsPhysical',
            'frequent' => 'getFrequent',
            'top' => 'getTop',
            'level' => 'getLevel',
            'dwType' => 'getDwType',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'createBy' => 'getCreateBy',
            'updateBy' => 'getUpdateBy',
            'type' => 'getType',
            'bizCatalogIds' => 'getBizCatalogIds',
            'databases' => 'getDatabases',
            'tableModelPrefix' => 'getTableModelPrefix'
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
    const TYPE_THIRD_NF = 'THIRD_NF';
    const TYPE_DIMENSION = 'DIMENSION';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_THIRD_NF,
            self::TYPE_DIMENSION,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isPhysical'] = isset($data['isPhysical']) ? $data['isPhysical'] : null;
        $this->container['frequent'] = isset($data['frequent']) ? $data['frequent'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['dwType'] = isset($data['dwType']) ? $data['dwType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['bizCatalogIds'] = isset($data['bizCatalogIds']) ? $data['bizCatalogIds'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
        $this->container['tableModelPrefix'] = isset($data['tableModelPrefix']) ? $data['tableModelPrefix'] : null;
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
            if ((mb_strlen($this->container['name']) > 250)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 250.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z\\d_]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z\\d_]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 600)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 600.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets id
    *  编号，填写String类型替代Long类型。
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
    * @param string|null $id 编号，填写String类型替代Long类型。
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
    *  工作区名字。
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
    * @param string $name 工作区名字。
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
    * Gets isPhysical
    *  是否为物理表。
    *
    * @return bool|null
    */
    public function getIsPhysical()
    {
        return $this->container['isPhysical'];
    }

    /**
    * Sets isPhysical
    *
    * @param bool|null $isPhysical 是否为物理表。
    *
    * @return $this
    */
    public function setIsPhysical($isPhysical)
    {
        $this->container['isPhysical'] = $isPhysical;
        return $this;
    }

    /**
    * Gets frequent
    *  是否为常用。
    *
    * @return bool|null
    */
    public function getFrequent()
    {
        return $this->container['frequent'];
    }

    /**
    * Sets frequent
    *
    * @param bool|null $frequent 是否为常用。
    *
    * @return $this
    */
    public function setFrequent($frequent)
    {
        $this->container['frequent'] = $frequent;
        return $this;
    }

    /**
    * Gets top
    *  分层治理。
    *
    * @return bool|null
    */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
    * Sets top
    *
    * @param bool|null $top 分层治理。
    *
    * @return $this
    */
    public function setTop($top)
    {
        $this->container['top'] = $top;
        return $this;
    }

    /**
    * Gets level
    *  level
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelLevel|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelLevel|null $level level
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets dwType
    *  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    *
    * @return string|null
    */
    public function getDwType()
    {
        return $this->container['dwType'];
    }

    /**
    * Sets dwType
    *
    * @param string|null $dwType 数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    *
    * @return $this
    */
    public function setDwType($dwType)
    {
        $this->container['dwType'] = $dwType;
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
    * Gets type
    *  工作区类型枚举。 枚举值：   - THIRD_NF: 关系建模   - DIMENSION: 维度建模
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 工作区类型枚举。 枚举值：   - THIRD_NF: 关系建模   - DIMENSION: 维度建模
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets bizCatalogIds
    *  关联的业务分层的ID列表 {\"l1Ids\":[],\"l2Ids\":[],\"l3Ids\":[]}。
    *
    * @return string|null
    */
    public function getBizCatalogIds()
    {
        return $this->container['bizCatalogIds'];
    }

    /**
    * Sets bizCatalogIds
    *
    * @param string|null $bizCatalogIds 关联的业务分层的ID列表 {\"l1Ids\":[],\"l2Ids\":[],\"l3Ids\":[]}。
    *
    * @return $this
    */
    public function setBizCatalogIds($bizCatalogIds)
    {
        $this->container['bizCatalogIds'] = $bizCatalogIds;
        return $this;
    }

    /**
    * Gets databases
    *  数据库名称数组。
    *
    * @return string[]|null
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param string[]|null $databases 数据库名称数组。
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
        return $this;
    }

    /**
    * Gets tableModelPrefix
    *  模型校验前缀，长度不超过100，数字字母下划线组成，字母开头
    *
    * @return string|null
    */
    public function getTableModelPrefix()
    {
        return $this->container['tableModelPrefix'];
    }

    /**
    * Sets tableModelPrefix
    *
    * @param string|null $tableModelPrefix 模型校验前缀，长度不超过100，数字字母下划线组成，字母开头
    *
    * @return $this
    */
    public function setTableModelPrefix($tableModelPrefix)
    {
        $this->container['tableModelPrefix'] = $tableModelPrefix;
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

