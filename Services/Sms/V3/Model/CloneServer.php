<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloneServer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloneServer';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vmId  克隆服务器ID
    * name  克隆虚拟机的名称
    * cloneError  克隆错误信息
    * cloneState  克隆状态
    * errorMsg  克隆错误信息描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vmId' => 'string',
            'name' => 'string',
            'cloneError' => 'string',
            'cloneState' => 'string',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vmId  克隆服务器ID
    * name  克隆虚拟机的名称
    * cloneError  克隆错误信息
    * cloneState  克隆状态
    * errorMsg  克隆错误信息描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vmId' => null,
        'name' => null,
        'cloneError' => null,
        'cloneState' => null,
        'errorMsg' => null
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
    * vmId  克隆服务器ID
    * name  克隆虚拟机的名称
    * cloneError  克隆错误信息
    * cloneState  克隆状态
    * errorMsg  克隆错误信息描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vmId' => 'vm_id',
            'name' => 'name',
            'cloneError' => 'clone_error',
            'cloneState' => 'clone_state',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vmId  克隆服务器ID
    * name  克隆虚拟机的名称
    * cloneError  克隆错误信息
    * cloneState  克隆状态
    * errorMsg  克隆错误信息描述
    *
    * @var string[]
    */
    protected static $setters = [
            'vmId' => 'setVmId',
            'name' => 'setName',
            'cloneError' => 'setCloneError',
            'cloneState' => 'setCloneState',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vmId  克隆服务器ID
    * name  克隆虚拟机的名称
    * cloneError  克隆错误信息
    * cloneState  克隆状态
    * errorMsg  克隆错误信息描述
    *
    * @var string[]
    */
    protected static $getters = [
            'vmId' => 'getVmId',
            'name' => 'getName',
            'cloneError' => 'getCloneError',
            'cloneState' => 'getCloneState',
            'errorMsg' => 'getErrorMsg'
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
        $this->container['vmId'] = isset($data['vmId']) ? $data['vmId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['cloneError'] = isset($data['cloneError']) ? $data['cloneError'] : null;
        $this->container['cloneState'] = isset($data['cloneState']) ? $data['cloneState'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vmId']) && (mb_strlen($this->container['vmId']) > 255)) {
                $invalidProperties[] = "invalid value for 'vmId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['vmId']) && (mb_strlen($this->container['vmId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vmId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cloneError']) && (mb_strlen($this->container['cloneError']) > 255)) {
                $invalidProperties[] = "invalid value for 'cloneError', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['cloneError']) && (mb_strlen($this->container['cloneError']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloneError', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cloneState']) && (mb_strlen($this->container['cloneState']) > 255)) {
                $invalidProperties[] = "invalid value for 'cloneState', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['cloneState']) && (mb_strlen($this->container['cloneState']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloneState', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) > 1024)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be bigger than or equal to 0.";
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
    * Gets vmId
    *  克隆服务器ID
    *
    * @return string|null
    */
    public function getVmId()
    {
        return $this->container['vmId'];
    }

    /**
    * Sets vmId
    *
    * @param string|null $vmId 克隆服务器ID
    *
    * @return $this
    */
    public function setVmId($vmId)
    {
        $this->container['vmId'] = $vmId;
        return $this;
    }

    /**
    * Gets name
    *  克隆虚拟机的名称
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
    * @param string|null $name 克隆虚拟机的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets cloneError
    *  克隆错误信息
    *
    * @return string|null
    */
    public function getCloneError()
    {
        return $this->container['cloneError'];
    }

    /**
    * Sets cloneError
    *
    * @param string|null $cloneError 克隆错误信息
    *
    * @return $this
    */
    public function setCloneError($cloneError)
    {
        $this->container['cloneError'] = $cloneError;
        return $this;
    }

    /**
    * Gets cloneState
    *  克隆状态
    *
    * @return string|null
    */
    public function getCloneState()
    {
        return $this->container['cloneState'];
    }

    /**
    * Sets cloneState
    *
    * @param string|null $cloneState 克隆状态
    *
    * @return $this
    */
    public function setCloneState($cloneState)
    {
        $this->container['cloneState'] = $cloneState;
        return $this;
    }

    /**
    * Gets errorMsg
    *  克隆错误信息描述
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 克隆错误信息描述
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
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

