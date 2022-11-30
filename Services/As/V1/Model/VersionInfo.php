<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VersionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VersionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  API版本ID。
    * links  API的URL相关信息。
    * minVersion  该版本API支持的最小微版本号。
    * status  版本状态，为如下3种：CURRENT：表示该版本为主推版本；SUPPORT：表示为老版本，但是现在还继续支持；DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * update  版本发布时间，使用UTC时间。
    * version  该版本API支持的最大微版本号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'links' => '\HuaweiCloud\SDK\_As\V1\Model\Links[]',
            'minVersion' => 'string',
            'status' => 'string',
            'update' => '\DateTime',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  API版本ID。
    * links  API的URL相关信息。
    * minVersion  该版本API支持的最小微版本号。
    * status  版本状态，为如下3种：CURRENT：表示该版本为主推版本；SUPPORT：表示为老版本，但是现在还继续支持；DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * update  版本发布时间，使用UTC时间。
    * version  该版本API支持的最大微版本号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'links' => null,
        'minVersion' => null,
        'status' => null,
        'update' => 'date-time',
        'version' => null
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
    * id  API版本ID。
    * links  API的URL相关信息。
    * minVersion  该版本API支持的最小微版本号。
    * status  版本状态，为如下3种：CURRENT：表示该版本为主推版本；SUPPORT：表示为老版本，但是现在还继续支持；DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * update  版本发布时间，使用UTC时间。
    * version  该版本API支持的最大微版本号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'links' => 'links',
            'minVersion' => 'min_version',
            'status' => 'status',
            'update' => 'update',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  API版本ID。
    * links  API的URL相关信息。
    * minVersion  该版本API支持的最小微版本号。
    * status  版本状态，为如下3种：CURRENT：表示该版本为主推版本；SUPPORT：表示为老版本，但是现在还继续支持；DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * update  版本发布时间，使用UTC时间。
    * version  该版本API支持的最大微版本号。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'links' => 'setLinks',
            'minVersion' => 'setMinVersion',
            'status' => 'setStatus',
            'update' => 'setUpdate',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  API版本ID。
    * links  API的URL相关信息。
    * minVersion  该版本API支持的最小微版本号。
    * status  版本状态，为如下3种：CURRENT：表示该版本为主推版本；SUPPORT：表示为老版本，但是现在还继续支持；DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * update  版本发布时间，使用UTC时间。
    * version  该版本API支持的最大微版本号。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'links' => 'getLinks',
            'minVersion' => 'getMinVersion',
            'status' => 'getStatus',
            'update' => 'getUpdate',
            'version' => 'getVersion'
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
    const ID_V2 = 'v2';
    const STATUS_CURRENT = 'CURRENT';
    const STATUS_SUPPORT = 'SUPPORT';
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
            self::ID_V2,
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
            self::STATUS_SUPPORT,
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
        $this->container['update'] = isset($data['update']) ? $data['update'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
    *  API版本ID。
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
    * @param string|null $id API版本ID。
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
    *  API的URL相关信息。
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\Links[]|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\Links[]|null $links API的URL相关信息。
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
    *  该版本API支持的最小微版本号。
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
    * @param string|null $minVersion 该版本API支持的最小微版本号。
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
    *  版本状态，为如下3种：CURRENT：表示该版本为主推版本；SUPPORT：表示为老版本，但是现在还继续支持；DEPRECATED：表示为废弃版本，存在后续删除的可能。
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
    * @param string|null $status 版本状态，为如下3种：CURRENT：表示该版本为主推版本；SUPPORT：表示为老版本，但是现在还继续支持；DEPRECATED：表示为废弃版本，存在后续删除的可能。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets update
    *  版本发布时间，使用UTC时间。
    *
    * @return \DateTime|null
    */
    public function getUpdate()
    {
        return $this->container['update'];
    }

    /**
    * Sets update
    *
    * @param \DateTime|null $update 版本发布时间，使用UTC时间。
    *
    * @return $this
    */
    public function setUpdate($update)
    {
        $this->container['update'] = $update;
        return $this;
    }

    /**
    * Gets version
    *  该版本API支持的最大微版本号。
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
    * @param string|null $version 该版本API支持的最大微版本号。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

