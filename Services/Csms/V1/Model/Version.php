<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Version implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Version';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * versionMetadata  versionMetadata
    * secretBinary  二进制类型凭据在base64编码后的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  类型：base64编码的二进制数据对象。
    * secretString  文本类型凭据的明文，凭据管理服务将其加密后，存入凭据的初始版本中。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'versionMetadata' => '\HuaweiCloud\SDK\Csms\V1\Model\VersionMetadata',
            'secretBinary' => 'string',
            'secretString' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * versionMetadata  versionMetadata
    * secretBinary  二进制类型凭据在base64编码后的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  类型：base64编码的二进制数据对象。
    * secretString  文本类型凭据的明文，凭据管理服务将其加密后，存入凭据的初始版本中。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'versionMetadata' => null,
        'secretBinary' => null,
        'secretString' => null
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
    * versionMetadata  versionMetadata
    * secretBinary  二进制类型凭据在base64编码后的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  类型：base64编码的二进制数据对象。
    * secretString  文本类型凭据的明文，凭据管理服务将其加密后，存入凭据的初始版本中。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'versionMetadata' => 'version_metadata',
            'secretBinary' => 'secret_binary',
            'secretString' => 'secret_string'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * versionMetadata  versionMetadata
    * secretBinary  二进制类型凭据在base64编码后的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  类型：base64编码的二进制数据对象。
    * secretString  文本类型凭据的明文，凭据管理服务将其加密后，存入凭据的初始版本中。
    *
    * @var string[]
    */
    protected static $setters = [
            'versionMetadata' => 'setVersionMetadata',
            'secretBinary' => 'setSecretBinary',
            'secretString' => 'setSecretString'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * versionMetadata  versionMetadata
    * secretBinary  二进制类型凭据在base64编码后的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  类型：base64编码的二进制数据对象。
    * secretString  文本类型凭据的明文，凭据管理服务将其加密后，存入凭据的初始版本中。
    *
    * @var string[]
    */
    protected static $getters = [
            'versionMetadata' => 'getVersionMetadata',
            'secretBinary' => 'getSecretBinary',
            'secretString' => 'getSecretString'
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
        $this->container['versionMetadata'] = isset($data['versionMetadata']) ? $data['versionMetadata'] : null;
        $this->container['secretBinary'] = isset($data['secretBinary']) ? $data['secretBinary'] : null;
        $this->container['secretString'] = isset($data['secretString']) ? $data['secretString'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['secretBinary']) && (mb_strlen($this->container['secretBinary']) > 32768)) {
                $invalidProperties[] = "invalid value for 'secretBinary', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['secretBinary']) && (mb_strlen($this->container['secretBinary']) < 0)) {
                $invalidProperties[] = "invalid value for 'secretBinary', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['secretString']) && (mb_strlen($this->container['secretString']) > 32768)) {
                $invalidProperties[] = "invalid value for 'secretString', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['secretString']) && (mb_strlen($this->container['secretString']) < 0)) {
                $invalidProperties[] = "invalid value for 'secretString', the character length must be bigger than or equal to 0.";
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
    * Gets versionMetadata
    *  versionMetadata
    *
    * @return \HuaweiCloud\SDK\Csms\V1\Model\VersionMetadata|null
    */
    public function getVersionMetadata()
    {
        return $this->container['versionMetadata'];
    }

    /**
    * Sets versionMetadata
    *
    * @param \HuaweiCloud\SDK\Csms\V1\Model\VersionMetadata|null $versionMetadata versionMetadata
    *
    * @return $this
    */
    public function setVersionMetadata($versionMetadata)
    {
        $this->container['versionMetadata'] = $versionMetadata;
        return $this;
    }

    /**
    * Gets secretBinary
    *  二进制类型凭据在base64编码后的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  类型：base64编码的二进制数据对象。
    *
    * @return string|null
    */
    public function getSecretBinary()
    {
        return $this->container['secretBinary'];
    }

    /**
    * Sets secretBinary
    *
    * @param string|null $secretBinary 二进制类型凭据在base64编码后的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  类型：base64编码的二进制数据对象。
    *
    * @return $this
    */
    public function setSecretBinary($secretBinary)
    {
        $this->container['secretBinary'] = $secretBinary;
        return $this;
    }

    /**
    * Gets secretString
    *  文本类型凭据的明文，凭据管理服务将其加密后，存入凭据的初始版本中。
    *
    * @return string|null
    */
    public function getSecretString()
    {
        return $this->container['secretString'];
    }

    /**
    * Sets secretString
    *
    * @param string|null $secretString 文本类型凭据的明文，凭据管理服务将其加密后，存入凭据的初始版本中。
    *
    * @return $this
    */
    public function setSecretString($secretString)
    {
        $this->container['secretString'] = $secretString;
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

