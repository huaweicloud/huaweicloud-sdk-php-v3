<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSqlLimitRuleOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSqlLimitRuleOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlType  SQL类型
    * maxConcurrency  最大并发数
    * maxWaiting  最大等待时间
    * pattern  SQL限流规则。限流规则以~分隔关键字，例如select~a。规则举例详细说明：例如关键字是\"select~a\", 含义为：select以及a为该并发控制所包含的两个关键字，~为关键字间隔符，即若执行SQL命令包含select与a两个关键字视为命中此条并发控制规则。
    * hisSqlLimitSwitch  历史SQL限流开关。 本开关仅对本条SQL限流规则生效。 开启时，将kill掉命中此条SQL限流规则的已有会话。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlType' => 'string',
            'maxConcurrency' => 'int',
            'maxWaiting' => 'int',
            'pattern' => 'string',
            'hisSqlLimitSwitch' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlType  SQL类型
    * maxConcurrency  最大并发数
    * maxWaiting  最大等待时间
    * pattern  SQL限流规则。限流规则以~分隔关键字，例如select~a。规则举例详细说明：例如关键字是\"select~a\", 含义为：select以及a为该并发控制所包含的两个关键字，~为关键字间隔符，即若执行SQL命令包含select与a两个关键字视为命中此条并发控制规则。
    * hisSqlLimitSwitch  历史SQL限流开关。 本开关仅对本条SQL限流规则生效。 开启时，将kill掉命中此条SQL限流规则的已有会话。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlType' => null,
        'maxConcurrency' => 'int32',
        'maxWaiting' => 'int32',
        'pattern' => null,
        'hisSqlLimitSwitch' => null
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
    * sqlType  SQL类型
    * maxConcurrency  最大并发数
    * maxWaiting  最大等待时间
    * pattern  SQL限流规则。限流规则以~分隔关键字，例如select~a。规则举例详细说明：例如关键字是\"select~a\", 含义为：select以及a为该并发控制所包含的两个关键字，~为关键字间隔符，即若执行SQL命令包含select与a两个关键字视为命中此条并发控制规则。
    * hisSqlLimitSwitch  历史SQL限流开关。 本开关仅对本条SQL限流规则生效。 开启时，将kill掉命中此条SQL限流规则的已有会话。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlType' => 'sql_type',
            'maxConcurrency' => 'max_concurrency',
            'maxWaiting' => 'max_waiting',
            'pattern' => 'pattern',
            'hisSqlLimitSwitch' => 'his_sql_limit_switch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlType  SQL类型
    * maxConcurrency  最大并发数
    * maxWaiting  最大等待时间
    * pattern  SQL限流规则。限流规则以~分隔关键字，例如select~a。规则举例详细说明：例如关键字是\"select~a\", 含义为：select以及a为该并发控制所包含的两个关键字，~为关键字间隔符，即若执行SQL命令包含select与a两个关键字视为命中此条并发控制规则。
    * hisSqlLimitSwitch  历史SQL限流开关。 本开关仅对本条SQL限流规则生效。 开启时，将kill掉命中此条SQL限流规则的已有会话。
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlType' => 'setSqlType',
            'maxConcurrency' => 'setMaxConcurrency',
            'maxWaiting' => 'setMaxWaiting',
            'pattern' => 'setPattern',
            'hisSqlLimitSwitch' => 'setHisSqlLimitSwitch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlType  SQL类型
    * maxConcurrency  最大并发数
    * maxWaiting  最大等待时间
    * pattern  SQL限流规则。限流规则以~分隔关键字，例如select~a。规则举例详细说明：例如关键字是\"select~a\", 含义为：select以及a为该并发控制所包含的两个关键字，~为关键字间隔符，即若执行SQL命令包含select与a两个关键字视为命中此条并发控制规则。
    * hisSqlLimitSwitch  历史SQL限流开关。 本开关仅对本条SQL限流规则生效。 开启时，将kill掉命中此条SQL限流规则的已有会话。
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlType' => 'getSqlType',
            'maxConcurrency' => 'getMaxConcurrency',
            'maxWaiting' => 'getMaxWaiting',
            'pattern' => 'getPattern',
            'hisSqlLimitSwitch' => 'getHisSqlLimitSwitch'
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
    const SQL_TYPE_SELECT = 'SELECT';
    const SQL_TYPE_UPDATE = 'UPDATE';
    const SQL_TYPE_DELETE = 'DELETE';
    const SQL_TYPE_INSERT = 'INSERT';
    const SQL_TYPE_QUERY_ID = 'QUERY_ID';
    const SQL_TYPE_QUERY_STR = 'QUERY_STR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSqlTypeAllowableValues()
    {
        return [
            self::SQL_TYPE_SELECT,
            self::SQL_TYPE_UPDATE,
            self::SQL_TYPE_DELETE,
            self::SQL_TYPE_INSERT,
            self::SQL_TYPE_QUERY_ID,
            self::SQL_TYPE_QUERY_STR,
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
        $this->container['sqlType'] = isset($data['sqlType']) ? $data['sqlType'] : null;
        $this->container['maxConcurrency'] = isset($data['maxConcurrency']) ? $data['maxConcurrency'] : null;
        $this->container['maxWaiting'] = isset($data['maxWaiting']) ? $data['maxWaiting'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['hisSqlLimitSwitch'] = isset($data['hisSqlLimitSwitch']) ? $data['hisSqlLimitSwitch'] : null;
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
            $allowedValues = $this->getSqlTypeAllowableValues();
                if (!is_null($this->container['sqlType']) && !in_array($this->container['sqlType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sqlType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['maxConcurrency'] === null) {
            $invalidProperties[] = "'maxConcurrency' can't be null";
        }
        if ($this->container['pattern'] === null) {
            $invalidProperties[] = "'pattern' can't be null";
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
    *  SQL类型
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
    * @param string $sqlType SQL类型
    *
    * @return $this
    */
    public function setSqlType($sqlType)
    {
        $this->container['sqlType'] = $sqlType;
        return $this;
    }

    /**
    * Gets maxConcurrency
    *  最大并发数
    *
    * @return int
    */
    public function getMaxConcurrency()
    {
        return $this->container['maxConcurrency'];
    }

    /**
    * Sets maxConcurrency
    *
    * @param int $maxConcurrency 最大并发数
    *
    * @return $this
    */
    public function setMaxConcurrency($maxConcurrency)
    {
        $this->container['maxConcurrency'] = $maxConcurrency;
        return $this;
    }

    /**
    * Gets maxWaiting
    *  最大等待时间
    *
    * @return int|null
    */
    public function getMaxWaiting()
    {
        return $this->container['maxWaiting'];
    }

    /**
    * Sets maxWaiting
    *
    * @param int|null $maxWaiting 最大等待时间
    *
    * @return $this
    */
    public function setMaxWaiting($maxWaiting)
    {
        $this->container['maxWaiting'] = $maxWaiting;
        return $this;
    }

    /**
    * Gets pattern
    *  SQL限流规则。限流规则以~分隔关键字，例如select~a。规则举例详细说明：例如关键字是\"select~a\", 含义为：select以及a为该并发控制所包含的两个关键字，~为关键字间隔符，即若执行SQL命令包含select与a两个关键字视为命中此条并发控制规则。
    *
    * @return string
    */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
    * Sets pattern
    *
    * @param string $pattern SQL限流规则。限流规则以~分隔关键字，例如select~a。规则举例详细说明：例如关键字是\"select~a\", 含义为：select以及a为该并发控制所包含的两个关键字，~为关键字间隔符，即若执行SQL命令包含select与a两个关键字视为命中此条并发控制规则。
    *
    * @return $this
    */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;
        return $this;
    }

    /**
    * Gets hisSqlLimitSwitch
    *  历史SQL限流开关。 本开关仅对本条SQL限流规则生效。 开启时，将kill掉命中此条SQL限流规则的已有会话。
    *
    * @return bool|null
    */
    public function getHisSqlLimitSwitch()
    {
        return $this->container['hisSqlLimitSwitch'];
    }

    /**
    * Sets hisSqlLimitSwitch
    *
    * @param bool|null $hisSqlLimitSwitch 历史SQL限流开关。 本开关仅对本条SQL限流规则生效。 开启时，将kill掉命中此条SQL限流规则的已有会话。
    *
    * @return $this
    */
    public function setHisSqlLimitSwitch($hisSqlLimitSwitch)
    {
        $this->container['hisSqlLimitSwitch'] = $hisSqlLimitSwitch;
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

