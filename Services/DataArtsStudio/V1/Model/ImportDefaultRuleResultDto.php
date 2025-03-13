<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportDefaultRuleResultDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportDefaultRuleResultDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * importStatus  导入状态 * success 导入成功 * failed 导入失败
    * importErrorMessage  导入错误原因。
    * uuid  内置规则模板id。
    * importDataClassificationRule  importDataClassificationRule
    * ruleName  数据识别规则名称。
    * ruleType  数据识别规则类型 * REGEX 正则表达式 * KEYWORD 关键字
    * ruleDesc  规则描述。
    * ruleNameEn  英文名称。
    * ruleDescEn  英文描述。
    * country  规则所属地区。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'importStatus' => 'string',
            'importErrorMessage' => 'string',
            'uuid' => 'string',
            'importDataClassificationRule' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportDataClassificationRuleDto',
            'ruleName' => 'string',
            'ruleType' => 'string',
            'ruleDesc' => 'string',
            'ruleNameEn' => 'string',
            'ruleDescEn' => 'string',
            'country' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * importStatus  导入状态 * success 导入成功 * failed 导入失败
    * importErrorMessage  导入错误原因。
    * uuid  内置规则模板id。
    * importDataClassificationRule  importDataClassificationRule
    * ruleName  数据识别规则名称。
    * ruleType  数据识别规则类型 * REGEX 正则表达式 * KEYWORD 关键字
    * ruleDesc  规则描述。
    * ruleNameEn  英文名称。
    * ruleDescEn  英文描述。
    * country  规则所属地区。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'importStatus' => null,
        'importErrorMessage' => null,
        'uuid' => null,
        'importDataClassificationRule' => null,
        'ruleName' => null,
        'ruleType' => null,
        'ruleDesc' => null,
        'ruleNameEn' => null,
        'ruleDescEn' => null,
        'country' => null
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
    * importStatus  导入状态 * success 导入成功 * failed 导入失败
    * importErrorMessage  导入错误原因。
    * uuid  内置规则模板id。
    * importDataClassificationRule  importDataClassificationRule
    * ruleName  数据识别规则名称。
    * ruleType  数据识别规则类型 * REGEX 正则表达式 * KEYWORD 关键字
    * ruleDesc  规则描述。
    * ruleNameEn  英文名称。
    * ruleDescEn  英文描述。
    * country  规则所属地区。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'importStatus' => 'import_status',
            'importErrorMessage' => 'import_error_message',
            'uuid' => 'uuid',
            'importDataClassificationRule' => 'import_data_classification_rule',
            'ruleName' => 'rule_name',
            'ruleType' => 'rule_type',
            'ruleDesc' => 'rule_desc',
            'ruleNameEn' => 'rule_name_en',
            'ruleDescEn' => 'rule_desc_en',
            'country' => 'country'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * importStatus  导入状态 * success 导入成功 * failed 导入失败
    * importErrorMessage  导入错误原因。
    * uuid  内置规则模板id。
    * importDataClassificationRule  importDataClassificationRule
    * ruleName  数据识别规则名称。
    * ruleType  数据识别规则类型 * REGEX 正则表达式 * KEYWORD 关键字
    * ruleDesc  规则描述。
    * ruleNameEn  英文名称。
    * ruleDescEn  英文描述。
    * country  规则所属地区。
    *
    * @var string[]
    */
    protected static $setters = [
            'importStatus' => 'setImportStatus',
            'importErrorMessage' => 'setImportErrorMessage',
            'uuid' => 'setUuid',
            'importDataClassificationRule' => 'setImportDataClassificationRule',
            'ruleName' => 'setRuleName',
            'ruleType' => 'setRuleType',
            'ruleDesc' => 'setRuleDesc',
            'ruleNameEn' => 'setRuleNameEn',
            'ruleDescEn' => 'setRuleDescEn',
            'country' => 'setCountry'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * importStatus  导入状态 * success 导入成功 * failed 导入失败
    * importErrorMessage  导入错误原因。
    * uuid  内置规则模板id。
    * importDataClassificationRule  importDataClassificationRule
    * ruleName  数据识别规则名称。
    * ruleType  数据识别规则类型 * REGEX 正则表达式 * KEYWORD 关键字
    * ruleDesc  规则描述。
    * ruleNameEn  英文名称。
    * ruleDescEn  英文描述。
    * country  规则所属地区。
    *
    * @var string[]
    */
    protected static $getters = [
            'importStatus' => 'getImportStatus',
            'importErrorMessage' => 'getImportErrorMessage',
            'uuid' => 'getUuid',
            'importDataClassificationRule' => 'getImportDataClassificationRule',
            'ruleName' => 'getRuleName',
            'ruleType' => 'getRuleType',
            'ruleDesc' => 'getRuleDesc',
            'ruleNameEn' => 'getRuleNameEn',
            'ruleDescEn' => 'getRuleDescEn',
            'country' => 'getCountry'
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
    const IMPORT_STATUS_SUCCESS = 'success';
    const IMPORT_STATUS_FAILED = 'failed';
    const RULE_TYPE_REGEX = 'REGEX';
    const RULE_TYPE_KEYWORD = 'KEYWORD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getImportStatusAllowableValues()
    {
        return [
            self::IMPORT_STATUS_SUCCESS,
            self::IMPORT_STATUS_FAILED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRuleTypeAllowableValues()
    {
        return [
            self::RULE_TYPE_REGEX,
            self::RULE_TYPE_KEYWORD,
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
        $this->container['importStatus'] = isset($data['importStatus']) ? $data['importStatus'] : null;
        $this->container['importErrorMessage'] = isset($data['importErrorMessage']) ? $data['importErrorMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['importDataClassificationRule'] = isset($data['importDataClassificationRule']) ? $data['importDataClassificationRule'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['ruleDesc'] = isset($data['ruleDesc']) ? $data['ruleDesc'] : null;
        $this->container['ruleNameEn'] = isset($data['ruleNameEn']) ? $data['ruleNameEn'] : null;
        $this->container['ruleDescEn'] = isset($data['ruleDescEn']) ? $data['ruleDescEn'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getImportStatusAllowableValues();
                if (!is_null($this->container['importStatus']) && !in_array($this->container['importStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'importStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['importErrorMessage']) && (mb_strlen($this->container['importErrorMessage']) > 4096)) {
                $invalidProperties[] = "invalid value for 'importErrorMessage', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['importErrorMessage']) && (mb_strlen($this->container['importErrorMessage']) < 0)) {
                $invalidProperties[] = "invalid value for 'importErrorMessage', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 128)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 1)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) > 128)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getRuleTypeAllowableValues();
                if (!is_null($this->container['ruleType']) && !in_array($this->container['ruleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ruleType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['ruleDesc']) && (mb_strlen($this->container['ruleDesc']) > 4096)) {
                $invalidProperties[] = "invalid value for 'ruleDesc', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['ruleDesc']) && (mb_strlen($this->container['ruleDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'ruleDesc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ruleNameEn']) && (mb_strlen($this->container['ruleNameEn']) > 128)) {
                $invalidProperties[] = "invalid value for 'ruleNameEn', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ruleNameEn']) && (mb_strlen($this->container['ruleNameEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleNameEn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ruleDescEn']) && (mb_strlen($this->container['ruleDescEn']) > 4096)) {
                $invalidProperties[] = "invalid value for 'ruleDescEn', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['ruleDescEn']) && (mb_strlen($this->container['ruleDescEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'ruleDescEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 128)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 1)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 1.";
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
    * Gets importStatus
    *  导入状态 * success 导入成功 * failed 导入失败
    *
    * @return string|null
    */
    public function getImportStatus()
    {
        return $this->container['importStatus'];
    }

    /**
    * Sets importStatus
    *
    * @param string|null $importStatus 导入状态 * success 导入成功 * failed 导入失败
    *
    * @return $this
    */
    public function setImportStatus($importStatus)
    {
        $this->container['importStatus'] = $importStatus;
        return $this;
    }

    /**
    * Gets importErrorMessage
    *  导入错误原因。
    *
    * @return string|null
    */
    public function getImportErrorMessage()
    {
        return $this->container['importErrorMessage'];
    }

    /**
    * Sets importErrorMessage
    *
    * @param string|null $importErrorMessage 导入错误原因。
    *
    * @return $this
    */
    public function setImportErrorMessage($importErrorMessage)
    {
        $this->container['importErrorMessage'] = $importErrorMessage;
        return $this;
    }

    /**
    * Gets uuid
    *  内置规则模板id。
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid 内置规则模板id。
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets importDataClassificationRule
    *  importDataClassificationRule
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportDataClassificationRuleDto|null
    */
    public function getImportDataClassificationRule()
    {
        return $this->container['importDataClassificationRule'];
    }

    /**
    * Sets importDataClassificationRule
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ImportDataClassificationRuleDto|null $importDataClassificationRule importDataClassificationRule
    *
    * @return $this
    */
    public function setImportDataClassificationRule($importDataClassificationRule)
    {
        $this->container['importDataClassificationRule'] = $importDataClassificationRule;
        return $this;
    }

    /**
    * Gets ruleName
    *  数据识别规则名称。
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName 数据识别规则名称。
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets ruleType
    *  数据识别规则类型 * REGEX 正则表达式 * KEYWORD 关键字
    *
    * @return string|null
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string|null $ruleType 数据识别规则类型 * REGEX 正则表达式 * KEYWORD 关键字
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets ruleDesc
    *  规则描述。
    *
    * @return string|null
    */
    public function getRuleDesc()
    {
        return $this->container['ruleDesc'];
    }

    /**
    * Sets ruleDesc
    *
    * @param string|null $ruleDesc 规则描述。
    *
    * @return $this
    */
    public function setRuleDesc($ruleDesc)
    {
        $this->container['ruleDesc'] = $ruleDesc;
        return $this;
    }

    /**
    * Gets ruleNameEn
    *  英文名称。
    *
    * @return string|null
    */
    public function getRuleNameEn()
    {
        return $this->container['ruleNameEn'];
    }

    /**
    * Sets ruleNameEn
    *
    * @param string|null $ruleNameEn 英文名称。
    *
    * @return $this
    */
    public function setRuleNameEn($ruleNameEn)
    {
        $this->container['ruleNameEn'] = $ruleNameEn;
        return $this;
    }

    /**
    * Gets ruleDescEn
    *  英文描述。
    *
    * @return string|null
    */
    public function getRuleDescEn()
    {
        return $this->container['ruleDescEn'];
    }

    /**
    * Sets ruleDescEn
    *
    * @param string|null $ruleDescEn 英文描述。
    *
    * @return $this
    */
    public function setRuleDescEn($ruleDescEn)
    {
        $this->container['ruleDescEn'] = $ruleDescEn;
        return $this;
    }

    /**
    * Gets country
    *  规则所属地区。
    *
    * @return string|null
    */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
    * Sets country
    *
    * @param string|null $country 规则所属地区。
    *
    * @return $this
    */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
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

