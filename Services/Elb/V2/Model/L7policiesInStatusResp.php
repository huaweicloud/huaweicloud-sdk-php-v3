<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class L7policiesInStatusResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'L7policiesInStatusResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  转发策略ID
    * name  转发策略名称
    * rules  转发策略关联的转发规则列表
    * action  转发策略的转发动作；取值：REDIRECT_TO_POOL：转发到后端云服务器组；REDIRECT_TO_LISTENER：重定向到监听器
    * provisioningStatus  健康检查的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'rules' => '\HuaweiCloud\SDK\Elb\V2\Model\L7rulesInStatusResp[]',
            'action' => 'string',
            'provisioningStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  转发策略ID
    * name  转发策略名称
    * rules  转发策略关联的转发规则列表
    * action  转发策略的转发动作；取值：REDIRECT_TO_POOL：转发到后端云服务器组；REDIRECT_TO_LISTENER：重定向到监听器
    * provisioningStatus  健康检查的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'rules' => null,
        'action' => null,
        'provisioningStatus' => null
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
    * id  转发策略ID
    * name  转发策略名称
    * rules  转发策略关联的转发规则列表
    * action  转发策略的转发动作；取值：REDIRECT_TO_POOL：转发到后端云服务器组；REDIRECT_TO_LISTENER：重定向到监听器
    * provisioningStatus  健康检查的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'rules' => 'rules',
            'action' => 'action',
            'provisioningStatus' => 'provisioning_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  转发策略ID
    * name  转发策略名称
    * rules  转发策略关联的转发规则列表
    * action  转发策略的转发动作；取值：REDIRECT_TO_POOL：转发到后端云服务器组；REDIRECT_TO_LISTENER：重定向到监听器
    * provisioningStatus  健康检查的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'rules' => 'setRules',
            'action' => 'setAction',
            'provisioningStatus' => 'setProvisioningStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  转发策略ID
    * name  转发策略名称
    * rules  转发策略关联的转发规则列表
    * action  转发策略的转发动作；取值：REDIRECT_TO_POOL：转发到后端云服务器组；REDIRECT_TO_LISTENER：重定向到监听器
    * provisioningStatus  健康检查的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'rules' => 'getRules',
            'action' => 'getAction',
            'provisioningStatus' => 'getProvisioningStatus'
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
    const ACTION_REDIRECT_TO_POOL = 'REDIRECT_TO_POOL';
    const ACTION_REDIRECT_TO_LISTENER = 'REDIRECT_TO_LISTENER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_REDIRECT_TO_POOL,
            self::ACTION_REDIRECT_TO_LISTENER,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['rules'] === null) {
            $invalidProperties[] = "'rules' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['provisioningStatus'] === null) {
            $invalidProperties[] = "'provisioningStatus' can't be null";
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
    * Gets id
    *  转发策略ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 转发策略ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  转发策略名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 转发策略名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets rules
    *  转发策略关联的转发规则列表
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\L7rulesInStatusResp[]
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\L7rulesInStatusResp[] $rules 转发策略关联的转发规则列表
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
        return $this;
    }

    /**
    * Gets action
    *  转发策略的转发动作；取值：REDIRECT_TO_POOL：转发到后端云服务器组；REDIRECT_TO_LISTENER：重定向到监听器
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 转发策略的转发动作；取值：REDIRECT_TO_POOL：转发到后端云服务器组；REDIRECT_TO_LISTENER：重定向到监听器
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets provisioningStatus
    *  健康检查的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @return string
    */
    public function getProvisioningStatus()
    {
        return $this->container['provisioningStatus'];
    }

    /**
    * Sets provisioningStatus
    *
    * @param string $provisioningStatus 健康检查的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
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

