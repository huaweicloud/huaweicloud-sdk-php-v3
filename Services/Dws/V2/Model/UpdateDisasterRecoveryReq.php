<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDisasterRecoveryReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDisasterRecoveryReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * drSyncPeriod  容灾同步周期
    * sendRequest  是否发送请求
    * primaryToRole  主集群角色
    * resetAction  设置容灾动作
    * standbyToRole  备集群角色
    * drStatus  容灾状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'drSyncPeriod' => 'string',
            'sendRequest' => 'int',
            'primaryToRole' => 'string',
            'resetAction' => 'string',
            'standbyToRole' => 'string',
            'drStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * drSyncPeriod  容灾同步周期
    * sendRequest  是否发送请求
    * primaryToRole  主集群角色
    * resetAction  设置容灾动作
    * standbyToRole  备集群角色
    * drStatus  容灾状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'drSyncPeriod' => null,
        'sendRequest' => 'int32',
        'primaryToRole' => null,
        'resetAction' => null,
        'standbyToRole' => null,
        'drStatus' => null
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
    * drSyncPeriod  容灾同步周期
    * sendRequest  是否发送请求
    * primaryToRole  主集群角色
    * resetAction  设置容灾动作
    * standbyToRole  备集群角色
    * drStatus  容灾状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'drSyncPeriod' => 'dr_sync_period',
            'sendRequest' => 'send_request',
            'primaryToRole' => 'primary_to_role',
            'resetAction' => 'reset_action',
            'standbyToRole' => 'standby_to_role',
            'drStatus' => 'dr_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * drSyncPeriod  容灾同步周期
    * sendRequest  是否发送请求
    * primaryToRole  主集群角色
    * resetAction  设置容灾动作
    * standbyToRole  备集群角色
    * drStatus  容灾状态
    *
    * @var string[]
    */
    protected static $setters = [
            'drSyncPeriod' => 'setDrSyncPeriod',
            'sendRequest' => 'setSendRequest',
            'primaryToRole' => 'setPrimaryToRole',
            'resetAction' => 'setResetAction',
            'standbyToRole' => 'setStandbyToRole',
            'drStatus' => 'setDrStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * drSyncPeriod  容灾同步周期
    * sendRequest  是否发送请求
    * primaryToRole  主集群角色
    * resetAction  设置容灾动作
    * standbyToRole  备集群角色
    * drStatus  容灾状态
    *
    * @var string[]
    */
    protected static $getters = [
            'drSyncPeriod' => 'getDrSyncPeriod',
            'sendRequest' => 'getSendRequest',
            'primaryToRole' => 'getPrimaryToRole',
            'resetAction' => 'getResetAction',
            'standbyToRole' => 'getStandbyToRole',
            'drStatus' => 'getDrStatus'
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
        $this->container['drSyncPeriod'] = isset($data['drSyncPeriod']) ? $data['drSyncPeriod'] : null;
        $this->container['sendRequest'] = isset($data['sendRequest']) ? $data['sendRequest'] : null;
        $this->container['primaryToRole'] = isset($data['primaryToRole']) ? $data['primaryToRole'] : null;
        $this->container['resetAction'] = isset($data['resetAction']) ? $data['resetAction'] : null;
        $this->container['standbyToRole'] = isset($data['standbyToRole']) ? $data['standbyToRole'] : null;
        $this->container['drStatus'] = isset($data['drStatus']) ? $data['drStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sendRequest']) && ($this->container['sendRequest'] > 1)) {
                $invalidProperties[] = "invalid value for 'sendRequest', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['sendRequest']) && ($this->container['sendRequest'] < 0)) {
                $invalidProperties[] = "invalid value for 'sendRequest', must be bigger than or equal to 0.";
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
    * Gets drSyncPeriod
    *  容灾同步周期
    *
    * @return string|null
    */
    public function getDrSyncPeriod()
    {
        return $this->container['drSyncPeriod'];
    }

    /**
    * Sets drSyncPeriod
    *
    * @param string|null $drSyncPeriod 容灾同步周期
    *
    * @return $this
    */
    public function setDrSyncPeriod($drSyncPeriod)
    {
        $this->container['drSyncPeriod'] = $drSyncPeriod;
        return $this;
    }

    /**
    * Gets sendRequest
    *  是否发送请求
    *
    * @return int|null
    */
    public function getSendRequest()
    {
        return $this->container['sendRequest'];
    }

    /**
    * Sets sendRequest
    *
    * @param int|null $sendRequest 是否发送请求
    *
    * @return $this
    */
    public function setSendRequest($sendRequest)
    {
        $this->container['sendRequest'] = $sendRequest;
        return $this;
    }

    /**
    * Gets primaryToRole
    *  主集群角色
    *
    * @return string|null
    */
    public function getPrimaryToRole()
    {
        return $this->container['primaryToRole'];
    }

    /**
    * Sets primaryToRole
    *
    * @param string|null $primaryToRole 主集群角色
    *
    * @return $this
    */
    public function setPrimaryToRole($primaryToRole)
    {
        $this->container['primaryToRole'] = $primaryToRole;
        return $this;
    }

    /**
    * Gets resetAction
    *  设置容灾动作
    *
    * @return string|null
    */
    public function getResetAction()
    {
        return $this->container['resetAction'];
    }

    /**
    * Sets resetAction
    *
    * @param string|null $resetAction 设置容灾动作
    *
    * @return $this
    */
    public function setResetAction($resetAction)
    {
        $this->container['resetAction'] = $resetAction;
        return $this;
    }

    /**
    * Gets standbyToRole
    *  备集群角色
    *
    * @return string|null
    */
    public function getStandbyToRole()
    {
        return $this->container['standbyToRole'];
    }

    /**
    * Sets standbyToRole
    *
    * @param string|null $standbyToRole 备集群角色
    *
    * @return $this
    */
    public function setStandbyToRole($standbyToRole)
    {
        $this->container['standbyToRole'] = $standbyToRole;
        return $this;
    }

    /**
    * Gets drStatus
    *  容灾状态
    *
    * @return string|null
    */
    public function getDrStatus()
    {
        return $this->container['drStatus'];
    }

    /**
    * Sets drStatus
    *
    * @param string|null $drStatus 容灾状态
    *
    * @return $this
    */
    public function setDrStatus($drStatus)
    {
        $this->container['drStatus'] = $drStatus;
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

