<?php

namespace HuaweiCloud\SDK\Kps\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FailedKeypair implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FailedKeypair';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keypairName  SSH密钥对名称
    * failedReason  导入失败的原因
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keypairName' => 'string',
            'failedReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keypairName  SSH密钥对名称
    * failedReason  导入失败的原因
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keypairName' => null,
        'failedReason' => null
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
    * keypairName  SSH密钥对名称
    * failedReason  导入失败的原因
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keypairName' => 'keypair_name',
            'failedReason' => 'failed_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keypairName  SSH密钥对名称
    * failedReason  导入失败的原因
    *
    * @var string[]
    */
    protected static $setters = [
            'keypairName' => 'setKeypairName',
            'failedReason' => 'setFailedReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keypairName  SSH密钥对名称
    * failedReason  导入失败的原因
    *
    * @var string[]
    */
    protected static $getters = [
            'keypairName' => 'getKeypairName',
            'failedReason' => 'getFailedReason'
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
        $this->container['keypairName'] = isset($data['keypairName']) ? $data['keypairName'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keypairName'] === null) {
            $invalidProperties[] = "'keypairName' can't be null";
        }
            if ((mb_strlen($this->container['keypairName']) > 255)) {
                $invalidProperties[] = "invalid value for 'keypairName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['keypairName']) < 2)) {
                $invalidProperties[] = "invalid value for 'keypairName', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['failedReason'] === null) {
            $invalidProperties[] = "'failedReason' can't be null";
        }
            if ((mb_strlen($this->container['failedReason']) > 512)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['failedReason']) < 2)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be bigger than or equal to 2.";
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
    * Gets keypairName
    *  SSH密钥对名称
    *
    * @return string
    */
    public function getKeypairName()
    {
        return $this->container['keypairName'];
    }

    /**
    * Sets keypairName
    *
    * @param string $keypairName SSH密钥对名称
    *
    * @return $this
    */
    public function setKeypairName($keypairName)
    {
        $this->container['keypairName'] = $keypairName;
        return $this;
    }

    /**
    * Gets failedReason
    *  导入失败的原因
    *
    * @return string
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string $failedReason 导入失败的原因
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
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

