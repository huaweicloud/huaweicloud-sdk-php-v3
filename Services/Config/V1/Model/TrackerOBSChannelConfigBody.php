<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrackerOBSChannelConfigBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrackerOBSChannelConfigBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucketName  OBS桶名称
    * bucketPrefix  OBS桶前缀
    * regionId  区域id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucketName' => 'string',
            'bucketPrefix' => 'string',
            'regionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucketName  OBS桶名称
    * bucketPrefix  OBS桶前缀
    * regionId  区域id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucketName' => null,
        'bucketPrefix' => null,
        'regionId' => null
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
    * bucketName  OBS桶名称
    * bucketPrefix  OBS桶前缀
    * regionId  区域id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucketName' => 'bucket_name',
            'bucketPrefix' => 'bucket_prefix',
            'regionId' => 'region_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucketName  OBS桶名称
    * bucketPrefix  OBS桶前缀
    * regionId  区域id
    *
    * @var string[]
    */
    protected static $setters = [
            'bucketName' => 'setBucketName',
            'bucketPrefix' => 'setBucketPrefix',
            'regionId' => 'setRegionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucketName  OBS桶名称
    * bucketPrefix  OBS桶前缀
    * regionId  区域id
    *
    * @var string[]
    */
    protected static $getters = [
            'bucketName' => 'getBucketName',
            'bucketPrefix' => 'getBucketPrefix',
            'regionId' => 'getRegionId'
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
        $this->container['bucketPrefix'] = isset($data['bucketPrefix']) ? $data['bucketPrefix'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
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
            if ((mb_strlen($this->container['bucketName']) > 63)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be smaller than or equal to 63.";
            }
            if (!preg_match("/[a-z0-9\\-.]{3,63}/", $this->container['bucketName'])) {
                $invalidProperties[] = "invalid value for 'bucketName', must be conform to the pattern /[a-z0-9\\-.]{3,63}/.";
            }
            if (!is_null($this->container['bucketPrefix']) && (mb_strlen($this->container['bucketPrefix']) > 256)) {
                $invalidProperties[] = "invalid value for 'bucketPrefix', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['bucketPrefix']) && !preg_match("/^[a-zA-Z0-9_]+(\/([a-zA-Z0-9_]+))*$/", $this->container['bucketPrefix'])) {
                $invalidProperties[] = "invalid value for 'bucketPrefix', must be conform to the pattern /^[a-zA-Z0-9_]+(\/([a-zA-Z0-9_]+))*$/.";
            }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
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
    *  OBS桶名称
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
    * @param string $bucketName OBS桶名称
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets bucketPrefix
    *  OBS桶前缀
    *
    * @return string|null
    */
    public function getBucketPrefix()
    {
        return $this->container['bucketPrefix'];
    }

    /**
    * Sets bucketPrefix
    *
    * @param string|null $bucketPrefix OBS桶前缀
    *
    * @return $this
    */
    public function setBucketPrefix($bucketPrefix)
    {
        $this->container['bucketPrefix'] = $bucketPrefix;
        return $this;
    }

    /**
    * Gets regionId
    *  区域id
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 区域id
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
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

