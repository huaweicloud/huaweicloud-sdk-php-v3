<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowKeyRotationStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowKeyRotationStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyRotationEnabled  密钥轮换状态，默认为“false”，表示关闭密钥轮换功能。
    * rotationInterval  轮换周期，取值范围为30~365的整数。 周期范围设置根据密钥使用频率进行，若密钥使用频率高，建议设置为短周期；反之，则设置为长周期。
    * lastRotationTime  上一次密钥轮换时间。时间戳，即从1970年1月1日至该时间的总秒数。
    * numberOfRotations  密钥轮换次数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyRotationEnabled' => 'bool',
            'rotationInterval' => 'int',
            'lastRotationTime' => 'string',
            'numberOfRotations' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyRotationEnabled  密钥轮换状态，默认为“false”，表示关闭密钥轮换功能。
    * rotationInterval  轮换周期，取值范围为30~365的整数。 周期范围设置根据密钥使用频率进行，若密钥使用频率高，建议设置为短周期；反之，则设置为长周期。
    * lastRotationTime  上一次密钥轮换时间。时间戳，即从1970年1月1日至该时间的总秒数。
    * numberOfRotations  密钥轮换次数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyRotationEnabled' => null,
        'rotationInterval' => 'int32',
        'lastRotationTime' => null,
        'numberOfRotations' => 'int32'
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
    * keyRotationEnabled  密钥轮换状态，默认为“false”，表示关闭密钥轮换功能。
    * rotationInterval  轮换周期，取值范围为30~365的整数。 周期范围设置根据密钥使用频率进行，若密钥使用频率高，建议设置为短周期；反之，则设置为长周期。
    * lastRotationTime  上一次密钥轮换时间。时间戳，即从1970年1月1日至该时间的总秒数。
    * numberOfRotations  密钥轮换次数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyRotationEnabled' => 'key_rotation_enabled',
            'rotationInterval' => 'rotation_interval',
            'lastRotationTime' => 'last_rotation_time',
            'numberOfRotations' => 'number_of_rotations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyRotationEnabled  密钥轮换状态，默认为“false”，表示关闭密钥轮换功能。
    * rotationInterval  轮换周期，取值范围为30~365的整数。 周期范围设置根据密钥使用频率进行，若密钥使用频率高，建议设置为短周期；反之，则设置为长周期。
    * lastRotationTime  上一次密钥轮换时间。时间戳，即从1970年1月1日至该时间的总秒数。
    * numberOfRotations  密钥轮换次数。
    *
    * @var string[]
    */
    protected static $setters = [
            'keyRotationEnabled' => 'setKeyRotationEnabled',
            'rotationInterval' => 'setRotationInterval',
            'lastRotationTime' => 'setLastRotationTime',
            'numberOfRotations' => 'setNumberOfRotations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyRotationEnabled  密钥轮换状态，默认为“false”，表示关闭密钥轮换功能。
    * rotationInterval  轮换周期，取值范围为30~365的整数。 周期范围设置根据密钥使用频率进行，若密钥使用频率高，建议设置为短周期；反之，则设置为长周期。
    * lastRotationTime  上一次密钥轮换时间。时间戳，即从1970年1月1日至该时间的总秒数。
    * numberOfRotations  密钥轮换次数。
    *
    * @var string[]
    */
    protected static $getters = [
            'keyRotationEnabled' => 'getKeyRotationEnabled',
            'rotationInterval' => 'getRotationInterval',
            'lastRotationTime' => 'getLastRotationTime',
            'numberOfRotations' => 'getNumberOfRotations'
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
        $this->container['keyRotationEnabled'] = isset($data['keyRotationEnabled']) ? $data['keyRotationEnabled'] : null;
        $this->container['rotationInterval'] = isset($data['rotationInterval']) ? $data['rotationInterval'] : null;
        $this->container['lastRotationTime'] = isset($data['lastRotationTime']) ? $data['lastRotationTime'] : null;
        $this->container['numberOfRotations'] = isset($data['numberOfRotations']) ? $data['numberOfRotations'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['rotationInterval']) && ($this->container['rotationInterval'] > 365)) {
                $invalidProperties[] = "invalid value for 'rotationInterval', must be smaller than or equal to 365.";
            }
            if (!is_null($this->container['rotationInterval']) && ($this->container['rotationInterval'] < 30)) {
                $invalidProperties[] = "invalid value for 'rotationInterval', must be bigger than or equal to 30.";
            }
            if (!is_null($this->container['lastRotationTime']) && (mb_strlen($this->container['lastRotationTime']) > 13)) {
                $invalidProperties[] = "invalid value for 'lastRotationTime', the character length must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['lastRotationTime']) && (mb_strlen($this->container['lastRotationTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'lastRotationTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['numberOfRotations']) && ($this->container['numberOfRotations'] > 1000)) {
                $invalidProperties[] = "invalid value for 'numberOfRotations', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['numberOfRotations']) && ($this->container['numberOfRotations'] < 0)) {
                $invalidProperties[] = "invalid value for 'numberOfRotations', must be bigger than or equal to 0.";
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
    * Gets keyRotationEnabled
    *  密钥轮换状态，默认为“false”，表示关闭密钥轮换功能。
    *
    * @return bool|null
    */
    public function getKeyRotationEnabled()
    {
        return $this->container['keyRotationEnabled'];
    }

    /**
    * Sets keyRotationEnabled
    *
    * @param bool|null $keyRotationEnabled 密钥轮换状态，默认为“false”，表示关闭密钥轮换功能。
    *
    * @return $this
    */
    public function setKeyRotationEnabled($keyRotationEnabled)
    {
        $this->container['keyRotationEnabled'] = $keyRotationEnabled;
        return $this;
    }

    /**
    * Gets rotationInterval
    *  轮换周期，取值范围为30~365的整数。 周期范围设置根据密钥使用频率进行，若密钥使用频率高，建议设置为短周期；反之，则设置为长周期。
    *
    * @return int|null
    */
    public function getRotationInterval()
    {
        return $this->container['rotationInterval'];
    }

    /**
    * Sets rotationInterval
    *
    * @param int|null $rotationInterval 轮换周期，取值范围为30~365的整数。 周期范围设置根据密钥使用频率进行，若密钥使用频率高，建议设置为短周期；反之，则设置为长周期。
    *
    * @return $this
    */
    public function setRotationInterval($rotationInterval)
    {
        $this->container['rotationInterval'] = $rotationInterval;
        return $this;
    }

    /**
    * Gets lastRotationTime
    *  上一次密钥轮换时间。时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return string|null
    */
    public function getLastRotationTime()
    {
        return $this->container['lastRotationTime'];
    }

    /**
    * Sets lastRotationTime
    *
    * @param string|null $lastRotationTime 上一次密钥轮换时间。时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return $this
    */
    public function setLastRotationTime($lastRotationTime)
    {
        $this->container['lastRotationTime'] = $lastRotationTime;
        return $this;
    }

    /**
    * Gets numberOfRotations
    *  密钥轮换次数。
    *
    * @return int|null
    */
    public function getNumberOfRotations()
    {
        return $this->container['numberOfRotations'];
    }

    /**
    * Sets numberOfRotations
    *
    * @param int|null $numberOfRotations 密钥轮换次数。
    *
    * @return $this
    */
    public function setNumberOfRotations($numberOfRotations)
    {
        $this->container['numberOfRotations'] = $numberOfRotations;
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

