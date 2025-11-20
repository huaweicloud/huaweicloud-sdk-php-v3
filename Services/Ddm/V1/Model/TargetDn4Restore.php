<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TargetDn4Restore implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TargetDn4Restore';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceName  实例名称。
    * instanceId  实例ID。
    * engineName  引擎名称。
    * status  状态。
    * available  是否可用。
    * unavailableReason  无法使用原因。
    * vpcName  虚拟私有云名称。
    * privateIp  私有ip。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceName' => 'string',
            'instanceId' => 'string',
            'engineName' => 'string',
            'status' => 'string',
            'available' => 'bool',
            'unavailableReason' => 'string',
            'vpcName' => 'string',
            'privateIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceName  实例名称。
    * instanceId  实例ID。
    * engineName  引擎名称。
    * status  状态。
    * available  是否可用。
    * unavailableReason  无法使用原因。
    * vpcName  虚拟私有云名称。
    * privateIp  私有ip。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceName' => null,
        'instanceId' => null,
        'engineName' => null,
        'status' => null,
        'available' => null,
        'unavailableReason' => null,
        'vpcName' => null,
        'privateIp' => null
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
    * instanceName  实例名称。
    * instanceId  实例ID。
    * engineName  引擎名称。
    * status  状态。
    * available  是否可用。
    * unavailableReason  无法使用原因。
    * vpcName  虚拟私有云名称。
    * privateIp  私有ip。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceName' => 'instance_name',
            'instanceId' => 'instance_id',
            'engineName' => 'engine_name',
            'status' => 'status',
            'available' => 'available',
            'unavailableReason' => 'unavailable_reason',
            'vpcName' => 'vpc_name',
            'privateIp' => 'private_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceName  实例名称。
    * instanceId  实例ID。
    * engineName  引擎名称。
    * status  状态。
    * available  是否可用。
    * unavailableReason  无法使用原因。
    * vpcName  虚拟私有云名称。
    * privateIp  私有ip。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceName' => 'setInstanceName',
            'instanceId' => 'setInstanceId',
            'engineName' => 'setEngineName',
            'status' => 'setStatus',
            'available' => 'setAvailable',
            'unavailableReason' => 'setUnavailableReason',
            'vpcName' => 'setVpcName',
            'privateIp' => 'setPrivateIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceName  实例名称。
    * instanceId  实例ID。
    * engineName  引擎名称。
    * status  状态。
    * available  是否可用。
    * unavailableReason  无法使用原因。
    * vpcName  虚拟私有云名称。
    * privateIp  私有ip。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceName' => 'getInstanceName',
            'instanceId' => 'getInstanceId',
            'engineName' => 'getEngineName',
            'status' => 'getStatus',
            'available' => 'getAvailable',
            'unavailableReason' => 'getUnavailableReason',
            'vpcName' => 'getVpcName',
            'privateIp' => 'getPrivateIp'
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
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['unavailableReason'] = isset($data['unavailableReason']) ? $data['unavailableReason'] : null;
        $this->container['vpcName'] = isset($data['vpcName']) ? $data['vpcName'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['engineName']) && (mb_strlen($this->container['engineName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'engineName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['engineName']) && (mb_strlen($this->container['engineName']) < 1)) {
                $invalidProperties[] = "invalid value for 'engineName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['unavailableReason']) && (mb_strlen($this->container['unavailableReason']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unavailableReason', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unavailableReason']) && (mb_strlen($this->container['unavailableReason']) < 1)) {
                $invalidProperties[] = "invalid value for 'unavailableReason', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vpcName']) && (mb_strlen($this->container['vpcName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vpcName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['vpcName']) && (mb_strlen($this->container['vpcName']) < 1)) {
                $invalidProperties[] = "invalid value for 'vpcName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
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
    * Gets instanceName
    *  实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets engineName
    *  引擎名称。
    *
    * @return string|null
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string|null $engineName 引擎名称。
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets status
    *  状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets available
    *  是否可用。
    *
    * @return bool|null
    */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
    * Sets available
    *
    * @param bool|null $available 是否可用。
    *
    * @return $this
    */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;
        return $this;
    }

    /**
    * Gets unavailableReason
    *  无法使用原因。
    *
    * @return string|null
    */
    public function getUnavailableReason()
    {
        return $this->container['unavailableReason'];
    }

    /**
    * Sets unavailableReason
    *
    * @param string|null $unavailableReason 无法使用原因。
    *
    * @return $this
    */
    public function setUnavailableReason($unavailableReason)
    {
        $this->container['unavailableReason'] = $unavailableReason;
        return $this;
    }

    /**
    * Gets vpcName
    *  虚拟私有云名称。
    *
    * @return string|null
    */
    public function getVpcName()
    {
        return $this->container['vpcName'];
    }

    /**
    * Sets vpcName
    *
    * @param string|null $vpcName 虚拟私有云名称。
    *
    * @return $this
    */
    public function setVpcName($vpcName)
    {
        $this->container['vpcName'] = $vpcName;
        return $this;
    }

    /**
    * Gets privateIp
    *  私有ip。
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 私有ip。
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
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

