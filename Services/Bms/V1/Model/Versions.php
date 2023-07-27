<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Versions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Versions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  API版本ID
    * links  API的url地址
    * minVersion  API支持的最小微版本号
    * status  这个是API版本的状态。可以是：CURRENT这是使用的API的首选版本；SUPPORTED：这是一个较老的，但仍然支持的API版本；DEPRECATED：一个被废弃的API版本，该版本将被删除
    * version  API支持的最大微版本号
    * updated  API版本发布时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'links' => '\HuaweiCloud\SDK\Bms\V1\Model\VersionLinks[]',
            'minVersion' => 'string',
            'status' => 'string',
            'version' => 'string',
            'updated' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  API版本ID
    * links  API的url地址
    * minVersion  API支持的最小微版本号
    * status  这个是API版本的状态。可以是：CURRENT这是使用的API的首选版本；SUPPORTED：这是一个较老的，但仍然支持的API版本；DEPRECATED：一个被废弃的API版本，该版本将被删除
    * version  API支持的最大微版本号
    * updated  API版本发布时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'links' => null,
        'minVersion' => null,
        'status' => null,
        'version' => null,
        'updated' => 'date-time'
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
    * id  API版本ID
    * links  API的url地址
    * minVersion  API支持的最小微版本号
    * status  这个是API版本的状态。可以是：CURRENT这是使用的API的首选版本；SUPPORTED：这是一个较老的，但仍然支持的API版本；DEPRECATED：一个被废弃的API版本，该版本将被删除
    * version  API支持的最大微版本号
    * updated  API版本发布时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'links' => 'links',
            'minVersion' => 'min_version',
            'status' => 'status',
            'version' => 'version',
            'updated' => 'updated'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  API版本ID
    * links  API的url地址
    * minVersion  API支持的最小微版本号
    * status  这个是API版本的状态。可以是：CURRENT这是使用的API的首选版本；SUPPORTED：这是一个较老的，但仍然支持的API版本；DEPRECATED：一个被废弃的API版本，该版本将被删除
    * version  API支持的最大微版本号
    * updated  API版本发布时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'links' => 'setLinks',
            'minVersion' => 'setMinVersion',
            'status' => 'setStatus',
            'version' => 'setVersion',
            'updated' => 'setUpdated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  API版本ID
    * links  API的url地址
    * minVersion  API支持的最小微版本号
    * status  这个是API版本的状态。可以是：CURRENT这是使用的API的首选版本；SUPPORTED：这是一个较老的，但仍然支持的API版本；DEPRECATED：一个被废弃的API版本，该版本将被删除
    * version  API支持的最大微版本号
    * updated  API版本发布时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'links' => 'getLinks',
            'minVersion' => 'getMinVersion',
            'status' => 'getStatus',
            'version' => 'getVersion',
            'updated' => 'getUpdated'
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
    const ID_V1 = 'v1';
    const STATUS_CURRENT = 'CURRENT';
    const STATUS_SUPPORTED = 'SUPPORTED';
    const STATUS_DEPRECATED = 'DEPRECATED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIdAllowableValues()
    {
        return [
            self::ID_V1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CURRENT,
            self::STATUS_SUPPORTED,
            self::STATUS_DEPRECATED,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['minVersion'] = isset($data['minVersion']) ? $data['minVersion'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getIdAllowableValues();
                if (!is_null($this->container['id']) && !in_array($this->container['id'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'id', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets id
    *  API版本ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id API版本ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets links
    *  API的url地址
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\VersionLinks[]|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\VersionLinks[]|null $links API的url地址
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets minVersion
    *  API支持的最小微版本号
    *
    * @return string|null
    */
    public function getMinVersion()
    {
        return $this->container['minVersion'];
    }

    /**
    * Sets minVersion
    *
    * @param string|null $minVersion API支持的最小微版本号
    *
    * @return $this
    */
    public function setMinVersion($minVersion)
    {
        $this->container['minVersion'] = $minVersion;
        return $this;
    }

    /**
    * Gets status
    *  这个是API版本的状态。可以是：CURRENT这是使用的API的首选版本；SUPPORTED：这是一个较老的，但仍然支持的API版本；DEPRECATED：一个被废弃的API版本，该版本将被删除
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 这个是API版本的状态。可以是：CURRENT这是使用的API的首选版本；SUPPORTED：这是一个较老的，但仍然支持的API版本；DEPRECATED：一个被废弃的API版本，该版本将被删除
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets version
    *  API支持的最大微版本号
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version API支持的最大微版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets updated
    *  API版本发布时间
    *
    * @return \DateTime|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param \DateTime|null $updated API版本发布时间
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
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

