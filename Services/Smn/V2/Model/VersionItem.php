<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VersionItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VersionItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  版本ID（版本号），如v2。
    * minVersion  若该版本API支持微版本，则返回支持的最小微版本号；若不支持微版本，则返回空。
    * status  版本状态，为如下3种：  CURRENT：表示该版本为主推版本。  SUPPORTED：表示为老版本，但是现在还继续支持。  DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * updated  版本发布时间，要求用UTC时间格式表示。如v2发布的时间2014-06-28T12:20:21Z。
    * version  若该版本API支持微版本，则返回支持的最大微版本号；若不支持微版本，则返回空。
    * links  API的URL地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'minVersion' => 'string',
            'status' => 'string',
            'updated' => 'string',
            'version' => 'string',
            'links' => '\HuaweiCloud\SDK\Smn\V2\Model\LinksItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  版本ID（版本号），如v2。
    * minVersion  若该版本API支持微版本，则返回支持的最小微版本号；若不支持微版本，则返回空。
    * status  版本状态，为如下3种：  CURRENT：表示该版本为主推版本。  SUPPORTED：表示为老版本，但是现在还继续支持。  DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * updated  版本发布时间，要求用UTC时间格式表示。如v2发布的时间2014-06-28T12:20:21Z。
    * version  若该版本API支持微版本，则返回支持的最大微版本号；若不支持微版本，则返回空。
    * links  API的URL地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'minVersion' => null,
        'status' => null,
        'updated' => null,
        'version' => null,
        'links' => null
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
    * id  版本ID（版本号），如v2。
    * minVersion  若该版本API支持微版本，则返回支持的最小微版本号；若不支持微版本，则返回空。
    * status  版本状态，为如下3种：  CURRENT：表示该版本为主推版本。  SUPPORTED：表示为老版本，但是现在还继续支持。  DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * updated  版本发布时间，要求用UTC时间格式表示。如v2发布的时间2014-06-28T12:20:21Z。
    * version  若该版本API支持微版本，则返回支持的最大微版本号；若不支持微版本，则返回空。
    * links  API的URL地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'minVersion' => 'min_version',
            'status' => 'status',
            'updated' => 'updated',
            'version' => 'version',
            'links' => 'links'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  版本ID（版本号），如v2。
    * minVersion  若该版本API支持微版本，则返回支持的最小微版本号；若不支持微版本，则返回空。
    * status  版本状态，为如下3种：  CURRENT：表示该版本为主推版本。  SUPPORTED：表示为老版本，但是现在还继续支持。  DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * updated  版本发布时间，要求用UTC时间格式表示。如v2发布的时间2014-06-28T12:20:21Z。
    * version  若该版本API支持微版本，则返回支持的最大微版本号；若不支持微版本，则返回空。
    * links  API的URL地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'minVersion' => 'setMinVersion',
            'status' => 'setStatus',
            'updated' => 'setUpdated',
            'version' => 'setVersion',
            'links' => 'setLinks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  版本ID（版本号），如v2。
    * minVersion  若该版本API支持微版本，则返回支持的最小微版本号；若不支持微版本，则返回空。
    * status  版本状态，为如下3种：  CURRENT：表示该版本为主推版本。  SUPPORTED：表示为老版本，但是现在还继续支持。  DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * updated  版本发布时间，要求用UTC时间格式表示。如v2发布的时间2014-06-28T12:20:21Z。
    * version  若该版本API支持微版本，则返回支持的最大微版本号；若不支持微版本，则返回空。
    * links  API的URL地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'minVersion' => 'getMinVersion',
            'status' => 'getStatus',
            'updated' => 'getUpdated',
            'version' => 'getVersion',
            'links' => 'getLinks'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['minVersion'] = isset($data['minVersion']) ? $data['minVersion'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
        if ($this->container['minVersion'] === null) {
            $invalidProperties[] = "'minVersion' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
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
    *  版本ID（版本号），如v2。
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
    * @param string $id 版本ID（版本号），如v2。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets minVersion
    *  若该版本API支持微版本，则返回支持的最小微版本号；若不支持微版本，则返回空。
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
    * @param string $minVersion 若该版本API支持微版本，则返回支持的最小微版本号；若不支持微版本，则返回空。
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
    *  版本状态，为如下3种：  CURRENT：表示该版本为主推版本。  SUPPORTED：表示为老版本，但是现在还继续支持。  DEPRECATED：表示为废弃版本，存在后续删除的可能。
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
    * @param string $status 版本状态，为如下3种：  CURRENT：表示该版本为主推版本。  SUPPORTED：表示为老版本，但是现在还继续支持。  DEPRECATED：表示为废弃版本，存在后续删除的可能。
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
    *  版本发布时间，要求用UTC时间格式表示。如v2发布的时间2014-06-28T12:20:21Z。
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
    * @param string $updated 版本发布时间，要求用UTC时间格式表示。如v2发布的时间2014-06-28T12:20:21Z。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets version
    *  若该版本API支持微版本，则返回支持的最大微版本号；若不支持微版本，则返回空。
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
    * @param string $version 若该版本API支持微版本，则返回支持的最大微版本号；若不支持微版本，则返回空。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets links
    *  API的URL地址。
    *
    * @return \HuaweiCloud\SDK\Smn\V2\Model\LinksItem[]
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Smn\V2\Model\LinksItem[] $links API的URL地址。
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
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

