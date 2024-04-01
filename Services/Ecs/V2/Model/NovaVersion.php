<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaVersion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  所讨论的版本的通用名称。仅仅是信息性的，它没有真正的语义。
    * links  版本相关标记快捷链接信息。
    * minVersion  如果API的这个版本支持微版本，则支持最小的微版本。如果不支持微版本，这将是空字符串。
    * status  这个是API版本的状态。可以是：  - CURRENT，这是使用的API的首选版本 - SUPPORTED，这是一个较老的，但仍然支持的API版本 - DEPRECATED，一个被废弃的API版本，该版本将被删除
    * version  如果API的这个版本支持微版本，则支持最大的微版本。如果不支持微版本，这将是空字符串。
    * updated  一个有特定值的字符串。API版本为2.0时，值为'2011-01-21T11:33:21Z'，API版本是2.1时，值为' 2013-07-23T11:33:21Z'。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'links' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaLink[]',
            'minVersion' => 'string',
            'status' => 'string',
            'version' => 'string',
            'updated' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  所讨论的版本的通用名称。仅仅是信息性的，它没有真正的语义。
    * links  版本相关标记快捷链接信息。
    * minVersion  如果API的这个版本支持微版本，则支持最小的微版本。如果不支持微版本，这将是空字符串。
    * status  这个是API版本的状态。可以是：  - CURRENT，这是使用的API的首选版本 - SUPPORTED，这是一个较老的，但仍然支持的API版本 - DEPRECATED，一个被废弃的API版本，该版本将被删除
    * version  如果API的这个版本支持微版本，则支持最大的微版本。如果不支持微版本，这将是空字符串。
    * updated  一个有特定值的字符串。API版本为2.0时，值为'2011-01-21T11:33:21Z'，API版本是2.1时，值为' 2013-07-23T11:33:21Z'。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'links' => null,
        'minVersion' => null,
        'status' => null,
        'version' => null,
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
    * id  所讨论的版本的通用名称。仅仅是信息性的，它没有真正的语义。
    * links  版本相关标记快捷链接信息。
    * minVersion  如果API的这个版本支持微版本，则支持最小的微版本。如果不支持微版本，这将是空字符串。
    * status  这个是API版本的状态。可以是：  - CURRENT，这是使用的API的首选版本 - SUPPORTED，这是一个较老的，但仍然支持的API版本 - DEPRECATED，一个被废弃的API版本，该版本将被删除
    * version  如果API的这个版本支持微版本，则支持最大的微版本。如果不支持微版本，这将是空字符串。
    * updated  一个有特定值的字符串。API版本为2.0时，值为'2011-01-21T11:33:21Z'，API版本是2.1时，值为' 2013-07-23T11:33:21Z'。
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
    * id  所讨论的版本的通用名称。仅仅是信息性的，它没有真正的语义。
    * links  版本相关标记快捷链接信息。
    * minVersion  如果API的这个版本支持微版本，则支持最小的微版本。如果不支持微版本，这将是空字符串。
    * status  这个是API版本的状态。可以是：  - CURRENT，这是使用的API的首选版本 - SUPPORTED，这是一个较老的，但仍然支持的API版本 - DEPRECATED，一个被废弃的API版本，该版本将被删除
    * version  如果API的这个版本支持微版本，则支持最大的微版本。如果不支持微版本，这将是空字符串。
    * updated  一个有特定值的字符串。API版本为2.0时，值为'2011-01-21T11:33:21Z'，API版本是2.1时，值为' 2013-07-23T11:33:21Z'。
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
    * id  所讨论的版本的通用名称。仅仅是信息性的，它没有真正的语义。
    * links  版本相关标记快捷链接信息。
    * minVersion  如果API的这个版本支持微版本，则支持最小的微版本。如果不支持微版本，这将是空字符串。
    * status  这个是API版本的状态。可以是：  - CURRENT，这是使用的API的首选版本 - SUPPORTED，这是一个较老的，但仍然支持的API版本 - DEPRECATED，一个被废弃的API版本，该版本将被删除
    * version  如果API的这个版本支持微版本，则支持最大的微版本。如果不支持微版本，这将是空字符串。
    * updated  一个有特定值的字符串。API版本为2.0时，值为'2011-01-21T11:33:21Z'，API版本是2.1时，值为' 2013-07-23T11:33:21Z'。
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ($this->container['minVersion'] === null) {
            $invalidProperties[] = "'minVersion' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
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
    *  所讨论的版本的通用名称。仅仅是信息性的，它没有真正的语义。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 所讨论的版本的通用名称。仅仅是信息性的，它没有真正的语义。
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
    *  版本相关标记快捷链接信息。
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaLink[]
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaLink[] $links 版本相关标记快捷链接信息。
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
    *  如果API的这个版本支持微版本，则支持最小的微版本。如果不支持微版本，这将是空字符串。
    *
    * @return string
    */
    public function getMinVersion()
    {
        return $this->container['minVersion'];
    }

    /**
    * Sets minVersion
    *
    * @param string $minVersion 如果API的这个版本支持微版本，则支持最小的微版本。如果不支持微版本，这将是空字符串。
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
    *  这个是API版本的状态。可以是：  - CURRENT，这是使用的API的首选版本 - SUPPORTED，这是一个较老的，但仍然支持的API版本 - DEPRECATED，一个被废弃的API版本，该版本将被删除
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 这个是API版本的状态。可以是：  - CURRENT，这是使用的API的首选版本 - SUPPORTED，这是一个较老的，但仍然支持的API版本 - DEPRECATED，一个被废弃的API版本，该版本将被删除
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
    *  如果API的这个版本支持微版本，则支持最大的微版本。如果不支持微版本，这将是空字符串。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 如果API的这个版本支持微版本，则支持最大的微版本。如果不支持微版本，这将是空字符串。
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
    *  一个有特定值的字符串。API版本为2.0时，值为'2011-01-21T11:33:21Z'，API版本是2.1时，值为' 2013-07-23T11:33:21Z'。
    *
    * @return string
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string $updated 一个有特定值的字符串。API版本为2.0时，值为'2011-01-21T11:33:21Z'，API版本是2.1时，值为' 2013-07-23T11:33:21Z'。
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

