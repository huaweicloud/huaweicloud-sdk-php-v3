<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StyleInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StyleInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  数字人风格化名称
    * description  数字人风格化描述
    * projectId  租户ID
    * status  状态
    * sex  性别
    * tags  标签。单个标签16字节，多个用逗号分隔，最多50个。
    * styleAssets  风格化素材资产组合。
    * extraMeta  extraMeta
    * styleId  数字人风格ID
    * createTime  数字人风格创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * updateTime  数字人风格更新时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * state  数字人风格状态枚举 * CREATING：创建中 * PUBLISHED：已发布 * DELETED：已删除 * UNPUBLISHED：未发布 * PUBLISHING：发布中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'projectId' => 'string',
            'status' => 'string',
            'sex' => 'string',
            'tags' => 'string[]',
            'styleAssets' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\StyleAssetItem[]',
            'extraMeta' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\StyleExtraMeta',
            'styleId' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'state' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  数字人风格化名称
    * description  数字人风格化描述
    * projectId  租户ID
    * status  状态
    * sex  性别
    * tags  标签。单个标签16字节，多个用逗号分隔，最多50个。
    * styleAssets  风格化素材资产组合。
    * extraMeta  extraMeta
    * styleId  数字人风格ID
    * createTime  数字人风格创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * updateTime  数字人风格更新时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * state  数字人风格状态枚举 * CREATING：创建中 * PUBLISHED：已发布 * DELETED：已删除 * UNPUBLISHED：未发布 * PUBLISHING：发布中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'projectId' => null,
        'status' => null,
        'sex' => null,
        'tags' => null,
        'styleAssets' => null,
        'extraMeta' => null,
        'styleId' => null,
        'createTime' => null,
        'updateTime' => null,
        'state' => null
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
    * name  数字人风格化名称
    * description  数字人风格化描述
    * projectId  租户ID
    * status  状态
    * sex  性别
    * tags  标签。单个标签16字节，多个用逗号分隔，最多50个。
    * styleAssets  风格化素材资产组合。
    * extraMeta  extraMeta
    * styleId  数字人风格ID
    * createTime  数字人风格创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * updateTime  数字人风格更新时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * state  数字人风格状态枚举 * CREATING：创建中 * PUBLISHED：已发布 * DELETED：已删除 * UNPUBLISHED：未发布 * PUBLISHING：发布中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'projectId' => 'project_id',
            'status' => 'status',
            'sex' => 'sex',
            'tags' => 'tags',
            'styleAssets' => 'style_assets',
            'extraMeta' => 'extra_meta',
            'styleId' => 'style_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'state' => 'state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  数字人风格化名称
    * description  数字人风格化描述
    * projectId  租户ID
    * status  状态
    * sex  性别
    * tags  标签。单个标签16字节，多个用逗号分隔，最多50个。
    * styleAssets  风格化素材资产组合。
    * extraMeta  extraMeta
    * styleId  数字人风格ID
    * createTime  数字人风格创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * updateTime  数字人风格更新时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * state  数字人风格状态枚举 * CREATING：创建中 * PUBLISHED：已发布 * DELETED：已删除 * UNPUBLISHED：未发布 * PUBLISHING：发布中
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'projectId' => 'setProjectId',
            'status' => 'setStatus',
            'sex' => 'setSex',
            'tags' => 'setTags',
            'styleAssets' => 'setStyleAssets',
            'extraMeta' => 'setExtraMeta',
            'styleId' => 'setStyleId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'state' => 'setState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  数字人风格化名称
    * description  数字人风格化描述
    * projectId  租户ID
    * status  状态
    * sex  性别
    * tags  标签。单个标签16字节，多个用逗号分隔，最多50个。
    * styleAssets  风格化素材资产组合。
    * extraMeta  extraMeta
    * styleId  数字人风格ID
    * createTime  数字人风格创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * updateTime  数字人风格更新时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * state  数字人风格状态枚举 * CREATING：创建中 * PUBLISHED：已发布 * DELETED：已删除 * UNPUBLISHED：未发布 * PUBLISHING：发布中
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'projectId' => 'getProjectId',
            'status' => 'getStatus',
            'sex' => 'getSex',
            'tags' => 'getTags',
            'styleAssets' => 'getStyleAssets',
            'extraMeta' => 'getExtraMeta',
            'styleId' => 'getStyleId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'state' => 'getState'
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
    const SEX_UNKNOW = 'UNKNOW';
    const SEX_MALE = 'MALE';
    const SEX_FEMALE = 'FEMALE';
    const STATE_CREATING = 'CREATING';
    const STATE_PUBLISHED = 'PUBLISHED';
    const STATE_DELETED = 'DELETED';
    const STATE_UNPUBLISHED = 'UNPUBLISHED';
    const STATE_PUBLISHING = 'PUBLISHING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSexAllowableValues()
    {
        return [
            self::SEX_UNKNOW,
            self::SEX_MALE,
            self::SEX_FEMALE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_CREATING,
            self::STATE_PUBLISHED,
            self::STATE_DELETED,
            self::STATE_UNPUBLISHED,
            self::STATE_PUBLISHING,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['styleAssets'] = isset($data['styleAssets']) ? $data['styleAssets'] : null;
        $this->container['extraMeta'] = isset($data['extraMeta']) ? $data['extraMeta'] : null;
        $this->container['styleId'] = isset($data['styleId']) ? $data['styleId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 256)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSexAllowableValues();
                if (!is_null($this->container['sex']) && !in_array($this->container['sex'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sex', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sex']) && (mb_strlen($this->container['sex']) > 16)) {
                $invalidProperties[] = "invalid value for 'sex', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['sex']) && (mb_strlen($this->container['sex']) < 1)) {
                $invalidProperties[] = "invalid value for 'sex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['styleId']) && (mb_strlen($this->container['styleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'styleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['styleId']) && (mb_strlen($this->container['styleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'styleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 20.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
    * Gets name
    *  数字人风格化名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 数字人风格化名称
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
    *  数字人风格化描述
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
    * @param string|null $description 数字人风格化描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets projectId
    *  租户ID
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
    * @param string|null $projectId 租户ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sex
    *  性别
    *
    * @return string|null
    */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
    * Sets sex
    *
    * @param string|null $sex 性别
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets tags
    *  标签。单个标签16字节，多个用逗号分隔，最多50个。
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 标签。单个标签16字节，多个用逗号分隔，最多50个。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets styleAssets
    *  风格化素材资产组合。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\StyleAssetItem[]|null
    */
    public function getStyleAssets()
    {
        return $this->container['styleAssets'];
    }

    /**
    * Sets styleAssets
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\StyleAssetItem[]|null $styleAssets 风格化素材资产组合。
    *
    * @return $this
    */
    public function setStyleAssets($styleAssets)
    {
        $this->container['styleAssets'] = $styleAssets;
        return $this;
    }

    /**
    * Gets extraMeta
    *  extraMeta
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\StyleExtraMeta|null
    */
    public function getExtraMeta()
    {
        return $this->container['extraMeta'];
    }

    /**
    * Sets extraMeta
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\StyleExtraMeta|null $extraMeta extraMeta
    *
    * @return $this
    */
    public function setExtraMeta($extraMeta)
    {
        $this->container['extraMeta'] = $extraMeta;
        return $this;
    }

    /**
    * Gets styleId
    *  数字人风格ID
    *
    * @return string|null
    */
    public function getStyleId()
    {
        return $this->container['styleId'];
    }

    /**
    * Sets styleId
    *
    * @param string|null $styleId 数字人风格ID
    *
    * @return $this
    */
    public function setStyleId($styleId)
    {
        $this->container['styleId'] = $styleId;
        return $this;
    }

    /**
    * Gets createTime
    *  数字人风格创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
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
    * @param string|null $createTime 数字人风格创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
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
    *  数字人风格更新时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
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
    * @param string|null $updateTime 数字人风格更新时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets state
    *  数字人风格状态枚举 * CREATING：创建中 * PUBLISHED：已发布 * DELETED：已删除 * UNPUBLISHED：未发布 * PUBLISHING：发布中
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 数字人风格状态枚举 * CREATING：创建中 * PUBLISHED：已发布 * DELETED：已删除 * UNPUBLISHED：未发布 * PUBLISHING：发布中
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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

