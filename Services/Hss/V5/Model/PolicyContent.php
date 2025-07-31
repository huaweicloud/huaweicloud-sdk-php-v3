<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableImageStartup  是否允许未扫描镜像启动
    * policyType  告警策略: - vuls: 漏洞 - baselines: 基线  - malwares: 恶意脚本
    * severity  风险等级
    * riskyItem  危险项
    * action  防护动作   - 0: 告警   - 1: 阻断   - 2: 放行
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableImageStartup' => 'bool',
            'policyType' => 'string',
            'severity' => 'int',
            'riskyItem' => 'string[]',
            'action' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableImageStartup  是否允许未扫描镜像启动
    * policyType  告警策略: - vuls: 漏洞 - baselines: 基线  - malwares: 恶意脚本
    * severity  风险等级
    * riskyItem  危险项
    * action  防护动作   - 0: 告警   - 1: 阻断   - 2: 放行
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableImageStartup' => null,
        'policyType' => null,
        'severity' => null,
        'riskyItem' => null,
        'action' => 'int32'
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
    * enableImageStartup  是否允许未扫描镜像启动
    * policyType  告警策略: - vuls: 漏洞 - baselines: 基线  - malwares: 恶意脚本
    * severity  风险等级
    * riskyItem  危险项
    * action  防护动作   - 0: 告警   - 1: 阻断   - 2: 放行
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableImageStartup' => 'enable_image_startup',
            'policyType' => 'policy_type',
            'severity' => 'severity',
            'riskyItem' => 'risky_item',
            'action' => 'action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableImageStartup  是否允许未扫描镜像启动
    * policyType  告警策略: - vuls: 漏洞 - baselines: 基线  - malwares: 恶意脚本
    * severity  风险等级
    * riskyItem  危险项
    * action  防护动作   - 0: 告警   - 1: 阻断   - 2: 放行
    *
    * @var string[]
    */
    protected static $setters = [
            'enableImageStartup' => 'setEnableImageStartup',
            'policyType' => 'setPolicyType',
            'severity' => 'setSeverity',
            'riskyItem' => 'setRiskyItem',
            'action' => 'setAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableImageStartup  是否允许未扫描镜像启动
    * policyType  告警策略: - vuls: 漏洞 - baselines: 基线  - malwares: 恶意脚本
    * severity  风险等级
    * riskyItem  危险项
    * action  防护动作   - 0: 告警   - 1: 阻断   - 2: 放行
    *
    * @var string[]
    */
    protected static $getters = [
            'enableImageStartup' => 'getEnableImageStartup',
            'policyType' => 'getPolicyType',
            'severity' => 'getSeverity',
            'riskyItem' => 'getRiskyItem',
            'action' => 'getAction'
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
        $this->container['enableImageStartup'] = isset($data['enableImageStartup']) ? $data['enableImageStartup'] : null;
        $this->container['policyType'] = isset($data['policyType']) ? $data['policyType'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['riskyItem'] = isset($data['riskyItem']) ? $data['riskyItem'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enableImageStartup'] === null) {
            $invalidProperties[] = "'enableImageStartup' can't be null";
        }
        if ($this->container['policyType'] === null) {
            $invalidProperties[] = "'policyType' can't be null";
        }
            if ((mb_strlen($this->container['policyType']) > 32)) {
                $invalidProperties[] = "invalid value for 'policyType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['policyType']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyType', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['policyType'])) {
                $invalidProperties[] = "invalid value for 'policyType', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['severity'] === null) {
            $invalidProperties[] = "'severity' can't be null";
        }
            if (($this->container['severity'] > 32)) {
                $invalidProperties[] = "invalid value for 'severity', must be smaller than or equal to 32.";
            }
            if (($this->container['severity'] < 1)) {
                $invalidProperties[] = "invalid value for 'severity', must be bigger than or equal to 1.";
            }
        if ($this->container['riskyItem'] === null) {
            $invalidProperties[] = "'riskyItem' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            if (($this->container['action'] > 10)) {
                $invalidProperties[] = "invalid value for 'action', must be smaller than or equal to 10.";
            }
            if (($this->container['action'] < 0)) {
                $invalidProperties[] = "invalid value for 'action', must be bigger than or equal to 0.";
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
    * Gets enableImageStartup
    *  是否允许未扫描镜像启动
    *
    * @return bool
    */
    public function getEnableImageStartup()
    {
        return $this->container['enableImageStartup'];
    }

    /**
    * Sets enableImageStartup
    *
    * @param bool $enableImageStartup 是否允许未扫描镜像启动
    *
    * @return $this
    */
    public function setEnableImageStartup($enableImageStartup)
    {
        $this->container['enableImageStartup'] = $enableImageStartup;
        return $this;
    }

    /**
    * Gets policyType
    *  告警策略: - vuls: 漏洞 - baselines: 基线  - malwares: 恶意脚本
    *
    * @return string
    */
    public function getPolicyType()
    {
        return $this->container['policyType'];
    }

    /**
    * Sets policyType
    *
    * @param string $policyType 告警策略: - vuls: 漏洞 - baselines: 基线  - malwares: 恶意脚本
    *
    * @return $this
    */
    public function setPolicyType($policyType)
    {
        $this->container['policyType'] = $policyType;
        return $this;
    }

    /**
    * Gets severity
    *  风险等级
    *
    * @return int
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param int $severity 风险等级
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets riskyItem
    *  危险项
    *
    * @return string[]
    */
    public function getRiskyItem()
    {
        return $this->container['riskyItem'];
    }

    /**
    * Sets riskyItem
    *
    * @param string[] $riskyItem 危险项
    *
    * @return $this
    */
    public function setRiskyItem($riskyItem)
    {
        $this->container['riskyItem'] = $riskyItem;
        return $this;
    }

    /**
    * Gets action
    *  防护动作   - 0: 告警   - 1: 阻断   - 2: 放行
    *
    * @return int
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param int $action 防护动作   - 0: 告警   - 1: 阻断   - 2: 放行
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
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

