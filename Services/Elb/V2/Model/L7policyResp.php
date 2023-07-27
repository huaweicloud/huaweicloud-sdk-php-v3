<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class L7policyResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'L7policyResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  转发策略ID
    * name  转发策略名称
    * rules  转发策略关联的转发规则列表
    * action  转发策略的转发动作；取值：REDIRECT_TO_POOL：转发到后端云服务器组；REDIRECT_TO_LISTENER：重定向到监听器
    * provisioningStatus  健康检查的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    * tenantId  转发策略所在的项目ID。
    * projectId  转发策略所在的项目ID。
    * adminStateUp  转发策略的管理状态；该字段为预留字段，暂未启用。默认为true。
    * description  转发策略额描述信息
    * listenerId  转发策略对应的监听器ID
    * redirectPoolId  转发到pool的ID。转发到pool的ID。当action为REDIRECT_TO_POOL时生效。
    * redirectListenerId  转发到的listener的ID，当action为REDIRECT_TO_LISTENER时生效。
    * redirectUrl  转发到的url。该字段未启用。
    * position  转发策略的优先级，从1递增，最高100。该字段为预留字段，暂未启用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'rules' => '\HuaweiCloud\SDK\Elb\V2\Model\ResourceList[]',
            'action' => 'string',
            'provisioningStatus' => 'string',
            'tenantId' => 'string',
            'projectId' => 'string',
            'adminStateUp' => 'bool',
            'description' => 'string',
            'listenerId' => 'string',
            'redirectPoolId' => 'string',
            'redirectListenerId' => 'string',
            'redirectUrl' => 'string',
            'position' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  转发策略ID
    * name  转发策略名称
    * rules  转发策略关联的转发规则列表
    * action  转发策略的转发动作；取值：REDIRECT_TO_POOL：转发到后端云服务器组；REDIRECT_TO_LISTENER：重定向到监听器
    * provisioningStatus  健康检查的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    * tenantId  转发策略所在的项目ID。
    * projectId  转发策略所在的项目ID。
    * adminStateUp  转发策略的管理状态；该字段为预留字段，暂未启用。默认为true。
    * description  转发策略额描述信息
    * listenerId  转发策略对应的监听器ID
    * redirectPoolId  转发到pool的ID。转发到pool的ID。当action为REDIRECT_TO_POOL时生效。
    * redirectListenerId  转发到的listener的ID，当action为REDIRECT_TO_LISTENER时生效。
    * redirectUrl  转发到的url。该字段未启用。
    * position  转发策略的优先级，从1递增，最高100。该字段为预留字段，暂未启用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'rules' => null,
        'action' => null,
        'provisioningStatus' => null,
        'tenantId' => null,
        'projectId' => null,
        'adminStateUp' => null,
        'description' => null,
        'listenerId' => null,
        'redirectPoolId' => null,
        'redirectListenerId' => null,
        'redirectUrl' => null,
        'position' => 'int32'
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
    * tenantId  转发策略所在的项目ID。
    * projectId  转发策略所在的项目ID。
    * adminStateUp  转发策略的管理状态；该字段为预留字段，暂未启用。默认为true。
    * description  转发策略额描述信息
    * listenerId  转发策略对应的监听器ID
    * redirectPoolId  转发到pool的ID。转发到pool的ID。当action为REDIRECT_TO_POOL时生效。
    * redirectListenerId  转发到的listener的ID，当action为REDIRECT_TO_LISTENER时生效。
    * redirectUrl  转发到的url。该字段未启用。
    * position  转发策略的优先级，从1递增，最高100。该字段为预留字段，暂未启用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'rules' => 'rules',
            'action' => 'action',
            'provisioningStatus' => 'provisioning_status',
            'tenantId' => 'tenant_id',
            'projectId' => 'project_id',
            'adminStateUp' => 'admin_state_up',
            'description' => 'description',
            'listenerId' => 'listener_id',
            'redirectPoolId' => 'redirect_pool_id',
            'redirectListenerId' => 'redirect_listener_id',
            'redirectUrl' => 'redirect_url',
            'position' => 'position'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  转发策略ID
    * name  转发策略名称
    * rules  转发策略关联的转发规则列表
    * action  转发策略的转发动作；取值：REDIRECT_TO_POOL：转发到后端云服务器组；REDIRECT_TO_LISTENER：重定向到监听器
    * provisioningStatus  健康检查的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    * tenantId  转发策略所在的项目ID。
    * projectId  转发策略所在的项目ID。
    * adminStateUp  转发策略的管理状态；该字段为预留字段，暂未启用。默认为true。
    * description  转发策略额描述信息
    * listenerId  转发策略对应的监听器ID
    * redirectPoolId  转发到pool的ID。转发到pool的ID。当action为REDIRECT_TO_POOL时生效。
    * redirectListenerId  转发到的listener的ID，当action为REDIRECT_TO_LISTENER时生效。
    * redirectUrl  转发到的url。该字段未启用。
    * position  转发策略的优先级，从1递增，最高100。该字段为预留字段，暂未启用。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'rules' => 'setRules',
            'action' => 'setAction',
            'provisioningStatus' => 'setProvisioningStatus',
            'tenantId' => 'setTenantId',
            'projectId' => 'setProjectId',
            'adminStateUp' => 'setAdminStateUp',
            'description' => 'setDescription',
            'listenerId' => 'setListenerId',
            'redirectPoolId' => 'setRedirectPoolId',
            'redirectListenerId' => 'setRedirectListenerId',
            'redirectUrl' => 'setRedirectUrl',
            'position' => 'setPosition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  转发策略ID
    * name  转发策略名称
    * rules  转发策略关联的转发规则列表
    * action  转发策略的转发动作；取值：REDIRECT_TO_POOL：转发到后端云服务器组；REDIRECT_TO_LISTENER：重定向到监听器
    * provisioningStatus  健康检查的配置状态；该字段为预留字段，暂未启用。默认为ACTIVE。
    * tenantId  转发策略所在的项目ID。
    * projectId  转发策略所在的项目ID。
    * adminStateUp  转发策略的管理状态；该字段为预留字段，暂未启用。默认为true。
    * description  转发策略额描述信息
    * listenerId  转发策略对应的监听器ID
    * redirectPoolId  转发到pool的ID。转发到pool的ID。当action为REDIRECT_TO_POOL时生效。
    * redirectListenerId  转发到的listener的ID，当action为REDIRECT_TO_LISTENER时生效。
    * redirectUrl  转发到的url。该字段未启用。
    * position  转发策略的优先级，从1递增，最高100。该字段为预留字段，暂未启用。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'rules' => 'getRules',
            'action' => 'getAction',
            'provisioningStatus' => 'getProvisioningStatus',
            'tenantId' => 'getTenantId',
            'projectId' => 'getProjectId',
            'adminStateUp' => 'getAdminStateUp',
            'description' => 'getDescription',
            'listenerId' => 'getListenerId',
            'redirectPoolId' => 'getRedirectPoolId',
            'redirectListenerId' => 'getRedirectListenerId',
            'redirectUrl' => 'getRedirectUrl',
            'position' => 'getPosition'
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['listenerId'] = isset($data['listenerId']) ? $data['listenerId'] : null;
        $this->container['redirectPoolId'] = isset($data['redirectPoolId']) ? $data['redirectPoolId'] : null;
        $this->container['redirectListenerId'] = isset($data['redirectListenerId']) ? $data['redirectListenerId'] : null;
        $this->container['redirectUrl'] = isset($data['redirectUrl']) ? $data['redirectUrl'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
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
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
            if ((mb_strlen($this->container['tenantId']) > 255)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['tenantId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['listenerId'] === null) {
            $invalidProperties[] = "'listenerId' can't be null";
        }
        if ($this->container['redirectPoolId'] === null) {
            $invalidProperties[] = "'redirectPoolId' can't be null";
        }
        if ($this->container['redirectListenerId'] === null) {
            $invalidProperties[] = "'redirectListenerId' can't be null";
        }
        if ($this->container['redirectUrl'] === null) {
            $invalidProperties[] = "'redirectUrl' can't be null";
        }
            if ((mb_strlen($this->container['redirectUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'redirectUrl', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['redirectUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'redirectUrl', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
            if (($this->container['position'] > 100)) {
                $invalidProperties[] = "invalid value for 'position', must be smaller than or equal to 100.";
            }
            if (($this->container['position'] < 1)) {
                $invalidProperties[] = "invalid value for 'position', must be bigger than or equal to 1.";
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
    * @return \HuaweiCloud\SDK\Elb\V2\Model\ResourceList[]
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\ResourceList[] $rules 转发策略关联的转发规则列表
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
    * Gets tenantId
    *  转发策略所在的项目ID。
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 转发策略所在的项目ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets projectId
    *  转发策略所在的项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 转发策略所在的项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  转发策略的管理状态；该字段为预留字段，暂未启用。默认为true。
    *
    * @return bool
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool $adminStateUp 转发策略的管理状态；该字段为预留字段，暂未启用。默认为true。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets description
    *  转发策略额描述信息
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 转发策略额描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets listenerId
    *  转发策略对应的监听器ID
    *
    * @return string
    */
    public function getListenerId()
    {
        return $this->container['listenerId'];
    }

    /**
    * Sets listenerId
    *
    * @param string $listenerId 转发策略对应的监听器ID
    *
    * @return $this
    */
    public function setListenerId($listenerId)
    {
        $this->container['listenerId'] = $listenerId;
        return $this;
    }

    /**
    * Gets redirectPoolId
    *  转发到pool的ID。转发到pool的ID。当action为REDIRECT_TO_POOL时生效。
    *
    * @return string
    */
    public function getRedirectPoolId()
    {
        return $this->container['redirectPoolId'];
    }

    /**
    * Sets redirectPoolId
    *
    * @param string $redirectPoolId 转发到pool的ID。转发到pool的ID。当action为REDIRECT_TO_POOL时生效。
    *
    * @return $this
    */
    public function setRedirectPoolId($redirectPoolId)
    {
        $this->container['redirectPoolId'] = $redirectPoolId;
        return $this;
    }

    /**
    * Gets redirectListenerId
    *  转发到的listener的ID，当action为REDIRECT_TO_LISTENER时生效。
    *
    * @return string
    */
    public function getRedirectListenerId()
    {
        return $this->container['redirectListenerId'];
    }

    /**
    * Sets redirectListenerId
    *
    * @param string $redirectListenerId 转发到的listener的ID，当action为REDIRECT_TO_LISTENER时生效。
    *
    * @return $this
    */
    public function setRedirectListenerId($redirectListenerId)
    {
        $this->container['redirectListenerId'] = $redirectListenerId;
        return $this;
    }

    /**
    * Gets redirectUrl
    *  转发到的url。该字段未启用。
    *
    * @return string
    */
    public function getRedirectUrl()
    {
        return $this->container['redirectUrl'];
    }

    /**
    * Sets redirectUrl
    *
    * @param string $redirectUrl 转发到的url。该字段未启用。
    *
    * @return $this
    */
    public function setRedirectUrl($redirectUrl)
    {
        $this->container['redirectUrl'] = $redirectUrl;
        return $this;
    }

    /**
    * Gets position
    *  转发策略的优先级，从1递增，最高100。该字段为预留字段，暂未启用。
    *
    * @return int
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param int $position 转发策略的优先级，从1递增，最高100。该字段为预留字段，暂未启用。
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
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

