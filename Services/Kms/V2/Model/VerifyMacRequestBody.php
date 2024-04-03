<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VerifyMacRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VerifyMacRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  密钥ID
    * macAlgorithm  Mac算法，HMAC_SM3只有中国区支持。枚举如下： - HMAC_SHA_256 - HMAC_SHA_384 - HMAC_SHA_512 - HMAC_SM3
    * message  待处理消息。原消息最小长度1、最大长度4096。请将原消息转为Base64格式后传入
    * mac  待校验的消息验证码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'macAlgorithm' => 'string',
            'message' => 'string',
            'mac' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  密钥ID
    * macAlgorithm  Mac算法，HMAC_SM3只有中国区支持。枚举如下： - HMAC_SHA_256 - HMAC_SHA_384 - HMAC_SHA_512 - HMAC_SM3
    * message  待处理消息。原消息最小长度1、最大长度4096。请将原消息转为Base64格式后传入
    * mac  待校验的消息验证码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'macAlgorithm' => null,
        'message' => null,
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
    * macAlgorithm  Mac算法，HMAC_SM3只有中国区支持。枚举如下： - HMAC_SHA_256 - HMAC_SHA_384 - HMAC_SHA_512 - HMAC_SM3
    * message  待处理消息。原消息最小长度1、最大长度4096。请将原消息转为Base64格式后传入
    * mac  待校验的消息验证码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'macAlgorithm' => 'mac_algorithm',
            'message' => 'message',
            'mac' => 'mac'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  密钥ID
    * macAlgorithm  Mac算法，HMAC_SM3只有中国区支持。枚举如下： - HMAC_SHA_256 - HMAC_SHA_384 - HMAC_SHA_512 - HMAC_SM3
    * message  待处理消息。原消息最小长度1、最大长度4096。请将原消息转为Base64格式后传入
    * mac  待校验的消息验证码
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'macAlgorithm' => 'setMacAlgorithm',
            'message' => 'setMessage',
            'mac' => 'setMac'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  密钥ID
    * macAlgorithm  Mac算法，HMAC_SM3只有中国区支持。枚举如下： - HMAC_SHA_256 - HMAC_SHA_384 - HMAC_SHA_512 - HMAC_SM3
    * message  待处理消息。原消息最小长度1、最大长度4096。请将原消息转为Base64格式后传入
    * mac  待校验的消息验证码
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'macAlgorithm' => 'getMacAlgorithm',
            'message' => 'getMessage',
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
    const MAC_ALGORITHM_HMAC_SHA_256 = 'HMAC_SHA_256';
    const MAC_ALGORITHM_HMAC_SHA_384 = 'HMAC_SHA_384';
    const MAC_ALGORITHM_HMAC_SHA_512 = 'HMAC_SHA_512';
    const MAC_ALGORITHM_HMAC_SM3 = 'HMAC_SM3';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMacAlgorithmAllowableValues()
    {
        return [
            self::MAC_ALGORITHM_HMAC_SHA_256,
            self::MAC_ALGORITHM_HMAC_SHA_384,
            self::MAC_ALGORITHM_HMAC_SHA_512,
            self::MAC_ALGORITHM_HMAC_SM3,
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
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['macAlgorithm'] = isset($data['macAlgorithm']) ? $data['macAlgorithm'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
        if ($this->container['keyId'] === null) {
            $invalidProperties[] = "'keyId' can't be null";
        }
            if ((mb_strlen($this->container['keyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['keyId']) < 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['macAlgorithm'] === null) {
            $invalidProperties[] = "'macAlgorithm' can't be null";
        }
            $allowedValues = $this->getMacAlgorithmAllowableValues();
                if (!is_null($this->container['macAlgorithm']) && !in_array($this->container['macAlgorithm'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'macAlgorithm', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ($this->container['mac'] === null) {
            $invalidProperties[] = "'mac' can't be null";
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
    * @return string
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param string $keyId 密钥ID
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
    *  Mac算法，HMAC_SM3只有中国区支持。枚举如下： - HMAC_SHA_256 - HMAC_SHA_384 - HMAC_SHA_512 - HMAC_SM3
    *
    * @return string
    */
    public function getMacAlgorithm()
    {
        return $this->container['macAlgorithm'];
    }

    /**
    * Sets macAlgorithm
    *
    * @param string $macAlgorithm Mac算法，HMAC_SM3只有中国区支持。枚举如下： - HMAC_SHA_256 - HMAC_SHA_384 - HMAC_SHA_512 - HMAC_SM3
    *
    * @return $this
    */
    public function setMacAlgorithm($macAlgorithm)
    {
        $this->container['macAlgorithm'] = $macAlgorithm;
        return $this;
    }

    /**
    * Gets message
    *  待处理消息。原消息最小长度1、最大长度4096。请将原消息转为Base64格式后传入
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
    * @param string $message 待处理消息。原消息最小长度1、最大长度4096。请将原消息转为Base64格式后传入
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets mac
    *  待校验的消息验证码
    *
    * @return string
    */
    public function getMac()
    {
        return $this->container['mac'];
    }

    /**
    * Sets mac
    *
    * @param string $mac 待校验的消息验证码
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

