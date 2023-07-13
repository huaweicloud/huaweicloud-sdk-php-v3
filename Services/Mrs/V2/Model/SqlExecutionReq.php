<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlExecutionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlExecutionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlType  SQL类型。目前仅支持“presto”类型的SQL。 说明： - 只有包含Presto组件的集群才能提交执行presto类型的SQL。 - 当前仅MRS 2.0.6版本的MRS 2.0.6.1补丁、MRS 2.1.0版本的MRS 2.1.0.7补丁、MRS 3.1.2及之后版本集群支持。
    * sqlContent  待执行的SQL语句。 说明： 目前仅支持执行单条语句，语句中不包含“;”。
    * database  执行SQL所在的数据库，默认为default。
    * archivePath  SQL执行结果的转储文件夹。 说明： 只有select语句才会转储查询的结果。当前仅支持转储到OBS中。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlType' => 'string',
            'sqlContent' => 'string',
            'database' => 'string',
            'archivePath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlType  SQL类型。目前仅支持“presto”类型的SQL。 说明： - 只有包含Presto组件的集群才能提交执行presto类型的SQL。 - 当前仅MRS 2.0.6版本的MRS 2.0.6.1补丁、MRS 2.1.0版本的MRS 2.1.0.7补丁、MRS 3.1.2及之后版本集群支持。
    * sqlContent  待执行的SQL语句。 说明： 目前仅支持执行单条语句，语句中不包含“;”。
    * database  执行SQL所在的数据库，默认为default。
    * archivePath  SQL执行结果的转储文件夹。 说明： 只有select语句才会转储查询的结果。当前仅支持转储到OBS中。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlType' => null,
        'sqlContent' => null,
        'database' => null,
        'archivePath' => null
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
    * sqlType  SQL类型。目前仅支持“presto”类型的SQL。 说明： - 只有包含Presto组件的集群才能提交执行presto类型的SQL。 - 当前仅MRS 2.0.6版本的MRS 2.0.6.1补丁、MRS 2.1.0版本的MRS 2.1.0.7补丁、MRS 3.1.2及之后版本集群支持。
    * sqlContent  待执行的SQL语句。 说明： 目前仅支持执行单条语句，语句中不包含“;”。
    * database  执行SQL所在的数据库，默认为default。
    * archivePath  SQL执行结果的转储文件夹。 说明： 只有select语句才会转储查询的结果。当前仅支持转储到OBS中。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlType' => 'sql_type',
            'sqlContent' => 'sql_content',
            'database' => 'database',
            'archivePath' => 'archive_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlType  SQL类型。目前仅支持“presto”类型的SQL。 说明： - 只有包含Presto组件的集群才能提交执行presto类型的SQL。 - 当前仅MRS 2.0.6版本的MRS 2.0.6.1补丁、MRS 2.1.0版本的MRS 2.1.0.7补丁、MRS 3.1.2及之后版本集群支持。
    * sqlContent  待执行的SQL语句。 说明： 目前仅支持执行单条语句，语句中不包含“;”。
    * database  执行SQL所在的数据库，默认为default。
    * archivePath  SQL执行结果的转储文件夹。 说明： 只有select语句才会转储查询的结果。当前仅支持转储到OBS中。
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlType' => 'setSqlType',
            'sqlContent' => 'setSqlContent',
            'database' => 'setDatabase',
            'archivePath' => 'setArchivePath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlType  SQL类型。目前仅支持“presto”类型的SQL。 说明： - 只有包含Presto组件的集群才能提交执行presto类型的SQL。 - 当前仅MRS 2.0.6版本的MRS 2.0.6.1补丁、MRS 2.1.0版本的MRS 2.1.0.7补丁、MRS 3.1.2及之后版本集群支持。
    * sqlContent  待执行的SQL语句。 说明： 目前仅支持执行单条语句，语句中不包含“;”。
    * database  执行SQL所在的数据库，默认为default。
    * archivePath  SQL执行结果的转储文件夹。 说明： 只有select语句才会转储查询的结果。当前仅支持转储到OBS中。
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlType' => 'getSqlType',
            'sqlContent' => 'getSqlContent',
            'database' => 'getDatabase',
            'archivePath' => 'getArchivePath'
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
        $this->container['sqlType'] = isset($data['sqlType']) ? $data['sqlType'] : null;
        $this->container['sqlContent'] = isset($data['sqlContent']) ? $data['sqlContent'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['archivePath'] = isset($data['archivePath']) ? $data['archivePath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sqlType'] === null) {
            $invalidProperties[] = "'sqlType' can't be null";
        }
        if ($this->container['sqlContent'] === null) {
            $invalidProperties[] = "'sqlContent' can't be null";
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
    * Gets sqlType
    *  SQL类型。目前仅支持“presto”类型的SQL。 说明： - 只有包含Presto组件的集群才能提交执行presto类型的SQL。 - 当前仅MRS 2.0.6版本的MRS 2.0.6.1补丁、MRS 2.1.0版本的MRS 2.1.0.7补丁、MRS 3.1.2及之后版本集群支持。
    *
    * @return string
    */
    public function getSqlType()
    {
        return $this->container['sqlType'];
    }

    /**
    * Sets sqlType
    *
    * @param string $sqlType SQL类型。目前仅支持“presto”类型的SQL。 说明： - 只有包含Presto组件的集群才能提交执行presto类型的SQL。 - 当前仅MRS 2.0.6版本的MRS 2.0.6.1补丁、MRS 2.1.0版本的MRS 2.1.0.7补丁、MRS 3.1.2及之后版本集群支持。
    *
    * @return $this
    */
    public function setSqlType($sqlType)
    {
        $this->container['sqlType'] = $sqlType;
        return $this;
    }

    /**
    * Gets sqlContent
    *  待执行的SQL语句。 说明： 目前仅支持执行单条语句，语句中不包含“;”。
    *
    * @return string
    */
    public function getSqlContent()
    {
        return $this->container['sqlContent'];
    }

    /**
    * Sets sqlContent
    *
    * @param string $sqlContent 待执行的SQL语句。 说明： 目前仅支持执行单条语句，语句中不包含“;”。
    *
    * @return $this
    */
    public function setSqlContent($sqlContent)
    {
        $this->container['sqlContent'] = $sqlContent;
        return $this;
    }

    /**
    * Gets database
    *  执行SQL所在的数据库，默认为default。
    *
    * @return string|null
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string|null $database 执行SQL所在的数据库，默认为default。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets archivePath
    *  SQL执行结果的转储文件夹。 说明： 只有select语句才会转储查询的结果。当前仅支持转储到OBS中。
    *
    * @return string|null
    */
    public function getArchivePath()
    {
        return $this->container['archivePath'];
    }

    /**
    * Sets archivePath
    *
    * @param string|null $archivePath SQL执行结果的转储文件夹。 说明： 只有select语句才会转储查询的结果。当前仅支持转储到OBS中。
    *
    * @return $this
    */
    public function setArchivePath($archivePath)
    {
        $this->container['archivePath'] = $archivePath;
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

