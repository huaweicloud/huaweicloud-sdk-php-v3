<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGroupGeneralPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGroupGeneralPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * disableFork  **参数解释：** 是否禁用fork。
    * forbiddenDeveloperCreateBranch  **参数解释：** 是否禁止开发者创建分支。
    * forbiddenDeveloperCreateTag  **参数解释：** 是否禁用开发者创建tag。
    * forbiddenCommitterCreateBranch  **参数解释：** 禁止开发者创建标签。
    * branchNameRegex  **参数解释：** 分支名称正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tagNameRegex  **参数解释：** 标签名正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * generatePreMergeRef  **参数解释：** 生成合并请求预合并。
    * forbiddenGitlabAccess  **参数解释：** 是否禁止repo访问。
    * rebaseDisableTriggerWebhook  **参数解释：** MR rebase是否禁止触发webhook事件。
    * openGpgVerified  **参数解释：** 是否开启gpg公钥验证。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'disableFork' => 'bool',
            'forbiddenDeveloperCreateBranch' => 'bool',
            'forbiddenDeveloperCreateTag' => 'bool',
            'forbiddenCommitterCreateBranch' => 'bool',
            'branchNameRegex' => 'string',
            'tagNameRegex' => 'string',
            'generatePreMergeRef' => 'bool',
            'forbiddenGitlabAccess' => 'bool',
            'rebaseDisableTriggerWebhook' => 'bool',
            'openGpgVerified' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * disableFork  **参数解释：** 是否禁用fork。
    * forbiddenDeveloperCreateBranch  **参数解释：** 是否禁止开发者创建分支。
    * forbiddenDeveloperCreateTag  **参数解释：** 是否禁用开发者创建tag。
    * forbiddenCommitterCreateBranch  **参数解释：** 禁止开发者创建标签。
    * branchNameRegex  **参数解释：** 分支名称正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tagNameRegex  **参数解释：** 标签名正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * generatePreMergeRef  **参数解释：** 生成合并请求预合并。
    * forbiddenGitlabAccess  **参数解释：** 是否禁止repo访问。
    * rebaseDisableTriggerWebhook  **参数解释：** MR rebase是否禁止触发webhook事件。
    * openGpgVerified  **参数解释：** 是否开启gpg公钥验证。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'disableFork' => null,
        'forbiddenDeveloperCreateBranch' => null,
        'forbiddenDeveloperCreateTag' => null,
        'forbiddenCommitterCreateBranch' => null,
        'branchNameRegex' => null,
        'tagNameRegex' => null,
        'generatePreMergeRef' => null,
        'forbiddenGitlabAccess' => null,
        'rebaseDisableTriggerWebhook' => null,
        'openGpgVerified' => null
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
    * disableFork  **参数解释：** 是否禁用fork。
    * forbiddenDeveloperCreateBranch  **参数解释：** 是否禁止开发者创建分支。
    * forbiddenDeveloperCreateTag  **参数解释：** 是否禁用开发者创建tag。
    * forbiddenCommitterCreateBranch  **参数解释：** 禁止开发者创建标签。
    * branchNameRegex  **参数解释：** 分支名称正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tagNameRegex  **参数解释：** 标签名正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * generatePreMergeRef  **参数解释：** 生成合并请求预合并。
    * forbiddenGitlabAccess  **参数解释：** 是否禁止repo访问。
    * rebaseDisableTriggerWebhook  **参数解释：** MR rebase是否禁止触发webhook事件。
    * openGpgVerified  **参数解释：** 是否开启gpg公钥验证。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'disableFork' => 'disable_fork',
            'forbiddenDeveloperCreateBranch' => 'forbidden_developer_create_branch',
            'forbiddenDeveloperCreateTag' => 'forbidden_developer_create_tag',
            'forbiddenCommitterCreateBranch' => 'forbidden_committer_create_branch',
            'branchNameRegex' => 'branch_name_regex',
            'tagNameRegex' => 'tag_name_regex',
            'generatePreMergeRef' => 'generate_pre_merge_ref',
            'forbiddenGitlabAccess' => 'forbidden_gitlab_access',
            'rebaseDisableTriggerWebhook' => 'rebase_disable_trigger_webhook',
            'openGpgVerified' => 'open_gpg_verified'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * disableFork  **参数解释：** 是否禁用fork。
    * forbiddenDeveloperCreateBranch  **参数解释：** 是否禁止开发者创建分支。
    * forbiddenDeveloperCreateTag  **参数解释：** 是否禁用开发者创建tag。
    * forbiddenCommitterCreateBranch  **参数解释：** 禁止开发者创建标签。
    * branchNameRegex  **参数解释：** 分支名称正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tagNameRegex  **参数解释：** 标签名正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * generatePreMergeRef  **参数解释：** 生成合并请求预合并。
    * forbiddenGitlabAccess  **参数解释：** 是否禁止repo访问。
    * rebaseDisableTriggerWebhook  **参数解释：** MR rebase是否禁止触发webhook事件。
    * openGpgVerified  **参数解释：** 是否开启gpg公钥验证。
    *
    * @var string[]
    */
    protected static $setters = [
            'disableFork' => 'setDisableFork',
            'forbiddenDeveloperCreateBranch' => 'setForbiddenDeveloperCreateBranch',
            'forbiddenDeveloperCreateTag' => 'setForbiddenDeveloperCreateTag',
            'forbiddenCommitterCreateBranch' => 'setForbiddenCommitterCreateBranch',
            'branchNameRegex' => 'setBranchNameRegex',
            'tagNameRegex' => 'setTagNameRegex',
            'generatePreMergeRef' => 'setGeneratePreMergeRef',
            'forbiddenGitlabAccess' => 'setForbiddenGitlabAccess',
            'rebaseDisableTriggerWebhook' => 'setRebaseDisableTriggerWebhook',
            'openGpgVerified' => 'setOpenGpgVerified'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * disableFork  **参数解释：** 是否禁用fork。
    * forbiddenDeveloperCreateBranch  **参数解释：** 是否禁止开发者创建分支。
    * forbiddenDeveloperCreateTag  **参数解释：** 是否禁用开发者创建tag。
    * forbiddenCommitterCreateBranch  **参数解释：** 禁止开发者创建标签。
    * branchNameRegex  **参数解释：** 分支名称正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tagNameRegex  **参数解释：** 标签名正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * generatePreMergeRef  **参数解释：** 生成合并请求预合并。
    * forbiddenGitlabAccess  **参数解释：** 是否禁止repo访问。
    * rebaseDisableTriggerWebhook  **参数解释：** MR rebase是否禁止触发webhook事件。
    * openGpgVerified  **参数解释：** 是否开启gpg公钥验证。
    *
    * @var string[]
    */
    protected static $getters = [
            'disableFork' => 'getDisableFork',
            'forbiddenDeveloperCreateBranch' => 'getForbiddenDeveloperCreateBranch',
            'forbiddenDeveloperCreateTag' => 'getForbiddenDeveloperCreateTag',
            'forbiddenCommitterCreateBranch' => 'getForbiddenCommitterCreateBranch',
            'branchNameRegex' => 'getBranchNameRegex',
            'tagNameRegex' => 'getTagNameRegex',
            'generatePreMergeRef' => 'getGeneratePreMergeRef',
            'forbiddenGitlabAccess' => 'getForbiddenGitlabAccess',
            'rebaseDisableTriggerWebhook' => 'getRebaseDisableTriggerWebhook',
            'openGpgVerified' => 'getOpenGpgVerified'
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
        $this->container['forbiddenDeveloperCreateBranch'] = isset($data['forbiddenDeveloperCreateBranch']) ? $data['forbiddenDeveloperCreateBranch'] : null;
        $this->container['forbiddenDeveloperCreateTag'] = isset($data['forbiddenDeveloperCreateTag']) ? $data['forbiddenDeveloperCreateTag'] : null;
        $this->container['forbiddenCommitterCreateBranch'] = isset($data['forbiddenCommitterCreateBranch']) ? $data['forbiddenCommitterCreateBranch'] : null;
        $this->container['branchNameRegex'] = isset($data['branchNameRegex']) ? $data['branchNameRegex'] : null;
        $this->container['tagNameRegex'] = isset($data['tagNameRegex']) ? $data['tagNameRegex'] : null;
        $this->container['generatePreMergeRef'] = isset($data['generatePreMergeRef']) ? $data['generatePreMergeRef'] : null;
        $this->container['forbiddenGitlabAccess'] = isset($data['forbiddenGitlabAccess']) ? $data['forbiddenGitlabAccess'] : null;
        $this->container['rebaseDisableTriggerWebhook'] = isset($data['rebaseDisableTriggerWebhook']) ? $data['rebaseDisableTriggerWebhook'] : null;
        $this->container['openGpgVerified'] = isset($data['openGpgVerified']) ? $data['openGpgVerified'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['branchNameRegex']) && (mb_strlen($this->container['branchNameRegex']) > 1000)) {
                $invalidProperties[] = "invalid value for 'branchNameRegex', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['branchNameRegex']) && (mb_strlen($this->container['branchNameRegex']) < 1)) {
                $invalidProperties[] = "invalid value for 'branchNameRegex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tagNameRegex']) && (mb_strlen($this->container['tagNameRegex']) > 1000)) {
                $invalidProperties[] = "invalid value for 'tagNameRegex', the character length must be smaller than or equal to 1000.";
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
    *  **参数解释：** 是否禁用fork。
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
    * @param bool|null $disableFork **参数解释：** 是否禁用fork。
    *
    * @return $this
    */
    public function setDisableFork($disableFork)
    {
        $this->container['disableFork'] = $disableFork;
        return $this;
    }

    /**
    * Gets forbiddenDeveloperCreateBranch
    *  **参数解释：** 是否禁止开发者创建分支。
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
    * @param bool|null $forbiddenDeveloperCreateBranch **参数解释：** 是否禁止开发者创建分支。
    *
    * @return $this
    */
    public function setForbiddenDeveloperCreateBranch($forbiddenDeveloperCreateBranch)
    {
        $this->container['forbiddenDeveloperCreateBranch'] = $forbiddenDeveloperCreateBranch;
        return $this;
    }

    /**
    * Gets forbiddenDeveloperCreateTag
    *  **参数解释：** 是否禁用开发者创建tag。
    *
    * @return bool|null
    */
    public function getForbiddenDeveloperCreateTag()
    {
        return $this->container['forbiddenDeveloperCreateTag'];
    }

    /**
    * Sets forbiddenDeveloperCreateTag
    *
    * @param bool|null $forbiddenDeveloperCreateTag **参数解释：** 是否禁用开发者创建tag。
    *
    * @return $this
    */
    public function setForbiddenDeveloperCreateTag($forbiddenDeveloperCreateTag)
    {
        $this->container['forbiddenDeveloperCreateTag'] = $forbiddenDeveloperCreateTag;
        return $this;
    }

    /**
    * Gets forbiddenCommitterCreateBranch
    *  **参数解释：** 禁止开发者创建标签。
    *
    * @return bool|null
    */
    public function getForbiddenCommitterCreateBranch()
    {
        return $this->container['forbiddenCommitterCreateBranch'];
    }

    /**
    * Sets forbiddenCommitterCreateBranch
    *
    * @param bool|null $forbiddenCommitterCreateBranch **参数解释：** 禁止开发者创建标签。
    *
    * @return $this
    */
    public function setForbiddenCommitterCreateBranch($forbiddenCommitterCreateBranch)
    {
        $this->container['forbiddenCommitterCreateBranch'] = $forbiddenCommitterCreateBranch;
        return $this;
    }

    /**
    * Gets branchNameRegex
    *  **参数解释：** 分支名称正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $branchNameRegex **参数解释：** 分支名称正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    *  **参数解释：** 标签名正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $tagNameRegex **参数解释：** 标签名正则表达式。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setTagNameRegex($tagNameRegex)
    {
        $this->container['tagNameRegex'] = $tagNameRegex;
        return $this;
    }

    /**
    * Gets generatePreMergeRef
    *  **参数解释：** 生成合并请求预合并。
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
    * @param bool|null $generatePreMergeRef **参数解释：** 生成合并请求预合并。
    *
    * @return $this
    */
    public function setGeneratePreMergeRef($generatePreMergeRef)
    {
        $this->container['generatePreMergeRef'] = $generatePreMergeRef;
        return $this;
    }

    /**
    * Gets forbiddenGitlabAccess
    *  **参数解释：** 是否禁止repo访问。
    *
    * @return bool|null
    */
    public function getForbiddenGitlabAccess()
    {
        return $this->container['forbiddenGitlabAccess'];
    }

    /**
    * Sets forbiddenGitlabAccess
    *
    * @param bool|null $forbiddenGitlabAccess **参数解释：** 是否禁止repo访问。
    *
    * @return $this
    */
    public function setForbiddenGitlabAccess($forbiddenGitlabAccess)
    {
        $this->container['forbiddenGitlabAccess'] = $forbiddenGitlabAccess;
        return $this;
    }

    /**
    * Gets rebaseDisableTriggerWebhook
    *  **参数解释：** MR rebase是否禁止触发webhook事件。
    *
    * @return bool|null
    */
    public function getRebaseDisableTriggerWebhook()
    {
        return $this->container['rebaseDisableTriggerWebhook'];
    }

    /**
    * Sets rebaseDisableTriggerWebhook
    *
    * @param bool|null $rebaseDisableTriggerWebhook **参数解释：** MR rebase是否禁止触发webhook事件。
    *
    * @return $this
    */
    public function setRebaseDisableTriggerWebhook($rebaseDisableTriggerWebhook)
    {
        $this->container['rebaseDisableTriggerWebhook'] = $rebaseDisableTriggerWebhook;
        return $this;
    }

    /**
    * Gets openGpgVerified
    *  **参数解释：** 是否开启gpg公钥验证。
    *
    * @return bool|null
    */
    public function getOpenGpgVerified()
    {
        return $this->container['openGpgVerified'];
    }

    /**
    * Sets openGpgVerified
    *
    * @param bool|null $openGpgVerified **参数解释：** 是否开启gpg公钥验证。
    *
    * @return $this
    */
    public function setOpenGpgVerified($openGpgVerified)
    {
        $this->container['openGpgVerified'] = $openGpgVerified;
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

