<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SslInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SslInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sslId  SSL证书编号。
    * sslName  SSL证书名称。
    * algorithmType  证书算法类型： - RSA - ECC - SM2
    * type  证书可见范围： - instance：当前实例 - global：全局
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sslId' => 'string',
            'sslName' => 'string',
            'algorithmType' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sslId  SSL证书编号。
    * sslName  SSL证书名称。
    * algorithmType  证书算法类型： - RSA - ECC - SM2
    * type  证书可见范围： - instance：当前实例 - global：全局
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sslId' => null,
        'sslName' => null,
        'algorithmType' => null,
        'type' => null
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
    * sslId  SSL证书编号。
    * sslName  SSL证书名称。
    * algorithmType  证书算法类型： - RSA - ECC - SM2
    * type  证书可见范围： - instance：当前实例 - global：全局
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sslId' => 'ssl_id',
            'sslName' => 'ssl_name',
            'algorithmType' => 'algorithm_type',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sslId  SSL证书编号。
    * sslName  SSL证书名称。
    * algorithmType  证书算法类型： - RSA - ECC - SM2
    * type  证书可见范围： - instance：当前实例 - global：全局
    *
    * @var string[]
    */
    protected static $setters = [
            'sslId' => 'setSslId',
            'sslName' => 'setSslName',
            'algorithmType' => 'setAlgorithmType',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sslId  SSL证书编号。
    * sslName  SSL证书名称。
    * algorithmType  证书算法类型： - RSA - ECC - SM2
    * type  证书可见范围： - instance：当前实例 - global：全局
    *
    * @var string[]
    */
    protected static $getters = [
            'sslId' => 'getSslId',
            'sslName' => 'getSslName',
            'algorithmType' => 'getAlgorithmType',
            'type' => 'getType'
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
    const ALGORITHM_TYPE_RSA = 'RSA';
    const ALGORITHM_TYPE_ECC = 'ECC';
    const ALGORITHM_TYPE_SM2 = 'SM2';
    const TYPE_INSTANCE = 'instance';
    const TYPE__GLOBAL = 'global';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlgorithmTypeAllowableValues()
    {
        return [
            self::ALGORITHM_TYPE_RSA,
            self::ALGORITHM_TYPE_ECC,
            self::ALGORITHM_TYPE_SM2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INSTANCE,
            self::TYPE__GLOBAL,
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
        $this->container['sslId'] = isset($data['sslId']) ? $data['sslId'] : null;
        $this->container['sslName'] = isset($data['sslName']) ? $data['sslName'] : null;
        $this->container['algorithmType'] = isset($data['algorithmType']) ? $data['algorithmType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAlgorithmTypeAllowableValues();
                if (!is_null($this->container['algorithmType']) && !in_array($this->container['algorithmType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'algorithmType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets sslId
    *  SSL证书编号。
    *
    * @return string|null
    */
    public function getSslId()
    {
        return $this->container['sslId'];
    }

    /**
    * Sets sslId
    *
    * @param string|null $sslId SSL证书编号。
    *
    * @return $this
    */
    public function setSslId($sslId)
    {
        $this->container['sslId'] = $sslId;
        return $this;
    }

    /**
    * Gets sslName
    *  SSL证书名称。
    *
    * @return string|null
    */
    public function getSslName()
    {
        return $this->container['sslName'];
    }

    /**
    * Sets sslName
    *
    * @param string|null $sslName SSL证书名称。
    *
    * @return $this
    */
    public function setSslName($sslName)
    {
        $this->container['sslName'] = $sslName;
        return $this;
    }

    /**
    * Gets algorithmType
    *  证书算法类型： - RSA - ECC - SM2
    *
    * @return string|null
    */
    public function getAlgorithmType()
    {
        return $this->container['algorithmType'];
    }

    /**
    * Sets algorithmType
    *
    * @param string|null $algorithmType 证书算法类型： - RSA - ECC - SM2
    *
    * @return $this
    */
    public function setAlgorithmType($algorithmType)
    {
        $this->container['algorithmType'] = $algorithmType;
        return $this;
    }

    /**
    * Gets type
    *  证书可见范围： - instance：当前实例 - global：全局
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
    * @param string|null $type 证书可见范围： - instance：当前实例 - global：全局
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

