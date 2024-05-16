<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HtapInstanceListInstanceState implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HtapInstanceList_instance_state';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceStatus  HTAP实例状态。
    * createFailErrorCode  HTAP实例创建失败错误码。
    * failMessage  HTAP实例创建失败错误信息。
    * waitRestartForParams  是否需要重启更新参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceStatus' => 'string',
            'createFailErrorCode' => 'string',
            'failMessage' => 'string',
            'waitRestartForParams' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceStatus  HTAP实例状态。
    * createFailErrorCode  HTAP实例创建失败错误码。
    * failMessage  HTAP实例创建失败错误信息。
    * waitRestartForParams  是否需要重启更新参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceStatus' => null,
        'createFailErrorCode' => null,
        'failMessage' => null,
        'waitRestartForParams' => null
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
    * instanceStatus  HTAP实例状态。
    * createFailErrorCode  HTAP实例创建失败错误码。
    * failMessage  HTAP实例创建失败错误信息。
    * waitRestartForParams  是否需要重启更新参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceStatus' => 'instance_status',
            'createFailErrorCode' => 'create_fail_error_code',
            'failMessage' => 'fail_message',
            'waitRestartForParams' => 'wait_restart_for_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceStatus  HTAP实例状态。
    * createFailErrorCode  HTAP实例创建失败错误码。
    * failMessage  HTAP实例创建失败错误信息。
    * waitRestartForParams  是否需要重启更新参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceStatus' => 'setInstanceStatus',
            'createFailErrorCode' => 'setCreateFailErrorCode',
            'failMessage' => 'setFailMessage',
            'waitRestartForParams' => 'setWaitRestartForParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceStatus  HTAP实例状态。
    * createFailErrorCode  HTAP实例创建失败错误码。
    * failMessage  HTAP实例创建失败错误信息。
    * waitRestartForParams  是否需要重启更新参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceStatus' => 'getInstanceStatus',
            'createFailErrorCode' => 'getCreateFailErrorCode',
            'failMessage' => 'getFailMessage',
            'waitRestartForParams' => 'getWaitRestartForParams'
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
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['createFailErrorCode'] = isset($data['createFailErrorCode']) ? $data['createFailErrorCode'] : null;
        $this->container['failMessage'] = isset($data['failMessage']) ? $data['failMessage'] : null;
        $this->container['waitRestartForParams'] = isset($data['waitRestartForParams']) ? $data['waitRestartForParams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets instanceStatus
    *  HTAP实例状态。
    *
    * @return string|null
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param string|null $instanceStatus HTAP实例状态。
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets createFailErrorCode
    *  HTAP实例创建失败错误码。
    *
    * @return string|null
    */
    public function getCreateFailErrorCode()
    {
        return $this->container['createFailErrorCode'];
    }

    /**
    * Sets createFailErrorCode
    *
    * @param string|null $createFailErrorCode HTAP实例创建失败错误码。
    *
    * @return $this
    */
    public function setCreateFailErrorCode($createFailErrorCode)
    {
        $this->container['createFailErrorCode'] = $createFailErrorCode;
        return $this;
    }

    /**
    * Gets failMessage
    *  HTAP实例创建失败错误信息。
    *
    * @return string|null
    */
    public function getFailMessage()
    {
        return $this->container['failMessage'];
    }

    /**
    * Sets failMessage
    *
    * @param string|null $failMessage HTAP实例创建失败错误信息。
    *
    * @return $this
    */
    public function setFailMessage($failMessage)
    {
        $this->container['failMessage'] = $failMessage;
        return $this;
    }

    /**
    * Gets waitRestartForParams
    *  是否需要重启更新参数。
    *
    * @return bool|null
    */
    public function getWaitRestartForParams()
    {
        return $this->container['waitRestartForParams'];
    }

    /**
    * Sets waitRestartForParams
    *
    * @param bool|null $waitRestartForParams 是否需要重启更新参数。
    *
    * @return $this
    */
    public function setWaitRestartForParams($waitRestartForParams)
    {
        $this->container['waitRestartForParams'] = $waitRestartForParams;
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

