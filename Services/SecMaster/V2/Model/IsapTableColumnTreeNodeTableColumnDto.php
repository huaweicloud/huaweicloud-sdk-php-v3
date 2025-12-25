<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IsapTableColumnTreeNodeTableColumnDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IsapTableColumnTreeNodeTableColumnDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  名称
    * parentName  父级名称
    * ownName  所属名称
    * depth  深度
    * source  source
    * children  子节点数组
    * previousName  父级名称
    * columnSequenceNumber  列序号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'parentName' => 'string',
            'ownName' => 'string',
            'depth' => 'int',
            'source' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnDto',
            'children' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnTreeNodeTableColumnDto[]',
            'previousName' => 'string',
            'columnSequenceNumber' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  名称
    * parentName  父级名称
    * ownName  所属名称
    * depth  深度
    * source  source
    * children  子节点数组
    * previousName  父级名称
    * columnSequenceNumber  列序号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'parentName' => null,
        'ownName' => null,
        'depth' => 'int32',
        'source' => null,
        'children' => null,
        'previousName' => null,
        'columnSequenceNumber' => 'int32'
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
    * name  名称
    * parentName  父级名称
    * ownName  所属名称
    * depth  深度
    * source  source
    * children  子节点数组
    * previousName  父级名称
    * columnSequenceNumber  列序号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'parentName' => 'parent_name',
            'ownName' => 'own_name',
            'depth' => 'depth',
            'source' => 'source',
            'children' => 'children',
            'previousName' => 'previous_name',
            'columnSequenceNumber' => 'column_sequence_number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  名称
    * parentName  父级名称
    * ownName  所属名称
    * depth  深度
    * source  source
    * children  子节点数组
    * previousName  父级名称
    * columnSequenceNumber  列序号
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'parentName' => 'setParentName',
            'ownName' => 'setOwnName',
            'depth' => 'setDepth',
            'source' => 'setSource',
            'children' => 'setChildren',
            'previousName' => 'setPreviousName',
            'columnSequenceNumber' => 'setColumnSequenceNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  名称
    * parentName  父级名称
    * ownName  所属名称
    * depth  深度
    * source  source
    * children  子节点数组
    * previousName  父级名称
    * columnSequenceNumber  列序号
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'parentName' => 'getParentName',
            'ownName' => 'getOwnName',
            'depth' => 'getDepth',
            'source' => 'getSource',
            'children' => 'getChildren',
            'previousName' => 'getPreviousName',
            'columnSequenceNumber' => 'getColumnSequenceNumber'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parentName'] = isset($data['parentName']) ? $data['parentName'] : null;
        $this->container['ownName'] = isset($data['ownName']) ? $data['ownName'] : null;
        $this->container['depth'] = isset($data['depth']) ? $data['depth'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['previousName'] = isset($data['previousName']) ? $data['previousName'] : null;
        $this->container['columnSequenceNumber'] = isset($data['columnSequenceNumber']) ? $data['columnSequenceNumber'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentName']) && (mb_strlen($this->container['parentName']) > 256)) {
                $invalidProperties[] = "invalid value for 'parentName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['parentName']) && (mb_strlen($this->container['parentName']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ownName']) && (mb_strlen($this->container['ownName']) > 256)) {
                $invalidProperties[] = "invalid value for 'ownName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['ownName']) && (mb_strlen($this->container['ownName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ownName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['depth']) && ($this->container['depth'] > 4)) {
                $invalidProperties[] = "invalid value for 'depth', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['depth']) && ($this->container['depth'] < 0)) {
                $invalidProperties[] = "invalid value for 'depth', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['previousName']) && (mb_strlen($this->container['previousName']) > 256)) {
                $invalidProperties[] = "invalid value for 'previousName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['previousName']) && (mb_strlen($this->container['previousName']) < 1)) {
                $invalidProperties[] = "invalid value for 'previousName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['columnSequenceNumber']) && ($this->container['columnSequenceNumber'] > 100)) {
                $invalidProperties[] = "invalid value for 'columnSequenceNumber', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['columnSequenceNumber']) && ($this->container['columnSequenceNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'columnSequenceNumber', must be bigger than or equal to 0.";
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
    * Gets name
    *  名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets parentName
    *  父级名称
    *
    * @return string|null
    */
    public function getParentName()
    {
        return $this->container['parentName'];
    }

    /**
    * Sets parentName
    *
    * @param string|null $parentName 父级名称
    *
    * @return $this
    */
    public function setParentName($parentName)
    {
        $this->container['parentName'] = $parentName;
        return $this;
    }

    /**
    * Gets ownName
    *  所属名称
    *
    * @return string|null
    */
    public function getOwnName()
    {
        return $this->container['ownName'];
    }

    /**
    * Sets ownName
    *
    * @param string|null $ownName 所属名称
    *
    * @return $this
    */
    public function setOwnName($ownName)
    {
        $this->container['ownName'] = $ownName;
        return $this;
    }

    /**
    * Gets depth
    *  深度
    *
    * @return int|null
    */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /**
    * Sets depth
    *
    * @param int|null $depth 深度
    *
    * @return $this
    */
    public function setDepth($depth)
    {
        $this->container['depth'] = $depth;
        return $this;
    }

    /**
    * Gets source
    *  source
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnDto|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnDto|null $source source
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets children
    *  子节点数组
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnTreeNodeTableColumnDto[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnTreeNodeTableColumnDto[]|null $children 子节点数组
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
        return $this;
    }

    /**
    * Gets previousName
    *  父级名称
    *
    * @return string|null
    */
    public function getPreviousName()
    {
        return $this->container['previousName'];
    }

    /**
    * Sets previousName
    *
    * @param string|null $previousName 父级名称
    *
    * @return $this
    */
    public function setPreviousName($previousName)
    {
        $this->container['previousName'] = $previousName;
        return $this;
    }

    /**
    * Gets columnSequenceNumber
    *  列序号
    *
    * @return int|null
    */
    public function getColumnSequenceNumber()
    {
        return $this->container['columnSequenceNumber'];
    }

    /**
    * Sets columnSequenceNumber
    *
    * @param int|null $columnSequenceNumber 列序号
    *
    * @return $this
    */
    public function setColumnSequenceNumber($columnSequenceNumber)
    {
        $this->container['columnSequenceNumber'] = $columnSequenceNumber;
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

