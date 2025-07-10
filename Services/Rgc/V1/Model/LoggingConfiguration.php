<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoggingConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoggingConfiguration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * loggingBucketName  日志桶名称。
    * accessLoggingBucket  accessLoggingBucket
    * loggingBucket  loggingBucket
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'loggingBucketName' => 'string',
            'accessLoggingBucket' => '\HuaweiCloud\SDK\Rgc\V1\Model\AccessLoggingBucketBaseline',
            'loggingBucket' => '\HuaweiCloud\SDK\Rgc\V1\Model\LoggingBucketBaseline'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * loggingBucketName  日志桶名称。
    * accessLoggingBucket  accessLoggingBucket
    * loggingBucket  loggingBucket
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'loggingBucketName' => null,
        'accessLoggingBucket' => null,
        'loggingBucket' => null
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
    * loggingBucketName  日志桶名称。
    * accessLoggingBucket  accessLoggingBucket
    * loggingBucket  loggingBucket
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'loggingBucketName' => 'logging_bucket_name',
            'accessLoggingBucket' => 'access_logging_bucket',
            'loggingBucket' => 'logging_bucket'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * loggingBucketName  日志桶名称。
    * accessLoggingBucket  accessLoggingBucket
    * loggingBucket  loggingBucket
    *
    * @var string[]
    */
    protected static $setters = [
            'loggingBucketName' => 'setLoggingBucketName',
            'accessLoggingBucket' => 'setAccessLoggingBucket',
            'loggingBucket' => 'setLoggingBucket'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * loggingBucketName  日志桶名称。
    * accessLoggingBucket  accessLoggingBucket
    * loggingBucket  loggingBucket
    *
    * @var string[]
    */
    protected static $getters = [
            'loggingBucketName' => 'getLoggingBucketName',
            'accessLoggingBucket' => 'getAccessLoggingBucket',
            'loggingBucket' => 'getLoggingBucket'
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
        $this->container['loggingBucketName'] = isset($data['loggingBucketName']) ? $data['loggingBucketName'] : null;
        $this->container['accessLoggingBucket'] = isset($data['accessLoggingBucket']) ? $data['accessLoggingBucket'] : null;
        $this->container['loggingBucket'] = isset($data['loggingBucket']) ? $data['loggingBucket'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['loggingBucketName']) && (mb_strlen($this->container['loggingBucketName']) > 512)) {
                $invalidProperties[] = "invalid value for 'loggingBucketName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['loggingBucketName']) && (mb_strlen($this->container['loggingBucketName']) < 1)) {
                $invalidProperties[] = "invalid value for 'loggingBucketName', the character length must be bigger than or equal to 1.";
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
    * Gets loggingBucketName
    *  日志桶名称。
    *
    * @return string|null
    */
    public function getLoggingBucketName()
    {
        return $this->container['loggingBucketName'];
    }

    /**
    * Sets loggingBucketName
    *
    * @param string|null $loggingBucketName 日志桶名称。
    *
    * @return $this
    */
    public function setLoggingBucketName($loggingBucketName)
    {
        $this->container['loggingBucketName'] = $loggingBucketName;
        return $this;
    }

    /**
    * Gets accessLoggingBucket
    *  accessLoggingBucket
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\AccessLoggingBucketBaseline|null
    */
    public function getAccessLoggingBucket()
    {
        return $this->container['accessLoggingBucket'];
    }

    /**
    * Sets accessLoggingBucket
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\AccessLoggingBucketBaseline|null $accessLoggingBucket accessLoggingBucket
    *
    * @return $this
    */
    public function setAccessLoggingBucket($accessLoggingBucket)
    {
        $this->container['accessLoggingBucket'] = $accessLoggingBucket;
        return $this;
    }

    /**
    * Gets loggingBucket
    *  loggingBucket
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\LoggingBucketBaseline|null
    */
    public function getLoggingBucket()
    {
        return $this->container['loggingBucket'];
    }

    /**
    * Sets loggingBucket
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\LoggingBucketBaseline|null $loggingBucket loggingBucket
    *
    * @return $this
    */
    public function setLoggingBucket($loggingBucket)
    {
        $this->container['loggingBucket'] = $loggingBucket;
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

