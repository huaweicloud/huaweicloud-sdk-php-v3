<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMetadata2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMetadata2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * encrypted  元数据是否加密
    * masterKeyName  秘钥名称
    * masterKeyId  秘钥id
    * gesMetadata  gesMetadata
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'encrypted' => 'bool',
            'masterKeyName' => 'string',
            'masterKeyId' => 'string',
            'gesMetadata' => '\HuaweiCloud\SDK\Ges\V2\Model\ShowMetadataRespGesMetadata'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * encrypted  元数据是否加密
    * masterKeyName  秘钥名称
    * masterKeyId  秘钥id
    * gesMetadata  gesMetadata
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'encrypted' => null,
        'masterKeyName' => null,
        'masterKeyId' => null,
        'gesMetadata' => null
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
    * encrypted  元数据是否加密
    * masterKeyName  秘钥名称
    * masterKeyId  秘钥id
    * gesMetadata  gesMetadata
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'encrypted' => 'encrypted',
            'masterKeyName' => 'master_key_name',
            'masterKeyId' => 'master_key_id',
            'gesMetadata' => 'ges_metadata'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * encrypted  元数据是否加密
    * masterKeyName  秘钥名称
    * masterKeyId  秘钥id
    * gesMetadata  gesMetadata
    *
    * @var string[]
    */
    protected static $setters = [
            'encrypted' => 'setEncrypted',
            'masterKeyName' => 'setMasterKeyName',
            'masterKeyId' => 'setMasterKeyId',
            'gesMetadata' => 'setGesMetadata'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * encrypted  元数据是否加密
    * masterKeyName  秘钥名称
    * masterKeyId  秘钥id
    * gesMetadata  gesMetadata
    *
    * @var string[]
    */
    protected static $getters = [
            'encrypted' => 'getEncrypted',
            'masterKeyName' => 'getMasterKeyName',
            'masterKeyId' => 'getMasterKeyId',
            'gesMetadata' => 'getGesMetadata'
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
        $this->container['encrypted'] = isset($data['encrypted']) ? $data['encrypted'] : null;
        $this->container['masterKeyName'] = isset($data['masterKeyName']) ? $data['masterKeyName'] : null;
        $this->container['masterKeyId'] = isset($data['masterKeyId']) ? $data['masterKeyId'] : null;
        $this->container['gesMetadata'] = isset($data['gesMetadata']) ? $data['gesMetadata'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets encrypted
    *  元数据是否加密
    *
    * @return bool|null
    */
    public function getEncrypted()
    {
        return $this->container['encrypted'];
    }

    /**
    * Sets encrypted
    *
    * @param bool|null $encrypted 元数据是否加密
    *
    * @return $this
    */
    public function setEncrypted($encrypted)
    {
        $this->container['encrypted'] = $encrypted;
        return $this;
    }

    /**
    * Gets masterKeyName
    *  秘钥名称
    *
    * @return string|null
    */
    public function getMasterKeyName()
    {
        return $this->container['masterKeyName'];
    }

    /**
    * Sets masterKeyName
    *
    * @param string|null $masterKeyName 秘钥名称
    *
    * @return $this
    */
    public function setMasterKeyName($masterKeyName)
    {
        $this->container['masterKeyName'] = $masterKeyName;
        return $this;
    }

    /**
    * Gets masterKeyId
    *  秘钥id
    *
    * @return string|null
    */
    public function getMasterKeyId()
    {
        return $this->container['masterKeyId'];
    }

    /**
    * Sets masterKeyId
    *
    * @param string|null $masterKeyId 秘钥id
    *
    * @return $this
    */
    public function setMasterKeyId($masterKeyId)
    {
        $this->container['masterKeyId'] = $masterKeyId;
        return $this;
    }

    /**
    * Gets gesMetadata
    *  gesMetadata
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\ShowMetadataRespGesMetadata|null
    */
    public function getGesMetadata()
    {
        return $this->container['gesMetadata'];
    }

    /**
    * Sets gesMetadata
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\ShowMetadataRespGesMetadata|null $gesMetadata gesMetadata
    *
    * @return $this
    */
    public function setGesMetadata($gesMetadata)
    {
        $this->container['gesMetadata'] = $gesMetadata;
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

