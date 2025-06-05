<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddLoginWhiteListRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddLoginWhiteListRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * privateIp  服务器私有IP
    * loginIp  登录源IP
    * loginUserName  登录用户名
    * remarks  备注
    * handleEvent  是否同时处理相关告警事件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'privateIp' => 'string',
            'loginIp' => 'string',
            'loginUserName' => 'string',
            'remarks' => 'string',
            'handleEvent' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * privateIp  服务器私有IP
    * loginIp  登录源IP
    * loginUserName  登录用户名
    * remarks  备注
    * handleEvent  是否同时处理相关告警事件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'privateIp' => null,
        'loginIp' => null,
        'loginUserName' => null,
        'remarks' => null,
        'handleEvent' => null
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
    * privateIp  服务器私有IP
    * loginIp  登录源IP
    * loginUserName  登录用户名
    * remarks  备注
    * handleEvent  是否同时处理相关告警事件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'privateIp' => 'private_ip',
            'loginIp' => 'login_ip',
            'loginUserName' => 'login_user_name',
            'remarks' => 'remarks',
            'handleEvent' => 'handle_event'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * privateIp  服务器私有IP
    * loginIp  登录源IP
    * loginUserName  登录用户名
    * remarks  备注
    * handleEvent  是否同时处理相关告警事件
    *
    * @var string[]
    */
    protected static $setters = [
            'privateIp' => 'setPrivateIp',
            'loginIp' => 'setLoginIp',
            'loginUserName' => 'setLoginUserName',
            'remarks' => 'setRemarks',
            'handleEvent' => 'setHandleEvent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * privateIp  服务器私有IP
    * loginIp  登录源IP
    * loginUserName  登录用户名
    * remarks  备注
    * handleEvent  是否同时处理相关告警事件
    *
    * @var string[]
    */
    protected static $getters = [
            'privateIp' => 'getPrivateIp',
            'loginIp' => 'getLoginIp',
            'loginUserName' => 'getLoginUserName',
            'remarks' => 'getRemarks',
            'handleEvent' => 'getHandleEvent'
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
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['loginIp'] = isset($data['loginIp']) ? $data['loginIp'] : null;
        $this->container['loginUserName'] = isset($data['loginUserName']) ? $data['loginUserName'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['handleEvent'] = isset($data['handleEvent']) ? $data['handleEvent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['privateIp'] === null) {
            $invalidProperties[] = "'privateIp' can't be null";
        }
            if ((mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['privateIp'])) {
                $invalidProperties[] = "invalid value for 'privateIp', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['loginIp'] === null) {
            $invalidProperties[] = "'loginIp' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['loginIp'])) {
                $invalidProperties[] = "invalid value for 'loginIp', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['loginUserName'] === null) {
            $invalidProperties[] = "'loginUserName' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['loginUserName'])) {
                $invalidProperties[] = "invalid value for 'loginUserName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['remarks']) && (mb_strlen($this->container['remarks']) > 128)) {
                $invalidProperties[] = "invalid value for 'remarks', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['remarks']) && (mb_strlen($this->container['remarks']) < 1)) {
                $invalidProperties[] = "invalid value for 'remarks', the character length must be bigger than or equal to 1.";
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
    * Gets privateIp
    *  服务器私有IP
    *
    * @return string
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string $privateIp 服务器私有IP
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets loginIp
    *  登录源IP
    *
    * @return string
    */
    public function getLoginIp()
    {
        return $this->container['loginIp'];
    }

    /**
    * Sets loginIp
    *
    * @param string $loginIp 登录源IP
    *
    * @return $this
    */
    public function setLoginIp($loginIp)
    {
        $this->container['loginIp'] = $loginIp;
        return $this;
    }

    /**
    * Gets loginUserName
    *  登录用户名
    *
    * @return string
    */
    public function getLoginUserName()
    {
        return $this->container['loginUserName'];
    }

    /**
    * Sets loginUserName
    *
    * @param string $loginUserName 登录用户名
    *
    * @return $this
    */
    public function setLoginUserName($loginUserName)
    {
        $this->container['loginUserName'] = $loginUserName;
        return $this;
    }

    /**
    * Gets remarks
    *  备注
    *
    * @return string|null
    */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
    * Sets remarks
    *
    * @param string|null $remarks 备注
    *
    * @return $this
    */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;
        return $this;
    }

    /**
    * Gets handleEvent
    *  是否同时处理相关告警事件
    *
    * @return bool|null
    */
    public function getHandleEvent()
    {
        return $this->container['handleEvent'];
    }

    /**
    * Sets handleEvent
    *
    * @param bool|null $handleEvent 是否同时处理相关告警事件
    *
    * @return $this
    */
    public function setHandleEvent($handleEvent)
    {
        $this->container['handleEvent'] = $handleEvent;
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

