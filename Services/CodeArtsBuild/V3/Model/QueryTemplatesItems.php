<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryTemplatesItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryTemplatesItems';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * favourite  是否收藏模板
    * nickName  昵称
    * id  数据库中id
    * uuid  uuid
    * template  template
    * type  模板类别
    * public  模板是否公开
    * name  模板命名
    * createTime  创建时间
    * domainId  domainId
    * weight  权重
    * userId  用户id
    * userName  用户名
    * domainName  domain名字
    * scope  模板范围，自定义模板默认为custom
    * description  模板说明
    * toolType  构建工具类型，yaml构建还是action构建
    * intlDescription  intl说明
    * parameters  构建执行参数列表
    * i18n  i18n
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'favourite' => 'bool',
            'nickName' => 'string',
            'id' => 'string',
            'uuid' => 'string',
            'template' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\QueryTemplate',
            'type' => 'string',
            'public' => 'bool',
            'name' => 'string',
            'createTime' => 'string',
            'domainId' => 'string',
            'weight' => 'double',
            'userId' => 'string',
            'userName' => 'string',
            'domainName' => 'string',
            'scope' => 'string',
            'description' => 'string',
            'toolType' => 'string',
            'intlDescription' => 'object',
            'parameters' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobParameter[]',
            'i18n' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * favourite  是否收藏模板
    * nickName  昵称
    * id  数据库中id
    * uuid  uuid
    * template  template
    * type  模板类别
    * public  模板是否公开
    * name  模板命名
    * createTime  创建时间
    * domainId  domainId
    * weight  权重
    * userId  用户id
    * userName  用户名
    * domainName  domain名字
    * scope  模板范围，自定义模板默认为custom
    * description  模板说明
    * toolType  构建工具类型，yaml构建还是action构建
    * intlDescription  intl说明
    * parameters  构建执行参数列表
    * i18n  i18n
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'favourite' => null,
        'nickName' => null,
        'id' => null,
        'uuid' => null,
        'template' => null,
        'type' => null,
        'public' => null,
        'name' => null,
        'createTime' => null,
        'domainId' => null,
        'weight' => 'double',
        'userId' => null,
        'userName' => null,
        'domainName' => null,
        'scope' => null,
        'description' => null,
        'toolType' => null,
        'intlDescription' => null,
        'parameters' => null,
        'i18n' => null
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
    * favourite  是否收藏模板
    * nickName  昵称
    * id  数据库中id
    * uuid  uuid
    * template  template
    * type  模板类别
    * public  模板是否公开
    * name  模板命名
    * createTime  创建时间
    * domainId  domainId
    * weight  权重
    * userId  用户id
    * userName  用户名
    * domainName  domain名字
    * scope  模板范围，自定义模板默认为custom
    * description  模板说明
    * toolType  构建工具类型，yaml构建还是action构建
    * intlDescription  intl说明
    * parameters  构建执行参数列表
    * i18n  i18n
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'favourite' => 'favourite',
            'nickName' => 'nick_name',
            'id' => 'id',
            'uuid' => 'uuid',
            'template' => 'template',
            'type' => 'type',
            'public' => 'public',
            'name' => 'name',
            'createTime' => 'create_time',
            'domainId' => 'domain_id',
            'weight' => 'weight',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'domainName' => 'domain_name',
            'scope' => 'scope',
            'description' => 'description',
            'toolType' => 'tool_type',
            'intlDescription' => 'intl_description',
            'parameters' => 'parameters',
            'i18n' => 'i18n'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * favourite  是否收藏模板
    * nickName  昵称
    * id  数据库中id
    * uuid  uuid
    * template  template
    * type  模板类别
    * public  模板是否公开
    * name  模板命名
    * createTime  创建时间
    * domainId  domainId
    * weight  权重
    * userId  用户id
    * userName  用户名
    * domainName  domain名字
    * scope  模板范围，自定义模板默认为custom
    * description  模板说明
    * toolType  构建工具类型，yaml构建还是action构建
    * intlDescription  intl说明
    * parameters  构建执行参数列表
    * i18n  i18n
    *
    * @var string[]
    */
    protected static $setters = [
            'favourite' => 'setFavourite',
            'nickName' => 'setNickName',
            'id' => 'setId',
            'uuid' => 'setUuid',
            'template' => 'setTemplate',
            'type' => 'setType',
            'public' => 'setPublic',
            'name' => 'setName',
            'createTime' => 'setCreateTime',
            'domainId' => 'setDomainId',
            'weight' => 'setWeight',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'domainName' => 'setDomainName',
            'scope' => 'setScope',
            'description' => 'setDescription',
            'toolType' => 'setToolType',
            'intlDescription' => 'setIntlDescription',
            'parameters' => 'setParameters',
            'i18n' => 'setI18n'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * favourite  是否收藏模板
    * nickName  昵称
    * id  数据库中id
    * uuid  uuid
    * template  template
    * type  模板类别
    * public  模板是否公开
    * name  模板命名
    * createTime  创建时间
    * domainId  domainId
    * weight  权重
    * userId  用户id
    * userName  用户名
    * domainName  domain名字
    * scope  模板范围，自定义模板默认为custom
    * description  模板说明
    * toolType  构建工具类型，yaml构建还是action构建
    * intlDescription  intl说明
    * parameters  构建执行参数列表
    * i18n  i18n
    *
    * @var string[]
    */
    protected static $getters = [
            'favourite' => 'getFavourite',
            'nickName' => 'getNickName',
            'id' => 'getId',
            'uuid' => 'getUuid',
            'template' => 'getTemplate',
            'type' => 'getType',
            'public' => 'getPublic',
            'name' => 'getName',
            'createTime' => 'getCreateTime',
            'domainId' => 'getDomainId',
            'weight' => 'getWeight',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'domainName' => 'getDomainName',
            'scope' => 'getScope',
            'description' => 'getDescription',
            'toolType' => 'getToolType',
            'intlDescription' => 'getIntlDescription',
            'parameters' => 'getParameters',
            'i18n' => 'getI18n'
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
        $this->container['favourite'] = isset($data['favourite']) ? $data['favourite'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['toolType'] = isset($data['toolType']) ? $data['toolType'] : null;
        $this->container['intlDescription'] = isset($data['intlDescription']) ? $data['intlDescription'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['i18n'] = isset($data['i18n']) ? $data['i18n'] : null;
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
    * Gets id
    *  数据库中id
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
    * @param string|null $id 数据库中id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets domainId
    *  domainId
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId domainId
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
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
    * Gets userId
    *  用户id
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets domainName
    *  domain名字
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName domain名字
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets scope
    *  模板范围，自定义模板默认为custom
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
    * @param string|null $scope 模板范围，自定义模板默认为custom
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
    * Gets toolType
    *  构建工具类型，yaml构建还是action构建
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
    * @param string|null $toolType 构建工具类型，yaml构建还是action构建
    *
    * @return $this
    */
    public function setToolType($toolType)
    {
        $this->container['toolType'] = $toolType;
        return $this;
    }

    /**
    * Gets intlDescription
    *  intl说明
    *
    * @return object|null
    */
    public function getIntlDescription()
    {
        return $this->container['intlDescription'];
    }

    /**
    * Sets intlDescription
    *
    * @param object|null $intlDescription intl说明
    *
    * @return $this
    */
    public function setIntlDescription($intlDescription)
    {
        $this->container['intlDescription'] = $intlDescription;
        return $this;
    }

    /**
    * Gets parameters
    *  构建执行参数列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobParameter[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\CreateBuildJobParameter[]|null $parameters 构建执行参数列表
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets i18n
    *  i18n
    *
    * @return object|null
    */
    public function getI18n()
    {
        return $this->container['i18n'];
    }

    /**
    * Sets i18n
    *
    * @param object|null $i18n i18n
    *
    * @return $this
    */
    public function setI18n($i18n)
    {
        $this->container['i18n'] = $i18n;
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

