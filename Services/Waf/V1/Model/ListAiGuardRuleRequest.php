<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAiGuardRuleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAiGuardRuleRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json
    * policyId  **参数解释：** 策略ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 最大数量 **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 10
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 0-10000 **默认取值：** 0
    * name  **参数解释：** 规则名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则状态 **约束限制：** 不涉及 **取值范围：** enable, disable **默认取值：** 不涉及
    * detectOpt  **参数解释：** 检测选项类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * detectType  **参数解释：** 检测类型 **约束限制：** 不涉及 **取值范围：** text(文本检测), image(图片检测) **默认取值：** 不涉及
    * withTemplate  **参数解释：** 是否查询模板规则 **约束限制：** 不涉及 **取值范围：** true, false **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'policyId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'name' => 'string',
            'status' => 'string',
            'detectOpt' => 'string',
            'detectType' => 'string',
            'withTemplate' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json
    * policyId  **参数解释：** 策略ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 最大数量 **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 10
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 0-10000 **默认取值：** 0
    * name  **参数解释：** 规则名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则状态 **约束限制：** 不涉及 **取值范围：** enable, disable **默认取值：** 不涉及
    * detectOpt  **参数解释：** 检测选项类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * detectType  **参数解释：** 检测类型 **约束限制：** 不涉及 **取值范围：** text(文本检测), image(图片检测) **默认取值：** 不涉及
    * withTemplate  **参数解释：** 是否查询模板规则 **约束限制：** 不涉及 **取值范围：** true, false **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'policyId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'name' => null,
        'status' => null,
        'detectOpt' => null,
        'detectType' => null,
        'withTemplate' => null
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
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json
    * policyId  **参数解释：** 策略ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 最大数量 **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 10
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 0-10000 **默认取值：** 0
    * name  **参数解释：** 规则名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则状态 **约束限制：** 不涉及 **取值范围：** enable, disable **默认取值：** 不涉及
    * detectOpt  **参数解释：** 检测选项类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * detectType  **参数解释：** 检测类型 **约束限制：** 不涉及 **取值范围：** text(文本检测), image(图片检测) **默认取值：** 不涉及
    * withTemplate  **参数解释：** 是否查询模板规则 **约束限制：** 不涉及 **取值范围：** true, false **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'policyId' => 'policy_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'name' => 'name',
            'status' => 'status',
            'detectOpt' => 'detect_opt',
            'detectType' => 'detect_type',
            'withTemplate' => 'with_template'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json
    * policyId  **参数解释：** 策略ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 最大数量 **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 10
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 0-10000 **默认取值：** 0
    * name  **参数解释：** 规则名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则状态 **约束限制：** 不涉及 **取值范围：** enable, disable **默认取值：** 不涉及
    * detectOpt  **参数解释：** 检测选项类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * detectType  **参数解释：** 检测类型 **约束限制：** 不涉及 **取值范围：** text(文本检测), image(图片检测) **默认取值：** 不涉及
    * withTemplate  **参数解释：** 是否查询模板规则 **约束限制：** 不涉及 **取值范围：** true, false **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'policyId' => 'setPolicyId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'name' => 'setName',
            'status' => 'setStatus',
            'detectOpt' => 'setDetectOpt',
            'detectType' => 'setDetectType',
            'withTemplate' => 'setWithTemplate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json
    * policyId  **参数解释：** 策略ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 最大数量 **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 10
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 0-10000 **默认取值：** 0
    * name  **参数解释：** 规则名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则状态 **约束限制：** 不涉及 **取值范围：** enable, disable **默认取值：** 不涉及
    * detectOpt  **参数解释：** 检测选项类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * detectType  **参数解释：** 检测类型 **约束限制：** 不涉及 **取值范围：** text(文本检测), image(图片检测) **默认取值：** 不涉及
    * withTemplate  **参数解释：** 是否查询模板规则 **约束限制：** 不涉及 **取值范围：** true, false **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'policyId' => 'getPolicyId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'name' => 'getName',
            'status' => 'getStatus',
            'detectOpt' => 'getDetectOpt',
            'detectType' => 'getDetectType',
            'withTemplate' => 'getWithTemplate'
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
    const DETECT_TYPE_TEXT = 'text';
    const DETECT_TYPE_IMAGE = 'image';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDetectTypeAllowableValues()
    {
        return [
            self::DETECT_TYPE_TEXT,
            self::DETECT_TYPE_IMAGE,
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['detectOpt'] = isset($data['detectOpt']) ? $data['detectOpt'] : null;
        $this->container['detectType'] = isset($data['detectType']) ? $data['detectType'] : null;
        $this->container['withTemplate'] = isset($data['withTemplate']) ? $data['withTemplate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            if ((mb_strlen($this->container['contentType']) > 128)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['contentType']) < 1)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['policyId'] === null) {
            $invalidProperties[] = "'policyId' can't be null";
        }
            if ((mb_strlen($this->container['policyId']) > 32)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 10000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['detectOpt']) && (mb_strlen($this->container['detectOpt']) > 32)) {
                $invalidProperties[] = "invalid value for 'detectOpt', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['detectOpt']) && (mb_strlen($this->container['detectOpt']) < 1)) {
                $invalidProperties[] = "invalid value for 'detectOpt', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getDetectTypeAllowableValues();
                if (!is_null($this->container['detectType']) && !in_array($this->container['detectType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'detectType', must be one of '%s'",
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
    * Gets contentType
    *  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets policyId
    *  **参数解释：** 策略ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string $policyId **参数解释：** 策略ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释：** 最大数量 **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 10
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释：** 最大数量 **约束限制：** 不涉及 **取值范围：** 1-1000 **默认取值：** 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 0-10000 **默认取值：** 0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 0-10000 **默认取值：** 0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 规则名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释：** 规则名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 规则状态 **约束限制：** 不涉及 **取值范围：** enable, disable **默认取值：** 不涉及
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
    * @param string|null $status **参数解释：** 规则状态 **约束限制：** 不涉及 **取值范围：** enable, disable **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets detectOpt
    *  **参数解释：** 检测选项类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getDetectOpt()
    {
        return $this->container['detectOpt'];
    }

    /**
    * Sets detectOpt
    *
    * @param string|null $detectOpt **参数解释：** 检测选项类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDetectOpt($detectOpt)
    {
        $this->container['detectOpt'] = $detectOpt;
        return $this;
    }

    /**
    * Gets detectType
    *  **参数解释：** 检测类型 **约束限制：** 不涉及 **取值范围：** text(文本检测), image(图片检测) **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getDetectType()
    {
        return $this->container['detectType'];
    }

    /**
    * Sets detectType
    *
    * @param string|null $detectType **参数解释：** 检测类型 **约束限制：** 不涉及 **取值范围：** text(文本检测), image(图片检测) **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDetectType($detectType)
    {
        $this->container['detectType'] = $detectType;
        return $this;
    }

    /**
    * Gets withTemplate
    *  **参数解释：** 是否查询模板规则 **约束限制：** 不涉及 **取值范围：** true, false **默认取值：** 不涉及
    *
    * @return bool|null
    */
    public function getWithTemplate()
    {
        return $this->container['withTemplate'];
    }

    /**
    * Sets withTemplate
    *
    * @param bool|null $withTemplate **参数解释：** 是否查询模板规则 **约束限制：** 不涉及 **取值范围：** true, false **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setWithTemplate($withTemplate)
    {
        $this->container['withTemplate'] = $withTemplate;
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

