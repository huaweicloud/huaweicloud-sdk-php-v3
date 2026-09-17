<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CategoryLayerDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CategoryLayerDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  category
    * linkParentField  **参数解释**： 父类字段。 **取值范围**： 不涉及。
    * id  **参数解释**： 工作项层级ID。 **取值范围**： 不涉及。
    * children  **参数解释**： 子工作项层级数据类型。 **取值范围**： 不涉及。
    * code  **参数解释**： 层级对象类型编码。 **取值范围**： 不涉及。
    * categoryCode  **参数解释**： 对象类型编码。 **取值范围**： 不涉及。
    * categoryId  **参数解释**： 对象类型ID。 **取值范围**： 不涉及。
    * layerType  **参数解释**： 层级类型。 **取值范围**： 不涉及。
    * parentId  **参数解释**： 父ID。 **取值范围**： 不涉及。
    * rootId  **参数解释**： 根工作项ID。 **取值范围**： 不涉及。
    * positionX  **参数解释**： 画布X轴坐标。 **取值范围**： 不涉及。
    * positionY  **参数解释**： 画布Y轴坐标。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\BaseCategory',
            'linkParentField' => 'string',
            'id' => 'string',
            'children' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CategoryLayerDTO[]',
            'code' => 'string',
            'categoryCode' => 'string',
            'categoryId' => 'string',
            'layerType' => 'string',
            'parentId' => 'string',
            'rootId' => 'string',
            'positionX' => 'int',
            'positionY' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  category
    * linkParentField  **参数解释**： 父类字段。 **取值范围**： 不涉及。
    * id  **参数解释**： 工作项层级ID。 **取值范围**： 不涉及。
    * children  **参数解释**： 子工作项层级数据类型。 **取值范围**： 不涉及。
    * code  **参数解释**： 层级对象类型编码。 **取值范围**： 不涉及。
    * categoryCode  **参数解释**： 对象类型编码。 **取值范围**： 不涉及。
    * categoryId  **参数解释**： 对象类型ID。 **取值范围**： 不涉及。
    * layerType  **参数解释**： 层级类型。 **取值范围**： 不涉及。
    * parentId  **参数解释**： 父ID。 **取值范围**： 不涉及。
    * rootId  **参数解释**： 根工作项ID。 **取值范围**： 不涉及。
    * positionX  **参数解释**： 画布X轴坐标。 **取值范围**： 不涉及。
    * positionY  **参数解释**： 画布Y轴坐标。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'linkParentField' => null,
        'id' => null,
        'children' => null,
        'code' => null,
        'categoryCode' => null,
        'categoryId' => null,
        'layerType' => null,
        'parentId' => null,
        'rootId' => null,
        'positionX' => 'int32',
        'positionY' => 'int32'
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
    * category  category
    * linkParentField  **参数解释**： 父类字段。 **取值范围**： 不涉及。
    * id  **参数解释**： 工作项层级ID。 **取值范围**： 不涉及。
    * children  **参数解释**： 子工作项层级数据类型。 **取值范围**： 不涉及。
    * code  **参数解释**： 层级对象类型编码。 **取值范围**： 不涉及。
    * categoryCode  **参数解释**： 对象类型编码。 **取值范围**： 不涉及。
    * categoryId  **参数解释**： 对象类型ID。 **取值范围**： 不涉及。
    * layerType  **参数解释**： 层级类型。 **取值范围**： 不涉及。
    * parentId  **参数解释**： 父ID。 **取值范围**： 不涉及。
    * rootId  **参数解释**： 根工作项ID。 **取值范围**： 不涉及。
    * positionX  **参数解释**： 画布X轴坐标。 **取值范围**： 不涉及。
    * positionY  **参数解释**： 画布Y轴坐标。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'linkParentField' => 'link_parent_field',
            'id' => 'id',
            'children' => 'children',
            'code' => 'code',
            'categoryCode' => 'category_code',
            'categoryId' => 'category_id',
            'layerType' => 'layer_type',
            'parentId' => 'parent_id',
            'rootId' => 'root_id',
            'positionX' => 'position_x',
            'positionY' => 'position_y'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  category
    * linkParentField  **参数解释**： 父类字段。 **取值范围**： 不涉及。
    * id  **参数解释**： 工作项层级ID。 **取值范围**： 不涉及。
    * children  **参数解释**： 子工作项层级数据类型。 **取值范围**： 不涉及。
    * code  **参数解释**： 层级对象类型编码。 **取值范围**： 不涉及。
    * categoryCode  **参数解释**： 对象类型编码。 **取值范围**： 不涉及。
    * categoryId  **参数解释**： 对象类型ID。 **取值范围**： 不涉及。
    * layerType  **参数解释**： 层级类型。 **取值范围**： 不涉及。
    * parentId  **参数解释**： 父ID。 **取值范围**： 不涉及。
    * rootId  **参数解释**： 根工作项ID。 **取值范围**： 不涉及。
    * positionX  **参数解释**： 画布X轴坐标。 **取值范围**： 不涉及。
    * positionY  **参数解释**： 画布Y轴坐标。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'linkParentField' => 'setLinkParentField',
            'id' => 'setId',
            'children' => 'setChildren',
            'code' => 'setCode',
            'categoryCode' => 'setCategoryCode',
            'categoryId' => 'setCategoryId',
            'layerType' => 'setLayerType',
            'parentId' => 'setParentId',
            'rootId' => 'setRootId',
            'positionX' => 'setPositionX',
            'positionY' => 'setPositionY'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  category
    * linkParentField  **参数解释**： 父类字段。 **取值范围**： 不涉及。
    * id  **参数解释**： 工作项层级ID。 **取值范围**： 不涉及。
    * children  **参数解释**： 子工作项层级数据类型。 **取值范围**： 不涉及。
    * code  **参数解释**： 层级对象类型编码。 **取值范围**： 不涉及。
    * categoryCode  **参数解释**： 对象类型编码。 **取值范围**： 不涉及。
    * categoryId  **参数解释**： 对象类型ID。 **取值范围**： 不涉及。
    * layerType  **参数解释**： 层级类型。 **取值范围**： 不涉及。
    * parentId  **参数解释**： 父ID。 **取值范围**： 不涉及。
    * rootId  **参数解释**： 根工作项ID。 **取值范围**： 不涉及。
    * positionX  **参数解释**： 画布X轴坐标。 **取值范围**： 不涉及。
    * positionY  **参数解释**： 画布Y轴坐标。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'linkParentField' => 'getLinkParentField',
            'id' => 'getId',
            'children' => 'getChildren',
            'code' => 'getCode',
            'categoryCode' => 'getCategoryCode',
            'categoryId' => 'getCategoryId',
            'layerType' => 'getLayerType',
            'parentId' => 'getParentId',
            'rootId' => 'getRootId',
            'positionX' => 'getPositionX',
            'positionY' => 'getPositionY'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['linkParentField'] = isset($data['linkParentField']) ? $data['linkParentField'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['categoryCode'] = isset($data['categoryCode']) ? $data['categoryCode'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['layerType'] = isset($data['layerType']) ? $data['layerType'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['rootId'] = isset($data['rootId']) ? $data['rootId'] : null;
        $this->container['positionX'] = isset($data['positionX']) ? $data['positionX'] : null;
        $this->container['positionY'] = isset($data['positionY']) ? $data['positionY'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets category
    *  category
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\BaseCategory|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\BaseCategory|null $category category
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets linkParentField
    *  **参数解释**： 父类字段。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLinkParentField()
    {
        return $this->container['linkParentField'];
    }

    /**
    * Sets linkParentField
    *
    * @param string|null $linkParentField **参数解释**： 父类字段。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLinkParentField($linkParentField)
    {
        $this->container['linkParentField'] = $linkParentField;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**： 工作项层级ID。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： 工作项层级ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets children
    *  **参数解释**： 子工作项层级数据类型。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\CategoryLayerDTO[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\CategoryLayerDTO[]|null $children **参数解释**： 子工作项层级数据类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
        return $this;
    }

    /**
    * Gets code
    *  **参数解释**： 层级对象类型编码。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code **参数解释**： 层级对象类型编码。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets categoryCode
    *  **参数解释**： 对象类型编码。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCategoryCode()
    {
        return $this->container['categoryCode'];
    }

    /**
    * Sets categoryCode
    *
    * @param string|null $categoryCode **参数解释**： 对象类型编码。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCategoryCode($categoryCode)
    {
        $this->container['categoryCode'] = $categoryCode;
        return $this;
    }

    /**
    * Gets categoryId
    *  **参数解释**： 对象类型ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
    * Sets categoryId
    *
    * @param string|null $categoryId **参数解释**： 对象类型ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
        return $this;
    }

    /**
    * Gets layerType
    *  **参数解释**： 层级类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLayerType()
    {
        return $this->container['layerType'];
    }

    /**
    * Sets layerType
    *
    * @param string|null $layerType **参数解释**： 层级类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLayerType($layerType)
    {
        $this->container['layerType'] = $layerType;
        return $this;
    }

    /**
    * Gets parentId
    *  **参数解释**： 父ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId **参数解释**： 父ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets rootId
    *  **参数解释**： 根工作项ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRootId()
    {
        return $this->container['rootId'];
    }

    /**
    * Sets rootId
    *
    * @param string|null $rootId **参数解释**： 根工作项ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRootId($rootId)
    {
        $this->container['rootId'] = $rootId;
        return $this;
    }

    /**
    * Gets positionX
    *  **参数解释**： 画布X轴坐标。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getPositionX()
    {
        return $this->container['positionX'];
    }

    /**
    * Sets positionX
    *
    * @param int|null $positionX **参数解释**： 画布X轴坐标。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPositionX($positionX)
    {
        $this->container['positionX'] = $positionX;
        return $this;
    }

    /**
    * Gets positionY
    *  **参数解释**： 画布Y轴坐标。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getPositionY()
    {
        return $this->container['positionY'];
    }

    /**
    * Sets positionY
    *
    * @param int|null $positionY **参数解释**： 画布Y轴坐标。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPositionY($positionY)
    {
        $this->container['positionY'] = $positionY;
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

