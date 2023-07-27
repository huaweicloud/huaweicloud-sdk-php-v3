<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateL7policyReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateL7policyReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  转发策略名称
    * adminStateUp  转发策略的管理状态；该字段为预留字段，暂未启用。默认为true。
    * description  转发策略额描述信息
    * redirectListenerId  转发到的listener的ID，当action为REDIRECT_TO_LISTENER时生效。当action为REDIRECT_TO_LISTENER时必选
    * redirectPoolId  转发到pool的ID。当action为REDIRECT_TO_POOL时生效。使用说明：redirect_pool不能是listener的default_pool，不能已经被其他listener的l7policy所使用。当action为REDIRECT_TO_LISTENER时，不可指定。不允许更新为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'adminStateUp' => 'bool',
            'description' => 'string',
            'redirectListenerId' => 'string',
            'redirectPoolId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  转发策略名称
    * adminStateUp  转发策略的管理状态；该字段为预留字段，暂未启用。默认为true。
    * description  转发策略额描述信息
    * redirectListenerId  转发到的listener的ID，当action为REDIRECT_TO_LISTENER时生效。当action为REDIRECT_TO_LISTENER时必选
    * redirectPoolId  转发到pool的ID。当action为REDIRECT_TO_POOL时生效。使用说明：redirect_pool不能是listener的default_pool，不能已经被其他listener的l7policy所使用。当action为REDIRECT_TO_LISTENER时，不可指定。不允许更新为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'adminStateUp' => null,
        'description' => null,
        'redirectListenerId' => null,
        'redirectPoolId' => null
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
    * name  转发策略名称
    * adminStateUp  转发策略的管理状态；该字段为预留字段，暂未启用。默认为true。
    * description  转发策略额描述信息
    * redirectListenerId  转发到的listener的ID，当action为REDIRECT_TO_LISTENER时生效。当action为REDIRECT_TO_LISTENER时必选
    * redirectPoolId  转发到pool的ID。当action为REDIRECT_TO_POOL时生效。使用说明：redirect_pool不能是listener的default_pool，不能已经被其他listener的l7policy所使用。当action为REDIRECT_TO_LISTENER时，不可指定。不允许更新为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'adminStateUp' => 'admin_state_up',
            'description' => 'description',
            'redirectListenerId' => 'redirect_listener_id',
            'redirectPoolId' => 'redirect_pool_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  转发策略名称
    * adminStateUp  转发策略的管理状态；该字段为预留字段，暂未启用。默认为true。
    * description  转发策略额描述信息
    * redirectListenerId  转发到的listener的ID，当action为REDIRECT_TO_LISTENER时生效。当action为REDIRECT_TO_LISTENER时必选
    * redirectPoolId  转发到pool的ID。当action为REDIRECT_TO_POOL时生效。使用说明：redirect_pool不能是listener的default_pool，不能已经被其他listener的l7policy所使用。当action为REDIRECT_TO_LISTENER时，不可指定。不允许更新为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'adminStateUp' => 'setAdminStateUp',
            'description' => 'setDescription',
            'redirectListenerId' => 'setRedirectListenerId',
            'redirectPoolId' => 'setRedirectPoolId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  转发策略名称
    * adminStateUp  转发策略的管理状态；该字段为预留字段，暂未启用。默认为true。
    * description  转发策略额描述信息
    * redirectListenerId  转发到的listener的ID，当action为REDIRECT_TO_LISTENER时生效。当action为REDIRECT_TO_LISTENER时必选
    * redirectPoolId  转发到pool的ID。当action为REDIRECT_TO_POOL时生效。使用说明：redirect_pool不能是listener的default_pool，不能已经被其他listener的l7policy所使用。当action为REDIRECT_TO_LISTENER时，不可指定。不允许更新为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'adminStateUp' => 'getAdminStateUp',
            'description' => 'getDescription',
            'redirectListenerId' => 'getRedirectListenerId',
            'redirectPoolId' => 'getRedirectPoolId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['redirectListenerId'] = isset($data['redirectListenerId']) ? $data['redirectListenerId'] : null;
        $this->container['redirectPoolId'] = isset($data['redirectPoolId']) ? $data['redirectPoolId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  转发策略名称
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
    * @param string|null $name 转发策略名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  转发策略的管理状态；该字段为预留字段，暂未启用。默认为true。
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 转发策略的管理状态；该字段为预留字段，暂未启用。默认为true。
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
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 转发策略额描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets redirectListenerId
    *  转发到的listener的ID，当action为REDIRECT_TO_LISTENER时生效。当action为REDIRECT_TO_LISTENER时必选
    *
    * @return string|null
    */
    public function getRedirectListenerId()
    {
        return $this->container['redirectListenerId'];
    }

    /**
    * Sets redirectListenerId
    *
    * @param string|null $redirectListenerId 转发到的listener的ID，当action为REDIRECT_TO_LISTENER时生效。当action为REDIRECT_TO_LISTENER时必选
    *
    * @return $this
    */
    public function setRedirectListenerId($redirectListenerId)
    {
        $this->container['redirectListenerId'] = $redirectListenerId;
        return $this;
    }

    /**
    * Gets redirectPoolId
    *  转发到pool的ID。当action为REDIRECT_TO_POOL时生效。使用说明：redirect_pool不能是listener的default_pool，不能已经被其他listener的l7policy所使用。当action为REDIRECT_TO_LISTENER时，不可指定。不允许更新为空。
    *
    * @return string|null
    */
    public function getRedirectPoolId()
    {
        return $this->container['redirectPoolId'];
    }

    /**
    * Sets redirectPoolId
    *
    * @param string|null $redirectPoolId 转发到pool的ID。当action为REDIRECT_TO_POOL时生效。使用说明：redirect_pool不能是listener的default_pool，不能已经被其他listener的l7policy所使用。当action为REDIRECT_TO_LISTENER时，不可指定。不允许更新为空。
    *
    * @return $this
    */
    public function setRedirectPoolId($redirectPoolId)
    {
        $this->container['redirectPoolId'] = $redirectPoolId;
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

