<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateBucketAuthorizedReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateBucketAuthorizedReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucket  OBS桶名称。
    * operation  是否进行桶授权。  取值如下： - 0：取消授权。 - 1：授权。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucket' => 'string',
            'operation' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucket  OBS桶名称。
    * operation  是否进行桶授权。  取值如下： - 0：取消授权。 - 1：授权。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucket' => null,
        'operation' => null
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
    * bucket  OBS桶名称。
    * operation  是否进行桶授权。  取值如下： - 0：取消授权。 - 1：授权。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucket' => 'bucket',
            'operation' => 'operation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucket  OBS桶名称。
    * operation  是否进行桶授权。  取值如下： - 0：取消授权。 - 1：授权。
    *
    * @var string[]
    */
    protected static $setters = [
            'bucket' => 'setBucket',
            'operation' => 'setOperation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucket  OBS桶名称。
    * operation  是否进行桶授权。  取值如下： - 0：取消授权。 - 1：授权。
    *
    * @var string[]
    */
    protected static $getters = [
            'bucket' => 'getBucket',
            'operation' => 'getOperation'
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
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['bucket'] === null) {
            $invalidProperties[] = "'bucket' can't be null";
        }
        if ($this->container['operation'] === null) {
            $invalidProperties[] = "'operation' can't be null";
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
    * Gets bucket
    *  OBS桶名称。
    *
    * @return string
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string $bucket OBS桶名称。
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets operation
    *  是否进行桶授权。  取值如下： - 0：取消授权。 - 1：授权。
    *
    * @return string
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string $operation 是否进行桶授权。  取值如下： - 0：取消授权。 - 1：授权。
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
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

