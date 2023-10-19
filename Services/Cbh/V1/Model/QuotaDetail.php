<?php

namespace HuaweiCloud\SDK\Cbh\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuotaDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuotaDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * zhCn  中文配额描述。
    * enUs  英文配额描述。
    * remaining  租户剩余配额数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'zhCn' => 'string',
            'enUs' => 'string',
            'remaining' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * zhCn  中文配额描述。
    * enUs  英文配额描述。
    * remaining  租户剩余配额数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'zhCn' => null,
        'enUs' => null,
        'remaining' => 'int32'
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
    * zhCn  中文配额描述。
    * enUs  英文配额描述。
    * remaining  租户剩余配额数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'zhCn' => 'zh_cn',
            'enUs' => 'en_us',
            'remaining' => 'remaining'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * zhCn  中文配额描述。
    * enUs  英文配额描述。
    * remaining  租户剩余配额数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'zhCn' => 'setZhCn',
            'enUs' => 'setEnUs',
            'remaining' => 'setRemaining'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * zhCn  中文配额描述。
    * enUs  英文配额描述。
    * remaining  租户剩余配额数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'zhCn' => 'getZhCn',
            'enUs' => 'getEnUs',
            'remaining' => 'getRemaining'
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
        $this->container['zhCn'] = isset($data['zhCn']) ? $data['zhCn'] : null;
        $this->container['enUs'] = isset($data['enUs']) ? $data['enUs'] : null;
        $this->container['remaining'] = isset($data['remaining']) ? $data['remaining'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['zhCn'] === null) {
            $invalidProperties[] = "'zhCn' can't be null";
        }
            if ((mb_strlen($this->container['zhCn']) > 512)) {
                $invalidProperties[] = "invalid value for 'zhCn', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['zhCn']) < 0)) {
                $invalidProperties[] = "invalid value for 'zhCn', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['enUs'] === null) {
            $invalidProperties[] = "'enUs' can't be null";
        }
            if ((mb_strlen($this->container['enUs']) > 512)) {
                $invalidProperties[] = "invalid value for 'enUs', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['enUs']) < 0)) {
                $invalidProperties[] = "invalid value for 'enUs', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['remaining'] === null) {
            $invalidProperties[] = "'remaining' can't be null";
        }
            if (($this->container['remaining'] > 100)) {
                $invalidProperties[] = "invalid value for 'remaining', must be smaller than or equal to 100.";
            }
            if (($this->container['remaining'] < 0)) {
                $invalidProperties[] = "invalid value for 'remaining', must be bigger than or equal to 0.";
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
    * Gets zhCn
    *  中文配额描述。
    *
    * @return string
    */
    public function getZhCn()
    {
        return $this->container['zhCn'];
    }

    /**
    * Sets zhCn
    *
    * @param string $zhCn 中文配额描述。
    *
    * @return $this
    */
    public function setZhCn($zhCn)
    {
        $this->container['zhCn'] = $zhCn;
        return $this;
    }

    /**
    * Gets enUs
    *  英文配额描述。
    *
    * @return string
    */
    public function getEnUs()
    {
        return $this->container['enUs'];
    }

    /**
    * Sets enUs
    *
    * @param string $enUs 英文配额描述。
    *
    * @return $this
    */
    public function setEnUs($enUs)
    {
        $this->container['enUs'] = $enUs;
        return $this;
    }

    /**
    * Gets remaining
    *  租户剩余配额数量。
    *
    * @return int
    */
    public function getRemaining()
    {
        return $this->container['remaining'];
    }

    /**
    * Sets remaining
    *
    * @param int $remaining 租户剩余配额数量。
    *
    * @return $this
    */
    public function setRemaining($remaining)
    {
        $this->container['remaining'] = $remaining;
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

