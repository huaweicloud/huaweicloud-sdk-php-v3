<?php

namespace HuaweiCloud\SDK\CloudPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineTemplateSimpleVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineTemplateSimpleVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  模板ID
    * name  模板名称
    * icon  模板图标
    * manifestVersion  流水线结构定义版本，新版默认为3.0
    * language  模板语言
    * description  模板描述
    * isSystem  是否系统模板
    * region  模板局点
    * domainId  模板所属租户ID
    * creatorId  模板创建人ID
    * creatorName  模板创建人名称
    * updaterId  模板更新人ID
    * createTime  创建时间
    * updateTime  更新时间
    * isCollect  是否收藏
    * isShowSource  是否展示流水线源
    * stages  模板编排stages
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'icon' => 'string',
            'manifestVersion' => 'string',
            'language' => 'string',
            'description' => 'string',
            'isSystem' => 'bool',
            'region' => 'string',
            'domainId' => 'string',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'updaterId' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'isCollect' => 'bool',
            'isShowSource' => 'string',
            'stages' => '\HuaweiCloud\SDK\CloudPipeline\V2\Model\PipelineTemplateSimpleVOStages[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  模板ID
    * name  模板名称
    * icon  模板图标
    * manifestVersion  流水线结构定义版本，新版默认为3.0
    * language  模板语言
    * description  模板描述
    * isSystem  是否系统模板
    * region  模板局点
    * domainId  模板所属租户ID
    * creatorId  模板创建人ID
    * creatorName  模板创建人名称
    * updaterId  模板更新人ID
    * createTime  创建时间
    * updateTime  更新时间
    * isCollect  是否收藏
    * isShowSource  是否展示流水线源
    * stages  模板编排stages
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'icon' => null,
        'manifestVersion' => null,
        'language' => null,
        'description' => null,
        'isSystem' => null,
        'region' => null,
        'domainId' => null,
        'creatorId' => null,
        'creatorName' => null,
        'updaterId' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'isCollect' => null,
        'isShowSource' => null,
        'stages' => null
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
    * id  模板ID
    * name  模板名称
    * icon  模板图标
    * manifestVersion  流水线结构定义版本，新版默认为3.0
    * language  模板语言
    * description  模板描述
    * isSystem  是否系统模板
    * region  模板局点
    * domainId  模板所属租户ID
    * creatorId  模板创建人ID
    * creatorName  模板创建人名称
    * updaterId  模板更新人ID
    * createTime  创建时间
    * updateTime  更新时间
    * isCollect  是否收藏
    * isShowSource  是否展示流水线源
    * stages  模板编排stages
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'icon' => 'icon',
            'manifestVersion' => 'manifest_version',
            'language' => 'language',
            'description' => 'description',
            'isSystem' => 'is_system',
            'region' => 'region',
            'domainId' => 'domain_id',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'updaterId' => 'updater_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'isCollect' => 'is_collect',
            'isShowSource' => 'is_show_source',
            'stages' => 'stages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  模板ID
    * name  模板名称
    * icon  模板图标
    * manifestVersion  流水线结构定义版本，新版默认为3.0
    * language  模板语言
    * description  模板描述
    * isSystem  是否系统模板
    * region  模板局点
    * domainId  模板所属租户ID
    * creatorId  模板创建人ID
    * creatorName  模板创建人名称
    * updaterId  模板更新人ID
    * createTime  创建时间
    * updateTime  更新时间
    * isCollect  是否收藏
    * isShowSource  是否展示流水线源
    * stages  模板编排stages
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'icon' => 'setIcon',
            'manifestVersion' => 'setManifestVersion',
            'language' => 'setLanguage',
            'description' => 'setDescription',
            'isSystem' => 'setIsSystem',
            'region' => 'setRegion',
            'domainId' => 'setDomainId',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'updaterId' => 'setUpdaterId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'isCollect' => 'setIsCollect',
            'isShowSource' => 'setIsShowSource',
            'stages' => 'setStages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  模板ID
    * name  模板名称
    * icon  模板图标
    * manifestVersion  流水线结构定义版本，新版默认为3.0
    * language  模板语言
    * description  模板描述
    * isSystem  是否系统模板
    * region  模板局点
    * domainId  模板所属租户ID
    * creatorId  模板创建人ID
    * creatorName  模板创建人名称
    * updaterId  模板更新人ID
    * createTime  创建时间
    * updateTime  更新时间
    * isCollect  是否收藏
    * isShowSource  是否展示流水线源
    * stages  模板编排stages
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'icon' => 'getIcon',
            'manifestVersion' => 'getManifestVersion',
            'language' => 'getLanguage',
            'description' => 'getDescription',
            'isSystem' => 'getIsSystem',
            'region' => 'getRegion',
            'domainId' => 'getDomainId',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'updaterId' => 'getUpdaterId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'isCollect' => 'getIsCollect',
            'isShowSource' => 'getIsShowSource',
            'stages' => 'getStages'
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
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['manifestVersion'] = isset($data['manifestVersion']) ? $data['manifestVersion'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isSystem'] = isset($data['isSystem']) ? $data['isSystem'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['updaterId'] = isset($data['updaterId']) ? $data['updaterId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['isCollect'] = isset($data['isCollect']) ? $data['isCollect'] : null;
        $this->container['isShowSource'] = isset($data['isShowSource']) ? $data['isShowSource'] : null;
        $this->container['stages'] = isset($data['stages']) ? $data['stages'] : null;
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
    *  模板ID
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
    * @param string|null $id 模板ID
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
    *  模板名称
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
    * @param string|null $name 模板名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets icon
    *  模板图标
    *
    * @return string|null
    */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
    * Sets icon
    *
    * @param string|null $icon 模板图标
    *
    * @return $this
    */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;
        return $this;
    }

    /**
    * Gets manifestVersion
    *  流水线结构定义版本，新版默认为3.0
    *
    * @return string|null
    */
    public function getManifestVersion()
    {
        return $this->container['manifestVersion'];
    }

    /**
    * Sets manifestVersion
    *
    * @param string|null $manifestVersion 流水线结构定义版本，新版默认为3.0
    *
    * @return $this
    */
    public function setManifestVersion($manifestVersion)
    {
        $this->container['manifestVersion'] = $manifestVersion;
        return $this;
    }

    /**
    * Gets language
    *  模板语言
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
    * @param string|null $language 模板语言
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets description
    *  模板描述
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
    * @param string|null $description 模板描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isSystem
    *  是否系统模板
    *
    * @return bool|null
    */
    public function getIsSystem()
    {
        return $this->container['isSystem'];
    }

    /**
    * Sets isSystem
    *
    * @param bool|null $isSystem 是否系统模板
    *
    * @return $this
    */
    public function setIsSystem($isSystem)
    {
        $this->container['isSystem'] = $isSystem;
        return $this;
    }

    /**
    * Gets region
    *  模板局点
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
    * @param string|null $region 模板局点
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets domainId
    *  模板所属租户ID
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
    * @param string|null $domainId 模板所属租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets creatorId
    *  模板创建人ID
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
    * @param string|null $creatorId 模板创建人ID
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
    *  模板创建人名称
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
    * @param string|null $creatorName 模板创建人名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets updaterId
    *  模板更新人ID
    *
    * @return string|null
    */
    public function getUpdaterId()
    {
        return $this->container['updaterId'];
    }

    /**
    * Sets updaterId
    *
    * @param string|null $updaterId 模板更新人ID
    *
    * @return $this
    */
    public function setUpdaterId($updaterId)
    {
        $this->container['updaterId'] = $updaterId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param int|null $createTime 创建时间
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
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets isCollect
    *  是否收藏
    *
    * @return bool|null
    */
    public function getIsCollect()
    {
        return $this->container['isCollect'];
    }

    /**
    * Sets isCollect
    *
    * @param bool|null $isCollect 是否收藏
    *
    * @return $this
    */
    public function setIsCollect($isCollect)
    {
        $this->container['isCollect'] = $isCollect;
        return $this;
    }

    /**
    * Gets isShowSource
    *  是否展示流水线源
    *
    * @return string|null
    */
    public function getIsShowSource()
    {
        return $this->container['isShowSource'];
    }

    /**
    * Sets isShowSource
    *
    * @param string|null $isShowSource 是否展示流水线源
    *
    * @return $this
    */
    public function setIsShowSource($isShowSource)
    {
        $this->container['isShowSource'] = $isShowSource;
        return $this;
    }

    /**
    * Gets stages
    *  模板编排stages
    *
    * @return \HuaweiCloud\SDK\CloudPipeline\V2\Model\PipelineTemplateSimpleVOStages[]|null
    */
    public function getStages()
    {
        return $this->container['stages'];
    }

    /**
    * Sets stages
    *
    * @param \HuaweiCloud\SDK\CloudPipeline\V2\Model\PipelineTemplateSimpleVOStages[]|null $stages 模板编排stages
    *
    * @return $this
    */
    public function setStages($stages)
    {
        $this->container['stages'] = $stages;
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

