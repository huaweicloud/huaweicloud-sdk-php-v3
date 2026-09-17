<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVariableGroupDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVariableGroupDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 参数组名称。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目名称。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 32位字符，由数字和字母组成。
    * name  **参数解释**： 参数组名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 参数组描述。 **取值范围**： 不涉及。
    * variables  **参数解释**： 参数列表。 **取值范围**： 不涉及。
    * relatedPipelines  **参数解释**： 关联的流水线。 **取值范围**： 不涉及。
    * creatorId  **参数解释**： 创建人ID。 **取值范围**： 32位字符，由数字和字母组成。
    * updaterId  **参数解释**： 编辑人ID。 **取值范围**： 32位字符，由数字和字母组成。
    * creatorName  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    * updaterName  **参数解释**： 编辑人名称。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'domainId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'variables' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\QueryVariableGroupDetailRespVariables[]',
            'relatedPipelines' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\QueryVariableGroupDetailRespRelatedPipelines[]',
            'creatorId' => 'string',
            'updaterId' => 'string',
            'creatorName' => 'string',
            'updaterName' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 参数组名称。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目名称。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 32位字符，由数字和字母组成。
    * name  **参数解释**： 参数组名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 参数组描述。 **取值范围**： 不涉及。
    * variables  **参数解释**： 参数列表。 **取值范围**： 不涉及。
    * relatedPipelines  **参数解释**： 关联的流水线。 **取值范围**： 不涉及。
    * creatorId  **参数解释**： 创建人ID。 **取值范围**： 32位字符，由数字和字母组成。
    * updaterId  **参数解释**： 编辑人ID。 **取值范围**： 32位字符，由数字和字母组成。
    * creatorName  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    * updaterName  **参数解释**： 编辑人名称。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'domainId' => null,
        'name' => null,
        'description' => null,
        'variables' => null,
        'relatedPipelines' => null,
        'creatorId' => null,
        'updaterId' => null,
        'creatorName' => null,
        'updaterName' => null,
        'createTime' => 'int32',
        'updateTime' => 'int32'
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
    * id  **参数解释**： 参数组名称。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目名称。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 32位字符，由数字和字母组成。
    * name  **参数解释**： 参数组名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 参数组描述。 **取值范围**： 不涉及。
    * variables  **参数解释**： 参数列表。 **取值范围**： 不涉及。
    * relatedPipelines  **参数解释**： 关联的流水线。 **取值范围**： 不涉及。
    * creatorId  **参数解释**： 创建人ID。 **取值范围**： 32位字符，由数字和字母组成。
    * updaterId  **参数解释**： 编辑人ID。 **取值范围**： 32位字符，由数字和字母组成。
    * creatorName  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    * updaterName  **参数解释**： 编辑人名称。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'domainId' => 'domain_id',
            'name' => 'name',
            'description' => 'description',
            'variables' => 'variables',
            'relatedPipelines' => 'related_pipelines',
            'creatorId' => 'creator_id',
            'updaterId' => 'updater_id',
            'creatorName' => 'creator_name',
            'updaterName' => 'updater_name',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 参数组名称。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目名称。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 32位字符，由数字和字母组成。
    * name  **参数解释**： 参数组名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 参数组描述。 **取值范围**： 不涉及。
    * variables  **参数解释**： 参数列表。 **取值范围**： 不涉及。
    * relatedPipelines  **参数解释**： 关联的流水线。 **取值范围**： 不涉及。
    * creatorId  **参数解释**： 创建人ID。 **取值范围**： 32位字符，由数字和字母组成。
    * updaterId  **参数解释**： 编辑人ID。 **取值范围**： 32位字符，由数字和字母组成。
    * creatorName  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    * updaterName  **参数解释**： 编辑人名称。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'domainId' => 'setDomainId',
            'name' => 'setName',
            'description' => 'setDescription',
            'variables' => 'setVariables',
            'relatedPipelines' => 'setRelatedPipelines',
            'creatorId' => 'setCreatorId',
            'updaterId' => 'setUpdaterId',
            'creatorName' => 'setCreatorName',
            'updaterName' => 'setUpdaterName',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 参数组名称。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目名称。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 32位字符，由数字和字母组成。
    * name  **参数解释**： 参数组名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 参数组描述。 **取值范围**： 不涉及。
    * variables  **参数解释**： 参数列表。 **取值范围**： 不涉及。
    * relatedPipelines  **参数解释**： 关联的流水线。 **取值范围**： 不涉及。
    * creatorId  **参数解释**： 创建人ID。 **取值范围**： 32位字符，由数字和字母组成。
    * updaterId  **参数解释**： 编辑人ID。 **取值范围**： 32位字符，由数字和字母组成。
    * creatorName  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    * updaterName  **参数解释**： 编辑人名称。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'domainId' => 'getDomainId',
            'name' => 'getName',
            'description' => 'getDescription',
            'variables' => 'getVariables',
            'relatedPipelines' => 'getRelatedPipelines',
            'creatorId' => 'getCreatorId',
            'updaterId' => 'getUpdaterId',
            'creatorName' => 'getCreatorName',
            'updaterName' => 'getUpdaterName',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
        $this->container['relatedPipelines'] = isset($data['relatedPipelines']) ? $data['relatedPipelines'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['updaterId'] = isset($data['updaterId']) ? $data['updaterId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['updaterName'] = isset($data['updaterName']) ? $data['updaterName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
    *  **参数解释**： 参数组名称。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： 参数组名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 项目名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释**： 项目名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释**： 租户ID。 **取值范围**： 32位字符，由数字和字母组成。
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
    * @param string|null $domainId **参数解释**： 租户ID。 **取值范围**： 32位字符，由数字和字母组成。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 参数组名称。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 参数组名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 参数组描述。 **取值范围**： 不涉及。
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
    * @param string|null $description **参数解释**： 参数组描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets variables
    *  **参数解释**： 参数列表。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\QueryVariableGroupDetailRespVariables[]|null
    */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
    * Sets variables
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\QueryVariableGroupDetailRespVariables[]|null $variables **参数解释**： 参数列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;
        return $this;
    }

    /**
    * Gets relatedPipelines
    *  **参数解释**： 关联的流水线。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\QueryVariableGroupDetailRespRelatedPipelines[]|null
    */
    public function getRelatedPipelines()
    {
        return $this->container['relatedPipelines'];
    }

    /**
    * Sets relatedPipelines
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\QueryVariableGroupDetailRespRelatedPipelines[]|null $relatedPipelines **参数解释**： 关联的流水线。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRelatedPipelines($relatedPipelines)
    {
        $this->container['relatedPipelines'] = $relatedPipelines;
        return $this;
    }

    /**
    * Gets creatorId
    *  **参数解释**： 创建人ID。 **取值范围**： 32位字符，由数字和字母组成。
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
    * @param string|null $creatorId **参数解释**： 创建人ID。 **取值范围**： 32位字符，由数字和字母组成。
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets updaterId
    *  **参数解释**： 编辑人ID。 **取值范围**： 32位字符，由数字和字母组成。
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
    * @param string|null $updaterId **参数解释**： 编辑人ID。 **取值范围**： 32位字符，由数字和字母组成。
    *
    * @return $this
    */
    public function setUpdaterId($updaterId)
    {
        $this->container['updaterId'] = $updaterId;
        return $this;
    }

    /**
    * Gets creatorName
    *  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
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
    * @param string|null $creatorName **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets updaterName
    *  **参数解释**： 编辑人名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUpdaterName()
    {
        return $this->container['updaterName'];
    }

    /**
    * Sets updaterName
    *
    * @param string|null $updaterName **参数解释**： 编辑人名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUpdaterName($updaterName)
    {
        $this->container['updaterName'] = $updaterName;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**： 创建时间。 **取值范围**： 不涉及。
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
    * @param int|null $createTime **参数解释**： 创建时间。 **取值范围**： 不涉及。
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
    *  **参数解释**： 更新时间。 **取值范围**： 不涉及。
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
    * @param int|null $updateTime **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

