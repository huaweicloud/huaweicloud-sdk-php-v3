<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckCredentialRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckCredentialRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucketName  OBS桶名
    * ak  AK
    * sk  SK
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucketName' => 'string',
            'ak' => 'string',
            'sk' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucketName  OBS桶名
    * ak  AK
    * sk  SK
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * bucketName  OBS桶名
    * ak  AK
    * sk  SK
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucketName' => 'bucket_name',
            'ak' => 'ak',
            'sk' => 'sk'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucketName  OBS桶名
    * ak  AK
    * sk  SK
    *
    * @var string[]
    */
    protected static $setters = [
            'bucketName' => 'setBucketName',
            'ak' => 'setAk',
            'sk' => 'setSk'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucketName  OBS桶名
    * ak  AK
    * sk  SK
    *
    * @var string[]
    */
    protected static $getters = [
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
        if ($this->container['bucketName'] === null) {
            $invalidProperties[] = "'bucketName' can't be null";
        }
            if ((mb_strlen($this->container['bucketName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['bucketName']) < 1)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['ak'] === null) {
            $invalidProperties[] = "'ak' can't be null";
        }
            if ((mb_strlen($this->container['ak']) > 64)) {
                $invalidProperties[] = "invalid value for 'ak', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['ak']) < 1)) {
                $invalidProperties[] = "invalid value for 'ak', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['sk'] === null) {
            $invalidProperties[] = "'sk' can't be null";
        }
            if ((mb_strlen($this->container['sk']) > 64)) {
                $invalidProperties[] = "invalid value for 'sk', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['sk']) < 1)) {
                $invalidProperties[] = "invalid value for 'sk', the character length must be bigger than or equal to 1.";
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
    * Gets bucketName
    *  OBS桶名
    *
    * @return string
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string $bucketName OBS桶名
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
    *  AK
    *
    * @return string
    */
    public function getAk()
    {
        return $this->container['ak'];
    }

    /**
    * Sets ak
    *
    * @param string $ak AK
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
    *  SK
    *
    * @return string
    */
    public function getSk()
    {
        return $this->container['sk'];
    }

    /**
    * Sets sk
    *
    * @param string $sk SK
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

