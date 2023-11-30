<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HierarchiesAttrVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HierarchiesAttrVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码
    * hierarchiesId  层级id
    * attrId  属性id
    * level  层次
    * attrNameEn  引用属性编码
    * attrNameCh  引用属性名称
    * detailAttrIds  详情属性id
    * detailAttrNameEns  详情属性英文
    * detailAttrNameChs  详情属性中文
    * attr  attr
    * detailAttrs  详情字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'hierarchiesId' => 'int',
            'attrId' => 'int',
            'level' => 'int',
            'attrNameEn' => 'string',
            'attrNameCh' => 'string',
            'detailAttrIds' => 'int[]',
            'detailAttrNameEns' => 'string[]',
            'detailAttrNameChs' => 'string[]',
            'attr' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionAttributeVO',
            'detailAttrs' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionAttributeVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码
    * hierarchiesId  层级id
    * attrId  属性id
    * level  层次
    * attrNameEn  引用属性编码
    * attrNameCh  引用属性名称
    * detailAttrIds  详情属性id
    * detailAttrNameEns  详情属性英文
    * detailAttrNameChs  详情属性中文
    * attr  attr
    * detailAttrs  详情字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'hierarchiesId' => 'int64',
        'attrId' => 'int64',
        'level' => null,
        'attrNameEn' => null,
        'attrNameCh' => null,
        'detailAttrIds' => 'int64',
        'detailAttrNameEns' => null,
        'detailAttrNameChs' => null,
        'attr' => null,
        'detailAttrs' => null
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
    * id  编码
    * hierarchiesId  层级id
    * attrId  属性id
    * level  层次
    * attrNameEn  引用属性编码
    * attrNameCh  引用属性名称
    * detailAttrIds  详情属性id
    * detailAttrNameEns  详情属性英文
    * detailAttrNameChs  详情属性中文
    * attr  attr
    * detailAttrs  详情字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'hierarchiesId' => 'hierarchies_id',
            'attrId' => 'attr_id',
            'level' => 'level',
            'attrNameEn' => 'attr_name_en',
            'attrNameCh' => 'attr_name_ch',
            'detailAttrIds' => 'detail_attr_ids',
            'detailAttrNameEns' => 'detail_attr_name_ens',
            'detailAttrNameChs' => 'detail_attr_name_chs',
            'attr' => 'attr',
            'detailAttrs' => 'detail_attrs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码
    * hierarchiesId  层级id
    * attrId  属性id
    * level  层次
    * attrNameEn  引用属性编码
    * attrNameCh  引用属性名称
    * detailAttrIds  详情属性id
    * detailAttrNameEns  详情属性英文
    * detailAttrNameChs  详情属性中文
    * attr  attr
    * detailAttrs  详情字段
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'hierarchiesId' => 'setHierarchiesId',
            'attrId' => 'setAttrId',
            'level' => 'setLevel',
            'attrNameEn' => 'setAttrNameEn',
            'attrNameCh' => 'setAttrNameCh',
            'detailAttrIds' => 'setDetailAttrIds',
            'detailAttrNameEns' => 'setDetailAttrNameEns',
            'detailAttrNameChs' => 'setDetailAttrNameChs',
            'attr' => 'setAttr',
            'detailAttrs' => 'setDetailAttrs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码
    * hierarchiesId  层级id
    * attrId  属性id
    * level  层次
    * attrNameEn  引用属性编码
    * attrNameCh  引用属性名称
    * detailAttrIds  详情属性id
    * detailAttrNameEns  详情属性英文
    * detailAttrNameChs  详情属性中文
    * attr  attr
    * detailAttrs  详情字段
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'hierarchiesId' => 'getHierarchiesId',
            'attrId' => 'getAttrId',
            'level' => 'getLevel',
            'attrNameEn' => 'getAttrNameEn',
            'attrNameCh' => 'getAttrNameCh',
            'detailAttrIds' => 'getDetailAttrIds',
            'detailAttrNameEns' => 'getDetailAttrNameEns',
            'detailAttrNameChs' => 'getDetailAttrNameChs',
            'attr' => 'getAttr',
            'detailAttrs' => 'getDetailAttrs'
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
        $this->container['hierarchiesId'] = isset($data['hierarchiesId']) ? $data['hierarchiesId'] : null;
        $this->container['attrId'] = isset($data['attrId']) ? $data['attrId'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['attrNameEn'] = isset($data['attrNameEn']) ? $data['attrNameEn'] : null;
        $this->container['attrNameCh'] = isset($data['attrNameCh']) ? $data['attrNameCh'] : null;
        $this->container['detailAttrIds'] = isset($data['detailAttrIds']) ? $data['detailAttrIds'] : null;
        $this->container['detailAttrNameEns'] = isset($data['detailAttrNameEns']) ? $data['detailAttrNameEns'] : null;
        $this->container['detailAttrNameChs'] = isset($data['detailAttrNameChs']) ? $data['detailAttrNameChs'] : null;
        $this->container['attr'] = isset($data['attr']) ? $data['attr'] : null;
        $this->container['detailAttrs'] = isset($data['detailAttrs']) ? $data['detailAttrs'] : null;
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
    * Gets id
    *  编码
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 编码
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets hierarchiesId
    *  层级id
    *
    * @return int|null
    */
    public function getHierarchiesId()
    {
        return $this->container['hierarchiesId'];
    }

    /**
    * Sets hierarchiesId
    *
    * @param int|null $hierarchiesId 层级id
    *
    * @return $this
    */
    public function setHierarchiesId($hierarchiesId)
    {
        $this->container['hierarchiesId'] = $hierarchiesId;
        return $this;
    }

    /**
    * Gets attrId
    *  属性id
    *
    * @return int|null
    */
    public function getAttrId()
    {
        return $this->container['attrId'];
    }

    /**
    * Sets attrId
    *
    * @param int|null $attrId 属性id
    *
    * @return $this
    */
    public function setAttrId($attrId)
    {
        $this->container['attrId'] = $attrId;
        return $this;
    }

    /**
    * Gets level
    *  层次
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level 层次
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets attrNameEn
    *  引用属性编码
    *
    * @return string|null
    */
    public function getAttrNameEn()
    {
        return $this->container['attrNameEn'];
    }

    /**
    * Sets attrNameEn
    *
    * @param string|null $attrNameEn 引用属性编码
    *
    * @return $this
    */
    public function setAttrNameEn($attrNameEn)
    {
        $this->container['attrNameEn'] = $attrNameEn;
        return $this;
    }

    /**
    * Gets attrNameCh
    *  引用属性名称
    *
    * @return string|null
    */
    public function getAttrNameCh()
    {
        return $this->container['attrNameCh'];
    }

    /**
    * Sets attrNameCh
    *
    * @param string|null $attrNameCh 引用属性名称
    *
    * @return $this
    */
    public function setAttrNameCh($attrNameCh)
    {
        $this->container['attrNameCh'] = $attrNameCh;
        return $this;
    }

    /**
    * Gets detailAttrIds
    *  详情属性id
    *
    * @return int[]|null
    */
    public function getDetailAttrIds()
    {
        return $this->container['detailAttrIds'];
    }

    /**
    * Sets detailAttrIds
    *
    * @param int[]|null $detailAttrIds 详情属性id
    *
    * @return $this
    */
    public function setDetailAttrIds($detailAttrIds)
    {
        $this->container['detailAttrIds'] = $detailAttrIds;
        return $this;
    }

    /**
    * Gets detailAttrNameEns
    *  详情属性英文
    *
    * @return string[]|null
    */
    public function getDetailAttrNameEns()
    {
        return $this->container['detailAttrNameEns'];
    }

    /**
    * Sets detailAttrNameEns
    *
    * @param string[]|null $detailAttrNameEns 详情属性英文
    *
    * @return $this
    */
    public function setDetailAttrNameEns($detailAttrNameEns)
    {
        $this->container['detailAttrNameEns'] = $detailAttrNameEns;
        return $this;
    }

    /**
    * Gets detailAttrNameChs
    *  详情属性中文
    *
    * @return string[]|null
    */
    public function getDetailAttrNameChs()
    {
        return $this->container['detailAttrNameChs'];
    }

    /**
    * Sets detailAttrNameChs
    *
    * @param string[]|null $detailAttrNameChs 详情属性中文
    *
    * @return $this
    */
    public function setDetailAttrNameChs($detailAttrNameChs)
    {
        $this->container['detailAttrNameChs'] = $detailAttrNameChs;
        return $this;
    }

    /**
    * Gets attr
    *  attr
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionAttributeVO|null
    */
    public function getAttr()
    {
        return $this->container['attr'];
    }

    /**
    * Sets attr
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionAttributeVO|null $attr attr
    *
    * @return $this
    */
    public function setAttr($attr)
    {
        $this->container['attr'] = $attr;
        return $this;
    }

    /**
    * Gets detailAttrs
    *  详情字段
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionAttributeVO[]|null
    */
    public function getDetailAttrs()
    {
        return $this->container['detailAttrs'];
    }

    /**
    * Sets detailAttrs
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DimensionAttributeVO[]|null $detailAttrs 详情字段
    *
    * @return $this
    */
    public function setDetailAttrs($detailAttrs)
    {
        $this->container['detailAttrs'] = $detailAttrs;
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

