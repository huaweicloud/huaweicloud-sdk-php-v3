<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchCompliancePackagesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchCompliancePackagesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  遵从包总数
    * builtinComplianceNum  内置遵从包数量
    * customizedComplianceNum  自定义遵从包数量
    * disabledComplianceNum  停用遵从包数量
    * enabledComplianceNum  启用遵从包数量
    * compliancePackages  遵从包列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'builtinComplianceNum' => 'int',
            'customizedComplianceNum' => 'int',
            'disabledComplianceNum' => 'int',
            'enabledComplianceNum' => 'int',
            'compliancePackages' => '\HuaweiCloud\SDK\SecMaster\V2\Model\CompliancePackageModel[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  遵从包总数
    * builtinComplianceNum  内置遵从包数量
    * customizedComplianceNum  自定义遵从包数量
    * disabledComplianceNum  停用遵从包数量
    * enabledComplianceNum  启用遵从包数量
    * compliancePackages  遵从包列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int32',
        'builtinComplianceNum' => 'int32',
        'customizedComplianceNum' => 'int32',
        'disabledComplianceNum' => 'int32',
        'enabledComplianceNum' => 'int32',
        'compliancePackages' => null
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
    * count  遵从包总数
    * builtinComplianceNum  内置遵从包数量
    * customizedComplianceNum  自定义遵从包数量
    * disabledComplianceNum  停用遵从包数量
    * enabledComplianceNum  启用遵从包数量
    * compliancePackages  遵从包列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'builtinComplianceNum' => 'builtin_compliance_num',
            'customizedComplianceNum' => 'customized_compliance_num',
            'disabledComplianceNum' => 'disabled_compliance_num',
            'enabledComplianceNum' => 'enabled_compliance_num',
            'compliancePackages' => 'compliance_packages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  遵从包总数
    * builtinComplianceNum  内置遵从包数量
    * customizedComplianceNum  自定义遵从包数量
    * disabledComplianceNum  停用遵从包数量
    * enabledComplianceNum  启用遵从包数量
    * compliancePackages  遵从包列表
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'builtinComplianceNum' => 'setBuiltinComplianceNum',
            'customizedComplianceNum' => 'setCustomizedComplianceNum',
            'disabledComplianceNum' => 'setDisabledComplianceNum',
            'enabledComplianceNum' => 'setEnabledComplianceNum',
            'compliancePackages' => 'setCompliancePackages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  遵从包总数
    * builtinComplianceNum  内置遵从包数量
    * customizedComplianceNum  自定义遵从包数量
    * disabledComplianceNum  停用遵从包数量
    * enabledComplianceNum  启用遵从包数量
    * compliancePackages  遵从包列表
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'builtinComplianceNum' => 'getBuiltinComplianceNum',
            'customizedComplianceNum' => 'getCustomizedComplianceNum',
            'disabledComplianceNum' => 'getDisabledComplianceNum',
            'enabledComplianceNum' => 'getEnabledComplianceNum',
            'compliancePackages' => 'getCompliancePackages'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['builtinComplianceNum'] = isset($data['builtinComplianceNum']) ? $data['builtinComplianceNum'] : null;
        $this->container['customizedComplianceNum'] = isset($data['customizedComplianceNum']) ? $data['customizedComplianceNum'] : null;
        $this->container['disabledComplianceNum'] = isset($data['disabledComplianceNum']) ? $data['disabledComplianceNum'] : null;
        $this->container['enabledComplianceNum'] = isset($data['enabledComplianceNum']) ? $data['enabledComplianceNum'] : null;
        $this->container['compliancePackages'] = isset($data['compliancePackages']) ? $data['compliancePackages'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['count']) && ($this->container['count'] > 10000)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['builtinComplianceNum']) && ($this->container['builtinComplianceNum'] > 10000)) {
                $invalidProperties[] = "invalid value for 'builtinComplianceNum', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['builtinComplianceNum']) && ($this->container['builtinComplianceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'builtinComplianceNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['customizedComplianceNum']) && ($this->container['customizedComplianceNum'] > 10000)) {
                $invalidProperties[] = "invalid value for 'customizedComplianceNum', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['customizedComplianceNum']) && ($this->container['customizedComplianceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'customizedComplianceNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['disabledComplianceNum']) && ($this->container['disabledComplianceNum'] > 10000)) {
                $invalidProperties[] = "invalid value for 'disabledComplianceNum', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['disabledComplianceNum']) && ($this->container['disabledComplianceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'disabledComplianceNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enabledComplianceNum']) && ($this->container['enabledComplianceNum'] > 10000)) {
                $invalidProperties[] = "invalid value for 'enabledComplianceNum', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['enabledComplianceNum']) && ($this->container['enabledComplianceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'enabledComplianceNum', must be bigger than or equal to 0.";
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
    * Gets count
    *  遵从包总数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 遵从包总数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets builtinComplianceNum
    *  内置遵从包数量
    *
    * @return int|null
    */
    public function getBuiltinComplianceNum()
    {
        return $this->container['builtinComplianceNum'];
    }

    /**
    * Sets builtinComplianceNum
    *
    * @param int|null $builtinComplianceNum 内置遵从包数量
    *
    * @return $this
    */
    public function setBuiltinComplianceNum($builtinComplianceNum)
    {
        $this->container['builtinComplianceNum'] = $builtinComplianceNum;
        return $this;
    }

    /**
    * Gets customizedComplianceNum
    *  自定义遵从包数量
    *
    * @return int|null
    */
    public function getCustomizedComplianceNum()
    {
        return $this->container['customizedComplianceNum'];
    }

    /**
    * Sets customizedComplianceNum
    *
    * @param int|null $customizedComplianceNum 自定义遵从包数量
    *
    * @return $this
    */
    public function setCustomizedComplianceNum($customizedComplianceNum)
    {
        $this->container['customizedComplianceNum'] = $customizedComplianceNum;
        return $this;
    }

    /**
    * Gets disabledComplianceNum
    *  停用遵从包数量
    *
    * @return int|null
    */
    public function getDisabledComplianceNum()
    {
        return $this->container['disabledComplianceNum'];
    }

    /**
    * Sets disabledComplianceNum
    *
    * @param int|null $disabledComplianceNum 停用遵从包数量
    *
    * @return $this
    */
    public function setDisabledComplianceNum($disabledComplianceNum)
    {
        $this->container['disabledComplianceNum'] = $disabledComplianceNum;
        return $this;
    }

    /**
    * Gets enabledComplianceNum
    *  启用遵从包数量
    *
    * @return int|null
    */
    public function getEnabledComplianceNum()
    {
        return $this->container['enabledComplianceNum'];
    }

    /**
    * Sets enabledComplianceNum
    *
    * @param int|null $enabledComplianceNum 启用遵从包数量
    *
    * @return $this
    */
    public function setEnabledComplianceNum($enabledComplianceNum)
    {
        $this->container['enabledComplianceNum'] = $enabledComplianceNum;
        return $this;
    }

    /**
    * Gets compliancePackages
    *  遵从包列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\CompliancePackageModel[]|null
    */
    public function getCompliancePackages()
    {
        return $this->container['compliancePackages'];
    }

    /**
    * Sets compliancePackages
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\CompliancePackageModel[]|null $compliancePackages 遵从包列表
    *
    * @return $this
    */
    public function setCompliancePackages($compliancePackages)
    {
        $this->container['compliancePackages'] = $compliancePackages;
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

