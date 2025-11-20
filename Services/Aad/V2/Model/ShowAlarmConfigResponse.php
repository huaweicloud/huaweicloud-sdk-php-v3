<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAlarmConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAlarmConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * blackhole  0开启 1关闭
    * ddos  0开启 1关闭
    * topicName  topic名称
    * topicUrn  topic订阅链接
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'blackhole' => 'string',
            'ddos' => 'string',
            'topicName' => 'string',
            'topicUrn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * blackhole  0开启 1关闭
    * ddos  0开启 1关闭
    * topicName  topic名称
    * topicUrn  topic订阅链接
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'blackhole' => null,
        'ddos' => null,
        'topicName' => null,
        'topicUrn' => null
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
    * blackhole  0开启 1关闭
    * ddos  0开启 1关闭
    * topicName  topic名称
    * topicUrn  topic订阅链接
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'blackhole' => 'blackhole',
            'ddos' => 'ddos',
            'topicName' => 'topic_name',
            'topicUrn' => 'topic_urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * blackhole  0开启 1关闭
    * ddos  0开启 1关闭
    * topicName  topic名称
    * topicUrn  topic订阅链接
    *
    * @var string[]
    */
    protected static $setters = [
            'blackhole' => 'setBlackhole',
            'ddos' => 'setDdos',
            'topicName' => 'setTopicName',
            'topicUrn' => 'setTopicUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * blackhole  0开启 1关闭
    * ddos  0开启 1关闭
    * topicName  topic名称
    * topicUrn  topic订阅链接
    *
    * @var string[]
    */
    protected static $getters = [
            'blackhole' => 'getBlackhole',
            'ddos' => 'getDdos',
            'topicName' => 'getTopicName',
            'topicUrn' => 'getTopicUrn'
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
        $this->container['blackhole'] = isset($data['blackhole']) ? $data['blackhole'] : null;
        $this->container['ddos'] = isset($data['ddos']) ? $data['ddos'] : null;
        $this->container['topicName'] = isset($data['topicName']) ? $data['topicName'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['blackhole']) && (mb_strlen($this->container['blackhole']) > 1)) {
                $invalidProperties[] = "invalid value for 'blackhole', the character length must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['blackhole']) && (mb_strlen($this->container['blackhole']) < 0)) {
                $invalidProperties[] = "invalid value for 'blackhole', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ddos']) && (mb_strlen($this->container['ddos']) > 1)) {
                $invalidProperties[] = "invalid value for 'ddos', the character length must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['ddos']) && (mb_strlen($this->container['ddos']) < 0)) {
                $invalidProperties[] = "invalid value for 'ddos', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['topicName']) && (mb_strlen($this->container['topicName']) > 32768)) {
                $invalidProperties[] = "invalid value for 'topicName', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['topicName']) && (mb_strlen($this->container['topicName']) < 0)) {
                $invalidProperties[] = "invalid value for 'topicName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['topicUrn']) && (mb_strlen($this->container['topicUrn']) > 32768)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['topicUrn']) && (mb_strlen($this->container['topicUrn']) < 0)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be bigger than or equal to 0.";
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
    * Gets blackhole
    *  0开启 1关闭
    *
    * @return string|null
    */
    public function getBlackhole()
    {
        return $this->container['blackhole'];
    }

    /**
    * Sets blackhole
    *
    * @param string|null $blackhole 0开启 1关闭
    *
    * @return $this
    */
    public function setBlackhole($blackhole)
    {
        $this->container['blackhole'] = $blackhole;
        return $this;
    }

    /**
    * Gets ddos
    *  0开启 1关闭
    *
    * @return string|null
    */
    public function getDdos()
    {
        return $this->container['ddos'];
    }

    /**
    * Sets ddos
    *
    * @param string|null $ddos 0开启 1关闭
    *
    * @return $this
    */
    public function setDdos($ddos)
    {
        $this->container['ddos'] = $ddos;
        return $this;
    }

    /**
    * Gets topicName
    *  topic名称
    *
    * @return string|null
    */
    public function getTopicName()
    {
        return $this->container['topicName'];
    }

    /**
    * Sets topicName
    *
    * @param string|null $topicName topic名称
    *
    * @return $this
    */
    public function setTopicName($topicName)
    {
        $this->container['topicName'] = $topicName;
        return $this;
    }

    /**
    * Gets topicUrn
    *  topic订阅链接
    *
    * @return string|null
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string|null $topicUrn topic订阅链接
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
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

