<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BaselineCatalogModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BaselineCatalogModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uuid  目录ID唯一标识，UUID
    * serialNumber  目录的位置顺序
    * levelNumber  目录的层级关系
    * root  该目录所在遵从包UUID
    * parent  该目录的父目录UUID，如果等于为第一层目录，则为遵从包UUID
    * isLeaf  该目录是否是叶子节点 0：不是 1：是
    * checkItems  目录关联的检查项
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uuid' => 'string',
            'serialNumber' => 'int',
            'levelNumber' => 'int',
            'root' => 'string',
            'parent' => 'string',
            'isLeaf' => 'bool',
            'checkItems' => '\HuaweiCloud\SDK\SecMaster\V2\Model\CheckitemCatalogModel[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uuid  目录ID唯一标识，UUID
    * serialNumber  目录的位置顺序
    * levelNumber  目录的层级关系
    * root  该目录所在遵从包UUID
    * parent  该目录的父目录UUID，如果等于为第一层目录，则为遵从包UUID
    * isLeaf  该目录是否是叶子节点 0：不是 1：是
    * checkItems  目录关联的检查项
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uuid' => null,
        'serialNumber' => 'int32',
        'levelNumber' => 'int32',
        'root' => null,
        'parent' => null,
        'isLeaf' => null,
        'checkItems' => null
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
    * uuid  目录ID唯一标识，UUID
    * serialNumber  目录的位置顺序
    * levelNumber  目录的层级关系
    * root  该目录所在遵从包UUID
    * parent  该目录的父目录UUID，如果等于为第一层目录，则为遵从包UUID
    * isLeaf  该目录是否是叶子节点 0：不是 1：是
    * checkItems  目录关联的检查项
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uuid' => 'uuid',
            'serialNumber' => 'serial_number',
            'levelNumber' => 'level_number',
            'root' => 'root',
            'parent' => 'parent',
            'isLeaf' => 'is_leaf',
            'checkItems' => 'check_items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uuid  目录ID唯一标识，UUID
    * serialNumber  目录的位置顺序
    * levelNumber  目录的层级关系
    * root  该目录所在遵从包UUID
    * parent  该目录的父目录UUID，如果等于为第一层目录，则为遵从包UUID
    * isLeaf  该目录是否是叶子节点 0：不是 1：是
    * checkItems  目录关联的检查项
    *
    * @var string[]
    */
    protected static $setters = [
            'uuid' => 'setUuid',
            'serialNumber' => 'setSerialNumber',
            'levelNumber' => 'setLevelNumber',
            'root' => 'setRoot',
            'parent' => 'setParent',
            'isLeaf' => 'setIsLeaf',
            'checkItems' => 'setCheckItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uuid  目录ID唯一标识，UUID
    * serialNumber  目录的位置顺序
    * levelNumber  目录的层级关系
    * root  该目录所在遵从包UUID
    * parent  该目录的父目录UUID，如果等于为第一层目录，则为遵从包UUID
    * isLeaf  该目录是否是叶子节点 0：不是 1：是
    * checkItems  目录关联的检查项
    *
    * @var string[]
    */
    protected static $getters = [
            'uuid' => 'getUuid',
            'serialNumber' => 'getSerialNumber',
            'levelNumber' => 'getLevelNumber',
            'root' => 'getRoot',
            'parent' => 'getParent',
            'isLeaf' => 'getIsLeaf',
            'checkItems' => 'getCheckItems'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['levelNumber'] = isset($data['levelNumber']) ? $data['levelNumber'] : null;
        $this->container['root'] = isset($data['root']) ? $data['root'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['isLeaf'] = isset($data['isLeaf']) ? $data['isLeaf'] : null;
        $this->container['checkItems'] = isset($data['checkItems']) ? $data['checkItems'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['uuid'] === null) {
            $invalidProperties[] = "'uuid' can't be null";
        }
            if ((mb_strlen($this->container['uuid']) > 36)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['uuid']) < 0)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['serialNumber'] === null) {
            $invalidProperties[] = "'serialNumber' can't be null";
        }
            if (($this->container['serialNumber'] > 99)) {
                $invalidProperties[] = "invalid value for 'serialNumber', must be smaller than or equal to 99.";
            }
            if (($this->container['serialNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'serialNumber', must be bigger than or equal to 0.";
            }
        if ($this->container['levelNumber'] === null) {
            $invalidProperties[] = "'levelNumber' can't be null";
        }
            if (($this->container['levelNumber'] > 99)) {
                $invalidProperties[] = "invalid value for 'levelNumber', must be smaller than or equal to 99.";
            }
            if (($this->container['levelNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'levelNumber', must be bigger than or equal to 0.";
            }
        if ($this->container['root'] === null) {
            $invalidProperties[] = "'root' can't be null";
        }
            if ((mb_strlen($this->container['root']) > 36)) {
                $invalidProperties[] = "invalid value for 'root', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['root']) < 0)) {
                $invalidProperties[] = "invalid value for 'root', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['parent'] === null) {
            $invalidProperties[] = "'parent' can't be null";
        }
            if ((mb_strlen($this->container['parent']) > 36)) {
                $invalidProperties[] = "invalid value for 'parent', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['parent']) < 0)) {
                $invalidProperties[] = "invalid value for 'parent', the character length must be bigger than or equal to 0.";
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
    * Gets uuid
    *  目录ID唯一标识，UUID
    *
    * @return string
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string $uuid 目录ID唯一标识，UUID
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets serialNumber
    *  目录的位置顺序
    *
    * @return int
    */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
    * Sets serialNumber
    *
    * @param int $serialNumber 目录的位置顺序
    *
    * @return $this
    */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;
        return $this;
    }

    /**
    * Gets levelNumber
    *  目录的层级关系
    *
    * @return int
    */
    public function getLevelNumber()
    {
        return $this->container['levelNumber'];
    }

    /**
    * Sets levelNumber
    *
    * @param int $levelNumber 目录的层级关系
    *
    * @return $this
    */
    public function setLevelNumber($levelNumber)
    {
        $this->container['levelNumber'] = $levelNumber;
        return $this;
    }

    /**
    * Gets root
    *  该目录所在遵从包UUID
    *
    * @return string
    */
    public function getRoot()
    {
        return $this->container['root'];
    }

    /**
    * Sets root
    *
    * @param string $root 该目录所在遵从包UUID
    *
    * @return $this
    */
    public function setRoot($root)
    {
        $this->container['root'] = $root;
        return $this;
    }

    /**
    * Gets parent
    *  该目录的父目录UUID，如果等于为第一层目录，则为遵从包UUID
    *
    * @return string
    */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
    * Sets parent
    *
    * @param string $parent 该目录的父目录UUID，如果等于为第一层目录，则为遵从包UUID
    *
    * @return $this
    */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;
        return $this;
    }

    /**
    * Gets isLeaf
    *  该目录是否是叶子节点 0：不是 1：是
    *
    * @return bool|null
    */
    public function getIsLeaf()
    {
        return $this->container['isLeaf'];
    }

    /**
    * Sets isLeaf
    *
    * @param bool|null $isLeaf 该目录是否是叶子节点 0：不是 1：是
    *
    * @return $this
    */
    public function setIsLeaf($isLeaf)
    {
        $this->container['isLeaf'] = $isLeaf;
        return $this;
    }

    /**
    * Gets checkItems
    *  目录关联的检查项
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\CheckitemCatalogModel[]|null
    */
    public function getCheckItems()
    {
        return $this->container['checkItems'];
    }

    /**
    * Sets checkItems
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\CheckitemCatalogModel[]|null $checkItems 目录关联的检查项
    *
    * @return $this
    */
    public function setCheckItems($checkItems)
    {
        $this->container['checkItems'] = $checkItems;
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

