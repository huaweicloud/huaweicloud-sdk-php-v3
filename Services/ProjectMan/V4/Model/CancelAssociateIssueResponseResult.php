<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CancelAssociateIssueResponseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CancelAssociateIssueResponse_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * identifier  **参数解释**： 关联关系唯一标识。 **取值范围**： 32个字符,由小写字母和数字组成。
    * issueId  **参数解释**： 源工作项ID。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 源项目数字ID。 **取值范围**： 不涉及。
    * associateType  **参数解释**： 关联类型。 **取值范围**： - associate：关联工作项。
    * associateIssueId  **参数解释**： 被关联工作项ID。 **取值范围**： 不涉及。
    * associateProjectId  **参数解释**： 被关联项目数字ID。 **取值范围**： 不涉及。
    * createdOn  **参数解释**： 关联关系创建时间。 **取值范围**： 格式为yyyy-MM-dd HH:mm:ss。
    * authorId  **参数解释**： 创建该关联关系的用户ID。 **取值范围**： 不涉及。
    * flag  **参数解释**： 关联关系有效标识。 **取值范围**： - true：关联有效。 - false：关联已失效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'identifier' => 'string',
            'issueId' => 'int',
            'projectId' => 'int',
            'associateType' => 'string',
            'associateIssueId' => 'int',
            'associateProjectId' => 'int',
            'createdOn' => '\DateTime',
            'authorId' => 'int',
            'flag' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * identifier  **参数解释**： 关联关系唯一标识。 **取值范围**： 32个字符,由小写字母和数字组成。
    * issueId  **参数解释**： 源工作项ID。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 源项目数字ID。 **取值范围**： 不涉及。
    * associateType  **参数解释**： 关联类型。 **取值范围**： - associate：关联工作项。
    * associateIssueId  **参数解释**： 被关联工作项ID。 **取值范围**： 不涉及。
    * associateProjectId  **参数解释**： 被关联项目数字ID。 **取值范围**： 不涉及。
    * createdOn  **参数解释**： 关联关系创建时间。 **取值范围**： 格式为yyyy-MM-dd HH:mm:ss。
    * authorId  **参数解释**： 创建该关联关系的用户ID。 **取值范围**： 不涉及。
    * flag  **参数解释**： 关联关系有效标识。 **取值范围**： - true：关联有效。 - false：关联已失效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'identifier' => null,
        'issueId' => 'int32',
        'projectId' => 'int32',
        'associateType' => null,
        'associateIssueId' => 'int32',
        'associateProjectId' => 'int32',
        'createdOn' => 'date-time',
        'authorId' => 'int32',
        'flag' => null
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
    * identifier  **参数解释**： 关联关系唯一标识。 **取值范围**： 32个字符,由小写字母和数字组成。
    * issueId  **参数解释**： 源工作项ID。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 源项目数字ID。 **取值范围**： 不涉及。
    * associateType  **参数解释**： 关联类型。 **取值范围**： - associate：关联工作项。
    * associateIssueId  **参数解释**： 被关联工作项ID。 **取值范围**： 不涉及。
    * associateProjectId  **参数解释**： 被关联项目数字ID。 **取值范围**： 不涉及。
    * createdOn  **参数解释**： 关联关系创建时间。 **取值范围**： 格式为yyyy-MM-dd HH:mm:ss。
    * authorId  **参数解释**： 创建该关联关系的用户ID。 **取值范围**： 不涉及。
    * flag  **参数解释**： 关联关系有效标识。 **取值范围**： - true：关联有效。 - false：关联已失效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'identifier' => 'identifier',
            'issueId' => 'issueId',
            'projectId' => 'projectId',
            'associateType' => 'associateType',
            'associateIssueId' => 'associateIssueId',
            'associateProjectId' => 'associateProjectId',
            'createdOn' => 'createdOn',
            'authorId' => 'authorId',
            'flag' => 'flag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * identifier  **参数解释**： 关联关系唯一标识。 **取值范围**： 32个字符,由小写字母和数字组成。
    * issueId  **参数解释**： 源工作项ID。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 源项目数字ID。 **取值范围**： 不涉及。
    * associateType  **参数解释**： 关联类型。 **取值范围**： - associate：关联工作项。
    * associateIssueId  **参数解释**： 被关联工作项ID。 **取值范围**： 不涉及。
    * associateProjectId  **参数解释**： 被关联项目数字ID。 **取值范围**： 不涉及。
    * createdOn  **参数解释**： 关联关系创建时间。 **取值范围**： 格式为yyyy-MM-dd HH:mm:ss。
    * authorId  **参数解释**： 创建该关联关系的用户ID。 **取值范围**： 不涉及。
    * flag  **参数解释**： 关联关系有效标识。 **取值范围**： - true：关联有效。 - false：关联已失效。
    *
    * @var string[]
    */
    protected static $setters = [
            'identifier' => 'setIdentifier',
            'issueId' => 'setIssueId',
            'projectId' => 'setProjectId',
            'associateType' => 'setAssociateType',
            'associateIssueId' => 'setAssociateIssueId',
            'associateProjectId' => 'setAssociateProjectId',
            'createdOn' => 'setCreatedOn',
            'authorId' => 'setAuthorId',
            'flag' => 'setFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * identifier  **参数解释**： 关联关系唯一标识。 **取值范围**： 32个字符,由小写字母和数字组成。
    * issueId  **参数解释**： 源工作项ID。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 源项目数字ID。 **取值范围**： 不涉及。
    * associateType  **参数解释**： 关联类型。 **取值范围**： - associate：关联工作项。
    * associateIssueId  **参数解释**： 被关联工作项ID。 **取值范围**： 不涉及。
    * associateProjectId  **参数解释**： 被关联项目数字ID。 **取值范围**： 不涉及。
    * createdOn  **参数解释**： 关联关系创建时间。 **取值范围**： 格式为yyyy-MM-dd HH:mm:ss。
    * authorId  **参数解释**： 创建该关联关系的用户ID。 **取值范围**： 不涉及。
    * flag  **参数解释**： 关联关系有效标识。 **取值范围**： - true：关联有效。 - false：关联已失效。
    *
    * @var string[]
    */
    protected static $getters = [
            'identifier' => 'getIdentifier',
            'issueId' => 'getIssueId',
            'projectId' => 'getProjectId',
            'associateType' => 'getAssociateType',
            'associateIssueId' => 'getAssociateIssueId',
            'associateProjectId' => 'getAssociateProjectId',
            'createdOn' => 'getCreatedOn',
            'authorId' => 'getAuthorId',
            'flag' => 'getFlag'
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
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['associateType'] = isset($data['associateType']) ? $data['associateType'] : null;
        $this->container['associateIssueId'] = isset($data['associateIssueId']) ? $data['associateIssueId'] : null;
        $this->container['associateProjectId'] = isset($data['associateProjectId']) ? $data['associateProjectId'] : null;
        $this->container['createdOn'] = isset($data['createdOn']) ? $data['createdOn'] : null;
        $this->container['authorId'] = isset($data['authorId']) ? $data['authorId'] : null;
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
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
    * Gets identifier
    *  **参数解释**： 关联关系唯一标识。 **取值范围**： 32个字符,由小写字母和数字组成。
    *
    * @return string|null
    */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
    * Sets identifier
    *
    * @param string|null $identifier **参数解释**： 关联关系唯一标识。 **取值范围**： 32个字符,由小写字母和数字组成。
    *
    * @return $this
    */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;
        return $this;
    }

    /**
    * Gets issueId
    *  **参数解释**： 源工作项ID。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param int|null $issueId **参数解释**： 源工作项ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 源项目数字ID。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param int|null $projectId **参数解释**： 源项目数字ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets associateType
    *  **参数解释**： 关联类型。 **取值范围**： - associate：关联工作项。
    *
    * @return string|null
    */
    public function getAssociateType()
    {
        return $this->container['associateType'];
    }

    /**
    * Sets associateType
    *
    * @param string|null $associateType **参数解释**： 关联类型。 **取值范围**： - associate：关联工作项。
    *
    * @return $this
    */
    public function setAssociateType($associateType)
    {
        $this->container['associateType'] = $associateType;
        return $this;
    }

    /**
    * Gets associateIssueId
    *  **参数解释**： 被关联工作项ID。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getAssociateIssueId()
    {
        return $this->container['associateIssueId'];
    }

    /**
    * Sets associateIssueId
    *
    * @param int|null $associateIssueId **参数解释**： 被关联工作项ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAssociateIssueId($associateIssueId)
    {
        $this->container['associateIssueId'] = $associateIssueId;
        return $this;
    }

    /**
    * Gets associateProjectId
    *  **参数解释**： 被关联项目数字ID。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getAssociateProjectId()
    {
        return $this->container['associateProjectId'];
    }

    /**
    * Sets associateProjectId
    *
    * @param int|null $associateProjectId **参数解释**： 被关联项目数字ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAssociateProjectId($associateProjectId)
    {
        $this->container['associateProjectId'] = $associateProjectId;
        return $this;
    }

    /**
    * Gets createdOn
    *  **参数解释**： 关联关系创建时间。 **取值范围**： 格式为yyyy-MM-dd HH:mm:ss。
    *
    * @return \DateTime|null
    */
    public function getCreatedOn()
    {
        return $this->container['createdOn'];
    }

    /**
    * Sets createdOn
    *
    * @param \DateTime|null $createdOn **参数解释**： 关联关系创建时间。 **取值范围**： 格式为yyyy-MM-dd HH:mm:ss。
    *
    * @return $this
    */
    public function setCreatedOn($createdOn)
    {
        $this->container['createdOn'] = $createdOn;
        return $this;
    }

    /**
    * Gets authorId
    *  **参数解释**： 创建该关联关系的用户ID。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getAuthorId()
    {
        return $this->container['authorId'];
    }

    /**
    * Sets authorId
    *
    * @param int|null $authorId **参数解释**： 创建该关联关系的用户ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAuthorId($authorId)
    {
        $this->container['authorId'] = $authorId;
        return $this;
    }

    /**
    * Gets flag
    *  **参数解释**： 关联关系有效标识。 **取值范围**： - true：关联有效。 - false：关联已失效。
    *
    * @return bool|null
    */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
    * Sets flag
    *
    * @param bool|null $flag **参数解释**： 关联关系有效标识。 **取值范围**： - true：关联有效。 - false：关联已失效。
    *
    * @return $this
    */
    public function setFlag($flag)
    {
        $this->container['flag'] = $flag;
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

