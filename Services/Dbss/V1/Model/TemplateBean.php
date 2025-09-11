<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateBean implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateBean';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbIds  数据库ID
    * dbNames  数据库名称
    * desc  描述
    * frequency  周期
    * group  类型 - COMPREHENSIVE: 综合报表 - COMPLIANCE: 合规报表 - DB_SPECIAL：数据库专项报表 - CLIENT_SPECIAL：客户端专项报表 - SQL_SPECIAL：SQL
    * id  模板ID
    * name  报表模板名称
    * status  状态 - OFF：已关闭 - ON：已开启
    * type  报表类型 - COMPREHENSIVE: 数据库安全综合报表 - COMPLIANCE: 数据库安全合规报表 - SOX: SOX-萨班斯报表 - PCI: 行业标准安全报表 - DB_ANALYSIS: 数据库服务器分析报表 - CLIENT_IP_ANALYSIS: 客户端IP分析报表 - SQL_DCL_COMMAND: DCL命令报表 - SQL_DDL_COMMAND: DDL命令报表 - SQL_DML_COMMAND: DML命令报表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbIds' => 'string',
            'dbNames' => 'string',
            'desc' => 'string',
            'frequency' => 'string',
            'group' => 'string',
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbIds  数据库ID
    * dbNames  数据库名称
    * desc  描述
    * frequency  周期
    * group  类型 - COMPREHENSIVE: 综合报表 - COMPLIANCE: 合规报表 - DB_SPECIAL：数据库专项报表 - CLIENT_SPECIAL：客户端专项报表 - SQL_SPECIAL：SQL
    * id  模板ID
    * name  报表模板名称
    * status  状态 - OFF：已关闭 - ON：已开启
    * type  报表类型 - COMPREHENSIVE: 数据库安全综合报表 - COMPLIANCE: 数据库安全合规报表 - SOX: SOX-萨班斯报表 - PCI: 行业标准安全报表 - DB_ANALYSIS: 数据库服务器分析报表 - CLIENT_IP_ANALYSIS: 客户端IP分析报表 - SQL_DCL_COMMAND: DCL命令报表 - SQL_DDL_COMMAND: DDL命令报表 - SQL_DML_COMMAND: DML命令报表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbIds' => null,
        'dbNames' => null,
        'desc' => null,
        'frequency' => null,
        'group' => null,
        'id' => null,
        'name' => null,
        'status' => null,
        'type' => null
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
    * dbIds  数据库ID
    * dbNames  数据库名称
    * desc  描述
    * frequency  周期
    * group  类型 - COMPREHENSIVE: 综合报表 - COMPLIANCE: 合规报表 - DB_SPECIAL：数据库专项报表 - CLIENT_SPECIAL：客户端专项报表 - SQL_SPECIAL：SQL
    * id  模板ID
    * name  报表模板名称
    * status  状态 - OFF：已关闭 - ON：已开启
    * type  报表类型 - COMPREHENSIVE: 数据库安全综合报表 - COMPLIANCE: 数据库安全合规报表 - SOX: SOX-萨班斯报表 - PCI: 行业标准安全报表 - DB_ANALYSIS: 数据库服务器分析报表 - CLIENT_IP_ANALYSIS: 客户端IP分析报表 - SQL_DCL_COMMAND: DCL命令报表 - SQL_DDL_COMMAND: DDL命令报表 - SQL_DML_COMMAND: DML命令报表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbIds' => 'db_ids',
            'dbNames' => 'db_names',
            'desc' => 'desc',
            'frequency' => 'frequency',
            'group' => 'group',
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbIds  数据库ID
    * dbNames  数据库名称
    * desc  描述
    * frequency  周期
    * group  类型 - COMPREHENSIVE: 综合报表 - COMPLIANCE: 合规报表 - DB_SPECIAL：数据库专项报表 - CLIENT_SPECIAL：客户端专项报表 - SQL_SPECIAL：SQL
    * id  模板ID
    * name  报表模板名称
    * status  状态 - OFF：已关闭 - ON：已开启
    * type  报表类型 - COMPREHENSIVE: 数据库安全综合报表 - COMPLIANCE: 数据库安全合规报表 - SOX: SOX-萨班斯报表 - PCI: 行业标准安全报表 - DB_ANALYSIS: 数据库服务器分析报表 - CLIENT_IP_ANALYSIS: 客户端IP分析报表 - SQL_DCL_COMMAND: DCL命令报表 - SQL_DDL_COMMAND: DDL命令报表 - SQL_DML_COMMAND: DML命令报表
    *
    * @var string[]
    */
    protected static $setters = [
            'dbIds' => 'setDbIds',
            'dbNames' => 'setDbNames',
            'desc' => 'setDesc',
            'frequency' => 'setFrequency',
            'group' => 'setGroup',
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbIds  数据库ID
    * dbNames  数据库名称
    * desc  描述
    * frequency  周期
    * group  类型 - COMPREHENSIVE: 综合报表 - COMPLIANCE: 合规报表 - DB_SPECIAL：数据库专项报表 - CLIENT_SPECIAL：客户端专项报表 - SQL_SPECIAL：SQL
    * id  模板ID
    * name  报表模板名称
    * status  状态 - OFF：已关闭 - ON：已开启
    * type  报表类型 - COMPREHENSIVE: 数据库安全综合报表 - COMPLIANCE: 数据库安全合规报表 - SOX: SOX-萨班斯报表 - PCI: 行业标准安全报表 - DB_ANALYSIS: 数据库服务器分析报表 - CLIENT_IP_ANALYSIS: 客户端IP分析报表 - SQL_DCL_COMMAND: DCL命令报表 - SQL_DDL_COMMAND: DDL命令报表 - SQL_DML_COMMAND: DML命令报表
    *
    * @var string[]
    */
    protected static $getters = [
            'dbIds' => 'getDbIds',
            'dbNames' => 'getDbNames',
            'desc' => 'getDesc',
            'frequency' => 'getFrequency',
            'group' => 'getGroup',
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'type' => 'getType'
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
    const GROUP_COMPREHENSIVE = 'COMPREHENSIVE';
    const GROUP_COMPLIANCE = 'COMPLIANCE';
    const GROUP_DB_SPECIAL = 'DB_SPECIAL';
    const GROUP_CLIENT_SPECIAL = 'CLIENT_SPECIAL';
    const GROUP_SQL_SPECIAL = 'SQL_SPECIAL';
    const STATUS_OFF = 'OFF';
    const STATUS_ON = 'ON';
    const TYPE_COMPREHENSIVE = 'COMPREHENSIVE';
    const TYPE_COMPLIANCE = 'COMPLIANCE';
    const TYPE_SOX = 'SOX';
    const TYPE_PCI = 'PCI';
    const TYPE_DB_ANALYSIS = 'DB_ANALYSIS';
    const TYPE_CLIENT_IP_ANALYSIS = 'CLIENT_IP_ANALYSIS';
    const TYPE_SQL_DCL_COMMAND = 'SQL_DCL_COMMAND';
    const TYPE_SQL_DDL_COMMAND = 'SQL_DDL_COMMAND';
    const TYPE_SQL_DML_COMMAND = 'SQL_DML_COMMAND';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getGroupAllowableValues()
    {
        return [
            self::GROUP_COMPREHENSIVE,
            self::GROUP_COMPLIANCE,
            self::GROUP_DB_SPECIAL,
            self::GROUP_CLIENT_SPECIAL,
            self::GROUP_SQL_SPECIAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OFF,
            self::STATUS_ON,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_COMPREHENSIVE,
            self::TYPE_COMPLIANCE,
            self::TYPE_SOX,
            self::TYPE_PCI,
            self::TYPE_DB_ANALYSIS,
            self::TYPE_CLIENT_IP_ANALYSIS,
            self::TYPE_SQL_DCL_COMMAND,
            self::TYPE_SQL_DDL_COMMAND,
            self::TYPE_SQL_DML_COMMAND,
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
        $this->container['dbIds'] = isset($data['dbIds']) ? $data['dbIds'] : null;
        $this->container['dbNames'] = isset($data['dbNames']) ? $data['dbNames'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getGroupAllowableValues();
                if (!is_null($this->container['group']) && !in_array($this->container['group'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'group', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets dbIds
    *  数据库ID
    *
    * @return string|null
    */
    public function getDbIds()
    {
        return $this->container['dbIds'];
    }

    /**
    * Sets dbIds
    *
    * @param string|null $dbIds 数据库ID
    *
    * @return $this
    */
    public function setDbIds($dbIds)
    {
        $this->container['dbIds'] = $dbIds;
        return $this;
    }

    /**
    * Gets dbNames
    *  数据库名称
    *
    * @return string|null
    */
    public function getDbNames()
    {
        return $this->container['dbNames'];
    }

    /**
    * Sets dbNames
    *
    * @param string|null $dbNames 数据库名称
    *
    * @return $this
    */
    public function setDbNames($dbNames)
    {
        $this->container['dbNames'] = $dbNames;
        return $this;
    }

    /**
    * Gets desc
    *  描述
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 描述
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets frequency
    *  周期
    *
    * @return string|null
    */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
    * Sets frequency
    *
    * @param string|null $frequency 周期
    *
    * @return $this
    */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;
        return $this;
    }

    /**
    * Gets group
    *  类型 - COMPREHENSIVE: 综合报表 - COMPLIANCE: 合规报表 - DB_SPECIAL：数据库专项报表 - CLIENT_SPECIAL：客户端专项报表 - SQL_SPECIAL：SQL
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group 类型 - COMPREHENSIVE: 综合报表 - COMPLIANCE: 合规报表 - DB_SPECIAL：数据库专项报表 - CLIENT_SPECIAL：客户端专项报表 - SQL_SPECIAL：SQL
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets id
    *  模板ID
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
    * @param string|null $id 模板ID
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
    *  报表模板名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 报表模板名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  状态 - OFF：已关闭 - ON：已开启
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
    * @param string|null $status 状态 - OFF：已关闭 - ON：已开启
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  报表类型 - COMPREHENSIVE: 数据库安全综合报表 - COMPLIANCE: 数据库安全合规报表 - SOX: SOX-萨班斯报表 - PCI: 行业标准安全报表 - DB_ANALYSIS: 数据库服务器分析报表 - CLIENT_IP_ANALYSIS: 客户端IP分析报表 - SQL_DCL_COMMAND: DCL命令报表 - SQL_DDL_COMMAND: DDL命令报表 - SQL_DML_COMMAND: DML命令报表
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 报表类型 - COMPREHENSIVE: 数据库安全综合报表 - COMPLIANCE: 数据库安全合规报表 - SOX: SOX-萨班斯报表 - PCI: 行业标准安全报表 - DB_ANALYSIS: 数据库服务器分析报表 - CLIENT_IP_ANALYSIS: 客户端IP分析报表 - SQL_DCL_COMMAND: DCL命令报表 - SQL_DDL_COMMAND: DDL命令报表 - SQL_DML_COMMAND: DML命令报表
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

