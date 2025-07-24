<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * displayName  日志标题
    * log  日志内容
    * level  日志级别
    * analysis  日志分析
    * faq  常见问题解答
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'displayName' => 'string',
            'log' => 'string',
            'level' => 'string',
            'analysis' => 'string',
            'faq' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * displayName  日志标题
    * log  日志内容
    * level  日志级别
    * analysis  日志分析
    * faq  常见问题解答
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'displayName' => null,
        'log' => null,
        'level' => null,
        'analysis' => null,
        'faq' => null
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
    * displayName  日志标题
    * log  日志内容
    * level  日志级别
    * analysis  日志分析
    * faq  常见问题解答
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'displayName' => 'display_name',
            'log' => 'log',
            'level' => 'level',
            'analysis' => 'analysis',
            'faq' => 'faq'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * displayName  日志标题
    * log  日志内容
    * level  日志级别
    * analysis  日志分析
    * faq  常见问题解答
    *
    * @var string[]
    */
    protected static $setters = [
            'displayName' => 'setDisplayName',
            'log' => 'setLog',
            'level' => 'setLevel',
            'analysis' => 'setAnalysis',
            'faq' => 'setFaq'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * displayName  日志标题
    * log  日志内容
    * level  日志级别
    * analysis  日志分析
    * faq  常见问题解答
    *
    * @var string[]
    */
    protected static $getters = [
            'displayName' => 'getDisplayName',
            'log' => 'getLog',
            'level' => 'getLevel',
            'analysis' => 'getAnalysis',
            'faq' => 'getFaq'
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
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['log'] = isset($data['log']) ? $data['log'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['analysis'] = isset($data['analysis']) ? $data['analysis'] : null;
        $this->container['faq'] = isset($data['faq']) ? $data['faq'] : null;
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
    * Gets displayName
    *  日志标题
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 日志标题
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets log
    *  日志内容
    *
    * @return string|null
    */
    public function getLog()
    {
        return $this->container['log'];
    }

    /**
    * Sets log
    *
    * @param string|null $log 日志内容
    *
    * @return $this
    */
    public function setLog($log)
    {
        $this->container['log'] = $log;
        return $this;
    }

    /**
    * Gets level
    *  日志级别
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 日志级别
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets analysis
    *  日志分析
    *
    * @return string|null
    */
    public function getAnalysis()
    {
        return $this->container['analysis'];
    }

    /**
    * Sets analysis
    *
    * @param string|null $analysis 日志分析
    *
    * @return $this
    */
    public function setAnalysis($analysis)
    {
        $this->container['analysis'] = $analysis;
        return $this;
    }

    /**
    * Gets faq
    *  常见问题解答
    *
    * @return string|null
    */
    public function getFaq()
    {
        return $this->container['faq'];
    }

    /**
    * Sets faq
    *
    * @param string|null $faq 常见问题解答
    *
    * @return $this
    */
    public function setFaq($faq)
    {
        $this->container['faq'] = $faq;
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

