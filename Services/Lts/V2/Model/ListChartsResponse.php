<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListChartsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListChartsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * sql  sql语句
    * title  图表名称
    * type  图表类型
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * logStreamId  日志组id
    * logStreamName  日志流名称
    * config  图表配置详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'sql' => 'string',
            'title' => 'string',
            'type' => 'string',
            'logGroupId' => 'string',
            'logGroupName' => 'string',
            'logStreamId' => 'string',
            'logStreamName' => 'string',
            'config' => '\HuaweiCloud\SDK\Lts\V2\Model\ChartConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * sql  sql语句
    * title  图表名称
    * type  图表类型
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * logStreamId  日志组id
    * logStreamName  日志流名称
    * config  图表配置详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'sql' => null,
        'title' => null,
        'type' => null,
        'logGroupId' => null,
        'logGroupName' => null,
        'logStreamId' => null,
        'logStreamName' => null,
        'config' => null
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
    * id  id
    * sql  sql语句
    * title  图表名称
    * type  图表类型
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * logStreamId  日志组id
    * logStreamName  日志流名称
    * config  图表配置详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'sql' => 'sql',
            'title' => 'title',
            'type' => 'type',
            'logGroupId' => 'log_group_id',
            'logGroupName' => 'log_group_name',
            'logStreamId' => 'log_stream_id',
            'logStreamName' => 'log_stream_name',
            'config' => 'config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * sql  sql语句
    * title  图表名称
    * type  图表类型
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * logStreamId  日志组id
    * logStreamName  日志流名称
    * config  图表配置详情
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'sql' => 'setSql',
            'title' => 'setTitle',
            'type' => 'setType',
            'logGroupId' => 'setLogGroupId',
            'logGroupName' => 'setLogGroupName',
            'logStreamId' => 'setLogStreamId',
            'logStreamName' => 'setLogStreamName',
            'config' => 'setConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * sql  sql语句
    * title  图表名称
    * type  图表类型
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * logStreamId  日志组id
    * logStreamName  日志流名称
    * config  图表配置详情
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'sql' => 'getSql',
            'title' => 'getTitle',
            'type' => 'getType',
            'logGroupId' => 'getLogGroupId',
            'logGroupName' => 'getLogGroupName',
            'logStreamId' => 'getLogStreamId',
            'logStreamName' => 'getLogStreamName',
            'config' => 'getConfig'
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
    const TYPE_TABLE = 'table';
    const TYPE_BAR = 'bar';
    const TYPE_LINE = 'line';
    const TYPE_PIE = 'pie';
    const TYPE_NUMBER = 'number';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TABLE,
            self::TYPE_BAR,
            self::TYPE_LINE,
            self::TYPE_PIE,
            self::TYPE_NUMBER,
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
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['logStreamName'] = isset($data['logStreamName']) ? $data['logStreamName'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['sql']) && (mb_strlen($this->container['sql']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sql', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sql']) && (mb_strlen($this->container['sql']) < 1)) {
                $invalidProperties[] = "invalid value for 'sql', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 64)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['logGroupId']) && (mb_strlen($this->container['logGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['logGroupId']) && (mb_strlen($this->container['logGroupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['logGroupName']) && (mb_strlen($this->container['logGroupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'logGroupName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['logGroupName']) && (mb_strlen($this->container['logGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'logGroupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['logStreamId']) && (mb_strlen($this->container['logStreamId']) > 32)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['logStreamId']) && (mb_strlen($this->container['logStreamId']) < 32)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['logStreamName']) && (mb_strlen($this->container['logStreamName']) > 64)) {
                $invalidProperties[] = "invalid value for 'logStreamName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['logStreamName']) && (mb_strlen($this->container['logStreamName']) < 1)) {
                $invalidProperties[] = "invalid value for 'logStreamName', the character length must be bigger than or equal to 1.";
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
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets sql
    *  sql语句
    *
    * @return string|null
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string|null $sql sql语句
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets title
    *  图表名称
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 图表名称
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets type
    *  图表类型
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
    * @param string|null $type 图表类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets logGroupId
    *  日志组id
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId 日志组id
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logGroupName
    *  日志组名称
    *
    * @return string|null
    */
    public function getLogGroupName()
    {
        return $this->container['logGroupName'];
    }

    /**
    * Sets logGroupName
    *
    * @param string|null $logGroupName 日志组名称
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets logStreamId
    *  日志组id
    *
    * @return string|null
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string|null $logStreamId 日志组id
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets logStreamName
    *  日志流名称
    *
    * @return string|null
    */
    public function getLogStreamName()
    {
        return $this->container['logStreamName'];
    }

    /**
    * Sets logStreamName
    *
    * @param string|null $logStreamName 日志流名称
    *
    * @return $this
    */
    public function setLogStreamName($logStreamName)
    {
        $this->container['logStreamName'] = $logStreamName;
        return $this;
    }

    /**
    * Gets config
    *  图表配置详情
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\ChartConfig|null
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\ChartConfig|null $config 图表配置详情
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
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

