<?php

namespace HuaweiCloud\SDK\Aom\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEnvByNameResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEnvByNameResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aomId  aomId
    * componentId  组件Id
    * createTime  创建时间
    * creator  创建者
    * description  描述
    * envId  环境Id
    * envName  环境名称
    * envTags  环境标签
    * envType  环境类型
    * epsId  企业项目Id
    * modifiedTime  修改时间
    * modifier  修改者
    * osType  os类型
    * region  区域
    * registerType  注册方式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aomId' => 'string',
            'componentId' => 'string',
            'createTime' => 'string',
            'creator' => 'string',
            'description' => 'string',
            'envId' => 'string',
            'envName' => 'string',
            'envTags' => '\HuaweiCloud\SDK\Aom\V3\Model\TagNameAndIdVo[]',
            'envType' => 'string',
            'epsId' => 'string',
            'modifiedTime' => 'string',
            'modifier' => 'string',
            'osType' => 'string',
            'region' => 'string',
            'registerType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aomId  aomId
    * componentId  组件Id
    * createTime  创建时间
    * creator  创建者
    * description  描述
    * envId  环境Id
    * envName  环境名称
    * envTags  环境标签
    * envType  环境类型
    * epsId  企业项目Id
    * modifiedTime  修改时间
    * modifier  修改者
    * osType  os类型
    * region  区域
    * registerType  注册方式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aomId' => null,
        'componentId' => null,
        'createTime' => null,
        'creator' => null,
        'description' => null,
        'envId' => null,
        'envName' => null,
        'envTags' => null,
        'envType' => null,
        'epsId' => null,
        'modifiedTime' => null,
        'modifier' => null,
        'osType' => null,
        'region' => null,
        'registerType' => null
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
    * aomId  aomId
    * componentId  组件Id
    * createTime  创建时间
    * creator  创建者
    * description  描述
    * envId  环境Id
    * envName  环境名称
    * envTags  环境标签
    * envType  环境类型
    * epsId  企业项目Id
    * modifiedTime  修改时间
    * modifier  修改者
    * osType  os类型
    * region  区域
    * registerType  注册方式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aomId' => 'aom_id',
            'componentId' => 'component_id',
            'createTime' => 'create_time',
            'creator' => 'creator',
            'description' => 'description',
            'envId' => 'env_id',
            'envName' => 'env_name',
            'envTags' => 'env_tags',
            'envType' => 'env_type',
            'epsId' => 'eps_id',
            'modifiedTime' => 'modified_time',
            'modifier' => 'modifier',
            'osType' => 'os_type',
            'region' => 'region',
            'registerType' => 'register_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aomId  aomId
    * componentId  组件Id
    * createTime  创建时间
    * creator  创建者
    * description  描述
    * envId  环境Id
    * envName  环境名称
    * envTags  环境标签
    * envType  环境类型
    * epsId  企业项目Id
    * modifiedTime  修改时间
    * modifier  修改者
    * osType  os类型
    * region  区域
    * registerType  注册方式
    *
    * @var string[]
    */
    protected static $setters = [
            'aomId' => 'setAomId',
            'componentId' => 'setComponentId',
            'createTime' => 'setCreateTime',
            'creator' => 'setCreator',
            'description' => 'setDescription',
            'envId' => 'setEnvId',
            'envName' => 'setEnvName',
            'envTags' => 'setEnvTags',
            'envType' => 'setEnvType',
            'epsId' => 'setEpsId',
            'modifiedTime' => 'setModifiedTime',
            'modifier' => 'setModifier',
            'osType' => 'setOsType',
            'region' => 'setRegion',
            'registerType' => 'setRegisterType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aomId  aomId
    * componentId  组件Id
    * createTime  创建时间
    * creator  创建者
    * description  描述
    * envId  环境Id
    * envName  环境名称
    * envTags  环境标签
    * envType  环境类型
    * epsId  企业项目Id
    * modifiedTime  修改时间
    * modifier  修改者
    * osType  os类型
    * region  区域
    * registerType  注册方式
    *
    * @var string[]
    */
    protected static $getters = [
            'aomId' => 'getAomId',
            'componentId' => 'getComponentId',
            'createTime' => 'getCreateTime',
            'creator' => 'getCreator',
            'description' => 'getDescription',
            'envId' => 'getEnvId',
            'envName' => 'getEnvName',
            'envTags' => 'getEnvTags',
            'envType' => 'getEnvType',
            'epsId' => 'getEpsId',
            'modifiedTime' => 'getModifiedTime',
            'modifier' => 'getModifier',
            'osType' => 'getOsType',
            'region' => 'getRegion',
            'registerType' => 'getRegisterType'
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
    const REGISTER_TYPE_API = 'API';
    const REGISTER_TYPE_CONSOLE = 'CONSOLE';
    const REGISTER_TYPE_SERVICE_DISCOVERY = 'SERVICE_DISCOVERY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRegisterTypeAllowableValues()
    {
        return [
            self::REGISTER_TYPE_API,
            self::REGISTER_TYPE_CONSOLE,
            self::REGISTER_TYPE_SERVICE_DISCOVERY,
        ];
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
        $this->container['aomId'] = isset($data['aomId']) ? $data['aomId'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['envName'] = isset($data['envName']) ? $data['envName'] : null;
        $this->container['envTags'] = isset($data['envTags']) ? $data['envTags'] : null;
        $this->container['envType'] = isset($data['envType']) ? $data['envType'] : null;
        $this->container['epsId'] = isset($data['epsId']) ? $data['epsId'] : null;
        $this->container['modifiedTime'] = isset($data['modifiedTime']) ? $data['modifiedTime'] : null;
        $this->container['modifier'] = isset($data['modifier']) ? $data['modifier'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['registerType'] = isset($data['registerType']) ? $data['registerType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRegisterTypeAllowableValues();
                if (!is_null($this->container['registerType']) && !in_array($this->container['registerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'registerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets aomId
    *  aomId
    *
    * @return string|null
    */
    public function getAomId()
    {
        return $this->container['aomId'];
    }

    /**
    * Sets aomId
    *
    * @param string|null $aomId aomId
    *
    * @return $this
    */
    public function setAomId($aomId)
    {
        $this->container['aomId'] = $aomId;
        return $this;
    }

    /**
    * Gets componentId
    *  组件Id
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId 组件Id
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
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
    * Gets creator
    *  创建者
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建者
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
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
    * Gets envId
    *  环境Id
    *
    * @return string|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param string|null $envId 环境Id
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets envName
    *  环境名称
    *
    * @return string|null
    */
    public function getEnvName()
    {
        return $this->container['envName'];
    }

    /**
    * Sets envName
    *
    * @param string|null $envName 环境名称
    *
    * @return $this
    */
    public function setEnvName($envName)
    {
        $this->container['envName'] = $envName;
        return $this;
    }

    /**
    * Gets envTags
    *  环境标签
    *
    * @return \HuaweiCloud\SDK\Aom\V3\Model\TagNameAndIdVo[]|null
    */
    public function getEnvTags()
    {
        return $this->container['envTags'];
    }

    /**
    * Sets envTags
    *
    * @param \HuaweiCloud\SDK\Aom\V3\Model\TagNameAndIdVo[]|null $envTags 环境标签
    *
    * @return $this
    */
    public function setEnvTags($envTags)
    {
        $this->container['envTags'] = $envTags;
        return $this;
    }

    /**
    * Gets envType
    *  环境类型
    *
    * @return string|null
    */
    public function getEnvType()
    {
        return $this->container['envType'];
    }

    /**
    * Sets envType
    *
    * @param string|null $envType 环境类型
    *
    * @return $this
    */
    public function setEnvType($envType)
    {
        $this->container['envType'] = $envType;
        return $this;
    }

    /**
    * Gets epsId
    *  企业项目Id
    *
    * @return string|null
    */
    public function getEpsId()
    {
        return $this->container['epsId'];
    }

    /**
    * Sets epsId
    *
    * @param string|null $epsId 企业项目Id
    *
    * @return $this
    */
    public function setEpsId($epsId)
    {
        $this->container['epsId'] = $epsId;
        return $this;
    }

    /**
    * Gets modifiedTime
    *  修改时间
    *
    * @return string|null
    */
    public function getModifiedTime()
    {
        return $this->container['modifiedTime'];
    }

    /**
    * Sets modifiedTime
    *
    * @param string|null $modifiedTime 修改时间
    *
    * @return $this
    */
    public function setModifiedTime($modifiedTime)
    {
        $this->container['modifiedTime'] = $modifiedTime;
        return $this;
    }

    /**
    * Gets modifier
    *  修改者
    *
    * @return string|null
    */
    public function getModifier()
    {
        return $this->container['modifier'];
    }

    /**
    * Sets modifier
    *
    * @param string|null $modifier 修改者
    *
    * @return $this
    */
    public function setModifier($modifier)
    {
        $this->container['modifier'] = $modifier;
        return $this;
    }

    /**
    * Gets osType
    *  os类型
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType os类型
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets region
    *  区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets registerType
    *  注册方式
    *
    * @return string|null
    */
    public function getRegisterType()
    {
        return $this->container['registerType'];
    }

    /**
    * Sets registerType
    *
    * @param string|null $registerType 注册方式
    *
    * @return $this
    */
    public function setRegisterType($registerType)
    {
        $this->container['registerType'] = $registerType;
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

