<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConstructReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConstructReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * disasterType  容灾类型。
    * drIp  对端实例任意数据ip。
    * drUserName  对端实例账户名称。
    * drUserPassword  对端实例账户密码。
    * drTaskName  容灾任务名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'disasterType' => 'string',
            'drIp' => 'string',
            'drUserName' => 'string',
            'drUserPassword' => 'string',
            'drTaskName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * disasterType  容灾类型。
    * drIp  对端实例任意数据ip。
    * drUserName  对端实例账户名称。
    * drUserPassword  对端实例账户密码。
    * drTaskName  容灾任务名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'disasterType' => null,
        'drIp' => null,
        'drUserName' => null,
        'drUserPassword' => null,
        'drTaskName' => null
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
    * disasterType  容灾类型。
    * drIp  对端实例任意数据ip。
    * drUserName  对端实例账户名称。
    * drUserPassword  对端实例账户密码。
    * drTaskName  容灾任务名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'disasterType' => 'disaster_type',
            'drIp' => 'dr_ip',
            'drUserName' => 'dr_user_name',
            'drUserPassword' => 'dr_user_password',
            'drTaskName' => 'dr_task_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * disasterType  容灾类型。
    * drIp  对端实例任意数据ip。
    * drUserName  对端实例账户名称。
    * drUserPassword  对端实例账户密码。
    * drTaskName  容灾任务名称
    *
    * @var string[]
    */
    protected static $setters = [
            'disasterType' => 'setDisasterType',
            'drIp' => 'setDrIp',
            'drUserName' => 'setDrUserName',
            'drUserPassword' => 'setDrUserPassword',
            'drTaskName' => 'setDrTaskName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * disasterType  容灾类型。
    * drIp  对端实例任意数据ip。
    * drUserName  对端实例账户名称。
    * drUserPassword  对端实例账户密码。
    * drTaskName  容灾任务名称
    *
    * @var string[]
    */
    protected static $getters = [
            'disasterType' => 'getDisasterType',
            'drIp' => 'getDrIp',
            'drUserName' => 'getDrUserName',
            'drUserPassword' => 'getDrUserPassword',
            'drTaskName' => 'getDrTaskName'
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
    const DISASTER_TYPE_STREAM = 'stream';
    const DISASTER_TYPE_DORADO = 'dorado';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDisasterTypeAllowableValues()
    {
        return [
            self::DISASTER_TYPE_STREAM,
            self::DISASTER_TYPE_DORADO,
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
        $this->container['disasterType'] = isset($data['disasterType']) ? $data['disasterType'] : null;
        $this->container['drIp'] = isset($data['drIp']) ? $data['drIp'] : null;
        $this->container['drUserName'] = isset($data['drUserName']) ? $data['drUserName'] : null;
        $this->container['drUserPassword'] = isset($data['drUserPassword']) ? $data['drUserPassword'] : null;
        $this->container['drTaskName'] = isset($data['drTaskName']) ? $data['drTaskName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['disasterType'] === null) {
            $invalidProperties[] = "'disasterType' can't be null";
        }
            $allowedValues = $this->getDisasterTypeAllowableValues();
                if (!is_null($this->container['disasterType']) && !in_array($this->container['disasterType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'disasterType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['drIp'] === null) {
            $invalidProperties[] = "'drIp' can't be null";
        }
        if ($this->container['drUserName'] === null) {
            $invalidProperties[] = "'drUserName' can't be null";
        }
        if ($this->container['drUserPassword'] === null) {
            $invalidProperties[] = "'drUserPassword' can't be null";
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
    * Gets disasterType
    *  容灾类型。
    *
    * @return string
    */
    public function getDisasterType()
    {
        return $this->container['disasterType'];
    }

    /**
    * Sets disasterType
    *
    * @param string $disasterType 容灾类型。
    *
    * @return $this
    */
    public function setDisasterType($disasterType)
    {
        $this->container['disasterType'] = $disasterType;
        return $this;
    }

    /**
    * Gets drIp
    *  对端实例任意数据ip。
    *
    * @return string
    */
    public function getDrIp()
    {
        return $this->container['drIp'];
    }

    /**
    * Sets drIp
    *
    * @param string $drIp 对端实例任意数据ip。
    *
    * @return $this
    */
    public function setDrIp($drIp)
    {
        $this->container['drIp'] = $drIp;
        return $this;
    }

    /**
    * Gets drUserName
    *  对端实例账户名称。
    *
    * @return string
    */
    public function getDrUserName()
    {
        return $this->container['drUserName'];
    }

    /**
    * Sets drUserName
    *
    * @param string $drUserName 对端实例账户名称。
    *
    * @return $this
    */
    public function setDrUserName($drUserName)
    {
        $this->container['drUserName'] = $drUserName;
        return $this;
    }

    /**
    * Gets drUserPassword
    *  对端实例账户密码。
    *
    * @return string
    */
    public function getDrUserPassword()
    {
        return $this->container['drUserPassword'];
    }

    /**
    * Sets drUserPassword
    *
    * @param string $drUserPassword 对端实例账户密码。
    *
    * @return $this
    */
    public function setDrUserPassword($drUserPassword)
    {
        $this->container['drUserPassword'] = $drUserPassword;
        return $this;
    }

    /**
    * Gets drTaskName
    *  容灾任务名称
    *
    * @return string|null
    */
    public function getDrTaskName()
    {
        return $this->container['drTaskName'];
    }

    /**
    * Sets drTaskName
    *
    * @param string|null $drTaskName 容灾任务名称
    *
    * @return $this
    */
    public function setDrTaskName($drTaskName)
    {
        $this->container['drTaskName'] = $drTaskName;
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

