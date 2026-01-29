<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  插件ID
    * name  插件名称
    * devLanguage  插件的实现语言
    * devLanguageVersion  插件的实现语言版本
    * allianceId  插件集ID
    * allianceName  插件集名称
    * description  插件描述
    * logo  插件图标
    * label  插件的标签信息
    * createTime  创建时间
    * updateTime  更新时间
    * creatorId  创建者ID
    * creatorName  创建者名称
    * modifierId  修改者ID
    * modifierName  修改者名称
    * operationHistory  插件操作历史
    * versions  插件版本信息，兼容之前java的以插件为粒度的版本
    * componentType  插件类型，subscribe/custom/system，对应订阅/自定义开发/系统内置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'devLanguage' => 'string',
            'devLanguageVersion' => 'string',
            'allianceId' => 'string',
            'allianceName' => 'string',
            'description' => 'string',
            'logo' => 'string',
            'label' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'modifierId' => 'string',
            'modifierName' => 'string',
            'operationHistory' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ComponentInfoOperationHistory[]',
            'versions' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ComponentVersionInfo[]',
            'componentType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  插件ID
    * name  插件名称
    * devLanguage  插件的实现语言
    * devLanguageVersion  插件的实现语言版本
    * allianceId  插件集ID
    * allianceName  插件集名称
    * description  插件描述
    * logo  插件图标
    * label  插件的标签信息
    * createTime  创建时间
    * updateTime  更新时间
    * creatorId  创建者ID
    * creatorName  创建者名称
    * modifierId  修改者ID
    * modifierName  修改者名称
    * operationHistory  插件操作历史
    * versions  插件版本信息，兼容之前java的以插件为粒度的版本
    * componentType  插件类型，subscribe/custom/system，对应订阅/自定义开发/系统内置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'devLanguage' => null,
        'devLanguageVersion' => null,
        'allianceId' => null,
        'allianceName' => null,
        'description' => null,
        'logo' => null,
        'label' => null,
        'createTime' => null,
        'updateTime' => null,
        'creatorId' => null,
        'creatorName' => null,
        'modifierId' => null,
        'modifierName' => null,
        'operationHistory' => null,
        'versions' => null,
        'componentType' => null
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
    * id  插件ID
    * name  插件名称
    * devLanguage  插件的实现语言
    * devLanguageVersion  插件的实现语言版本
    * allianceId  插件集ID
    * allianceName  插件集名称
    * description  插件描述
    * logo  插件图标
    * label  插件的标签信息
    * createTime  创建时间
    * updateTime  更新时间
    * creatorId  创建者ID
    * creatorName  创建者名称
    * modifierId  修改者ID
    * modifierName  修改者名称
    * operationHistory  插件操作历史
    * versions  插件版本信息，兼容之前java的以插件为粒度的版本
    * componentType  插件类型，subscribe/custom/system，对应订阅/自定义开发/系统内置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'devLanguage' => 'dev_language',
            'devLanguageVersion' => 'dev_language_version',
            'allianceId' => 'alliance_id',
            'allianceName' => 'alliance_name',
            'description' => 'description',
            'logo' => 'logo',
            'label' => 'label',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'modifierId' => 'modifier_id',
            'modifierName' => 'modifier_name',
            'operationHistory' => 'operation_history',
            'versions' => 'versions',
            'componentType' => 'component_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  插件ID
    * name  插件名称
    * devLanguage  插件的实现语言
    * devLanguageVersion  插件的实现语言版本
    * allianceId  插件集ID
    * allianceName  插件集名称
    * description  插件描述
    * logo  插件图标
    * label  插件的标签信息
    * createTime  创建时间
    * updateTime  更新时间
    * creatorId  创建者ID
    * creatorName  创建者名称
    * modifierId  修改者ID
    * modifierName  修改者名称
    * operationHistory  插件操作历史
    * versions  插件版本信息，兼容之前java的以插件为粒度的版本
    * componentType  插件类型，subscribe/custom/system，对应订阅/自定义开发/系统内置
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'devLanguage' => 'setDevLanguage',
            'devLanguageVersion' => 'setDevLanguageVersion',
            'allianceId' => 'setAllianceId',
            'allianceName' => 'setAllianceName',
            'description' => 'setDescription',
            'logo' => 'setLogo',
            'label' => 'setLabel',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'modifierId' => 'setModifierId',
            'modifierName' => 'setModifierName',
            'operationHistory' => 'setOperationHistory',
            'versions' => 'setVersions',
            'componentType' => 'setComponentType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  插件ID
    * name  插件名称
    * devLanguage  插件的实现语言
    * devLanguageVersion  插件的实现语言版本
    * allianceId  插件集ID
    * allianceName  插件集名称
    * description  插件描述
    * logo  插件图标
    * label  插件的标签信息
    * createTime  创建时间
    * updateTime  更新时间
    * creatorId  创建者ID
    * creatorName  创建者名称
    * modifierId  修改者ID
    * modifierName  修改者名称
    * operationHistory  插件操作历史
    * versions  插件版本信息，兼容之前java的以插件为粒度的版本
    * componentType  插件类型，subscribe/custom/system，对应订阅/自定义开发/系统内置
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'devLanguage' => 'getDevLanguage',
            'devLanguageVersion' => 'getDevLanguageVersion',
            'allianceId' => 'getAllianceId',
            'allianceName' => 'getAllianceName',
            'description' => 'getDescription',
            'logo' => 'getLogo',
            'label' => 'getLabel',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'modifierId' => 'getModifierId',
            'modifierName' => 'getModifierName',
            'operationHistory' => 'getOperationHistory',
            'versions' => 'getVersions',
            'componentType' => 'getComponentType'
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
        $this->container['devLanguage'] = isset($data['devLanguage']) ? $data['devLanguage'] : null;
        $this->container['devLanguageVersion'] = isset($data['devLanguageVersion']) ? $data['devLanguageVersion'] : null;
        $this->container['allianceId'] = isset($data['allianceId']) ? $data['allianceId'] : null;
        $this->container['allianceName'] = isset($data['allianceName']) ? $data['allianceName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['modifierId'] = isset($data['modifierId']) ? $data['modifierId'] : null;
        $this->container['modifierName'] = isset($data['modifierName']) ? $data['modifierName'] : null;
        $this->container['operationHistory'] = isset($data['operationHistory']) ? $data['operationHistory'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
        $this->container['componentType'] = isset($data['componentType']) ? $data['componentType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['devLanguage']) && (mb_strlen($this->container['devLanguage']) > 128)) {
                $invalidProperties[] = "invalid value for 'devLanguage', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['devLanguage']) && (mb_strlen($this->container['devLanguage']) < 0)) {
                $invalidProperties[] = "invalid value for 'devLanguage', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['devLanguageVersion']) && (mb_strlen($this->container['devLanguageVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'devLanguageVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['devLanguageVersion']) && (mb_strlen($this->container['devLanguageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'devLanguageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['allianceId']) && (mb_strlen($this->container['allianceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'allianceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['allianceId']) && (mb_strlen($this->container['allianceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'allianceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['allianceName']) && (mb_strlen($this->container['allianceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'allianceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['allianceName']) && (mb_strlen($this->container['allianceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'allianceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2048)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['logo']) && (mb_strlen($this->container['logo']) > 2048)) {
                $invalidProperties[] = "invalid value for 'logo', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['logo']) && (mb_strlen($this->container['logo']) < 0)) {
                $invalidProperties[] = "invalid value for 'logo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) > 256)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) < 0)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) < 1)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 1)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) < 0)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) < 0)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['componentType']) && (mb_strlen($this->container['componentType']) > 20)) {
                $invalidProperties[] = "invalid value for 'componentType', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['componentType']) && (mb_strlen($this->container['componentType']) < 1)) {
                $invalidProperties[] = "invalid value for 'componentType', the character length must be bigger than or equal to 1.";
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
    *  插件ID
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
    * @param string|null $id 插件ID
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
    *  插件名称
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
    * @param string|null $name 插件名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets devLanguage
    *  插件的实现语言
    *
    * @return string|null
    */
    public function getDevLanguage()
    {
        return $this->container['devLanguage'];
    }

    /**
    * Sets devLanguage
    *
    * @param string|null $devLanguage 插件的实现语言
    *
    * @return $this
    */
    public function setDevLanguage($devLanguage)
    {
        $this->container['devLanguage'] = $devLanguage;
        return $this;
    }

    /**
    * Gets devLanguageVersion
    *  插件的实现语言版本
    *
    * @return string|null
    */
    public function getDevLanguageVersion()
    {
        return $this->container['devLanguageVersion'];
    }

    /**
    * Sets devLanguageVersion
    *
    * @param string|null $devLanguageVersion 插件的实现语言版本
    *
    * @return $this
    */
    public function setDevLanguageVersion($devLanguageVersion)
    {
        $this->container['devLanguageVersion'] = $devLanguageVersion;
        return $this;
    }

    /**
    * Gets allianceId
    *  插件集ID
    *
    * @return string|null
    */
    public function getAllianceId()
    {
        return $this->container['allianceId'];
    }

    /**
    * Sets allianceId
    *
    * @param string|null $allianceId 插件集ID
    *
    * @return $this
    */
    public function setAllianceId($allianceId)
    {
        $this->container['allianceId'] = $allianceId;
        return $this;
    }

    /**
    * Gets allianceName
    *  插件集名称
    *
    * @return string|null
    */
    public function getAllianceName()
    {
        return $this->container['allianceName'];
    }

    /**
    * Sets allianceName
    *
    * @param string|null $allianceName 插件集名称
    *
    * @return $this
    */
    public function setAllianceName($allianceName)
    {
        $this->container['allianceName'] = $allianceName;
        return $this;
    }

    /**
    * Gets description
    *  插件描述
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
    * @param string|null $description 插件描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets logo
    *  插件图标
    *
    * @return string|null
    */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
    * Sets logo
    *
    * @param string|null $logo 插件图标
    *
    * @return $this
    */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;
        return $this;
    }

    /**
    * Gets label
    *  插件的标签信息
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label 插件的标签信息
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
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
    * Gets updateTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建者ID
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId 创建者ID
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建者名称
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建者名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets modifierId
    *  修改者ID
    *
    * @return string|null
    */
    public function getModifierId()
    {
        return $this->container['modifierId'];
    }

    /**
    * Sets modifierId
    *
    * @param string|null $modifierId 修改者ID
    *
    * @return $this
    */
    public function setModifierId($modifierId)
    {
        $this->container['modifierId'] = $modifierId;
        return $this;
    }

    /**
    * Gets modifierName
    *  修改者名称
    *
    * @return string|null
    */
    public function getModifierName()
    {
        return $this->container['modifierName'];
    }

    /**
    * Sets modifierName
    *
    * @param string|null $modifierName 修改者名称
    *
    * @return $this
    */
    public function setModifierName($modifierName)
    {
        $this->container['modifierName'] = $modifierName;
        return $this;
    }

    /**
    * Gets operationHistory
    *  插件操作历史
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ComponentInfoOperationHistory[]|null
    */
    public function getOperationHistory()
    {
        return $this->container['operationHistory'];
    }

    /**
    * Sets operationHistory
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ComponentInfoOperationHistory[]|null $operationHistory 插件操作历史
    *
    * @return $this
    */
    public function setOperationHistory($operationHistory)
    {
        $this->container['operationHistory'] = $operationHistory;
        return $this;
    }

    /**
    * Gets versions
    *  插件版本信息，兼容之前java的以插件为粒度的版本
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ComponentVersionInfo[]|null
    */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
    * Sets versions
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ComponentVersionInfo[]|null $versions 插件版本信息，兼容之前java的以插件为粒度的版本
    *
    * @return $this
    */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;
        return $this;
    }

    /**
    * Gets componentType
    *  插件类型，subscribe/custom/system，对应订阅/自定义开发/系统内置
    *
    * @return string|null
    */
    public function getComponentType()
    {
        return $this->container['componentType'];
    }

    /**
    * Sets componentType
    *
    * @param string|null $componentType 插件类型，subscribe/custom/system，对应订阅/自定义开发/系统内置
    *
    * @return $this
    */
    public function setComponentType($componentType)
    {
        $this->container['componentType'] = $componentType;
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

