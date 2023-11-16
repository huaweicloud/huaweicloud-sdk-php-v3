<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  策略名
    * threshold  清洗阈值
    * description  描述
    * udp  udp协议封禁。block：封禁，unblock：不封禁
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'threshold' => 'int',
            'description' => 'string',
            'udp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  策略名
    * threshold  清洗阈值
    * description  描述
    * udp  udp协议封禁。block：封禁，unblock：不封禁
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'threshold' => 'int32',
        'description' => null,
        'udp' => null
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
    * name  策略名
    * threshold  清洗阈值
    * description  描述
    * udp  udp协议封禁。block：封禁，unblock：不封禁
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'threshold' => 'threshold',
            'description' => 'description',
            'udp' => 'udp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  策略名
    * threshold  清洗阈值
    * description  描述
    * udp  udp协议封禁。block：封禁，unblock：不封禁
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'threshold' => 'setThreshold',
            'description' => 'setDescription',
            'udp' => 'setUdp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  策略名
    * threshold  清洗阈值
    * description  描述
    * udp  udp协议封禁。block：封禁，unblock：不封禁
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'threshold' => 'getThreshold',
            'description' => 'getDescription',
            'udp' => 'getUdp'
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
    const UDP_BLOCK = 'block';
    const UDP_UNBLOCK = 'unblock';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUdpAllowableValues()
    {
        return [
            self::UDP_BLOCK,
            self::UDP_UNBLOCK,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['udp'] = isset($data['udp']) ? $data['udp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['threshold']) && ($this->container['threshold'] > 1000)) {
                $invalidProperties[] = "invalid value for 'threshold', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['threshold']) && ($this->container['threshold'] < 100)) {
                $invalidProperties[] = "invalid value for 'threshold', must be bigger than or equal to 100.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getUdpAllowableValues();
                if (!is_null($this->container['udp']) && !in_array($this->container['udp'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'udp', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets name
    *  策略名
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 策略名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets threshold
    *  清洗阈值
    *
    * @return int|null
    */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
    * Sets threshold
    *
    * @param int|null $threshold 清洗阈值
    *
    * @return $this
    */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets udp
    *  udp协议封禁。block：封禁，unblock：不封禁
    *
    * @return string|null
    */
    public function getUdp()
    {
        return $this->container['udp'];
    }

    /**
    * Sets udp
    *
    * @param string|null $udp udp协议封禁。block：封禁，unblock：不封禁
    *
    * @return $this
    */
    public function setUdp($udp)
    {
        $this->container['udp'] = $udp;
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

