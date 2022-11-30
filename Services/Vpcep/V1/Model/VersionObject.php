<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VersionObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VersionObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  版本状态。 ● CURRENT：表示该版本为主推版本。 ● SUPPORT：表示为老版本，但是现在还在继续支持。 ● DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * id  版本ID。
    * updated  版本发布时间。采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
    * version  支持的版本号。
    * minVersion  支持的微版本号。若该版本API不支持微版本，则为空。
    * links  API的URL地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'id' => 'string',
            'updated' => 'string',
            'version' => 'string',
            'minVersion' => 'string',
            'links' => '\HuaweiCloud\SDK\Vpcep\V1\Model\Link[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  版本状态。 ● CURRENT：表示该版本为主推版本。 ● SUPPORT：表示为老版本，但是现在还在继续支持。 ● DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * id  版本ID。
    * updated  版本发布时间。采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
    * version  支持的版本号。
    * minVersion  支持的微版本号。若该版本API不支持微版本，则为空。
    * links  API的URL地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'id' => null,
        'updated' => null,
        'version' => null,
        'minVersion' => null,
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
    * status  版本状态。 ● CURRENT：表示该版本为主推版本。 ● SUPPORT：表示为老版本，但是现在还在继续支持。 ● DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * id  版本ID。
    * updated  版本发布时间。采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
    * version  支持的版本号。
    * minVersion  支持的微版本号。若该版本API不支持微版本，则为空。
    * links  API的URL地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'id' => 'id',
            'updated' => 'updated',
            'version' => 'version',
            'minVersion' => 'min_version',
            'links' => 'links'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  版本状态。 ● CURRENT：表示该版本为主推版本。 ● SUPPORT：表示为老版本，但是现在还在继续支持。 ● DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * id  版本ID。
    * updated  版本发布时间。采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
    * version  支持的版本号。
    * minVersion  支持的微版本号。若该版本API不支持微版本，则为空。
    * links  API的URL地址
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'id' => 'setId',
            'updated' => 'setUpdated',
            'version' => 'setVersion',
            'minVersion' => 'setMinVersion',
            'links' => 'setLinks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  版本状态。 ● CURRENT：表示该版本为主推版本。 ● SUPPORT：表示为老版本，但是现在还在继续支持。 ● DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * id  版本ID。
    * updated  版本发布时间。采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
    * version  支持的版本号。
    * minVersion  支持的微版本号。若该版本API不支持微版本，则为空。
    * links  API的URL地址
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'id' => 'getId',
            'updated' => 'getUpdated',
            'version' => 'getVersion',
            'minVersion' => 'getMinVersion',
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
    const STATUS_CURRENT = 'CURRENT';
    const STATUS_SUPPORT = 'SUPPORT';
    const STATUS_DEPRECATED = 'DEPRECATED';
    const ID_V1 = 'v1';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CURRENT,
            self::STATUS_SUPPORT,
            self::STATUS_DEPRECATED,
        ];
    }

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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['minVersion'] = isset($data['minVersion']) ? $data['minVersion'] : null;
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
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getIdAllowableValues();
                if (!is_null($this->container['id']) && !in_array($this->container['id'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'id', must be one of '%s'",
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
    * Gets status
    *  版本状态。 ● CURRENT：表示该版本为主推版本。 ● SUPPORT：表示为老版本，但是现在还在继续支持。 ● DEPRECATED：表示为废弃版本，存在后续删除的可能。
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
    * @param string|null $status 版本状态。 ● CURRENT：表示该版本为主推版本。 ● SUPPORT：表示为老版本，但是现在还在继续支持。 ● DEPRECATED：表示为废弃版本，存在后续删除的可能。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets id
    *  版本ID。
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
    * @param string|null $id 版本ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets updated
    *  版本发布时间。采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
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
    * @param string|null $updated 版本发布时间。采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
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
    *  支持的版本号。
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
    * @param string|null $version 支持的版本号。
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
    *  支持的微版本号。若该版本API不支持微版本，则为空。
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
    * @param string|null $minVersion 支持的微版本号。若该版本API不支持微版本，则为空。
    *
    * @return $this
    */
    public function setMinVersion($minVersion)
    {
        $this->container['minVersion'] = $minVersion;
        return $this;
    }

    /**
    * Gets links
    *  API的URL地址
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\Link[]|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\Link[]|null $links API的URL地址
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

