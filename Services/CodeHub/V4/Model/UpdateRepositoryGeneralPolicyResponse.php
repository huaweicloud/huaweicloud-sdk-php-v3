<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRepositoryGeneralPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRepositoryGeneralPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * disableFork  **参数解释：** 是否禁止fork该仓库。 **约束限制：** 不涉及。 **取值范围：** - true，禁止fork。 - false，允许fork。 **默认取值：** 不涉及。
    * generatePreMergeRef  **参数解释：** 是否预合并MR。 **约束限制：** 不涉及。 **取值范围：** - true，禁止预合并MR。 - false，允许预合并MR。 **默认取值：** 不涉及。
    * branchNameRegex  **参数解释：** 分支名规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tagNameRegex  **参数解释：** Tag名规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * forbiddenDeveloperCreateBranch  **参数解释：** 是否禁止开发者创建分支。 **约束限制：** 不涉及。 **取值范围：** - true，禁止开发者创建分支。 - false，允许开发者创建分支。
    * createBranchWhitelistUsers  **参数解释：** 开发人员创建分支权限白名单。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'disableFork' => 'bool',
            'generatePreMergeRef' => 'bool',
            'branchNameRegex' => 'string',
            'tagNameRegex' => 'string',
            'forbiddenDeveloperCreateBranch' => 'bool',
            'createBranchWhitelistUsers' => '\HuaweiCloud\SDK\CodeHub\V4\Model\PushRuleDevelopersDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * disableFork  **参数解释：** 是否禁止fork该仓库。 **约束限制：** 不涉及。 **取值范围：** - true，禁止fork。 - false，允许fork。 **默认取值：** 不涉及。
    * generatePreMergeRef  **参数解释：** 是否预合并MR。 **约束限制：** 不涉及。 **取值范围：** - true，禁止预合并MR。 - false，允许预合并MR。 **默认取值：** 不涉及。
    * branchNameRegex  **参数解释：** 分支名规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tagNameRegex  **参数解释：** Tag名规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * forbiddenDeveloperCreateBranch  **参数解释：** 是否禁止开发者创建分支。 **约束限制：** 不涉及。 **取值范围：** - true，禁止开发者创建分支。 - false，允许开发者创建分支。
    * createBranchWhitelistUsers  **参数解释：** 开发人员创建分支权限白名单。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'disableFork' => null,
        'generatePreMergeRef' => null,
        'branchNameRegex' => null,
        'tagNameRegex' => null,
        'forbiddenDeveloperCreateBranch' => null,
        'createBranchWhitelistUsers' => null
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
    * disableFork  **参数解释：** 是否禁止fork该仓库。 **约束限制：** 不涉及。 **取值范围：** - true，禁止fork。 - false，允许fork。 **默认取值：** 不涉及。
    * generatePreMergeRef  **参数解释：** 是否预合并MR。 **约束限制：** 不涉及。 **取值范围：** - true，禁止预合并MR。 - false，允许预合并MR。 **默认取值：** 不涉及。
    * branchNameRegex  **参数解释：** 分支名规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tagNameRegex  **参数解释：** Tag名规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * forbiddenDeveloperCreateBranch  **参数解释：** 是否禁止开发者创建分支。 **约束限制：** 不涉及。 **取值范围：** - true，禁止开发者创建分支。 - false，允许开发者创建分支。
    * createBranchWhitelistUsers  **参数解释：** 开发人员创建分支权限白名单。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'disableFork' => 'disable_fork',
            'generatePreMergeRef' => 'generate_pre_merge_ref',
            'branchNameRegex' => 'branch_name_regex',
            'tagNameRegex' => 'tag_name_regex',
            'forbiddenDeveloperCreateBranch' => 'forbidden_developer_create_branch',
            'createBranchWhitelistUsers' => 'create_branch_whitelist_users'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * disableFork  **参数解释：** 是否禁止fork该仓库。 **约束限制：** 不涉及。 **取值范围：** - true，禁止fork。 - false，允许fork。 **默认取值：** 不涉及。
    * generatePreMergeRef  **参数解释：** 是否预合并MR。 **约束限制：** 不涉及。 **取值范围：** - true，禁止预合并MR。 - false，允许预合并MR。 **默认取值：** 不涉及。
    * branchNameRegex  **参数解释：** 分支名规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tagNameRegex  **参数解释：** Tag名规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * forbiddenDeveloperCreateBranch  **参数解释：** 是否禁止开发者创建分支。 **约束限制：** 不涉及。 **取值范围：** - true，禁止开发者创建分支。 - false，允许开发者创建分支。
    * createBranchWhitelistUsers  **参数解释：** 开发人员创建分支权限白名单。
    *
    * @var string[]
    */
    protected static $setters = [
            'disableFork' => 'setDisableFork',
            'generatePreMergeRef' => 'setGeneratePreMergeRef',
            'branchNameRegex' => 'setBranchNameRegex',
            'tagNameRegex' => 'setTagNameRegex',
            'forbiddenDeveloperCreateBranch' => 'setForbiddenDeveloperCreateBranch',
            'createBranchWhitelistUsers' => 'setCreateBranchWhitelistUsers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * disableFork  **参数解释：** 是否禁止fork该仓库。 **约束限制：** 不涉及。 **取值范围：** - true，禁止fork。 - false，允许fork。 **默认取值：** 不涉及。
    * generatePreMergeRef  **参数解释：** 是否预合并MR。 **约束限制：** 不涉及。 **取值范围：** - true，禁止预合并MR。 - false，允许预合并MR。 **默认取值：** 不涉及。
    * branchNameRegex  **参数解释：** 分支名规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tagNameRegex  **参数解释：** Tag名规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * forbiddenDeveloperCreateBranch  **参数解释：** 是否禁止开发者创建分支。 **约束限制：** 不涉及。 **取值范围：** - true，禁止开发者创建分支。 - false，允许开发者创建分支。
    * createBranchWhitelistUsers  **参数解释：** 开发人员创建分支权限白名单。
    *
    * @var string[]
    */
    protected static $getters = [
            'disableFork' => 'getDisableFork',
            'generatePreMergeRef' => 'getGeneratePreMergeRef',
            'branchNameRegex' => 'getBranchNameRegex',
            'tagNameRegex' => 'getTagNameRegex',
            'forbiddenDeveloperCreateBranch' => 'getForbiddenDeveloperCreateBranch',
            'createBranchWhitelistUsers' => 'getCreateBranchWhitelistUsers'
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
        $this->container['disableFork'] = isset($data['disableFork']) ? $data['disableFork'] : null;
        $this->container['generatePreMergeRef'] = isset($data['generatePreMergeRef']) ? $data['generatePreMergeRef'] : null;
        $this->container['branchNameRegex'] = isset($data['branchNameRegex']) ? $data['branchNameRegex'] : null;
        $this->container['tagNameRegex'] = isset($data['tagNameRegex']) ? $data['tagNameRegex'] : null;
        $this->container['forbiddenDeveloperCreateBranch'] = isset($data['forbiddenDeveloperCreateBranch']) ? $data['forbiddenDeveloperCreateBranch'] : null;
        $this->container['createBranchWhitelistUsers'] = isset($data['createBranchWhitelistUsers']) ? $data['createBranchWhitelistUsers'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['branchNameRegex']) && (mb_strlen($this->container['branchNameRegex']) > 255)) {
                $invalidProperties[] = "invalid value for 'branchNameRegex', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['branchNameRegex']) && (mb_strlen($this->container['branchNameRegex']) < 1)) {
                $invalidProperties[] = "invalid value for 'branchNameRegex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tagNameRegex']) && (mb_strlen($this->container['tagNameRegex']) > 255)) {
                $invalidProperties[] = "invalid value for 'tagNameRegex', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['tagNameRegex']) && (mb_strlen($this->container['tagNameRegex']) < 1)) {
                $invalidProperties[] = "invalid value for 'tagNameRegex', the character length must be bigger than or equal to 1.";
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
    * Gets disableFork
    *  **参数解释：** 是否禁止fork该仓库。 **约束限制：** 不涉及。 **取值范围：** - true，禁止fork。 - false，允许fork。 **默认取值：** 不涉及。
    *
    * @return bool|null
    */
    public function getDisableFork()
    {
        return $this->container['disableFork'];
    }

    /**
    * Sets disableFork
    *
    * @param bool|null $disableFork **参数解释：** 是否禁止fork该仓库。 **约束限制：** 不涉及。 **取值范围：** - true，禁止fork。 - false，允许fork。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDisableFork($disableFork)
    {
        $this->container['disableFork'] = $disableFork;
        return $this;
    }

    /**
    * Gets generatePreMergeRef
    *  **参数解释：** 是否预合并MR。 **约束限制：** 不涉及。 **取值范围：** - true，禁止预合并MR。 - false，允许预合并MR。 **默认取值：** 不涉及。
    *
    * @return bool|null
    */
    public function getGeneratePreMergeRef()
    {
        return $this->container['generatePreMergeRef'];
    }

    /**
    * Sets generatePreMergeRef
    *
    * @param bool|null $generatePreMergeRef **参数解释：** 是否预合并MR。 **约束限制：** 不涉及。 **取值范围：** - true，禁止预合并MR。 - false，允许预合并MR。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setGeneratePreMergeRef($generatePreMergeRef)
    {
        $this->container['generatePreMergeRef'] = $generatePreMergeRef;
        return $this;
    }

    /**
    * Gets branchNameRegex
    *  **参数解释：** 分支名规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getBranchNameRegex()
    {
        return $this->container['branchNameRegex'];
    }

    /**
    * Sets branchNameRegex
    *
    * @param string|null $branchNameRegex **参数解释：** 分支名规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setBranchNameRegex($branchNameRegex)
    {
        $this->container['branchNameRegex'] = $branchNameRegex;
        return $this;
    }

    /**
    * Gets tagNameRegex
    *  **参数解释：** Tag名规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getTagNameRegex()
    {
        return $this->container['tagNameRegex'];
    }

    /**
    * Sets tagNameRegex
    *
    * @param string|null $tagNameRegex **参数解释：** Tag名规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setTagNameRegex($tagNameRegex)
    {
        $this->container['tagNameRegex'] = $tagNameRegex;
        return $this;
    }

    /**
    * Gets forbiddenDeveloperCreateBranch
    *  **参数解释：** 是否禁止开发者创建分支。 **约束限制：** 不涉及。 **取值范围：** - true，禁止开发者创建分支。 - false，允许开发者创建分支。
    *
    * @return bool|null
    */
    public function getForbiddenDeveloperCreateBranch()
    {
        return $this->container['forbiddenDeveloperCreateBranch'];
    }

    /**
    * Sets forbiddenDeveloperCreateBranch
    *
    * @param bool|null $forbiddenDeveloperCreateBranch **参数解释：** 是否禁止开发者创建分支。 **约束限制：** 不涉及。 **取值范围：** - true，禁止开发者创建分支。 - false，允许开发者创建分支。
    *
    * @return $this
    */
    public function setForbiddenDeveloperCreateBranch($forbiddenDeveloperCreateBranch)
    {
        $this->container['forbiddenDeveloperCreateBranch'] = $forbiddenDeveloperCreateBranch;
        return $this;
    }

    /**
    * Gets createBranchWhitelistUsers
    *  **参数解释：** 开发人员创建分支权限白名单。
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\PushRuleDevelopersDto[]|null
    */
    public function getCreateBranchWhitelistUsers()
    {
        return $this->container['createBranchWhitelistUsers'];
    }

    /**
    * Sets createBranchWhitelistUsers
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\PushRuleDevelopersDto[]|null $createBranchWhitelistUsers **参数解释：** 开发人员创建分支权限白名单。
    *
    * @return $this
    */
    public function setCreateBranchWhitelistUsers($createBranchWhitelistUsers)
    {
        $this->container['createBranchWhitelistUsers'] = $createBranchWhitelistUsers;
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

