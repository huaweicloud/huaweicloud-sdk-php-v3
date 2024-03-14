<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBinlogClearPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBinlogClearPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * binlogRetentionHours  binlog保留时长
    * binlogClearType  二进制日志保留策略,取值：time、fast - time:表示按时长保留二进制文件 - fast:表示快速清理,不保留二进制文件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'binlogRetentionHours' => 'int',
            'binlogClearType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * binlogRetentionHours  binlog保留时长
    * binlogClearType  二进制日志保留策略,取值：time、fast - time:表示按时长保留二进制文件 - fast:表示快速清理,不保留二进制文件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'binlogRetentionHours' => 'int32',
        'binlogClearType' => null
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
    * binlogRetentionHours  binlog保留时长
    * binlogClearType  二进制日志保留策略,取值：time、fast - time:表示按时长保留二进制文件 - fast:表示快速清理,不保留二进制文件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'binlogRetentionHours' => 'binlog_retention_hours',
            'binlogClearType' => 'binlog_clear_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * binlogRetentionHours  binlog保留时长
    * binlogClearType  二进制日志保留策略,取值：time、fast - time:表示按时长保留二进制文件 - fast:表示快速清理,不保留二进制文件
    *
    * @var string[]
    */
    protected static $setters = [
            'binlogRetentionHours' => 'setBinlogRetentionHours',
            'binlogClearType' => 'setBinlogClearType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * binlogRetentionHours  binlog保留时长
    * binlogClearType  二进制日志保留策略,取值：time、fast - time:表示按时长保留二进制文件 - fast:表示快速清理,不保留二进制文件
    *
    * @var string[]
    */
    protected static $getters = [
            'binlogRetentionHours' => 'getBinlogRetentionHours',
            'binlogClearType' => 'getBinlogClearType'
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
        $this->container['binlogRetentionHours'] = isset($data['binlogRetentionHours']) ? $data['binlogRetentionHours'] : null;
        $this->container['binlogClearType'] = isset($data['binlogClearType']) ? $data['binlogClearType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets binlogRetentionHours
    *  binlog保留时长
    *
    * @return int|null
    */
    public function getBinlogRetentionHours()
    {
        return $this->container['binlogRetentionHours'];
    }

    /**
    * Sets binlogRetentionHours
    *
    * @param int|null $binlogRetentionHours binlog保留时长
    *
    * @return $this
    */
    public function setBinlogRetentionHours($binlogRetentionHours)
    {
        $this->container['binlogRetentionHours'] = $binlogRetentionHours;
        return $this;
    }

    /**
    * Gets binlogClearType
    *  二进制日志保留策略,取值：time、fast - time:表示按时长保留二进制文件 - fast:表示快速清理,不保留二进制文件
    *
    * @return string|null
    */
    public function getBinlogClearType()
    {
        return $this->container['binlogClearType'];
    }

    /**
    * Sets binlogClearType
    *
    * @param string|null $binlogClearType 二进制日志保留策略,取值：time、fast - time:表示按时长保留二进制文件 - fast:表示快速清理,不保留二进制文件
    *
    * @return $this
    */
    public function setBinlogClearType($binlogClearType)
    {
        $this->container['binlogClearType'] = $binlogClearType;
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

