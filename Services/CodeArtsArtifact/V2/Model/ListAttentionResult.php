<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAttentionResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAttentionResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 序号。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * repositoryId  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * repositoryName  **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    * format  **参数解释**： 制品类型。 **取值范围**： maven2|docker|npm|go|pypi|rpm|composer|debian|conan|nuget|docker2|cocoapods|ohpm|generic。
    * policy  **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    * artifactId  **参数解释**： 关注的组件序号。 **取值范围**： 不涉及。
    * path  **参数解释**： 关注的组件路径。 **取值范围**： 不涉及。
    * modifiedUserName  **参数解释**： 修改人名称。 **取值范围**： 不涉及。
    * modifiedUserId  **参数解释**： 修改人ID。 **取值范围**： 不涉及。
    * userId  **参数解释**： 用户id。 **取值范围**： 只能由英文字母、数字组成，且长度为32个字符。
    * modifiedTime  **参数解释**： 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    * region  **参数解释**： 区域。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'domainId' => 'string',
            'repositoryId' => 'string',
            'repositoryName' => 'string',
            'format' => 'string',
            'policy' => 'string',
            'artifactId' => 'string',
            'path' => 'string',
            'modifiedUserName' => 'string',
            'modifiedUserId' => 'string',
            'userId' => 'string',
            'modifiedTime' => 'string',
            'region' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 序号。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * repositoryId  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * repositoryName  **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    * format  **参数解释**： 制品类型。 **取值范围**： maven2|docker|npm|go|pypi|rpm|composer|debian|conan|nuget|docker2|cocoapods|ohpm|generic。
    * policy  **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    * artifactId  **参数解释**： 关注的组件序号。 **取值范围**： 不涉及。
    * path  **参数解释**： 关注的组件路径。 **取值范围**： 不涉及。
    * modifiedUserName  **参数解释**： 修改人名称。 **取值范围**： 不涉及。
    * modifiedUserId  **参数解释**： 修改人ID。 **取值范围**： 不涉及。
    * userId  **参数解释**： 用户id。 **取值范围**： 只能由英文字母、数字组成，且长度为32个字符。
    * modifiedTime  **参数解释**： 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    * region  **参数解释**： 区域。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'domainId' => null,
        'repositoryId' => null,
        'repositoryName' => null,
        'format' => null,
        'policy' => null,
        'artifactId' => null,
        'path' => null,
        'modifiedUserName' => null,
        'modifiedUserId' => null,
        'userId' => null,
        'modifiedTime' => null,
        'region' => null
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
    * id  **参数解释**： 序号。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * repositoryId  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * repositoryName  **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    * format  **参数解释**： 制品类型。 **取值范围**： maven2|docker|npm|go|pypi|rpm|composer|debian|conan|nuget|docker2|cocoapods|ohpm|generic。
    * policy  **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    * artifactId  **参数解释**： 关注的组件序号。 **取值范围**： 不涉及。
    * path  **参数解释**： 关注的组件路径。 **取值范围**： 不涉及。
    * modifiedUserName  **参数解释**： 修改人名称。 **取值范围**： 不涉及。
    * modifiedUserId  **参数解释**： 修改人ID。 **取值范围**： 不涉及。
    * userId  **参数解释**： 用户id。 **取值范围**： 只能由英文字母、数字组成，且长度为32个字符。
    * modifiedTime  **参数解释**： 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    * region  **参数解释**： 区域。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'domainId' => 'domainId',
            'repositoryId' => 'repositoryId',
            'repositoryName' => 'repositoryName',
            'format' => 'format',
            'policy' => 'policy',
            'artifactId' => 'artifactId',
            'path' => 'path',
            'modifiedUserName' => 'modifiedUserName',
            'modifiedUserId' => 'modifiedUserId',
            'userId' => 'userId',
            'modifiedTime' => 'modifiedTime',
            'region' => 'region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 序号。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * repositoryId  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * repositoryName  **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    * format  **参数解释**： 制品类型。 **取值范围**： maven2|docker|npm|go|pypi|rpm|composer|debian|conan|nuget|docker2|cocoapods|ohpm|generic。
    * policy  **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    * artifactId  **参数解释**： 关注的组件序号。 **取值范围**： 不涉及。
    * path  **参数解释**： 关注的组件路径。 **取值范围**： 不涉及。
    * modifiedUserName  **参数解释**： 修改人名称。 **取值范围**： 不涉及。
    * modifiedUserId  **参数解释**： 修改人ID。 **取值范围**： 不涉及。
    * userId  **参数解释**： 用户id。 **取值范围**： 只能由英文字母、数字组成，且长度为32个字符。
    * modifiedTime  **参数解释**： 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    * region  **参数解释**： 区域。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'domainId' => 'setDomainId',
            'repositoryId' => 'setRepositoryId',
            'repositoryName' => 'setRepositoryName',
            'format' => 'setFormat',
            'policy' => 'setPolicy',
            'artifactId' => 'setArtifactId',
            'path' => 'setPath',
            'modifiedUserName' => 'setModifiedUserName',
            'modifiedUserId' => 'setModifiedUserId',
            'userId' => 'setUserId',
            'modifiedTime' => 'setModifiedTime',
            'region' => 'setRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 序号。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * repositoryId  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * repositoryName  **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    * format  **参数解释**： 制品类型。 **取值范围**： maven2|docker|npm|go|pypi|rpm|composer|debian|conan|nuget|docker2|cocoapods|ohpm|generic。
    * policy  **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    * artifactId  **参数解释**： 关注的组件序号。 **取值范围**： 不涉及。
    * path  **参数解释**： 关注的组件路径。 **取值范围**： 不涉及。
    * modifiedUserName  **参数解释**： 修改人名称。 **取值范围**： 不涉及。
    * modifiedUserId  **参数解释**： 修改人ID。 **取值范围**： 不涉及。
    * userId  **参数解释**： 用户id。 **取值范围**： 只能由英文字母、数字组成，且长度为32个字符。
    * modifiedTime  **参数解释**： 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    * region  **参数解释**： 区域。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'domainId' => 'getDomainId',
            'repositoryId' => 'getRepositoryId',
            'repositoryName' => 'getRepositoryName',
            'format' => 'getFormat',
            'policy' => 'getPolicy',
            'artifactId' => 'getArtifactId',
            'path' => 'getPath',
            'modifiedUserName' => 'getModifiedUserName',
            'modifiedUserId' => 'getModifiedUserId',
            'userId' => 'getUserId',
            'modifiedTime' => 'getModifiedTime',
            'region' => 'getRegion'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['repositoryName'] = isset($data['repositoryName']) ? $data['repositoryName'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['artifactId'] = isset($data['artifactId']) ? $data['artifactId'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['modifiedUserName'] = isset($data['modifiedUserName']) ? $data['modifiedUserName'] : null;
        $this->container['modifiedUserId'] = isset($data['modifiedUserId']) ? $data['modifiedUserId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['modifiedTime'] = isset($data['modifiedTime']) ? $data['modifiedTime'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
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
    *  **参数解释**： 序号。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： 序号。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets repositoryId
    *  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param string|null $repositoryId **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets repositoryName
    *  **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRepositoryName()
    {
        return $this->container['repositoryName'];
    }

    /**
    * Sets repositoryName
    *
    * @param string|null $repositoryName **参数解释**： 仓库名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRepositoryName($repositoryName)
    {
        $this->container['repositoryName'] = $repositoryName;
        return $this;
    }

    /**
    * Gets format
    *  **参数解释**： 制品类型。 **取值范围**： maven2|docker|npm|go|pypi|rpm|composer|debian|conan|nuget|docker2|cocoapods|ohpm|generic。
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format **参数解释**： 制品类型。 **取值范围**： maven2|docker|npm|go|pypi|rpm|composer|debian|conan|nuget|docker2|cocoapods|ohpm|generic。
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets policy
    *  **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    *
    * @return string|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param string|null $policy **参数解释**： 仓库策略。 **取值范围**： - release：正式仓库。 - snapshot：快照仓库。
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
        return $this;
    }

    /**
    * Gets artifactId
    *  **参数解释**： 关注的组件序号。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getArtifactId()
    {
        return $this->container['artifactId'];
    }

    /**
    * Sets artifactId
    *
    * @param string|null $artifactId **参数解释**： 关注的组件序号。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setArtifactId($artifactId)
    {
        $this->container['artifactId'] = $artifactId;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释**： 关注的组件路径。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释**： 关注的组件路径。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets modifiedUserName
    *  **参数解释**： 修改人名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getModifiedUserName()
    {
        return $this->container['modifiedUserName'];
    }

    /**
    * Sets modifiedUserName
    *
    * @param string|null $modifiedUserName **参数解释**： 修改人名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setModifiedUserName($modifiedUserName)
    {
        $this->container['modifiedUserName'] = $modifiedUserName;
        return $this;
    }

    /**
    * Gets modifiedUserId
    *  **参数解释**： 修改人ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getModifiedUserId()
    {
        return $this->container['modifiedUserId'];
    }

    /**
    * Sets modifiedUserId
    *
    * @param string|null $modifiedUserId **参数解释**： 修改人ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setModifiedUserId($modifiedUserId)
    {
        $this->container['modifiedUserId'] = $modifiedUserId;
        return $this;
    }

    /**
    * Gets userId
    *  **参数解释**： 用户id。 **取值范围**： 只能由英文字母、数字组成，且长度为32个字符。
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
    * @param string|null $userId **参数解释**： 用户id。 **取值范围**： 只能由英文字母、数字组成，且长度为32个字符。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets modifiedTime
    *  **参数解释**： 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
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
    * @param string|null $modifiedTime **参数解释**： 修改时间，时间格式：yyyy-MM-dd HH:mm:ss。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setModifiedTime($modifiedTime)
    {
        $this->container['modifiedTime'] = $modifiedTime;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释**： 区域。 **取值范围**： 不涉及。
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
    * @param string|null $region **参数解释**： 区域。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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

