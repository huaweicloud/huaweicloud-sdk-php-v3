<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAtlasResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAtlasResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  图库ID
    * name  图库名称
    * type  图库类型 0=白库（豁免/可信样本） / 1=黑库（敏感/拦截样本）
    * description  图库描述
    * createTime  创建时间（毫秒）
    * updateTime  更新时间（毫秒）
    * imageCount  图库下已加入（status≥0）且未删除的图片数量；创建返回 0
    * referencedRules  引用此图库的规则列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'int',
            'description' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'imageCount' => 'int',
            'referencedRules' => '\HuaweiCloud\SDK\Waf\V1\Model\ReferencedRule[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  图库ID
    * name  图库名称
    * type  图库类型 0=白库（豁免/可信样本） / 1=黑库（敏感/拦截样本）
    * description  图库描述
    * createTime  创建时间（毫秒）
    * updateTime  更新时间（毫秒）
    * imageCount  图库下已加入（status≥0）且未删除的图片数量；创建返回 0
    * referencedRules  引用此图库的规则列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => 'int32',
        'description' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'imageCount' => 'int64',
        'referencedRules' => null
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
    * id  图库ID
    * name  图库名称
    * type  图库类型 0=白库（豁免/可信样本） / 1=黑库（敏感/拦截样本）
    * description  图库描述
    * createTime  创建时间（毫秒）
    * updateTime  更新时间（毫秒）
    * imageCount  图库下已加入（status≥0）且未删除的图片数量；创建返回 0
    * referencedRules  引用此图库的规则列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'description' => 'description',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'imageCount' => 'image_count',
            'referencedRules' => 'referenced_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  图库ID
    * name  图库名称
    * type  图库类型 0=白库（豁免/可信样本） / 1=黑库（敏感/拦截样本）
    * description  图库描述
    * createTime  创建时间（毫秒）
    * updateTime  更新时间（毫秒）
    * imageCount  图库下已加入（status≥0）且未删除的图片数量；创建返回 0
    * referencedRules  引用此图库的规则列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'imageCount' => 'setImageCount',
            'referencedRules' => 'setReferencedRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  图库ID
    * name  图库名称
    * type  图库类型 0=白库（豁免/可信样本） / 1=黑库（敏感/拦截样本）
    * description  图库描述
    * createTime  创建时间（毫秒）
    * updateTime  更新时间（毫秒）
    * imageCount  图库下已加入（status≥0）且未删除的图片数量；创建返回 0
    * referencedRules  引用此图库的规则列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'imageCount' => 'getImageCount',
            'referencedRules' => 'getReferencedRules'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['imageCount'] = isset($data['imageCount']) ? $data['imageCount'] : null;
        $this->container['referencedRules'] = isset($data['referencedRules']) ? $data['referencedRules'] : null;
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
    *  图库ID
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
    * @param string|null $id 图库ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  图库名称
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
    * @param string|null $name 图库名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  图库类型 0=白库（豁免/可信样本） / 1=黑库（敏感/拦截样本）
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 图库类型 0=白库（豁免/可信样本） / 1=黑库（敏感/拦截样本）
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  图库描述
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
    * @param string|null $description 图库描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间（毫秒）
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间（毫秒）
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间（毫秒）
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间（毫秒）
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets imageCount
    *  图库下已加入（status≥0）且未删除的图片数量；创建返回 0
    *
    * @return int|null
    */
    public function getImageCount()
    {
        return $this->container['imageCount'];
    }

    /**
    * Sets imageCount
    *
    * @param int|null $imageCount 图库下已加入（status≥0）且未删除的图片数量；创建返回 0
    *
    * @return $this
    */
    public function setImageCount($imageCount)
    {
        $this->container['imageCount'] = $imageCount;
        return $this;
    }

    /**
    * Gets referencedRules
    *  引用此图库的规则列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\ReferencedRule[]|null
    */
    public function getReferencedRules()
    {
        return $this->container['referencedRules'];
    }

    /**
    * Sets referencedRules
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\ReferencedRule[]|null $referencedRules 引用此图库的规则列表
    *
    * @return $this
    */
    public function setReferencedRules($referencedRules)
    {
        $this->container['referencedRules'] = $referencedRules;
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

