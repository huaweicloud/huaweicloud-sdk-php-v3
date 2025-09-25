<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FeatureRuleInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FeatureRuleInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chkFeatureId  检测特性规则ID
    * chkFeatureName  检测特性规则标识
    * chkFeatureDesc  检测特性规则描述
    * osType  操作系统类型
    * featureConfigure  检测特性规则配置信息
    * optionalProtectiveAction  可选防护动作，包含如下 -1 检测 -2 检测并阻断/拦截 -3 都可以
    * protectiveAction  默认防护动作，包含如下 -1 检测 -2 检测并阻断/拦截
    * editable  是否可编辑配置信息，包含如下 -0 否 -1 是
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chkFeatureId' => 'int',
            'chkFeatureName' => 'string',
            'chkFeatureDesc' => 'string',
            'osType' => 'string',
            'featureConfigure' => 'string',
            'optionalProtectiveAction' => 'int',
            'protectiveAction' => 'int',
            'editable' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chkFeatureId  检测特性规则ID
    * chkFeatureName  检测特性规则标识
    * chkFeatureDesc  检测特性规则描述
    * osType  操作系统类型
    * featureConfigure  检测特性规则配置信息
    * optionalProtectiveAction  可选防护动作，包含如下 -1 检测 -2 检测并阻断/拦截 -3 都可以
    * protectiveAction  默认防护动作，包含如下 -1 检测 -2 检测并阻断/拦截
    * editable  是否可编辑配置信息，包含如下 -0 否 -1 是
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chkFeatureId' => null,
        'chkFeatureName' => null,
        'chkFeatureDesc' => null,
        'osType' => null,
        'featureConfigure' => null,
        'optionalProtectiveAction' => null,
        'protectiveAction' => null,
        'editable' => null
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
    * chkFeatureId  检测特性规则ID
    * chkFeatureName  检测特性规则标识
    * chkFeatureDesc  检测特性规则描述
    * osType  操作系统类型
    * featureConfigure  检测特性规则配置信息
    * optionalProtectiveAction  可选防护动作，包含如下 -1 检测 -2 检测并阻断/拦截 -3 都可以
    * protectiveAction  默认防护动作，包含如下 -1 检测 -2 检测并阻断/拦截
    * editable  是否可编辑配置信息，包含如下 -0 否 -1 是
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chkFeatureId' => 'chk_feature_id',
            'chkFeatureName' => 'chk_feature_name',
            'chkFeatureDesc' => 'chk_feature_desc',
            'osType' => 'os_type',
            'featureConfigure' => 'feature_configure',
            'optionalProtectiveAction' => 'optional_protective_action',
            'protectiveAction' => 'protective_action',
            'editable' => 'editable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chkFeatureId  检测特性规则ID
    * chkFeatureName  检测特性规则标识
    * chkFeatureDesc  检测特性规则描述
    * osType  操作系统类型
    * featureConfigure  检测特性规则配置信息
    * optionalProtectiveAction  可选防护动作，包含如下 -1 检测 -2 检测并阻断/拦截 -3 都可以
    * protectiveAction  默认防护动作，包含如下 -1 检测 -2 检测并阻断/拦截
    * editable  是否可编辑配置信息，包含如下 -0 否 -1 是
    *
    * @var string[]
    */
    protected static $setters = [
            'chkFeatureId' => 'setChkFeatureId',
            'chkFeatureName' => 'setChkFeatureName',
            'chkFeatureDesc' => 'setChkFeatureDesc',
            'osType' => 'setOsType',
            'featureConfigure' => 'setFeatureConfigure',
            'optionalProtectiveAction' => 'setOptionalProtectiveAction',
            'protectiveAction' => 'setProtectiveAction',
            'editable' => 'setEditable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chkFeatureId  检测特性规则ID
    * chkFeatureName  检测特性规则标识
    * chkFeatureDesc  检测特性规则描述
    * osType  操作系统类型
    * featureConfigure  检测特性规则配置信息
    * optionalProtectiveAction  可选防护动作，包含如下 -1 检测 -2 检测并阻断/拦截 -3 都可以
    * protectiveAction  默认防护动作，包含如下 -1 检测 -2 检测并阻断/拦截
    * editable  是否可编辑配置信息，包含如下 -0 否 -1 是
    *
    * @var string[]
    */
    protected static $getters = [
            'chkFeatureId' => 'getChkFeatureId',
            'chkFeatureName' => 'getChkFeatureName',
            'chkFeatureDesc' => 'getChkFeatureDesc',
            'osType' => 'getOsType',
            'featureConfigure' => 'getFeatureConfigure',
            'optionalProtectiveAction' => 'getOptionalProtectiveAction',
            'protectiveAction' => 'getProtectiveAction',
            'editable' => 'getEditable'
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
        $this->container['chkFeatureId'] = isset($data['chkFeatureId']) ? $data['chkFeatureId'] : null;
        $this->container['chkFeatureName'] = isset($data['chkFeatureName']) ? $data['chkFeatureName'] : null;
        $this->container['chkFeatureDesc'] = isset($data['chkFeatureDesc']) ? $data['chkFeatureDesc'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['featureConfigure'] = isset($data['featureConfigure']) ? $data['featureConfigure'] : null;
        $this->container['optionalProtectiveAction'] = isset($data['optionalProtectiveAction']) ? $data['optionalProtectiveAction'] : null;
        $this->container['protectiveAction'] = isset($data['protectiveAction']) ? $data['protectiveAction'] : null;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['chkFeatureId']) && ($this->container['chkFeatureId'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'chkFeatureId', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['chkFeatureId']) && ($this->container['chkFeatureId'] < 0)) {
                $invalidProperties[] = "invalid value for 'chkFeatureId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chkFeatureName']) && (mb_strlen($this->container['chkFeatureName']) > 128)) {
                $invalidProperties[] = "invalid value for 'chkFeatureName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['chkFeatureName']) && (mb_strlen($this->container['chkFeatureName']) < 0)) {
                $invalidProperties[] = "invalid value for 'chkFeatureName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chkFeatureDesc']) && (mb_strlen($this->container['chkFeatureDesc']) > 128)) {
                $invalidProperties[] = "invalid value for 'chkFeatureDesc', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['chkFeatureDesc']) && (mb_strlen($this->container['chkFeatureDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'chkFeatureDesc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 128)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['featureConfigure']) && (mb_strlen($this->container['featureConfigure']) > 128)) {
                $invalidProperties[] = "invalid value for 'featureConfigure', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['featureConfigure']) && (mb_strlen($this->container['featureConfigure']) < 0)) {
                $invalidProperties[] = "invalid value for 'featureConfigure', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['optionalProtectiveAction']) && ($this->container['optionalProtectiveAction'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'optionalProtectiveAction', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['optionalProtectiveAction']) && ($this->container['optionalProtectiveAction'] < 0)) {
                $invalidProperties[] = "invalid value for 'optionalProtectiveAction', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectiveAction']) && ($this->container['protectiveAction'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'protectiveAction', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['protectiveAction']) && ($this->container['protectiveAction'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectiveAction', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['editable']) && ($this->container['editable'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'editable', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['editable']) && ($this->container['editable'] < 0)) {
                $invalidProperties[] = "invalid value for 'editable', must be bigger than or equal to 0.";
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
    * Gets chkFeatureId
    *  检测特性规则ID
    *
    * @return int|null
    */
    public function getChkFeatureId()
    {
        return $this->container['chkFeatureId'];
    }

    /**
    * Sets chkFeatureId
    *
    * @param int|null $chkFeatureId 检测特性规则ID
    *
    * @return $this
    */
    public function setChkFeatureId($chkFeatureId)
    {
        $this->container['chkFeatureId'] = $chkFeatureId;
        return $this;
    }

    /**
    * Gets chkFeatureName
    *  检测特性规则标识
    *
    * @return string|null
    */
    public function getChkFeatureName()
    {
        return $this->container['chkFeatureName'];
    }

    /**
    * Sets chkFeatureName
    *
    * @param string|null $chkFeatureName 检测特性规则标识
    *
    * @return $this
    */
    public function setChkFeatureName($chkFeatureName)
    {
        $this->container['chkFeatureName'] = $chkFeatureName;
        return $this;
    }

    /**
    * Gets chkFeatureDesc
    *  检测特性规则描述
    *
    * @return string|null
    */
    public function getChkFeatureDesc()
    {
        return $this->container['chkFeatureDesc'];
    }

    /**
    * Sets chkFeatureDesc
    *
    * @param string|null $chkFeatureDesc 检测特性规则描述
    *
    * @return $this
    */
    public function setChkFeatureDesc($chkFeatureDesc)
    {
        $this->container['chkFeatureDesc'] = $chkFeatureDesc;
        return $this;
    }

    /**
    * Gets osType
    *  操作系统类型
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 操作系统类型
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets featureConfigure
    *  检测特性规则配置信息
    *
    * @return string|null
    */
    public function getFeatureConfigure()
    {
        return $this->container['featureConfigure'];
    }

    /**
    * Sets featureConfigure
    *
    * @param string|null $featureConfigure 检测特性规则配置信息
    *
    * @return $this
    */
    public function setFeatureConfigure($featureConfigure)
    {
        $this->container['featureConfigure'] = $featureConfigure;
        return $this;
    }

    /**
    * Gets optionalProtectiveAction
    *  可选防护动作，包含如下 -1 检测 -2 检测并阻断/拦截 -3 都可以
    *
    * @return int|null
    */
    public function getOptionalProtectiveAction()
    {
        return $this->container['optionalProtectiveAction'];
    }

    /**
    * Sets optionalProtectiveAction
    *
    * @param int|null $optionalProtectiveAction 可选防护动作，包含如下 -1 检测 -2 检测并阻断/拦截 -3 都可以
    *
    * @return $this
    */
    public function setOptionalProtectiveAction($optionalProtectiveAction)
    {
        $this->container['optionalProtectiveAction'] = $optionalProtectiveAction;
        return $this;
    }

    /**
    * Gets protectiveAction
    *  默认防护动作，包含如下 -1 检测 -2 检测并阻断/拦截
    *
    * @return int|null
    */
    public function getProtectiveAction()
    {
        return $this->container['protectiveAction'];
    }

    /**
    * Sets protectiveAction
    *
    * @param int|null $protectiveAction 默认防护动作，包含如下 -1 检测 -2 检测并阻断/拦截
    *
    * @return $this
    */
    public function setProtectiveAction($protectiveAction)
    {
        $this->container['protectiveAction'] = $protectiveAction;
        return $this;
    }

    /**
    * Gets editable
    *  是否可编辑配置信息，包含如下 -0 否 -1 是
    *
    * @return int|null
    */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
    * Sets editable
    *
    * @param int|null $editable 是否可编辑配置信息，包含如下 -0 否 -1 是
    *
    * @return $this
    */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;
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

