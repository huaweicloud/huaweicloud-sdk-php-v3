<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePipeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePipeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  描述
    * shards  分区个数；默认创建1个，最大支持创建10个分区
    * storagePeriod  数据的保存时间，单位为天；默认30天，取值范围为1~3600
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'shards' => 'int',
            'storagePeriod' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  描述
    * shards  分区个数；默认创建1个，最大支持创建10个分区
    * storagePeriod  数据的保存时间，单位为天；默认30天，取值范围为1~3600
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'shards' => null,
        'storagePeriod' => null
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
    * description  描述
    * shards  分区个数；默认创建1个，最大支持创建10个分区
    * storagePeriod  数据的保存时间，单位为天；默认30天，取值范围为1~3600
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'shards' => 'shards',
            'storagePeriod' => 'storage_period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  描述
    * shards  分区个数；默认创建1个，最大支持创建10个分区
    * storagePeriod  数据的保存时间，单位为天；默认30天，取值范围为1~3600
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'shards' => 'setShards',
            'storagePeriod' => 'setStoragePeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  描述
    * shards  分区个数；默认创建1个，最大支持创建10个分区
    * storagePeriod  数据的保存时间，单位为天；默认30天，取值范围为1~3600
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'shards' => 'getShards',
            'storagePeriod' => 'getStoragePeriod'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['shards'] = isset($data['shards']) ? $data['shards'] : null;
        $this->container['storagePeriod'] = isset($data['storagePeriod']) ? $data['storagePeriod'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['shards']) && ($this->container['shards'] > 64)) {
                $invalidProperties[] = "invalid value for 'shards', must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['shards']) && ($this->container['shards'] < 1)) {
                $invalidProperties[] = "invalid value for 'shards', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['storagePeriod']) && ($this->container['storagePeriod'] > 3600)) {
                $invalidProperties[] = "invalid value for 'storagePeriod', must be smaller than or equal to 3600.";
            }
            if (!is_null($this->container['storagePeriod']) && ($this->container['storagePeriod'] < 1)) {
                $invalidProperties[] = "invalid value for 'storagePeriod', must be bigger than or equal to 1.";
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
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets shards
    *  分区个数；默认创建1个，最大支持创建10个分区
    *
    * @return int|null
    */
    public function getShards()
    {
        return $this->container['shards'];
    }

    /**
    * Sets shards
    *
    * @param int|null $shards 分区个数；默认创建1个，最大支持创建10个分区
    *
    * @return $this
    */
    public function setShards($shards)
    {
        $this->container['shards'] = $shards;
        return $this;
    }

    /**
    * Gets storagePeriod
    *  数据的保存时间，单位为天；默认30天，取值范围为1~3600
    *
    * @return int|null
    */
    public function getStoragePeriod()
    {
        return $this->container['storagePeriod'];
    }

    /**
    * Sets storagePeriod
    *
    * @param int|null $storagePeriod 数据的保存时间，单位为天；默认30天，取值范围为1~3600
    *
    * @return $this
    */
    public function setStoragePeriod($storagePeriod)
    {
        $this->container['storagePeriod'] = $storagePeriod;
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

