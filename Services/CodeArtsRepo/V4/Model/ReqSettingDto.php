<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReqSettingDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReqSettingDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * active  **参数解释：** 是否开启集成CodeArts Req **取值范围：** true：开启集成CodeArts Req，false：未开启集成CodeArts Req。
    * branches  **参数解释：** 应用排除状态和可关联类别限制的分支列表，该分支指代合并请求的目标分支，可支持多个分支用英文逗号拼接或者正则表达式，在项目层级和代码组层级只支持配置正则表达式。
    * branchesType  **参数解释：** 分支的类型，文本或者正则表达式。 **取值范围：** plain代表文本，regex代表正则表达式。
    * projectType  **参数解释：** 关联的CodeArts Req项目类型。 **取值范围：** scrum代表scrum类型项目，ipd代表IPD类型项目, xboard为看板类型项目。
    * categories  **参数解释：** 可关联类型列表，逗号分隔。
    * categoryCodes  **参数解释：** 可关联类型编码列表，逗号分隔。
    * excludeStatuses  **参数解释：** 排除状态列表，逗号分隔。
    * excludeStatusCodes  **参数解释：** 排除状态编码列表，逗号分隔。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'active' => 'bool',
            'branches' => 'string',
            'branchesType' => 'string',
            'projectType' => 'string',
            'categories' => 'string',
            'categoryCodes' => 'string',
            'excludeStatuses' => 'string',
            'excludeStatusCodes' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * active  **参数解释：** 是否开启集成CodeArts Req **取值范围：** true：开启集成CodeArts Req，false：未开启集成CodeArts Req。
    * branches  **参数解释：** 应用排除状态和可关联类别限制的分支列表，该分支指代合并请求的目标分支，可支持多个分支用英文逗号拼接或者正则表达式，在项目层级和代码组层级只支持配置正则表达式。
    * branchesType  **参数解释：** 分支的类型，文本或者正则表达式。 **取值范围：** plain代表文本，regex代表正则表达式。
    * projectType  **参数解释：** 关联的CodeArts Req项目类型。 **取值范围：** scrum代表scrum类型项目，ipd代表IPD类型项目, xboard为看板类型项目。
    * categories  **参数解释：** 可关联类型列表，逗号分隔。
    * categoryCodes  **参数解释：** 可关联类型编码列表，逗号分隔。
    * excludeStatuses  **参数解释：** 排除状态列表，逗号分隔。
    * excludeStatusCodes  **参数解释：** 排除状态编码列表，逗号分隔。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'active' => null,
        'branches' => null,
        'branchesType' => null,
        'projectType' => null,
        'categories' => null,
        'categoryCodes' => null,
        'excludeStatuses' => null,
        'excludeStatusCodes' => null
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
    * active  **参数解释：** 是否开启集成CodeArts Req **取值范围：** true：开启集成CodeArts Req，false：未开启集成CodeArts Req。
    * branches  **参数解释：** 应用排除状态和可关联类别限制的分支列表，该分支指代合并请求的目标分支，可支持多个分支用英文逗号拼接或者正则表达式，在项目层级和代码组层级只支持配置正则表达式。
    * branchesType  **参数解释：** 分支的类型，文本或者正则表达式。 **取值范围：** plain代表文本，regex代表正则表达式。
    * projectType  **参数解释：** 关联的CodeArts Req项目类型。 **取值范围：** scrum代表scrum类型项目，ipd代表IPD类型项目, xboard为看板类型项目。
    * categories  **参数解释：** 可关联类型列表，逗号分隔。
    * categoryCodes  **参数解释：** 可关联类型编码列表，逗号分隔。
    * excludeStatuses  **参数解释：** 排除状态列表，逗号分隔。
    * excludeStatusCodes  **参数解释：** 排除状态编码列表，逗号分隔。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'active' => 'active',
            'branches' => 'branches',
            'branchesType' => 'branches_type',
            'projectType' => 'project_type',
            'categories' => 'categories',
            'categoryCodes' => 'category_codes',
            'excludeStatuses' => 'exclude_statuses',
            'excludeStatusCodes' => 'exclude_status_codes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * active  **参数解释：** 是否开启集成CodeArts Req **取值范围：** true：开启集成CodeArts Req，false：未开启集成CodeArts Req。
    * branches  **参数解释：** 应用排除状态和可关联类别限制的分支列表，该分支指代合并请求的目标分支，可支持多个分支用英文逗号拼接或者正则表达式，在项目层级和代码组层级只支持配置正则表达式。
    * branchesType  **参数解释：** 分支的类型，文本或者正则表达式。 **取值范围：** plain代表文本，regex代表正则表达式。
    * projectType  **参数解释：** 关联的CodeArts Req项目类型。 **取值范围：** scrum代表scrum类型项目，ipd代表IPD类型项目, xboard为看板类型项目。
    * categories  **参数解释：** 可关联类型列表，逗号分隔。
    * categoryCodes  **参数解释：** 可关联类型编码列表，逗号分隔。
    * excludeStatuses  **参数解释：** 排除状态列表，逗号分隔。
    * excludeStatusCodes  **参数解释：** 排除状态编码列表，逗号分隔。
    *
    * @var string[]
    */
    protected static $setters = [
            'active' => 'setActive',
            'branches' => 'setBranches',
            'branchesType' => 'setBranchesType',
            'projectType' => 'setProjectType',
            'categories' => 'setCategories',
            'categoryCodes' => 'setCategoryCodes',
            'excludeStatuses' => 'setExcludeStatuses',
            'excludeStatusCodes' => 'setExcludeStatusCodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * active  **参数解释：** 是否开启集成CodeArts Req **取值范围：** true：开启集成CodeArts Req，false：未开启集成CodeArts Req。
    * branches  **参数解释：** 应用排除状态和可关联类别限制的分支列表，该分支指代合并请求的目标分支，可支持多个分支用英文逗号拼接或者正则表达式，在项目层级和代码组层级只支持配置正则表达式。
    * branchesType  **参数解释：** 分支的类型，文本或者正则表达式。 **取值范围：** plain代表文本，regex代表正则表达式。
    * projectType  **参数解释：** 关联的CodeArts Req项目类型。 **取值范围：** scrum代表scrum类型项目，ipd代表IPD类型项目, xboard为看板类型项目。
    * categories  **参数解释：** 可关联类型列表，逗号分隔。
    * categoryCodes  **参数解释：** 可关联类型编码列表，逗号分隔。
    * excludeStatuses  **参数解释：** 排除状态列表，逗号分隔。
    * excludeStatusCodes  **参数解释：** 排除状态编码列表，逗号分隔。
    *
    * @var string[]
    */
    protected static $getters = [
            'active' => 'getActive',
            'branches' => 'getBranches',
            'branchesType' => 'getBranchesType',
            'projectType' => 'getProjectType',
            'categories' => 'getCategories',
            'categoryCodes' => 'getCategoryCodes',
            'excludeStatuses' => 'getExcludeStatuses',
            'excludeStatusCodes' => 'getExcludeStatusCodes'
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
    const BRANCHES_TYPE_PLAIN = 'plain';
    const BRANCHES_TYPE_REGEX = 'regex';
    const PROJECT_TYPE_SCRUM = 'scrum';
    const PROJECT_TYPE_IPD = 'ipd';
    const PROJECT_TYPE_XBOARD = 'xboard';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBranchesTypeAllowableValues()
    {
        return [
            self::BRANCHES_TYPE_PLAIN,
            self::BRANCHES_TYPE_REGEX,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProjectTypeAllowableValues()
    {
        return [
            self::PROJECT_TYPE_SCRUM,
            self::PROJECT_TYPE_IPD,
            self::PROJECT_TYPE_XBOARD,
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['branches'] = isset($data['branches']) ? $data['branches'] : null;
        $this->container['branchesType'] = isset($data['branchesType']) ? $data['branchesType'] : null;
        $this->container['projectType'] = isset($data['projectType']) ? $data['projectType'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['categoryCodes'] = isset($data['categoryCodes']) ? $data['categoryCodes'] : null;
        $this->container['excludeStatuses'] = isset($data['excludeStatuses']) ? $data['excludeStatuses'] : null;
        $this->container['excludeStatusCodes'] = isset($data['excludeStatusCodes']) ? $data['excludeStatusCodes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['branches']) && (mb_strlen($this->container['branches']) > 200)) {
                $invalidProperties[] = "invalid value for 'branches', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['branches']) && (mb_strlen($this->container['branches']) < 0)) {
                $invalidProperties[] = "invalid value for 'branches', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getBranchesTypeAllowableValues();
                if (!is_null($this->container['branchesType']) && !in_array($this->container['branchesType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'branchesType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getProjectTypeAllowableValues();
                if (!is_null($this->container['projectType']) && !in_array($this->container['projectType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'projectType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['categories']) && (mb_strlen($this->container['categories']) > 200)) {
                $invalidProperties[] = "invalid value for 'categories', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['categories']) && (mb_strlen($this->container['categories']) < 0)) {
                $invalidProperties[] = "invalid value for 'categories', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['categoryCodes']) && (mb_strlen($this->container['categoryCodes']) > 200)) {
                $invalidProperties[] = "invalid value for 'categoryCodes', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['categoryCodes']) && (mb_strlen($this->container['categoryCodes']) < 0)) {
                $invalidProperties[] = "invalid value for 'categoryCodes', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['excludeStatuses']) && (mb_strlen($this->container['excludeStatuses']) > 200)) {
                $invalidProperties[] = "invalid value for 'excludeStatuses', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['excludeStatuses']) && (mb_strlen($this->container['excludeStatuses']) < 0)) {
                $invalidProperties[] = "invalid value for 'excludeStatuses', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['excludeStatusCodes']) && (mb_strlen($this->container['excludeStatusCodes']) > 200)) {
                $invalidProperties[] = "invalid value for 'excludeStatusCodes', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['excludeStatusCodes']) && (mb_strlen($this->container['excludeStatusCodes']) < 0)) {
                $invalidProperties[] = "invalid value for 'excludeStatusCodes', the character length must be bigger than or equal to 0.";
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
    * Gets active
    *  **参数解释：** 是否开启集成CodeArts Req **取值范围：** true：开启集成CodeArts Req，false：未开启集成CodeArts Req。
    *
    * @return bool|null
    */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
    * Sets active
    *
    * @param bool|null $active **参数解释：** 是否开启集成CodeArts Req **取值范围：** true：开启集成CodeArts Req，false：未开启集成CodeArts Req。
    *
    * @return $this
    */
    public function setActive($active)
    {
        $this->container['active'] = $active;
        return $this;
    }

    /**
    * Gets branches
    *  **参数解释：** 应用排除状态和可关联类别限制的分支列表，该分支指代合并请求的目标分支，可支持多个分支用英文逗号拼接或者正则表达式，在项目层级和代码组层级只支持配置正则表达式。
    *
    * @return string|null
    */
    public function getBranches()
    {
        return $this->container['branches'];
    }

    /**
    * Sets branches
    *
    * @param string|null $branches **参数解释：** 应用排除状态和可关联类别限制的分支列表，该分支指代合并请求的目标分支，可支持多个分支用英文逗号拼接或者正则表达式，在项目层级和代码组层级只支持配置正则表达式。
    *
    * @return $this
    */
    public function setBranches($branches)
    {
        $this->container['branches'] = $branches;
        return $this;
    }

    /**
    * Gets branchesType
    *  **参数解释：** 分支的类型，文本或者正则表达式。 **取值范围：** plain代表文本，regex代表正则表达式。
    *
    * @return string|null
    */
    public function getBranchesType()
    {
        return $this->container['branchesType'];
    }

    /**
    * Sets branchesType
    *
    * @param string|null $branchesType **参数解释：** 分支的类型，文本或者正则表达式。 **取值范围：** plain代表文本，regex代表正则表达式。
    *
    * @return $this
    */
    public function setBranchesType($branchesType)
    {
        $this->container['branchesType'] = $branchesType;
        return $this;
    }

    /**
    * Gets projectType
    *  **参数解释：** 关联的CodeArts Req项目类型。 **取值范围：** scrum代表scrum类型项目，ipd代表IPD类型项目, xboard为看板类型项目。
    *
    * @return string|null
    */
    public function getProjectType()
    {
        return $this->container['projectType'];
    }

    /**
    * Sets projectType
    *
    * @param string|null $projectType **参数解释：** 关联的CodeArts Req项目类型。 **取值范围：** scrum代表scrum类型项目，ipd代表IPD类型项目, xboard为看板类型项目。
    *
    * @return $this
    */
    public function setProjectType($projectType)
    {
        $this->container['projectType'] = $projectType;
        return $this;
    }

    /**
    * Gets categories
    *  **参数解释：** 可关联类型列表，逗号分隔。
    *
    * @return string|null
    */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
    * Sets categories
    *
    * @param string|null $categories **参数解释：** 可关联类型列表，逗号分隔。
    *
    * @return $this
    */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;
        return $this;
    }

    /**
    * Gets categoryCodes
    *  **参数解释：** 可关联类型编码列表，逗号分隔。
    *
    * @return string|null
    */
    public function getCategoryCodes()
    {
        return $this->container['categoryCodes'];
    }

    /**
    * Sets categoryCodes
    *
    * @param string|null $categoryCodes **参数解释：** 可关联类型编码列表，逗号分隔。
    *
    * @return $this
    */
    public function setCategoryCodes($categoryCodes)
    {
        $this->container['categoryCodes'] = $categoryCodes;
        return $this;
    }

    /**
    * Gets excludeStatuses
    *  **参数解释：** 排除状态列表，逗号分隔。
    *
    * @return string|null
    */
    public function getExcludeStatuses()
    {
        return $this->container['excludeStatuses'];
    }

    /**
    * Sets excludeStatuses
    *
    * @param string|null $excludeStatuses **参数解释：** 排除状态列表，逗号分隔。
    *
    * @return $this
    */
    public function setExcludeStatuses($excludeStatuses)
    {
        $this->container['excludeStatuses'] = $excludeStatuses;
        return $this;
    }

    /**
    * Gets excludeStatusCodes
    *  **参数解释：** 排除状态编码列表，逗号分隔。
    *
    * @return string|null
    */
    public function getExcludeStatusCodes()
    {
        return $this->container['excludeStatusCodes'];
    }

    /**
    * Sets excludeStatusCodes
    *
    * @param string|null $excludeStatusCodes **参数解释：** 排除状态编码列表，逗号分隔。
    *
    * @return $this
    */
    public function setExcludeStatusCodes($excludeStatusCodes)
    {
        $this->container['excludeStatusCodes'] = $excludeStatusCodes;
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

