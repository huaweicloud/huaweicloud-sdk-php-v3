<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SupabaseStorageComponentConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SupabaseStorageComponentConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  是否启用Storage组件。enabled=false时bucket_name/ak/sk必须全空；enabled=true时全必填。
    * type  对象存储类型。
    * bucketName  桶名称，3~64字符。enabled=true时必填。
    * ak  访问密钥ID，1~32字符。enabled=true时必填。
    * sk  秘密访问密钥，1~64字符。enabled=true时必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'type' => 'string',
            'bucketName' => 'string',
            'ak' => 'string',
            'sk' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  是否启用Storage组件。enabled=false时bucket_name/ak/sk必须全空；enabled=true时全必填。
    * type  对象存储类型。
    * bucketName  桶名称，3~64字符。enabled=true时必填。
    * ak  访问密钥ID，1~32字符。enabled=true时必填。
    * sk  秘密访问密钥，1~64字符。enabled=true时必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'type' => null,
        'bucketName' => null,
        'ak' => null,
        'sk' => null
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
    * enabled  是否启用Storage组件。enabled=false时bucket_name/ak/sk必须全空；enabled=true时全必填。
    * type  对象存储类型。
    * bucketName  桶名称，3~64字符。enabled=true时必填。
    * ak  访问密钥ID，1~32字符。enabled=true时必填。
    * sk  秘密访问密钥，1~64字符。enabled=true时必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'type' => 'type',
            'bucketName' => 'bucket_name',
            'ak' => 'ak',
            'sk' => 'sk'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  是否启用Storage组件。enabled=false时bucket_name/ak/sk必须全空；enabled=true时全必填。
    * type  对象存储类型。
    * bucketName  桶名称，3~64字符。enabled=true时必填。
    * ak  访问密钥ID，1~32字符。enabled=true时必填。
    * sk  秘密访问密钥，1~64字符。enabled=true时必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'type' => 'setType',
            'bucketName' => 'setBucketName',
            'ak' => 'setAk',
            'sk' => 'setSk'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  是否启用Storage组件。enabled=false时bucket_name/ak/sk必须全空；enabled=true时全必填。
    * type  对象存储类型。
    * bucketName  桶名称，3~64字符。enabled=true时必填。
    * ak  访问密钥ID，1~32字符。enabled=true时必填。
    * sk  秘密访问密钥，1~64字符。enabled=true时必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'type' => 'getType',
            'bucketName' => 'getBucketName',
            'ak' => 'getAk',
            'sk' => 'getSk'
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
    const TYPE_OBS = 'obs';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_OBS,
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['ak'] = isset($data['ak']) ? $data['ak'] : null;
        $this->container['sk'] = isset($data['sk']) ? $data['sk'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['bucketName']) && !preg_match("/^[a-zA-Z0-9.\\-]{3,64}$/", $this->container['bucketName'])) {
                $invalidProperties[] = "invalid value for 'bucketName', must be conform to the pattern /^[a-zA-Z0-9.\\-]{3,64}$/.";
            }
            if (!is_null($this->container['ak']) && !preg_match("/^[a-zA-Z0-9_-]{1,32}$/", $this->container['ak'])) {
                $invalidProperties[] = "invalid value for 'ak', must be conform to the pattern /^[a-zA-Z0-9_-]{1,32}$/.";
            }
            if (!is_null($this->container['sk']) && !preg_match("/^[a-zA-Z0-9_-]{1,64}$/", $this->container['sk'])) {
                $invalidProperties[] = "invalid value for 'sk', must be conform to the pattern /^[a-zA-Z0-9_-]{1,64}$/.";
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
    * Gets enabled
    *  是否启用Storage组件。enabled=false时bucket_name/ak/sk必须全空；enabled=true时全必填。
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled 是否启用Storage组件。enabled=false时bucket_name/ak/sk必须全空；enabled=true时全必填。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets type
    *  对象存储类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 对象存储类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets bucketName
    *  桶名称，3~64字符。enabled=true时必填。
    *
    * @return string|null
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string|null $bucketName 桶名称，3~64字符。enabled=true时必填。
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets ak
    *  访问密钥ID，1~32字符。enabled=true时必填。
    *
    * @return string|null
    */
    public function getAk()
    {
        return $this->container['ak'];
    }

    /**
    * Sets ak
    *
    * @param string|null $ak 访问密钥ID，1~32字符。enabled=true时必填。
    *
    * @return $this
    */
    public function setAk($ak)
    {
        $this->container['ak'] = $ak;
        return $this;
    }

    /**
    * Gets sk
    *  秘密访问密钥，1~64字符。enabled=true时必填。
    *
    * @return string|null
    */
    public function getSk()
    {
        return $this->container['sk'];
    }

    /**
    * Sets sk
    *
    * @param string|null $sk 秘密访问密钥，1~64字符。enabled=true时必填。
    *
    * @return $this
    */
    public function setSk($sk)
    {
        $this->container['sk'] = $sk;
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

