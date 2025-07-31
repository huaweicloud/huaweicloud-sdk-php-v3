<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChkFeatureInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChkFeatureInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chkFeatureId  检测特性规则ID
    * protectiveAction  防护动作 1 检测  2 检测并阻断/拦截
    * enabled  开启状态 0 关闭 1 开启
    * featureConfigure  检测特性规则配置信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chkFeatureId' => 'int',
            'protectiveAction' => 'int',
            'enabled' => 'int',
            'featureConfigure' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chkFeatureId  检测特性规则ID
    * protectiveAction  防护动作 1 检测  2 检测并阻断/拦截
    * enabled  开启状态 0 关闭 1 开启
    * featureConfigure  检测特性规则配置信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chkFeatureId' => null,
        'protectiveAction' => null,
        'enabled' => null,
        'featureConfigure' => null
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
    * protectiveAction  防护动作 1 检测  2 检测并阻断/拦截
    * enabled  开启状态 0 关闭 1 开启
    * featureConfigure  检测特性规则配置信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chkFeatureId' => 'chk_feature_id',
            'protectiveAction' => 'protective_action',
            'enabled' => 'enabled',
            'featureConfigure' => 'feature_configure'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chkFeatureId  检测特性规则ID
    * protectiveAction  防护动作 1 检测  2 检测并阻断/拦截
    * enabled  开启状态 0 关闭 1 开启
    * featureConfigure  检测特性规则配置信息
    *
    * @var string[]
    */
    protected static $setters = [
            'chkFeatureId' => 'setChkFeatureId',
            'protectiveAction' => 'setProtectiveAction',
            'enabled' => 'setEnabled',
            'featureConfigure' => 'setFeatureConfigure'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chkFeatureId  检测特性规则ID
    * protectiveAction  防护动作 1 检测  2 检测并阻断/拦截
    * enabled  开启状态 0 关闭 1 开启
    * featureConfigure  检测特性规则配置信息
    *
    * @var string[]
    */
    protected static $getters = [
            'chkFeatureId' => 'getChkFeatureId',
            'protectiveAction' => 'getProtectiveAction',
            'enabled' => 'getEnabled',
            'featureConfigure' => 'getFeatureConfigure'
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
        $this->container['protectiveAction'] = isset($data['protectiveAction']) ? $data['protectiveAction'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['featureConfigure'] = isset($data['featureConfigure']) ? $data['featureConfigure'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['chkFeatureId'] === null) {
            $invalidProperties[] = "'chkFeatureId' can't be null";
        }
            if (($this->container['chkFeatureId'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'chkFeatureId', must be smaller than or equal to 2097152.";
            }
            if (($this->container['chkFeatureId'] < 0)) {
                $invalidProperties[] = "invalid value for 'chkFeatureId', must be bigger than or equal to 0.";
            }
        if ($this->container['protectiveAction'] === null) {
            $invalidProperties[] = "'protectiveAction' can't be null";
        }
            if (($this->container['protectiveAction'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'protectiveAction', must be smaller than or equal to 2097152.";
            }
            if (($this->container['protectiveAction'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectiveAction', must be bigger than or equal to 0.";
            }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
            if (($this->container['enabled'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'enabled', must be smaller than or equal to 2097152.";
            }
            if (($this->container['enabled'] < 0)) {
                $invalidProperties[] = "invalid value for 'enabled', must be bigger than or equal to 0.";
            }
        if ($this->container['featureConfigure'] === null) {
            $invalidProperties[] = "'featureConfigure' can't be null";
        }
            if ((mb_strlen($this->container['featureConfigure']) > 128)) {
                $invalidProperties[] = "invalid value for 'featureConfigure', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['featureConfigure']) < 0)) {
                $invalidProperties[] = "invalid value for 'featureConfigure', the character length must be bigger than or equal to 0.";
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
    * @return int
    */
    public function getChkFeatureId()
    {
        return $this->container['chkFeatureId'];
    }

    /**
    * Sets chkFeatureId
    *
    * @param int $chkFeatureId 检测特性规则ID
    *
    * @return $this
    */
    public function setChkFeatureId($chkFeatureId)
    {
        $this->container['chkFeatureId'] = $chkFeatureId;
        return $this;
    }

    /**
    * Gets protectiveAction
    *  防护动作 1 检测  2 检测并阻断/拦截
    *
    * @return int
    */
    public function getProtectiveAction()
    {
        return $this->container['protectiveAction'];
    }

    /**
    * Sets protectiveAction
    *
    * @param int $protectiveAction 防护动作 1 检测  2 检测并阻断/拦截
    *
    * @return $this
    */
    public function setProtectiveAction($protectiveAction)
    {
        $this->container['protectiveAction'] = $protectiveAction;
        return $this;
    }

    /**
    * Gets enabled
    *  开启状态 0 关闭 1 开启
    *
    * @return int
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param int $enabled 开启状态 0 关闭 1 开启
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets featureConfigure
    *  检测特性规则配置信息
    *
    * @return string
    */
    public function getFeatureConfigure()
    {
        return $this->container['featureConfigure'];
    }

    /**
    * Sets featureConfigure
    *
    * @param string $featureConfigure 检测特性规则配置信息
    *
    * @return $this
    */
    public function setFeatureConfigure($featureConfigure)
    {
        $this->container['featureConfigure'] = $featureConfigure;
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

