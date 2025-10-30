<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Results implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'results';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * epsId  **参数解释：** 企业项目ID。 **取值范围：** 不涉及。
    * logGroupName  **参数解释：** 日志组名称。 **取值范围：** 不涉及。
    * logGroupNameAlias  **参数解释：** 日志组别名。 **取值范围：** 不涉及。
    * logStreamName  **参数解释：** 日志流名称。 **取值范围：** 不涉及。
    * logStreamNameAlias  **参数解释：** 日志流别名。 **取值范围：** 不涉及。
    * time  **参数解释：** 告警统计周期，例如：1小时。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'epsId' => 'string',
            'logGroupName' => 'string',
            'logGroupNameAlias' => 'string',
            'logStreamName' => 'string',
            'logStreamNameAlias' => 'string',
            'time' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * epsId  **参数解释：** 企业项目ID。 **取值范围：** 不涉及。
    * logGroupName  **参数解释：** 日志组名称。 **取值范围：** 不涉及。
    * logGroupNameAlias  **参数解释：** 日志组别名。 **取值范围：** 不涉及。
    * logStreamName  **参数解释：** 日志流名称。 **取值范围：** 不涉及。
    * logStreamNameAlias  **参数解释：** 日志流别名。 **取值范围：** 不涉及。
    * time  **参数解释：** 告警统计周期，例如：1小时。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'epsId' => null,
        'logGroupName' => null,
        'logGroupNameAlias' => null,
        'logStreamName' => null,
        'logStreamNameAlias' => null,
        'time' => null
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
    * epsId  **参数解释：** 企业项目ID。 **取值范围：** 不涉及。
    * logGroupName  **参数解释：** 日志组名称。 **取值范围：** 不涉及。
    * logGroupNameAlias  **参数解释：** 日志组别名。 **取值范围：** 不涉及。
    * logStreamName  **参数解释：** 日志流名称。 **取值范围：** 不涉及。
    * logStreamNameAlias  **参数解释：** 日志流别名。 **取值范围：** 不涉及。
    * time  **参数解释：** 告警统计周期，例如：1小时。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'epsId' => 'eps_id',
            'logGroupName' => 'log_group_name',
            'logGroupNameAlias' => 'log_group_name_alias',
            'logStreamName' => 'log_stream_name',
            'logStreamNameAlias' => 'log_stream_name_alias',
            'time' => 'time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * epsId  **参数解释：** 企业项目ID。 **取值范围：** 不涉及。
    * logGroupName  **参数解释：** 日志组名称。 **取值范围：** 不涉及。
    * logGroupNameAlias  **参数解释：** 日志组别名。 **取值范围：** 不涉及。
    * logStreamName  **参数解释：** 日志流名称。 **取值范围：** 不涉及。
    * logStreamNameAlias  **参数解释：** 日志流别名。 **取值范围：** 不涉及。
    * time  **参数解释：** 告警统计周期，例如：1小时。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'epsId' => 'setEpsId',
            'logGroupName' => 'setLogGroupName',
            'logGroupNameAlias' => 'setLogGroupNameAlias',
            'logStreamName' => 'setLogStreamName',
            'logStreamNameAlias' => 'setLogStreamNameAlias',
            'time' => 'setTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * epsId  **参数解释：** 企业项目ID。 **取值范围：** 不涉及。
    * logGroupName  **参数解释：** 日志组名称。 **取值范围：** 不涉及。
    * logGroupNameAlias  **参数解释：** 日志组别名。 **取值范围：** 不涉及。
    * logStreamName  **参数解释：** 日志流名称。 **取值范围：** 不涉及。
    * logStreamNameAlias  **参数解释：** 日志流别名。 **取值范围：** 不涉及。
    * time  **参数解释：** 告警统计周期，例如：1小时。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'epsId' => 'getEpsId',
            'logGroupName' => 'getLogGroupName',
            'logGroupNameAlias' => 'getLogGroupNameAlias',
            'logStreamName' => 'getLogStreamName',
            'logStreamNameAlias' => 'getLogStreamNameAlias',
            'time' => 'getTime'
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
        $this->container['epsId'] = isset($data['epsId']) ? $data['epsId'] : null;
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['logGroupNameAlias'] = isset($data['logGroupNameAlias']) ? $data['logGroupNameAlias'] : null;
        $this->container['logStreamName'] = isset($data['logStreamName']) ? $data['logStreamName'] : null;
        $this->container['logStreamNameAlias'] = isset($data['logStreamNameAlias']) ? $data['logStreamNameAlias'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['epsId'] === null) {
            $invalidProperties[] = "'epsId' can't be null";
        }
        if ($this->container['logGroupName'] === null) {
            $invalidProperties[] = "'logGroupName' can't be null";
        }
        if ($this->container['logGroupNameAlias'] === null) {
            $invalidProperties[] = "'logGroupNameAlias' can't be null";
        }
        if ($this->container['logStreamName'] === null) {
            $invalidProperties[] = "'logStreamName' can't be null";
        }
        if ($this->container['logStreamNameAlias'] === null) {
            $invalidProperties[] = "'logStreamNameAlias' can't be null";
        }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
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
    * Gets epsId
    *  **参数解释：** 企业项目ID。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getEpsId()
    {
        return $this->container['epsId'];
    }

    /**
    * Sets epsId
    *
    * @param string $epsId **参数解释：** 企业项目ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setEpsId($epsId)
    {
        $this->container['epsId'] = $epsId;
        return $this;
    }

    /**
    * Gets logGroupName
    *  **参数解释：** 日志组名称。 **取值范围：** 不涉及。
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
    * @param string $logGroupName **参数解释：** 日志组名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets logGroupNameAlias
    *  **参数解释：** 日志组别名。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getLogGroupNameAlias()
    {
        return $this->container['logGroupNameAlias'];
    }

    /**
    * Sets logGroupNameAlias
    *
    * @param string $logGroupNameAlias **参数解释：** 日志组别名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLogGroupNameAlias($logGroupNameAlias)
    {
        $this->container['logGroupNameAlias'] = $logGroupNameAlias;
        return $this;
    }

    /**
    * Gets logStreamName
    *  **参数解释：** 日志流名称。 **取值范围：** 不涉及。
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
    * @param string $logStreamName **参数解释：** 日志流名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLogStreamName($logStreamName)
    {
        $this->container['logStreamName'] = $logStreamName;
        return $this;
    }

    /**
    * Gets logStreamNameAlias
    *  **参数解释：** 日志流别名。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getLogStreamNameAlias()
    {
        return $this->container['logStreamNameAlias'];
    }

    /**
    * Sets logStreamNameAlias
    *
    * @param string $logStreamNameAlias **参数解释：** 日志流别名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLogStreamNameAlias($logStreamNameAlias)
    {
        $this->container['logStreamNameAlias'] = $logStreamNameAlias;
        return $this;
    }

    /**
    * Gets time
    *  **参数解释：** 告警统计周期，例如：1小时。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string $time **参数解释：** 告警统计周期，例如：1小时。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
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

