<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteInstanceDemandRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteInstanceDemandRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。可在查询实例列表接口的ID字段获取。
    * deletePublicip  是否删除弹性IP
    * deleteVolume  是否删除磁盘
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'deletePublicip' => 'bool',
            'deleteVolume' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。可在查询实例列表接口的ID字段获取。
    * deletePublicip  是否删除弹性IP
    * deleteVolume  是否删除磁盘
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'deletePublicip' => null,
        'deleteVolume' => null
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
    * id  实例ID。可在查询实例列表接口的ID字段获取。
    * deletePublicip  是否删除弹性IP
    * deleteVolume  是否删除磁盘
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'deletePublicip' => 'delete_publicip',
            'deleteVolume' => 'delete_volume'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。可在查询实例列表接口的ID字段获取。
    * deletePublicip  是否删除弹性IP
    * deleteVolume  是否删除磁盘
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'deletePublicip' => 'setDeletePublicip',
            'deleteVolume' => 'setDeleteVolume'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。可在查询实例列表接口的ID字段获取。
    * deletePublicip  是否删除弹性IP
    * deleteVolume  是否删除磁盘
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'deletePublicip' => 'getDeletePublicip',
            'deleteVolume' => 'getDeleteVolume'
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
        $this->container['deletePublicip'] = isset($data['deletePublicip']) ? $data['deletePublicip'] : null;
        $this->container['deleteVolume'] = isset($data['deleteVolume']) ? $data['deleteVolume'] : null;
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
    *  实例ID。可在查询实例列表接口的ID字段获取。
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
    * @param string $id 实例ID。可在查询实例列表接口的ID字段获取。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets deletePublicip
    *  是否删除弹性IP
    *
    * @return bool|null
    */
    public function getDeletePublicip()
    {
        return $this->container['deletePublicip'];
    }

    /**
    * Sets deletePublicip
    *
    * @param bool|null $deletePublicip 是否删除弹性IP
    *
    * @return $this
    */
    public function setDeletePublicip($deletePublicip)
    {
        $this->container['deletePublicip'] = $deletePublicip;
        return $this;
    }

    /**
    * Gets deleteVolume
    *  是否删除磁盘
    *
    * @return bool|null
    */
    public function getDeleteVolume()
    {
        return $this->container['deleteVolume'];
    }

    /**
    * Sets deleteVolume
    *
    * @param bool|null $deleteVolume 是否删除磁盘
    *
    * @return $this
    */
    public function setDeleteVolume($deleteVolume)
    {
        $this->container['deleteVolume'] = $deleteVolume;
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

