<?php

namespace HuaweiCloud\SDK\Cbh\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NetworkRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NetworkRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  云堡垒机实例状态，枚举值如下： - create  创建 - renewals  更新 - change  变更 状态为renewals或change时server_id必传。
    * securityGroups  云堡垒升级实例所在安全组信息。
    * nics  云堡垒机实例的网卡信息。
    * serverId  云堡垒机实例ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'securityGroups' => '\HuaweiCloud\SDK\Cbh\V1\Model\SecurityGroup[]',
            'nics' => '\HuaweiCloud\SDK\Cbh\V1\Model\Nics[]',
            'serverId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  云堡垒机实例状态，枚举值如下： - create  创建 - renewals  更新 - change  变更 状态为renewals或change时server_id必传。
    * securityGroups  云堡垒升级实例所在安全组信息。
    * nics  云堡垒机实例的网卡信息。
    * serverId  云堡垒机实例ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'securityGroups' => null,
        'nics' => null,
        'serverId' => null
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
    * type  云堡垒机实例状态，枚举值如下： - create  创建 - renewals  更新 - change  变更 状态为renewals或change时server_id必传。
    * securityGroups  云堡垒升级实例所在安全组信息。
    * nics  云堡垒机实例的网卡信息。
    * serverId  云堡垒机实例ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'securityGroups' => 'security_groups',
            'nics' => 'nics',
            'serverId' => 'server_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  云堡垒机实例状态，枚举值如下： - create  创建 - renewals  更新 - change  变更 状态为renewals或change时server_id必传。
    * securityGroups  云堡垒升级实例所在安全组信息。
    * nics  云堡垒机实例的网卡信息。
    * serverId  云堡垒机实例ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'securityGroups' => 'setSecurityGroups',
            'nics' => 'setNics',
            'serverId' => 'setServerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  云堡垒机实例状态，枚举值如下： - create  创建 - renewals  更新 - change  变更 状态为renewals或change时server_id必传。
    * securityGroups  云堡垒升级实例所在安全组信息。
    * nics  云堡垒机实例的网卡信息。
    * serverId  云堡垒机实例ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'securityGroups' => 'getSecurityGroups',
            'nics' => 'getNics',
            'serverId' => 'getServerId'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['securityGroups'] === null) {
            $invalidProperties[] = "'securityGroups' can't be null";
        }
        if ($this->container['nics'] === null) {
            $invalidProperties[] = "'nics' can't be null";
        }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) > 64)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be bigger than or equal to 0.";
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
    * Gets type
    *  云堡垒机实例状态，枚举值如下： - create  创建 - renewals  更新 - change  变更 状态为renewals或change时server_id必传。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 云堡垒机实例状态，枚举值如下： - create  创建 - renewals  更新 - change  变更 状态为renewals或change时server_id必传。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets securityGroups
    *  云堡垒升级实例所在安全组信息。
    *
    * @return \HuaweiCloud\SDK\Cbh\V1\Model\SecurityGroup[]
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Cbh\V1\Model\SecurityGroup[] $securityGroups 云堡垒升级实例所在安全组信息。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets nics
    *  云堡垒机实例的网卡信息。
    *
    * @return \HuaweiCloud\SDK\Cbh\V1\Model\Nics[]
    */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
    * Sets nics
    *
    * @param \HuaweiCloud\SDK\Cbh\V1\Model\Nics[] $nics 云堡垒机实例的网卡信息。
    *
    * @return $this
    */
    public function setNics($nics)
    {
        $this->container['nics'] = $nics;
        return $this;
    }

    /**
    * Gets serverId
    *  云堡垒机实例ID。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 云堡垒机实例ID。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
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

