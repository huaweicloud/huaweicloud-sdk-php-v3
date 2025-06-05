<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiVersionsVersions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiVersions_versions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  版本号，如v1
    * links  url地址
    * version  若该版本API支持微版本，则为支持的最大微版本号，如果不支持微版本，则为空
    * minVersion  若该版本API支持微版本，则为支持的最小微版本号，如果不支持微版本，则为空
    * status  版本状态，支持CURRENT：推荐版本；SUPPORTED：老版本，仍支持使用；DEPRECATED：废弃版本，后续会删除
    * updated  版本发布UTC时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'links' => '\HuaweiCloud\SDK\Eg\V1\Model\ApiVersionsLinks[]',
            'version' => 'string',
            'minVersion' => 'string',
            'status' => 'string',
            'updated' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  版本号，如v1
    * links  url地址
    * version  若该版本API支持微版本，则为支持的最大微版本号，如果不支持微版本，则为空
    * minVersion  若该版本API支持微版本，则为支持的最小微版本号，如果不支持微版本，则为空
    * status  版本状态，支持CURRENT：推荐版本；SUPPORTED：老版本，仍支持使用；DEPRECATED：废弃版本，后续会删除
    * updated  版本发布UTC时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'links' => null,
        'version' => null,
        'minVersion' => null,
        'status' => null,
        'updated' => null
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
    * id  版本号，如v1
    * links  url地址
    * version  若该版本API支持微版本，则为支持的最大微版本号，如果不支持微版本，则为空
    * minVersion  若该版本API支持微版本，则为支持的最小微版本号，如果不支持微版本，则为空
    * status  版本状态，支持CURRENT：推荐版本；SUPPORTED：老版本，仍支持使用；DEPRECATED：废弃版本，后续会删除
    * updated  版本发布UTC时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'links' => 'links',
            'version' => 'version',
            'minVersion' => 'min_version',
            'status' => 'status',
            'updated' => 'updated'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  版本号，如v1
    * links  url地址
    * version  若该版本API支持微版本，则为支持的最大微版本号，如果不支持微版本，则为空
    * minVersion  若该版本API支持微版本，则为支持的最小微版本号，如果不支持微版本，则为空
    * status  版本状态，支持CURRENT：推荐版本；SUPPORTED：老版本，仍支持使用；DEPRECATED：废弃版本，后续会删除
    * updated  版本发布UTC时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'links' => 'setLinks',
            'version' => 'setVersion',
            'minVersion' => 'setMinVersion',
            'status' => 'setStatus',
            'updated' => 'setUpdated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  版本号，如v1
    * links  url地址
    * version  若该版本API支持微版本，则为支持的最大微版本号，如果不支持微版本，则为空
    * minVersion  若该版本API支持微版本，则为支持的最小微版本号，如果不支持微版本，则为空
    * status  版本状态，支持CURRENT：推荐版本；SUPPORTED：老版本，仍支持使用；DEPRECATED：废弃版本，后续会删除
    * updated  版本发布UTC时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'links' => 'getLinks',
            'version' => 'getVersion',
            'minVersion' => 'getMinVersion',
            'status' => 'getStatus',
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
    const STATUS_CURRENT = 'CURRENT';
    const STATUS_SUPPORTED = 'SUPPORTED';
    const STATUS_DEPRECATED = 'DEPRECATED';
    

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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['minVersion'] = isset($data['minVersion']) ? $data['minVersion'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    *  版本号，如v1
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
    * @param string|null $id 版本号，如v1
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
    *  url地址
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\ApiVersionsLinks[]|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\ApiVersionsLinks[]|null $links url地址
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets version
    *  若该版本API支持微版本，则为支持的最大微版本号，如果不支持微版本，则为空
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
    * @param string|null $version 若该版本API支持微版本，则为支持的最大微版本号，如果不支持微版本，则为空
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets minVersion
    *  若该版本API支持微版本，则为支持的最小微版本号，如果不支持微版本，则为空
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
    * @param string|null $minVersion 若该版本API支持微版本，则为支持的最小微版本号，如果不支持微版本，则为空
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
    *  版本状态，支持CURRENT：推荐版本；SUPPORTED：老版本，仍支持使用；DEPRECATED：废弃版本，后续会删除
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
    * @param string|null $status 版本状态，支持CURRENT：推荐版本；SUPPORTED：老版本，仍支持使用；DEPRECATED：废弃版本，后续会删除
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updated
    *  版本发布UTC时间
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 版本发布UTC时间
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

