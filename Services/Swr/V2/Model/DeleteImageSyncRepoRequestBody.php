<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteImageSyncRepoRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteImageSyncRepoRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * remoteRegionId  目标region ID。
    * remoteNamespace  目标组织
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'remoteRegionId' => 'string',
            'remoteNamespace' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * remoteRegionId  目标region ID。
    * remoteNamespace  目标组织
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'remoteRegionId' => null,
        'remoteNamespace' => null
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
    * remoteRegionId  目标region ID。
    * remoteNamespace  目标组织
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'remoteRegionId' => 'remoteRegionId',
            'remoteNamespace' => 'remoteNamespace'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * remoteRegionId  目标region ID。
    * remoteNamespace  目标组织
    *
    * @var string[]
    */
    protected static $setters = [
            'remoteRegionId' => 'setRemoteRegionId',
            'remoteNamespace' => 'setRemoteNamespace'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * remoteRegionId  目标region ID。
    * remoteNamespace  目标组织
    *
    * @var string[]
    */
    protected static $getters = [
            'remoteRegionId' => 'getRemoteRegionId',
            'remoteNamespace' => 'getRemoteNamespace'
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
        $this->container['remoteRegionId'] = isset($data['remoteRegionId']) ? $data['remoteRegionId'] : null;
        $this->container['remoteNamespace'] = isset($data['remoteNamespace']) ? $data['remoteNamespace'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['remoteRegionId'] === null) {
            $invalidProperties[] = "'remoteRegionId' can't be null";
        }
        if ($this->container['remoteNamespace'] === null) {
            $invalidProperties[] = "'remoteNamespace' can't be null";
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
    * Gets remoteRegionId
    *  目标region ID。
    *
    * @return string
    */
    public function getRemoteRegionId()
    {
        return $this->container['remoteRegionId'];
    }

    /**
    * Sets remoteRegionId
    *
    * @param string $remoteRegionId 目标region ID。
    *
    * @return $this
    */
    public function setRemoteRegionId($remoteRegionId)
    {
        $this->container['remoteRegionId'] = $remoteRegionId;
        return $this;
    }

    /**
    * Gets remoteNamespace
    *  目标组织
    *
    * @return string
    */
    public function getRemoteNamespace()
    {
        return $this->container['remoteNamespace'];
    }

    /**
    * Sets remoteNamespace
    *
    * @param string $remoteNamespace 目标组织
    *
    * @return $this
    */
    public function setRemoteNamespace($remoteNamespace)
    {
        $this->container['remoteNamespace'] = $remoteNamespace;
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

