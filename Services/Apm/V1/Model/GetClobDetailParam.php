<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetClobDetailParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetClobDetailParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * envId  环境id。
    * clobId  clobId。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'envId' => 'int',
            'clobId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * envId  环境id。
    * clobId  clobId。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'envId' => 'int64',
        'clobId' => null
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
    * envId  环境id。
    * clobId  clobId。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'envId' => 'env_id',
            'clobId' => 'clob_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * envId  环境id。
    * clobId  clobId。
    *
    * @var string[]
    */
    protected static $setters = [
            'envId' => 'setEnvId',
            'clobId' => 'setClobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * envId  环境id。
    * clobId  clobId。
    *
    * @var string[]
    */
    protected static $getters = [
            'envId' => 'getEnvId',
            'clobId' => 'getClobId'
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
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['clobId'] = isset($data['clobId']) ? $data['clobId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['envId'] === null) {
            $invalidProperties[] = "'envId' can't be null";
        }
        if ($this->container['clobId'] === null) {
            $invalidProperties[] = "'clobId' can't be null";
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
    * Gets envId
    *  环境id。
    *
    * @return int
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param int $envId 环境id。
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets clobId
    *  clobId。
    *
    * @return string
    */
    public function getClobId()
    {
        return $this->container['clobId'];
    }

    /**
    * Sets clobId
    *
    * @param string $clobId clobId。
    *
    * @return $this
    */
    public function setClobId($clobId)
    {
        $this->container['clobId'] = $clobId;
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

