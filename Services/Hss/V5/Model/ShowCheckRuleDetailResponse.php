<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCheckRuleDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCheckRuleDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  当前检查项（检测规则）的描述
    * reference  当前检查项（检测规则）的制定依据
    * audit  当前检查项（检测规则）的审计描述
    * remediation  当前检查项（检测规则）的修改建议
    * checkInfoList  检测用例信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'reference' => 'string',
            'audit' => 'string',
            'remediation' => 'string',
            'checkInfoList' => '\HuaweiCloud\SDK\Hss\V5\Model\CheckRuleCheckCaseResponseInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  当前检查项（检测规则）的描述
    * reference  当前检查项（检测规则）的制定依据
    * audit  当前检查项（检测规则）的审计描述
    * remediation  当前检查项（检测规则）的修改建议
    * checkInfoList  检测用例信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'reference' => null,
        'audit' => null,
        'remediation' => null,
        'checkInfoList' => null
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
    * description  当前检查项（检测规则）的描述
    * reference  当前检查项（检测规则）的制定依据
    * audit  当前检查项（检测规则）的审计描述
    * remediation  当前检查项（检测规则）的修改建议
    * checkInfoList  检测用例信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'reference' => 'reference',
            'audit' => 'audit',
            'remediation' => 'remediation',
            'checkInfoList' => 'check_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  当前检查项（检测规则）的描述
    * reference  当前检查项（检测规则）的制定依据
    * audit  当前检查项（检测规则）的审计描述
    * remediation  当前检查项（检测规则）的修改建议
    * checkInfoList  检测用例信息
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'reference' => 'setReference',
            'audit' => 'setAudit',
            'remediation' => 'setRemediation',
            'checkInfoList' => 'setCheckInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  当前检查项（检测规则）的描述
    * reference  当前检查项（检测规则）的制定依据
    * audit  当前检查项（检测规则）的审计描述
    * remediation  当前检查项（检测规则）的修改建议
    * checkInfoList  检测用例信息
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'reference' => 'getReference',
            'audit' => 'getAudit',
            'remediation' => 'getRemediation',
            'checkInfoList' => 'getCheckInfoList'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['audit'] = isset($data['audit']) ? $data['audit'] : null;
        $this->container['remediation'] = isset($data['remediation']) ? $data['remediation'] : null;
        $this->container['checkInfoList'] = isset($data['checkInfoList']) ? $data['checkInfoList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2048)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 255)) {
                $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) < 0)) {
                $invalidProperties[] = "invalid value for 'reference', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audit']) && (mb_strlen($this->container['audit']) > 65534)) {
                $invalidProperties[] = "invalid value for 'audit', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['audit']) && (mb_strlen($this->container['audit']) < 0)) {
                $invalidProperties[] = "invalid value for 'audit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remediation']) && (mb_strlen($this->container['remediation']) > 65534)) {
                $invalidProperties[] = "invalid value for 'remediation', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['remediation']) && (mb_strlen($this->container['remediation']) < 0)) {
                $invalidProperties[] = "invalid value for 'remediation', the character length must be bigger than or equal to 0.";
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
    * Gets description
    *  当前检查项（检测规则）的描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 当前检查项（检测规则）的描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets reference
    *  当前检查项（检测规则）的制定依据
    *
    * @return string|null
    */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
    * Sets reference
    *
    * @param string|null $reference 当前检查项（检测规则）的制定依据
    *
    * @return $this
    */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;
        return $this;
    }

    /**
    * Gets audit
    *  当前检查项（检测规则）的审计描述
    *
    * @return string|null
    */
    public function getAudit()
    {
        return $this->container['audit'];
    }

    /**
    * Sets audit
    *
    * @param string|null $audit 当前检查项（检测规则）的审计描述
    *
    * @return $this
    */
    public function setAudit($audit)
    {
        $this->container['audit'] = $audit;
        return $this;
    }

    /**
    * Gets remediation
    *  当前检查项（检测规则）的修改建议
    *
    * @return string|null
    */
    public function getRemediation()
    {
        return $this->container['remediation'];
    }

    /**
    * Sets remediation
    *
    * @param string|null $remediation 当前检查项（检测规则）的修改建议
    *
    * @return $this
    */
    public function setRemediation($remediation)
    {
        $this->container['remediation'] = $remediation;
        return $this;
    }

    /**
    * Gets checkInfoList
    *  检测用例信息
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CheckRuleCheckCaseResponseInfo[]|null
    */
    public function getCheckInfoList()
    {
        return $this->container['checkInfoList'];
    }

    /**
    * Sets checkInfoList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CheckRuleCheckCaseResponseInfo[]|null $checkInfoList 检测用例信息
    *
    * @return $this
    */
    public function setCheckInfoList($checkInfoList)
    {
        $this->container['checkInfoList'] = $checkInfoList;
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

