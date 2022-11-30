<?php

namespace HuaweiCloud\SDK\Tms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VersionDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VersionDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  版本ID（版本号），如v1.0。
    * links  API的URL地址。
    * version  若该版本API支持微版本，则返回支持的最新微版本号，如果不支持微版本，则返回空。
    * status  版本状态，为如下3种： CURRENT：表示该版本为主推版本。 SUPPORTED：表示为老版本，但是现在还继续支持。 DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * updated  版本发布时间，采用UTC时间表示。如v1.0发布的时间2016-12-09T00:00:00Z。
    * minVersion  若该版本API 支持微版本，则返回支持的最早微版本号， 如果不支持微版本，则返回空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'links' => '\HuaweiCloud\SDK\Tms\V1\Model\Link[]',
            'version' => 'string',
            'status' => 'string',
            'updated' => '\DateTime',
            'minVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  版本ID（版本号），如v1.0。
    * links  API的URL地址。
    * version  若该版本API支持微版本，则返回支持的最新微版本号，如果不支持微版本，则返回空。
    * status  版本状态，为如下3种： CURRENT：表示该版本为主推版本。 SUPPORTED：表示为老版本，但是现在还继续支持。 DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * updated  版本发布时间，采用UTC时间表示。如v1.0发布的时间2016-12-09T00:00:00Z。
    * minVersion  若该版本API 支持微版本，则返回支持的最早微版本号， 如果不支持微版本，则返回空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'links' => null,
        'version' => null,
        'status' => null,
        'updated' => 'date-time',
        'minVersion' => null
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
    * id  版本ID（版本号），如v1.0。
    * links  API的URL地址。
    * version  若该版本API支持微版本，则返回支持的最新微版本号，如果不支持微版本，则返回空。
    * status  版本状态，为如下3种： CURRENT：表示该版本为主推版本。 SUPPORTED：表示为老版本，但是现在还继续支持。 DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * updated  版本发布时间，采用UTC时间表示。如v1.0发布的时间2016-12-09T00:00:00Z。
    * minVersion  若该版本API 支持微版本，则返回支持的最早微版本号， 如果不支持微版本，则返回空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'links' => 'links',
            'version' => 'version',
            'status' => 'status',
            'updated' => 'updated',
            'minVersion' => 'min_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  版本ID（版本号），如v1.0。
    * links  API的URL地址。
    * version  若该版本API支持微版本，则返回支持的最新微版本号，如果不支持微版本，则返回空。
    * status  版本状态，为如下3种： CURRENT：表示该版本为主推版本。 SUPPORTED：表示为老版本，但是现在还继续支持。 DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * updated  版本发布时间，采用UTC时间表示。如v1.0发布的时间2016-12-09T00:00:00Z。
    * minVersion  若该版本API 支持微版本，则返回支持的最早微版本号， 如果不支持微版本，则返回空。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'links' => 'setLinks',
            'version' => 'setVersion',
            'status' => 'setStatus',
            'updated' => 'setUpdated',
            'minVersion' => 'setMinVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  版本ID（版本号），如v1.0。
    * links  API的URL地址。
    * version  若该版本API支持微版本，则返回支持的最新微版本号，如果不支持微版本，则返回空。
    * status  版本状态，为如下3种： CURRENT：表示该版本为主推版本。 SUPPORTED：表示为老版本，但是现在还继续支持。 DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * updated  版本发布时间，采用UTC时间表示。如v1.0发布的时间2016-12-09T00:00:00Z。
    * minVersion  若该版本API 支持微版本，则返回支持的最早微版本号， 如果不支持微版本，则返回空。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'links' => 'getLinks',
            'version' => 'getVersion',
            'status' => 'getStatus',
            'updated' => 'getUpdated',
            'minVersion' => 'getMinVersion'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['minVersion'] = isset($data['minVersion']) ? $data['minVersion'] : null;
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
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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

        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['minVersion'] === null) {
            $invalidProperties[] = "'minVersion' can't be null";
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
    *  版本ID（版本号），如v1.0。
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
    * @param string $id 版本ID（版本号），如v1.0。
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
    *  API的URL地址。
    *
    * @return \HuaweiCloud\SDK\Tms\V1\Model\Link[]
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Tms\V1\Model\Link[] $links API的URL地址。
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
    *  若该版本API支持微版本，则返回支持的最新微版本号，如果不支持微版本，则返回空。
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
    * @param string $version 若该版本API支持微版本，则返回支持的最新微版本号，如果不支持微版本，则返回空。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets status
    *  版本状态，为如下3种： CURRENT：表示该版本为主推版本。 SUPPORTED：表示为老版本，但是现在还继续支持。 DEPRECATED：表示为废弃版本，存在后续删除的可能。
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
    * @param string $status 版本状态，为如下3种： CURRENT：表示该版本为主推版本。 SUPPORTED：表示为老版本，但是现在还继续支持。 DEPRECATED：表示为废弃版本，存在后续删除的可能。
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
    *  版本发布时间，采用UTC时间表示。如v1.0发布的时间2016-12-09T00:00:00Z。
    *
    * @return \DateTime
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param \DateTime $updated 版本发布时间，采用UTC时间表示。如v1.0发布的时间2016-12-09T00:00:00Z。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets minVersion
    *  若该版本API 支持微版本，则返回支持的最早微版本号， 如果不支持微版本，则返回空。
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
    * @param string $minVersion 若该版本API 支持微版本，则返回支持的最早微版本号， 如果不支持微版本，则返回空。
    *
    * @return $this
    */
    public function setMinVersion($minVersion)
    {
        $this->container['minVersion'] = $minVersion;
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

