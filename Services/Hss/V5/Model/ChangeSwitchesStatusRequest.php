<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeSwitchesStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeSwitchesStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * code  配置类型   - malware_sample_high_detect： 恶意软件高检出模式   - image_pay_per_scan： 镜像扫描按次计费功能开关   - image_popup： 镜像扫描按次计费弹窗开关   - image_free_to_pay_popup：镜像扫描功能免费转付费弹窗开关   - display_unprotected_host：显示未防护的主机
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'code' => 'string',
            'body' => '\HuaweiCloud\SDK\Hss\V5\Model\ChangeSwitchesStatusRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * code  配置类型   - malware_sample_high_detect： 恶意软件高检出模式   - image_pay_per_scan： 镜像扫描按次计费功能开关   - image_popup： 镜像扫描按次计费弹窗开关   - image_free_to_pay_popup：镜像扫描功能免费转付费弹窗开关   - display_unprotected_host：显示未防护的主机
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'code' => null,
        'body' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * code  配置类型   - malware_sample_high_detect： 恶意软件高检出模式   - image_pay_per_scan： 镜像扫描按次计费功能开关   - image_popup： 镜像扫描按次计费弹窗开关   - image_free_to_pay_popup：镜像扫描功能免费转付费弹窗开关   - display_unprotected_host：显示未防护的主机
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'code' => 'code',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * code  配置类型   - malware_sample_high_detect： 恶意软件高检出模式   - image_pay_per_scan： 镜像扫描按次计费功能开关   - image_popup： 镜像扫描按次计费弹窗开关   - image_free_to_pay_popup：镜像扫描功能免费转付费弹窗开关   - display_unprotected_host：显示未防护的主机
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'code' => 'setCode',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * code  配置类型   - malware_sample_high_detect： 恶意软件高检出模式   - image_pay_per_scan： 镜像扫描按次计费功能开关   - image_popup： 镜像扫描按次计费弹窗开关   - image_free_to_pay_popup：镜像扫描功能免费转付费弹窗开关   - display_unprotected_host：显示未防护的主机
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'code' => 'getCode',
            'body' => 'getBody'
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
    const CODE_MALWARE_SAMPLE_HIGH_DETECT = 'malware_sample_high_detect';
    const CODE_IMAGE_PAY_PER_SCAN = 'image_pay_per_scan';
    const CODE_IMAGE_POPUP = 'image_popup';
    const CODE_IMAGE_FREE_TO_PAY_POPUP = 'image_free_to_pay_popup';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_MALWARE_SAMPLE_HIGH_DETECT,
            self::CODE_IMAGE_PAY_PER_SCAN,
            self::CODE_IMAGE_POPUP,
            self::CODE_IMAGE_FREE_TO_PAY_POPUP,
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
            $allowedValues = $this->getCodeAllowableValues();
                if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'code', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['code']) > 64)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['code']) < 1)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^malware_sample_high_detect|image_pay_per_scan|image_popup|image_free_to_pay_popup|display_unprotected_host$/", $this->container['code'])) {
                $invalidProperties[] = "invalid value for 'code', must be conform to the pattern /^malware_sample_high_detect|image_pay_per_scan|image_popup|image_free_to_pay_popup|display_unprotected_host$/.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets code
    *  配置类型   - malware_sample_high_detect： 恶意软件高检出模式   - image_pay_per_scan： 镜像扫描按次计费功能开关   - image_popup： 镜像扫描按次计费弹窗开关   - image_free_to_pay_popup：镜像扫描功能免费转付费弹窗开关   - display_unprotected_host：显示未防护的主机
    *
    * @return string
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string $code 配置类型   - malware_sample_high_detect： 恶意软件高检出模式   - image_pay_per_scan： 镜像扫描按次计费功能开关   - image_popup： 镜像扫描按次计费弹窗开关   - image_free_to_pay_popup：镜像扫描功能免费转付费弹窗开关   - display_unprotected_host：显示未防护的主机
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ChangeSwitchesStatusRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ChangeSwitchesStatusRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

