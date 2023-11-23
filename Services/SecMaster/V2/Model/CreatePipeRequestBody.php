<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePipeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePipeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataspaceId  工作空间ID
    * pipeName  数据管道名称
    * description  描述
    * storagePeriod  数据的保存时间，单位为天；默认30天，取值范围为1~3600
    * shards  数据管道分区个数；默认创建1个，最大支持创建64个分区
    * timestampField  时间戳字段
    * mapping  索引字段映射；每个key对象承载一个字段的信息；存在多个key对象，key可变，表示字段名称；可嵌套
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataspaceId' => 'string',
            'pipeName' => 'string',
            'description' => 'string',
            'storagePeriod' => 'int',
            'shards' => 'int',
            'timestampField' => 'string',
            'mapping' => 'map[string,\HuaweiCloud\SDK\SecMaster\V2\Model\KeyIndex]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataspaceId  工作空间ID
    * pipeName  数据管道名称
    * description  描述
    * storagePeriod  数据的保存时间，单位为天；默认30天，取值范围为1~3600
    * shards  数据管道分区个数；默认创建1个，最大支持创建64个分区
    * timestampField  时间戳字段
    * mapping  索引字段映射；每个key对象承载一个字段的信息；存在多个key对象，key可变，表示字段名称；可嵌套
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataspaceId' => null,
        'pipeName' => null,
        'description' => null,
        'storagePeriod' => null,
        'shards' => null,
        'timestampField' => null,
        'mapping' => null
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
    * dataspaceId  工作空间ID
    * pipeName  数据管道名称
    * description  描述
    * storagePeriod  数据的保存时间，单位为天；默认30天，取值范围为1~3600
    * shards  数据管道分区个数；默认创建1个，最大支持创建64个分区
    * timestampField  时间戳字段
    * mapping  索引字段映射；每个key对象承载一个字段的信息；存在多个key对象，key可变，表示字段名称；可嵌套
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataspaceId' => 'dataspace_id',
            'pipeName' => 'pipe_name',
            'description' => 'description',
            'storagePeriod' => 'storage_period',
            'shards' => 'shards',
            'timestampField' => 'timestamp_field',
            'mapping' => 'mapping'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataspaceId  工作空间ID
    * pipeName  数据管道名称
    * description  描述
    * storagePeriod  数据的保存时间，单位为天；默认30天，取值范围为1~3600
    * shards  数据管道分区个数；默认创建1个，最大支持创建64个分区
    * timestampField  时间戳字段
    * mapping  索引字段映射；每个key对象承载一个字段的信息；存在多个key对象，key可变，表示字段名称；可嵌套
    *
    * @var string[]
    */
    protected static $setters = [
            'dataspaceId' => 'setDataspaceId',
            'pipeName' => 'setPipeName',
            'description' => 'setDescription',
            'storagePeriod' => 'setStoragePeriod',
            'shards' => 'setShards',
            'timestampField' => 'setTimestampField',
            'mapping' => 'setMapping'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataspaceId  工作空间ID
    * pipeName  数据管道名称
    * description  描述
    * storagePeriod  数据的保存时间，单位为天；默认30天，取值范围为1~3600
    * shards  数据管道分区个数；默认创建1个，最大支持创建64个分区
    * timestampField  时间戳字段
    * mapping  索引字段映射；每个key对象承载一个字段的信息；存在多个key对象，key可变，表示字段名称；可嵌套
    *
    * @var string[]
    */
    protected static $getters = [
            'dataspaceId' => 'getDataspaceId',
            'pipeName' => 'getPipeName',
            'description' => 'getDescription',
            'storagePeriod' => 'getStoragePeriod',
            'shards' => 'getShards',
            'timestampField' => 'getTimestampField',
            'mapping' => 'getMapping'
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
        $this->container['dataspaceId'] = isset($data['dataspaceId']) ? $data['dataspaceId'] : null;
        $this->container['pipeName'] = isset($data['pipeName']) ? $data['pipeName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['storagePeriod'] = isset($data['storagePeriod']) ? $data['storagePeriod'] : null;
        $this->container['shards'] = isset($data['shards']) ? $data['shards'] : null;
        $this->container['timestampField'] = isset($data['timestampField']) ? $data['timestampField'] : null;
        $this->container['mapping'] = isset($data['mapping']) ? $data['mapping'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dataspaceId'] === null) {
            $invalidProperties[] = "'dataspaceId' can't be null";
        }
            if ((mb_strlen($this->container['dataspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['dataspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['pipeName'] === null) {
            $invalidProperties[] = "'pipeName' can't be null";
        }
            if ((mb_strlen($this->container['pipeName']) > 63)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['pipeName']) < 5)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['storagePeriod'] === null) {
            $invalidProperties[] = "'storagePeriod' can't be null";
        }
            if (($this->container['storagePeriod'] > 3600)) {
                $invalidProperties[] = "invalid value for 'storagePeriod', must be smaller than or equal to 3600.";
            }
            if (($this->container['storagePeriod'] < 1)) {
                $invalidProperties[] = "invalid value for 'storagePeriod', must be bigger than or equal to 1.";
            }
        if ($this->container['shards'] === null) {
            $invalidProperties[] = "'shards' can't be null";
        }
            if (($this->container['shards'] > 64)) {
                $invalidProperties[] = "invalid value for 'shards', must be smaller than or equal to 64.";
            }
            if (($this->container['shards'] < 1)) {
                $invalidProperties[] = "invalid value for 'shards', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['timestampField']) && (mb_strlen($this->container['timestampField']) > 256)) {
                $invalidProperties[] = "invalid value for 'timestampField', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['timestampField']) && (mb_strlen($this->container['timestampField']) < 1)) {
                $invalidProperties[] = "invalid value for 'timestampField', the character length must be bigger than or equal to 1.";
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
    * Gets dataspaceId
    *  工作空间ID
    *
    * @return string
    */
    public function getDataspaceId()
    {
        return $this->container['dataspaceId'];
    }

    /**
    * Sets dataspaceId
    *
    * @param string $dataspaceId 工作空间ID
    *
    * @return $this
    */
    public function setDataspaceId($dataspaceId)
    {
        $this->container['dataspaceId'] = $dataspaceId;
        return $this;
    }

    /**
    * Gets pipeName
    *  数据管道名称
    *
    * @return string
    */
    public function getPipeName()
    {
        return $this->container['pipeName'];
    }

    /**
    * Sets pipeName
    *
    * @param string $pipeName 数据管道名称
    *
    * @return $this
    */
    public function setPipeName($pipeName)
    {
        $this->container['pipeName'] = $pipeName;
        return $this;
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
    * Gets storagePeriod
    *  数据的保存时间，单位为天；默认30天，取值范围为1~3600
    *
    * @return int
    */
    public function getStoragePeriod()
    {
        return $this->container['storagePeriod'];
    }

    /**
    * Sets storagePeriod
    *
    * @param int $storagePeriod 数据的保存时间，单位为天；默认30天，取值范围为1~3600
    *
    * @return $this
    */
    public function setStoragePeriod($storagePeriod)
    {
        $this->container['storagePeriod'] = $storagePeriod;
        return $this;
    }

    /**
    * Gets shards
    *  数据管道分区个数；默认创建1个，最大支持创建64个分区
    *
    * @return int
    */
    public function getShards()
    {
        return $this->container['shards'];
    }

    /**
    * Sets shards
    *
    * @param int $shards 数据管道分区个数；默认创建1个，最大支持创建64个分区
    *
    * @return $this
    */
    public function setShards($shards)
    {
        $this->container['shards'] = $shards;
        return $this;
    }

    /**
    * Gets timestampField
    *  时间戳字段
    *
    * @return string|null
    */
    public function getTimestampField()
    {
        return $this->container['timestampField'];
    }

    /**
    * Sets timestampField
    *
    * @param string|null $timestampField 时间戳字段
    *
    * @return $this
    */
    public function setTimestampField($timestampField)
    {
        $this->container['timestampField'] = $timestampField;
        return $this;
    }

    /**
    * Gets mapping
    *  索引字段映射；每个key对象承载一个字段的信息；存在多个key对象，key可变，表示字段名称；可嵌套
    *
    * @return map[string,\HuaweiCloud\SDK\SecMaster\V2\Model\KeyIndex]|null
    */
    public function getMapping()
    {
        return $this->container['mapping'];
    }

    /**
    * Sets mapping
    *
    * @param map[string,\HuaweiCloud\SDK\SecMaster\V2\Model\KeyIndex]|null $mapping 索引字段映射；每个key对象承载一个字段的信息；存在多个key对象，key可变，表示字段名称；可嵌套
    *
    * @return $this
    */
    public function setMapping($mapping)
    {
        $this->container['mapping'] = $mapping;
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

