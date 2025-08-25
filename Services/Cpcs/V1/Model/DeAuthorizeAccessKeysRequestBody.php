<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeAuthorizeAccessKeysRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeAuthorizeAccessKeysRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessKeyIds  需要被解除授权的访问密钥的ID列表，若需要解除所有访问密钥的授权，则仅传入一个元素，且该元素值为“all”，如body为“{\"access_key_ids\": [\"all\"]}”
    * appId  应用ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessKeyIds' => 'string[]',
            'appId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessKeyIds  需要被解除授权的访问密钥的ID列表，若需要解除所有访问密钥的授权，则仅传入一个元素，且该元素值为“all”，如body为“{\"access_key_ids\": [\"all\"]}”
    * appId  应用ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessKeyIds' => null,
        'appId' => null
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
    * accessKeyIds  需要被解除授权的访问密钥的ID列表，若需要解除所有访问密钥的授权，则仅传入一个元素，且该元素值为“all”，如body为“{\"access_key_ids\": [\"all\"]}”
    * appId  应用ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessKeyIds' => 'access_key_ids',
            'appId' => 'app_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessKeyIds  需要被解除授权的访问密钥的ID列表，若需要解除所有访问密钥的授权，则仅传入一个元素，且该元素值为“all”，如body为“{\"access_key_ids\": [\"all\"]}”
    * appId  应用ID
    *
    * @var string[]
    */
    protected static $setters = [
            'accessKeyIds' => 'setAccessKeyIds',
            'appId' => 'setAppId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessKeyIds  需要被解除授权的访问密钥的ID列表，若需要解除所有访问密钥的授权，则仅传入一个元素，且该元素值为“all”，如body为“{\"access_key_ids\": [\"all\"]}”
    * appId  应用ID
    *
    * @var string[]
    */
    protected static $getters = [
            'accessKeyIds' => 'getAccessKeyIds',
            'appId' => 'getAppId'
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
        $this->container['accessKeyIds'] = isset($data['accessKeyIds']) ? $data['accessKeyIds'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accessKeyIds'] === null) {
            $invalidProperties[] = "'accessKeyIds' can't be null";
        }
        if ($this->container['appId'] === null) {
            $invalidProperties[] = "'appId' can't be null";
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
    * Gets accessKeyIds
    *  需要被解除授权的访问密钥的ID列表，若需要解除所有访问密钥的授权，则仅传入一个元素，且该元素值为“all”，如body为“{\"access_key_ids\": [\"all\"]}”
    *
    * @return string[]
    */
    public function getAccessKeyIds()
    {
        return $this->container['accessKeyIds'];
    }

    /**
    * Sets accessKeyIds
    *
    * @param string[] $accessKeyIds 需要被解除授权的访问密钥的ID列表，若需要解除所有访问密钥的授权，则仅传入一个元素，且该元素值为“all”，如body为“{\"access_key_ids\": [\"all\"]}”
    *
    * @return $this
    */
    public function setAccessKeyIds($accessKeyIds)
    {
        $this->container['accessKeyIds'] = $accessKeyIds;
        return $this;
    }

    /**
    * Gets appId
    *  应用ID
    *
    * @return string
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string $appId 应用ID
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
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

