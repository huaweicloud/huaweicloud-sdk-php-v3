<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Annotations implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Annotations';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * message  告警列表详情
    * logInfo  日志组/流id,名称
    * currentValue  当前值
    * oldAnnotations  (sql/关键词)告警详情原始数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'message' => 'string',
            'logInfo' => 'string',
            'currentValue' => 'string',
            'oldAnnotations' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * message  告警列表详情
    * logInfo  日志组/流id,名称
    * currentValue  当前值
    * oldAnnotations  (sql/关键词)告警详情原始数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'message' => null,
        'logInfo' => null,
        'currentValue' => null,
        'oldAnnotations' => null
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
    * message  告警列表详情
    * logInfo  日志组/流id,名称
    * currentValue  当前值
    * oldAnnotations  (sql/关键词)告警详情原始数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'message' => 'message',
            'logInfo' => 'log_info',
            'currentValue' => 'current_value',
            'oldAnnotations' => 'old_annotations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * message  告警列表详情
    * logInfo  日志组/流id,名称
    * currentValue  当前值
    * oldAnnotations  (sql/关键词)告警详情原始数据
    *
    * @var string[]
    */
    protected static $setters = [
            'message' => 'setMessage',
            'logInfo' => 'setLogInfo',
            'currentValue' => 'setCurrentValue',
            'oldAnnotations' => 'setOldAnnotations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * message  告警列表详情
    * logInfo  日志组/流id,名称
    * currentValue  当前值
    * oldAnnotations  (sql/关键词)告警详情原始数据
    *
    * @var string[]
    */
    protected static $getters = [
            'message' => 'getMessage',
            'logInfo' => 'getLogInfo',
            'currentValue' => 'getCurrentValue',
            'oldAnnotations' => 'getOldAnnotations'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['logInfo'] = isset($data['logInfo']) ? $data['logInfo'] : null;
        $this->container['currentValue'] = isset($data['currentValue']) ? $data['currentValue'] : null;
        $this->container['oldAnnotations'] = isset($data['oldAnnotations']) ? $data['oldAnnotations'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
            if ((mb_strlen($this->container['message']) > 1024)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['message']) < 1)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['logInfo'] === null) {
            $invalidProperties[] = "'logInfo' can't be null";
        }
            if ((mb_strlen($this->container['logInfo']) > 1024)) {
                $invalidProperties[] = "invalid value for 'logInfo', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['logInfo']) < 1)) {
                $invalidProperties[] = "invalid value for 'logInfo', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['currentValue'] === null) {
            $invalidProperties[] = "'currentValue' can't be null";
        }
            if ((mb_strlen($this->container['currentValue']) > 1024)) {
                $invalidProperties[] = "invalid value for 'currentValue', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['currentValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'currentValue', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['oldAnnotations'] === null) {
            $invalidProperties[] = "'oldAnnotations' can't be null";
        }
            if ((mb_strlen($this->container['oldAnnotations']) > 10000)) {
                $invalidProperties[] = "invalid value for 'oldAnnotations', the character length must be smaller than or equal to 10000.";
            }
            if ((mb_strlen($this->container['oldAnnotations']) < 0)) {
                $invalidProperties[] = "invalid value for 'oldAnnotations', the character length must be bigger than or equal to 0.";
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
    * Gets message
    *  告警列表详情
    *
    * @return string
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string $message 告警列表详情
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets logInfo
    *  日志组/流id,名称
    *
    * @return string
    */
    public function getLogInfo()
    {
        return $this->container['logInfo'];
    }

    /**
    * Sets logInfo
    *
    * @param string $logInfo 日志组/流id,名称
    *
    * @return $this
    */
    public function setLogInfo($logInfo)
    {
        $this->container['logInfo'] = $logInfo;
        return $this;
    }

    /**
    * Gets currentValue
    *  当前值
    *
    * @return string
    */
    public function getCurrentValue()
    {
        return $this->container['currentValue'];
    }

    /**
    * Sets currentValue
    *
    * @param string $currentValue 当前值
    *
    * @return $this
    */
    public function setCurrentValue($currentValue)
    {
        $this->container['currentValue'] = $currentValue;
        return $this;
    }

    /**
    * Gets oldAnnotations
    *  (sql/关键词)告警详情原始数据
    *
    * @return string
    */
    public function getOldAnnotations()
    {
        return $this->container['oldAnnotations'];
    }

    /**
    * Sets oldAnnotations
    *
    * @param string $oldAnnotations (sql/关键词)告警详情原始数据
    *
    * @return $this
    */
    public function setOldAnnotations($oldAnnotations)
    {
        $this->container['oldAnnotations'] = $oldAnnotations;
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

