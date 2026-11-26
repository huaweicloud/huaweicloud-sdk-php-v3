<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAssetReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAssetReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetName  **参数解释**：资产名称。 **约束限制**：1-128位字符，只包含中文、字母、数字、中划线、下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetDesc  **参数解释**：资产描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetGroupDesc  **参数解释**：资产组描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSeries  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：1-40位字符，仅支持英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCapabilities  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,AgenticRL,Other。 **约束限制**：每个元素1-40位字符，仅支持英文字母、数字、下划线和中划线；最多10个元素。
    * status  **参数解释**：数据集资产的上下线状态。 **约束限制**：不涉及。 **取值范围**：枚举值： - online：上线 - offline：下线 - waiting: 等待中 **默认取值**：不涉及。
    * enabled  **参数解释**：资产是否可用。 **约束限制**：不涉及。 **取值范围**： - true：可用 - false：不可用 **默认取值**：不涉及。
    * isDeleted  **参数解释**：数据集资产是否被软删除。 **约束限制**：不涉及。 **取值范围**： - true：已删除 - false：未删除 **默认取值**：不涉及。
    * tags  **参数解释**：资产tag。 **约束限制**：不涉及。
    * properties  properties
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetName' => 'string',
            'assetDesc' => 'string',
            'assetGroupDesc' => 'string',
            'assetSeries' => 'string',
            'assetCapabilities' => 'string[]',
            'status' => 'string',
            'enabled' => 'bool',
            'isDeleted' => 'bool',
            'tags' => 'map[string,string[]]',
            'properties' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Properties'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetName  **参数解释**：资产名称。 **约束限制**：1-128位字符，只包含中文、字母、数字、中划线、下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetDesc  **参数解释**：资产描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetGroupDesc  **参数解释**：资产组描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSeries  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：1-40位字符，仅支持英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCapabilities  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,AgenticRL,Other。 **约束限制**：每个元素1-40位字符，仅支持英文字母、数字、下划线和中划线；最多10个元素。
    * status  **参数解释**：数据集资产的上下线状态。 **约束限制**：不涉及。 **取值范围**：枚举值： - online：上线 - offline：下线 - waiting: 等待中 **默认取值**：不涉及。
    * enabled  **参数解释**：资产是否可用。 **约束限制**：不涉及。 **取值范围**： - true：可用 - false：不可用 **默认取值**：不涉及。
    * isDeleted  **参数解释**：数据集资产是否被软删除。 **约束限制**：不涉及。 **取值范围**： - true：已删除 - false：未删除 **默认取值**：不涉及。
    * tags  **参数解释**：资产tag。 **约束限制**：不涉及。
    * properties  properties
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetName' => null,
        'assetDesc' => null,
        'assetGroupDesc' => null,
        'assetSeries' => null,
        'assetCapabilities' => null,
        'status' => null,
        'enabled' => null,
        'isDeleted' => null,
        'tags' => null,
        'properties' => null
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
    * assetName  **参数解释**：资产名称。 **约束限制**：1-128位字符，只包含中文、字母、数字、中划线、下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetDesc  **参数解释**：资产描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetGroupDesc  **参数解释**：资产组描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSeries  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：1-40位字符，仅支持英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCapabilities  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,AgenticRL,Other。 **约束限制**：每个元素1-40位字符，仅支持英文字母、数字、下划线和中划线；最多10个元素。
    * status  **参数解释**：数据集资产的上下线状态。 **约束限制**：不涉及。 **取值范围**：枚举值： - online：上线 - offline：下线 - waiting: 等待中 **默认取值**：不涉及。
    * enabled  **参数解释**：资产是否可用。 **约束限制**：不涉及。 **取值范围**： - true：可用 - false：不可用 **默认取值**：不涉及。
    * isDeleted  **参数解释**：数据集资产是否被软删除。 **约束限制**：不涉及。 **取值范围**： - true：已删除 - false：未删除 **默认取值**：不涉及。
    * tags  **参数解释**：资产tag。 **约束限制**：不涉及。
    * properties  properties
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetName' => 'asset_name',
            'assetDesc' => 'asset_desc',
            'assetGroupDesc' => 'asset_group_desc',
            'assetSeries' => 'asset_series',
            'assetCapabilities' => 'asset_capabilities',
            'status' => 'status',
            'enabled' => 'enabled',
            'isDeleted' => 'is_deleted',
            'tags' => 'tags',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetName  **参数解释**：资产名称。 **约束限制**：1-128位字符，只包含中文、字母、数字、中划线、下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetDesc  **参数解释**：资产描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetGroupDesc  **参数解释**：资产组描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSeries  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：1-40位字符，仅支持英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCapabilities  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,AgenticRL,Other。 **约束限制**：每个元素1-40位字符，仅支持英文字母、数字、下划线和中划线；最多10个元素。
    * status  **参数解释**：数据集资产的上下线状态。 **约束限制**：不涉及。 **取值范围**：枚举值： - online：上线 - offline：下线 - waiting: 等待中 **默认取值**：不涉及。
    * enabled  **参数解释**：资产是否可用。 **约束限制**：不涉及。 **取值范围**： - true：可用 - false：不可用 **默认取值**：不涉及。
    * isDeleted  **参数解释**：数据集资产是否被软删除。 **约束限制**：不涉及。 **取值范围**： - true：已删除 - false：未删除 **默认取值**：不涉及。
    * tags  **参数解释**：资产tag。 **约束限制**：不涉及。
    * properties  properties
    *
    * @var string[]
    */
    protected static $setters = [
            'assetName' => 'setAssetName',
            'assetDesc' => 'setAssetDesc',
            'assetGroupDesc' => 'setAssetGroupDesc',
            'assetSeries' => 'setAssetSeries',
            'assetCapabilities' => 'setAssetCapabilities',
            'status' => 'setStatus',
            'enabled' => 'setEnabled',
            'isDeleted' => 'setIsDeleted',
            'tags' => 'setTags',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetName  **参数解释**：资产名称。 **约束限制**：1-128位字符，只包含中文、字母、数字、中划线、下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetDesc  **参数解释**：资产描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetGroupDesc  **参数解释**：资产组描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSeries  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：1-40位字符，仅支持英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCapabilities  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,AgenticRL,Other。 **约束限制**：每个元素1-40位字符，仅支持英文字母、数字、下划线和中划线；最多10个元素。
    * status  **参数解释**：数据集资产的上下线状态。 **约束限制**：不涉及。 **取值范围**：枚举值： - online：上线 - offline：下线 - waiting: 等待中 **默认取值**：不涉及。
    * enabled  **参数解释**：资产是否可用。 **约束限制**：不涉及。 **取值范围**： - true：可用 - false：不可用 **默认取值**：不涉及。
    * isDeleted  **参数解释**：数据集资产是否被软删除。 **约束限制**：不涉及。 **取值范围**： - true：已删除 - false：未删除 **默认取值**：不涉及。
    * tags  **参数解释**：资产tag。 **约束限制**：不涉及。
    * properties  properties
    *
    * @var string[]
    */
    protected static $getters = [
            'assetName' => 'getAssetName',
            'assetDesc' => 'getAssetDesc',
            'assetGroupDesc' => 'getAssetGroupDesc',
            'assetSeries' => 'getAssetSeries',
            'assetCapabilities' => 'getAssetCapabilities',
            'status' => 'getStatus',
            'enabled' => 'getEnabled',
            'isDeleted' => 'getIsDeleted',
            'tags' => 'getTags',
            'properties' => 'getProperties'
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
    const STATUS_ONLINE = 'online';
    const STATUS_OFFLINE = 'offline';
    const STATUS_WAITING = 'waiting';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ONLINE,
            self::STATUS_OFFLINE,
            self::STATUS_WAITING,
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
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['assetDesc'] = isset($data['assetDesc']) ? $data['assetDesc'] : null;
        $this->container['assetGroupDesc'] = isset($data['assetGroupDesc']) ? $data['assetGroupDesc'] : null;
        $this->container['assetSeries'] = isset($data['assetSeries']) ? $data['assetSeries'] : null;
        $this->container['assetCapabilities'] = isset($data['assetCapabilities']) ? $data['assetCapabilities'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetName']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_-]+$/", $this->container['assetName'])) {
                $invalidProperties[] = "invalid value for 'assetName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_-]+$/.";
            }
            if (!is_null($this->container['assetDesc']) && (mb_strlen($this->container['assetDesc']) > 512)) {
                $invalidProperties[] = "invalid value for 'assetDesc', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['assetDesc']) && (mb_strlen($this->container['assetDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetDesc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetDesc']) && !preg_match("/^[^<>]*$/", $this->container['assetDesc'])) {
                $invalidProperties[] = "invalid value for 'assetDesc', must be conform to the pattern /^[^<>]*$/.";
            }
            if (!is_null($this->container['assetGroupDesc']) && (mb_strlen($this->container['assetGroupDesc']) > 512)) {
                $invalidProperties[] = "invalid value for 'assetGroupDesc', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['assetGroupDesc']) && !preg_match("/^[^<>]*$/", $this->container['assetGroupDesc'])) {
                $invalidProperties[] = "invalid value for 'assetGroupDesc', must be conform to the pattern /^[^<>]*$/.";
            }
            if (!is_null($this->container['assetSeries']) && !preg_match("/^[a-zA-Z0-9-_]{1,40}$/", $this->container['assetSeries'])) {
                $invalidProperties[] = "invalid value for 'assetSeries', must be conform to the pattern /^[a-zA-Z0-9-_]{1,40}$/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets assetName
    *  **参数解释**：资产名称。 **约束限制**：1-128位字符，只包含中文、字母、数字、中划线、下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAssetName()
    {
        return $this->container['assetName'];
    }

    /**
    * Sets assetName
    *
    * @param string|null $assetName **参数解释**：资产名称。 **约束限制**：1-128位字符，只包含中文、字母、数字、中划线、下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetName($assetName)
    {
        $this->container['assetName'] = $assetName;
        return $this;
    }

    /**
    * Gets assetDesc
    *  **参数解释**：资产描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAssetDesc()
    {
        return $this->container['assetDesc'];
    }

    /**
    * Sets assetDesc
    *
    * @param string|null $assetDesc **参数解释**：资产描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetDesc($assetDesc)
    {
        $this->container['assetDesc'] = $assetDesc;
        return $this;
    }

    /**
    * Gets assetGroupDesc
    *  **参数解释**：资产组描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAssetGroupDesc()
    {
        return $this->container['assetGroupDesc'];
    }

    /**
    * Sets assetGroupDesc
    *
    * @param string|null $assetGroupDesc **参数解释**：资产组描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetGroupDesc($assetGroupDesc)
    {
        $this->container['assetGroupDesc'] = $assetGroupDesc;
        return $this;
    }

    /**
    * Gets assetSeries
    *  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：1-40位字符，仅支持英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAssetSeries()
    {
        return $this->container['assetSeries'];
    }

    /**
    * Sets assetSeries
    *
    * @param string|null $assetSeries **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：1-40位字符，仅支持英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetSeries($assetSeries)
    {
        $this->container['assetSeries'] = $assetSeries;
        return $this;
    }

    /**
    * Gets assetCapabilities
    *  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,AgenticRL,Other。 **约束限制**：每个元素1-40位字符，仅支持英文字母、数字、下划线和中划线；最多10个元素。
    *
    * @return string[]|null
    */
    public function getAssetCapabilities()
    {
        return $this->container['assetCapabilities'];
    }

    /**
    * Sets assetCapabilities
    *
    * @param string[]|null $assetCapabilities **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,AgenticRL,Other。 **约束限制**：每个元素1-40位字符，仅支持英文字母、数字、下划线和中划线；最多10个元素。
    *
    * @return $this
    */
    public function setAssetCapabilities($assetCapabilities)
    {
        $this->container['assetCapabilities'] = $assetCapabilities;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：数据集资产的上下线状态。 **约束限制**：不涉及。 **取值范围**：枚举值： - online：上线 - offline：下线 - waiting: 等待中 **默认取值**：不涉及。
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
    * @param string|null $status **参数解释**：数据集资产的上下线状态。 **约束限制**：不涉及。 **取值范围**：枚举值： - online：上线 - offline：下线 - waiting: 等待中 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets enabled
    *  **参数解释**：资产是否可用。 **约束限制**：不涉及。 **取值范围**： - true：可用 - false：不可用 **默认取值**：不涉及。
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled **参数解释**：资产是否可用。 **约束限制**：不涉及。 **取值范围**： - true：可用 - false：不可用 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets isDeleted
    *  **参数解释**：数据集资产是否被软删除。 **约束限制**：不涉及。 **取值范围**： - true：已删除 - false：未删除 **默认取值**：不涉及。
    *
    * @return bool|null
    */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
    * Sets isDeleted
    *
    * @param bool|null $isDeleted **参数解释**：数据集资产是否被软删除。 **约束限制**：不涉及。 **取值范围**： - true：已删除 - false：未删除 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**：资产tag。 **约束限制**：不涉及。
    *
    * @return map[string,string[]]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param map[string,string[]]|null $tags **参数解释**：资产tag。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets properties
    *  properties
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Properties|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Properties|null $properties properties
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
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

