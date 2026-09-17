<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteIssueNoteParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteIssueNoteParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 评论ID。标识需要删除的工作项评论唯一记录。 **约束限制**： 评论必须存在，且当前用户必须是该评论的创建者。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。标识当前评论所属的项目，用于权限校验与服务可用性校验。 **约束限制**： 32位UUID字符串，且必须与评论对应工作项所属项目保持一致。 **取值范围**： 32个字符，由小写字母和数字组成。 **默认取值**： 不涉及。
    * type  **参数解释**： 工作项类型。标识当前操作对应的工作项类型分类。 **约束限制**： 不涉及。 **取值范围**： - scrum：Scrum项目类型工作项 - 其他类型取值请参考实际业务定义。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'projectId' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 评论ID。标识需要删除的工作项评论唯一记录。 **约束限制**： 评论必须存在，且当前用户必须是该评论的创建者。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。标识当前评论所属的项目，用于权限校验与服务可用性校验。 **约束限制**： 32位UUID字符串，且必须与评论对应工作项所属项目保持一致。 **取值范围**： 32个字符，由小写字母和数字组成。 **默认取值**： 不涉及。
    * type  **参数解释**： 工作项类型。标识当前操作对应的工作项类型分类。 **约束限制**： 不涉及。 **取值范围**： - scrum：Scrum项目类型工作项 - 其他类型取值请参考实际业务定义。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'projectId' => null,
        'type' => null
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
    * id  **参数解释**： 评论ID。标识需要删除的工作项评论唯一记录。 **约束限制**： 评论必须存在，且当前用户必须是该评论的创建者。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。标识当前评论所属的项目，用于权限校验与服务可用性校验。 **约束限制**： 32位UUID字符串，且必须与评论对应工作项所属项目保持一致。 **取值范围**： 32个字符，由小写字母和数字组成。 **默认取值**： 不涉及。
    * type  **参数解释**： 工作项类型。标识当前操作对应的工作项类型分类。 **约束限制**： 不涉及。 **取值范围**： - scrum：Scrum项目类型工作项 - 其他类型取值请参考实际业务定义。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'projectId',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 评论ID。标识需要删除的工作项评论唯一记录。 **约束限制**： 评论必须存在，且当前用户必须是该评论的创建者。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。标识当前评论所属的项目，用于权限校验与服务可用性校验。 **约束限制**： 32位UUID字符串，且必须与评论对应工作项所属项目保持一致。 **取值范围**： 32个字符，由小写字母和数字组成。 **默认取值**： 不涉及。
    * type  **参数解释**： 工作项类型。标识当前操作对应的工作项类型分类。 **约束限制**： 不涉及。 **取值范围**： - scrum：Scrum项目类型工作项 - 其他类型取值请参考实际业务定义。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 评论ID。标识需要删除的工作项评论唯一记录。 **约束限制**： 评论必须存在，且当前用户必须是该评论的创建者。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。标识当前评论所属的项目，用于权限校验与服务可用性校验。 **约束限制**： 32位UUID字符串，且必须与评论对应工作项所属项目保持一致。 **取值范围**： 32个字符，由小写字母和数字组成。 **默认取值**： 不涉及。
    * type  **参数解释**： 工作项类型。标识当前操作对应的工作项类型分类。 **约束限制**： 不涉及。 **取值范围**： - scrum：Scrum项目类型工作项 - 其他类型取值请参考实际业务定义。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'type' => 'getType'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
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
    *  **参数解释**： 评论ID。标识需要删除的工作项评论唯一记录。 **约束限制**： 评论必须存在，且当前用户必须是该评论的创建者。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id **参数解释**： 评论ID。标识需要删除的工作项评论唯一记录。 **约束限制**： 评论必须存在，且当前用户必须是该评论的创建者。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 项目ID。标识当前评论所属的项目，用于权限校验与服务可用性校验。 **约束限制**： 32位UUID字符串，且必须与评论对应工作项所属项目保持一致。 **取值范围**： 32个字符，由小写字母和数字组成。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数解释**： 项目ID。标识当前评论所属的项目，用于权限校验与服务可用性校验。 **约束限制**： 32位UUID字符串，且必须与评论对应工作项所属项目保持一致。 **取值范围**： 32个字符，由小写字母和数字组成。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 工作项类型。标识当前操作对应的工作项类型分类。 **约束限制**： 不涉及。 **取值范围**： - scrum：Scrum项目类型工作项 - 其他类型取值请参考实际业务定义。 **默认取值**： 不涉及。
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
    * @param string|null $type **参数解释**： 工作项类型。标识当前操作对应的工作项类型分类。 **约束限制**： 不涉及。 **取值范围**： - scrum：Scrum项目类型工作项 - 其他类型取值请参考实际业务定义。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

