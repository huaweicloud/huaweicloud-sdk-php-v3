<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateBranchNameResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateBranchNameResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * oldBranchName  **参数解释：** 旧分支名称。  **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。  **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 不涉及。
    * oldBranchCommitId  **参数解释：** 旧分支最新提交ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * newBranchName  **参数解释：** 新分支名称。  **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。  **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 不涉及。
    * newBranchCommitId  **参数解释：** 新分支最新提交ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'oldBranchName' => 'string',
            'oldBranchCommitId' => 'string',
            'newBranchName' => 'string',
            'newBranchCommitId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * oldBranchName  **参数解释：** 旧分支名称。  **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。  **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 不涉及。
    * oldBranchCommitId  **参数解释：** 旧分支最新提交ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * newBranchName  **参数解释：** 新分支名称。  **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。  **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 不涉及。
    * newBranchCommitId  **参数解释：** 新分支最新提交ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'oldBranchName' => null,
        'oldBranchCommitId' => null,
        'newBranchName' => null,
        'newBranchCommitId' => null
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
    * oldBranchName  **参数解释：** 旧分支名称。  **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。  **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 不涉及。
    * oldBranchCommitId  **参数解释：** 旧分支最新提交ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * newBranchName  **参数解释：** 新分支名称。  **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。  **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 不涉及。
    * newBranchCommitId  **参数解释：** 新分支最新提交ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'oldBranchName' => 'old_branch_name',
            'oldBranchCommitId' => 'old_branch_commit_id',
            'newBranchName' => 'new_branch_name',
            'newBranchCommitId' => 'new_branch_commit_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * oldBranchName  **参数解释：** 旧分支名称。  **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。  **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 不涉及。
    * oldBranchCommitId  **参数解释：** 旧分支最新提交ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * newBranchName  **参数解释：** 新分支名称。  **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。  **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 不涉及。
    * newBranchCommitId  **参数解释：** 新分支最新提交ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'oldBranchName' => 'setOldBranchName',
            'oldBranchCommitId' => 'setOldBranchCommitId',
            'newBranchName' => 'setNewBranchName',
            'newBranchCommitId' => 'setNewBranchCommitId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * oldBranchName  **参数解释：** 旧分支名称。  **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。  **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 不涉及。
    * oldBranchCommitId  **参数解释：** 旧分支最新提交ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * newBranchName  **参数解释：** 新分支名称。  **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。  **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 不涉及。
    * newBranchCommitId  **参数解释：** 新分支最新提交ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'oldBranchName' => 'getOldBranchName',
            'oldBranchCommitId' => 'getOldBranchCommitId',
            'newBranchName' => 'getNewBranchName',
            'newBranchCommitId' => 'getNewBranchCommitId'
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
        $this->container['oldBranchName'] = isset($data['oldBranchName']) ? $data['oldBranchName'] : null;
        $this->container['oldBranchCommitId'] = isset($data['oldBranchCommitId']) ? $data['oldBranchCommitId'] : null;
        $this->container['newBranchName'] = isset($data['newBranchName']) ? $data['newBranchName'] : null;
        $this->container['newBranchCommitId'] = isset($data['newBranchCommitId']) ? $data['newBranchCommitId'] : null;
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
    * Gets oldBranchName
    *  **参数解释：** 旧分支名称。  **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。  **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getOldBranchName()
    {
        return $this->container['oldBranchName'];
    }

    /**
    * Sets oldBranchName
    *
    * @param string|null $oldBranchName **参数解释：** 旧分支名称。  **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。  **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setOldBranchName($oldBranchName)
    {
        $this->container['oldBranchName'] = $oldBranchName;
        return $this;
    }

    /**
    * Gets oldBranchCommitId
    *  **参数解释：** 旧分支最新提交ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getOldBranchCommitId()
    {
        return $this->container['oldBranchCommitId'];
    }

    /**
    * Sets oldBranchCommitId
    *
    * @param string|null $oldBranchCommitId **参数解释：** 旧分支最新提交ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setOldBranchCommitId($oldBranchCommitId)
    {
        $this->container['oldBranchCommitId'] = $oldBranchCommitId;
        return $this;
    }

    /**
    * Gets newBranchName
    *  **参数解释：** 新分支名称。  **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。  **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getNewBranchName()
    {
        return $this->container['newBranchName'];
    }

    /**
    * Sets newBranchName
    *
    * @param string|null $newBranchName **参数解释：** 新分支名称。  **约束限制：** 不支持以 - . refs/heads/ refs/remotes/ 开头，不支持空格 [ \\ < ~ ^ : ? * ! ( ) ' \" | 等特殊字符，不支持以. / .lock结尾。  **取值范围：** 字符串长度不少于1，不超过200。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setNewBranchName($newBranchName)
    {
        $this->container['newBranchName'] = $newBranchName;
        return $this;
    }

    /**
    * Gets newBranchCommitId
    *  **参数解释：** 新分支最新提交ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getNewBranchCommitId()
    {
        return $this->container['newBranchCommitId'];
    }

    /**
    * Sets newBranchCommitId
    *
    * @param string|null $newBranchCommitId **参数解释：** 新分支最新提交ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setNewBranchCommitId($newBranchCommitId)
    {
        $this->container['newBranchCommitId'] = $newBranchCommitId;
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

