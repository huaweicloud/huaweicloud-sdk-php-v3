<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * language  模版支持的语言
    * favourite  是否收藏模板
    * uuid  uuid
    * type  模板类别
    * name  模板命名
    * weight  权重
    * scope  模板范围，自定义模板默认为：custom,官方模版为：official
    * description  模板说明
    * nickName  昵称
    * public  模板是否公开
    * toolType  构建工具类型，mono、npm、maven等
    * template  template
    * parameters  构建执行参数列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'language' => 'string',
            'favourite' => 'bool',
            'uuid' => 'string',
            'type' => 'string',
            'name' => 'string',
            'weight' => 'double',
            'scope' => 'string',
            'description' => 'string',
            'nickName' => 'string',
            'public' => 'bool',
            'toolType' => 'string',
            'template' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\QueryTemplate',
            'parameters' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\Parameter[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * language  模版支持的语言
    * favourite  是否收藏模板
    * uuid  uuid
    * type  模板类别
    * name  模板命名
    * weight  权重
    * scope  模板范围，自定义模板默认为：custom,官方模版为：official
    * description  模板说明
    * nickName  昵称
    * public  模板是否公开
    * toolType  构建工具类型，mono、npm、maven等
    * template  template
    * parameters  构建执行参数列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'language' => null,
        'favourite' => null,
        'uuid' => null,
        'type' => null,
        'name' => null,
        'weight' => 'double',
        'scope' => null,
        'description' => null,
        'nickName' => null,
        'public' => null,
        'toolType' => null,
        'template' => null,
        'parameters' => null
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
    * language  模版支持的语言
    * favourite  是否收藏模板
    * uuid  uuid
    * type  模板类别
    * name  模板命名
    * weight  权重
    * scope  模板范围，自定义模板默认为：custom,官方模版为：official
    * description  模板说明
    * nickName  昵称
    * public  模板是否公开
    * toolType  构建工具类型，mono、npm、maven等
    * template  template
    * parameters  构建执行参数列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'language' => 'language',
            'favourite' => 'favourite',
            'uuid' => 'uuid',
            'type' => 'type',
            'name' => 'name',
            'weight' => 'weight',
            'scope' => 'scope',
            'description' => 'description',
            'nickName' => 'nick_name',
            'public' => 'public',
            'toolType' => 'tool_type',
            'template' => 'template',
            'parameters' => 'parameters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * language  模版支持的语言
    * favourite  是否收藏模板
    * uuid  uuid
    * type  模板类别
    * name  模板命名
    * weight  权重
    * scope  模板范围，自定义模板默认为：custom,官方模版为：official
    * description  模板说明
    * nickName  昵称
    * public  模板是否公开
    * toolType  构建工具类型，mono、npm、maven等
    * template  template
    * parameters  构建执行参数列表
    *
    * @var string[]
    */
    protected static $setters = [
            'language' => 'setLanguage',
            'favourite' => 'setFavourite',
            'uuid' => 'setUuid',
            'type' => 'setType',
            'name' => 'setName',
            'weight' => 'setWeight',
            'scope' => 'setScope',
            'description' => 'setDescription',
            'nickName' => 'setNickName',
            'public' => 'setPublic',
            'toolType' => 'setToolType',
            'template' => 'setTemplate',
            'parameters' => 'setParameters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * language  模版支持的语言
    * favourite  是否收藏模板
    * uuid  uuid
    * type  模板类别
    * name  模板命名
    * weight  权重
    * scope  模板范围，自定义模板默认为：custom,官方模版为：official
    * description  模板说明
    * nickName  昵称
    * public  模板是否公开
    * toolType  构建工具类型，mono、npm、maven等
    * template  template
    * parameters  构建执行参数列表
    *
    * @var string[]
    */
    protected static $getters = [
            'language' => 'getLanguage',
            'favourite' => 'getFavourite',
            'uuid' => 'getUuid',
            'type' => 'getType',
            'name' => 'getName',
            'weight' => 'getWeight',
            'scope' => 'getScope',
            'description' => 'getDescription',
            'nickName' => 'getNickName',
            'public' => 'getPublic',
            'toolType' => 'getToolType',
            'template' => 'getTemplate',
            'parameters' => 'getParameters'
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
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['favourite'] = isset($data['favourite']) ? $data['favourite'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['toolType'] = isset($data['toolType']) ? $data['toolType'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
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
    * Gets language
    *  模版支持的语言
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 模版支持的语言
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets favourite
    *  是否收藏模板
    *
    * @return bool|null
    */
    public function getFavourite()
    {
        return $this->container['favourite'];
    }

    /**
    * Sets favourite
    *
    * @param bool|null $favourite 是否收藏模板
    *
    * @return $this
    */
    public function setFavourite($favourite)
    {
        $this->container['favourite'] = $favourite;
        return $this;
    }

    /**
    * Gets uuid
    *  uuid
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid uuid
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets type
    *  模板类别
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 模板类别
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets name
    *  模板命名
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
    * @param string|null $name 模板命名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets weight
    *  权重
    *
    * @return double|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param double|null $weight 权重
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets scope
    *  模板范围，自定义模板默认为：custom,官方模版为：official
    *
    * @return string|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string|null $scope 模板范围，自定义模板默认为：custom,官方模版为：official
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets description
    *  模板说明
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
    * @param string|null $description 模板说明
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets nickName
    *  昵称
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName 昵称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets public
    *  模板是否公开
    *
    * @return bool|null
    */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
    * Sets public
    *
    * @param bool|null $public 模板是否公开
    *
    * @return $this
    */
    public function setPublic($public)
    {
        $this->container['public'] = $public;
        return $this;
    }

    /**
    * Gets toolType
    *  构建工具类型，mono、npm、maven等
    *
    * @return string|null
    */
    public function getToolType()
    {
        return $this->container['toolType'];
    }

    /**
    * Sets toolType
    *
    * @param string|null $toolType 构建工具类型，mono、npm、maven等
    *
    * @return $this
    */
    public function setToolType($toolType)
    {
        $this->container['toolType'] = $toolType;
        return $this;
    }

    /**
    * Gets template
    *  template
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\QueryTemplate|null
    */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
    * Sets template
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\QueryTemplate|null $template template
    *
    * @return $this
    */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;
        return $this;
    }

    /**
    * Gets parameters
    *  构建执行参数列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\Parameter[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\Parameter[]|null $parameters 构建执行参数列表
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
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

