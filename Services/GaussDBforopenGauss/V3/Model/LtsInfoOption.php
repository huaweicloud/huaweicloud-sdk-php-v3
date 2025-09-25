<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LtsInfoOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LtsInfoOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logGroupName  **参数解释**: LTS日志组名称。 **约束限制**: 满足正则匹配表达式校验：^GROUP_GAUSSDB_APS-[a-zA-Z0-9-_]{32}in(14|20)$。 **取值范围**: 通常为GROUP_GAUSSDB_APS-实例ID。 **默认取值**: 不涉及。
    * logStreamName  **参数解释**: LTS日志流名称。 **约束限制**: 满足正则匹配表达式校验：^GROUP_GAUSSDB_APS-[a-zA-Z0-9-_]{32}in(14|20)$。 **取值范围**: 通常为STREAM_APS_FULL_SQL-实例ID。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logGroupName' => 'string',
            'logStreamName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logGroupName  **参数解释**: LTS日志组名称。 **约束限制**: 满足正则匹配表达式校验：^GROUP_GAUSSDB_APS-[a-zA-Z0-9-_]{32}in(14|20)$。 **取值范围**: 通常为GROUP_GAUSSDB_APS-实例ID。 **默认取值**: 不涉及。
    * logStreamName  **参数解释**: LTS日志流名称。 **约束限制**: 满足正则匹配表达式校验：^GROUP_GAUSSDB_APS-[a-zA-Z0-9-_]{32}in(14|20)$。 **取值范围**: 通常为STREAM_APS_FULL_SQL-实例ID。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logGroupName' => null,
        'logStreamName' => null
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
    * logGroupName  **参数解释**: LTS日志组名称。 **约束限制**: 满足正则匹配表达式校验：^GROUP_GAUSSDB_APS-[a-zA-Z0-9-_]{32}in(14|20)$。 **取值范围**: 通常为GROUP_GAUSSDB_APS-实例ID。 **默认取值**: 不涉及。
    * logStreamName  **参数解释**: LTS日志流名称。 **约束限制**: 满足正则匹配表达式校验：^GROUP_GAUSSDB_APS-[a-zA-Z0-9-_]{32}in(14|20)$。 **取值范围**: 通常为STREAM_APS_FULL_SQL-实例ID。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logGroupName' => 'log_group_name',
            'logStreamName' => 'log_stream_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logGroupName  **参数解释**: LTS日志组名称。 **约束限制**: 满足正则匹配表达式校验：^GROUP_GAUSSDB_APS-[a-zA-Z0-9-_]{32}in(14|20)$。 **取值范围**: 通常为GROUP_GAUSSDB_APS-实例ID。 **默认取值**: 不涉及。
    * logStreamName  **参数解释**: LTS日志流名称。 **约束限制**: 满足正则匹配表达式校验：^GROUP_GAUSSDB_APS-[a-zA-Z0-9-_]{32}in(14|20)$。 **取值范围**: 通常为STREAM_APS_FULL_SQL-实例ID。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'logGroupName' => 'setLogGroupName',
            'logStreamName' => 'setLogStreamName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logGroupName  **参数解释**: LTS日志组名称。 **约束限制**: 满足正则匹配表达式校验：^GROUP_GAUSSDB_APS-[a-zA-Z0-9-_]{32}in(14|20)$。 **取值范围**: 通常为GROUP_GAUSSDB_APS-实例ID。 **默认取值**: 不涉及。
    * logStreamName  **参数解释**: LTS日志流名称。 **约束限制**: 满足正则匹配表达式校验：^GROUP_GAUSSDB_APS-[a-zA-Z0-9-_]{32}in(14|20)$。 **取值范围**: 通常为STREAM_APS_FULL_SQL-实例ID。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'logGroupName' => 'getLogGroupName',
            'logStreamName' => 'getLogStreamName'
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
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['logStreamName'] = isset($data['logStreamName']) ? $data['logStreamName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['logGroupName'] === null) {
            $invalidProperties[] = "'logGroupName' can't be null";
        }
        if ($this->container['logStreamName'] === null) {
            $invalidProperties[] = "'logStreamName' can't be null";
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
    * Gets logGroupName
    *  **参数解释**: LTS日志组名称。 **约束限制**: 满足正则匹配表达式校验：^GROUP_GAUSSDB_APS-[a-zA-Z0-9-_]{32}in(14|20)$。 **取值范围**: 通常为GROUP_GAUSSDB_APS-实例ID。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getLogGroupName()
    {
        return $this->container['logGroupName'];
    }

    /**
    * Sets logGroupName
    *
    * @param string $logGroupName **参数解释**: LTS日志组名称。 **约束限制**: 满足正则匹配表达式校验：^GROUP_GAUSSDB_APS-[a-zA-Z0-9-_]{32}in(14|20)$。 **取值范围**: 通常为GROUP_GAUSSDB_APS-实例ID。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets logStreamName
    *  **参数解释**: LTS日志流名称。 **约束限制**: 满足正则匹配表达式校验：^GROUP_GAUSSDB_APS-[a-zA-Z0-9-_]{32}in(14|20)$。 **取值范围**: 通常为STREAM_APS_FULL_SQL-实例ID。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getLogStreamName()
    {
        return $this->container['logStreamName'];
    }

    /**
    * Sets logStreamName
    *
    * @param string $logStreamName **参数解释**: LTS日志流名称。 **约束限制**: 满足正则匹配表达式校验：^GROUP_GAUSSDB_APS-[a-zA-Z0-9-_]{32}in(14|20)$。 **取值范围**: 通常为STREAM_APS_FULL_SQL-实例ID。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setLogStreamName($logStreamName)
    {
        $this->container['logStreamName'] = $logStreamName;
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

