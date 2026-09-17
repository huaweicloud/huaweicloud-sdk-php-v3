<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPipelinesPageTagList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPipelinesPage_tag_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tagId  **参数解释**： 标签ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 标签名称。 **取值范围**： 不涉及。
    * color  **参数解释**： 标签颜色。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * creatorId  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    * updaterId  **参数解释**： 更新人ID。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tagId' => 'string',
            'name' => 'string',
            'color' => 'string',
            'projectId' => 'string',
            'domainId' => 'string',
            'creatorId' => 'string',
            'updaterId' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tagId  **参数解释**： 标签ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 标签名称。 **取值范围**： 不涉及。
    * color  **参数解释**： 标签颜色。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * creatorId  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    * updaterId  **参数解释**： 更新人ID。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tagId' => null,
        'name' => null,
        'color' => null,
        'projectId' => null,
        'domainId' => null,
        'creatorId' => null,
        'updaterId' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64'
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
    * tagId  **参数解释**： 标签ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 标签名称。 **取值范围**： 不涉及。
    * color  **参数解释**： 标签颜色。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * creatorId  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    * updaterId  **参数解释**： 更新人ID。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tagId' => 'tag_id',
            'name' => 'name',
            'color' => 'color',
            'projectId' => 'project_id',
            'domainId' => 'domain_id',
            'creatorId' => 'creator_id',
            'updaterId' => 'updater_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tagId  **参数解释**： 标签ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 标签名称。 **取值范围**： 不涉及。
    * color  **参数解释**： 标签颜色。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * creatorId  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    * updaterId  **参数解释**： 更新人ID。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'tagId' => 'setTagId',
            'name' => 'setName',
            'color' => 'setColor',
            'projectId' => 'setProjectId',
            'domainId' => 'setDomainId',
            'creatorId' => 'setCreatorId',
            'updaterId' => 'setUpdaterId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tagId  **参数解释**： 标签ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 标签名称。 **取值范围**： 不涉及。
    * color  **参数解释**： 标签颜色。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * creatorId  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    * updaterId  **参数解释**： 更新人ID。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'tagId' => 'getTagId',
            'name' => 'getName',
            'color' => 'getColor',
            'projectId' => 'getProjectId',
            'domainId' => 'getDomainId',
            'creatorId' => 'getCreatorId',
            'updaterId' => 'getUpdaterId',
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
        $this->container['tagId'] = isset($data['tagId']) ? $data['tagId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['updaterId'] = isset($data['updaterId']) ? $data['updaterId'] : null;
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
    * Gets tagId
    *  **参数解释**： 标签ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTagId()
    {
        return $this->container['tagId'];
    }

    /**
    * Sets tagId
    *
    * @param string|null $tagId **参数解释**： 标签ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTagId($tagId)
    {
        $this->container['tagId'] = $tagId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 标签名称。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 标签名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets color
    *  **参数解释**： 标签颜色。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
    * Sets color
    *
    * @param string|null $color **参数解释**： 标签颜色。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setColor($color)
    {
        $this->container['color'] = $color;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 项目ID。 **取值范围**： 不涉及。
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
    * @param string|null $projectId **参数解释**： 项目ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 租户ID。 **取值范围**： 不涉及。
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
    * @param string|null $domainId **参数解释**： 租户ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
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
    * @param string|null $creatorId **参数解释**： 创建人ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 更新人ID。 **取值范围**： 不涉及。
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
    * @param string|null $updaterId **参数解释**： 更新人ID。 **取值范围**： 不涉及。
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

