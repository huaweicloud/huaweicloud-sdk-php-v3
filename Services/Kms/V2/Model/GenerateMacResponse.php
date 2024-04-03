<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GenerateMacResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GenerateMacResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  密钥ID
    * macAlgorithm  Mac算法
    * mac  生成的消息验证码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'macAlgorithm' => 'string',
            'mac' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  密钥ID
    * macAlgorithm  Mac算法
    * mac  生成的消息验证码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'macAlgorithm' => null,
        'mac' => null
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
    * keyId  密钥ID
    * macAlgorithm  Mac算法
    * mac  生成的消息验证码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'macAlgorithm' => 'mac_algorithm',
            'mac' => 'mac'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  密钥ID
    * macAlgorithm  Mac算法
    * mac  生成的消息验证码
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'macAlgorithm' => 'setMacAlgorithm',
            'mac' => 'setMac'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  密钥ID
    * macAlgorithm  Mac算法
    * mac  生成的消息验证码
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'macAlgorithm' => 'getMacAlgorithm',
            'mac' => 'getMac'
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
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['macAlgorithm'] = isset($data['macAlgorithm']) ? $data['macAlgorithm'] : null;
        $this->container['mac'] = isset($data['mac']) ? $data['mac'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) < 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be bigger than or equal to 36.";
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
    * Gets keyId
    *  密钥ID
    *
    * @return string|null
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param string|null $keyId 密钥ID
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
        return $this;
    }

    /**
    * Gets macAlgorithm
    *  Mac算法
    *
    * @return string|null
    */
    public function getMacAlgorithm()
    {
        return $this->container['macAlgorithm'];
    }

    /**
    * Sets macAlgorithm
    *
    * @param string|null $macAlgorithm Mac算法
    *
    * @return $this
    */
    public function setMacAlgorithm($macAlgorithm)
    {
        $this->container['macAlgorithm'] = $macAlgorithm;
        return $this;
    }

    /**
    * Gets mac
    *  生成的消息验证码
    *
    * @return string|null
    */
    public function getMac()
    {
        return $this->container['mac'];
    }

    /**
    * Sets mac
    *
    * @param string|null $mac 生成的消息验证码
    *
    * @return $this
    */
    public function setMac($mac)
    {
        $this->container['mac'] = $mac;
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

