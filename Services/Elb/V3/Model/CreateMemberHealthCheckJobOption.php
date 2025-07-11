<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateMemberHealthCheckJobOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateMemberHealthCheckJobOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * listenerId  参数解释：后端服务器所关联的监听器，查询在该监听器下后端服务器的状态。
    * subject  参数法解释：检查项。  取值范围： - securityGroup：安全组检查。 - networkAcl：子网ACL配置检查。 - config：健康检查端口配置检查。 - all：所有检查项。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'listenerId' => 'string',
            'subject' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * listenerId  参数解释：后端服务器所关联的监听器，查询在该监听器下后端服务器的状态。
    * subject  参数法解释：检查项。  取值范围： - securityGroup：安全组检查。 - networkAcl：子网ACL配置检查。 - config：健康检查端口配置检查。 - all：所有检查项。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'listenerId' => null,
        'subject' => null
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
    * listenerId  参数解释：后端服务器所关联的监听器，查询在该监听器下后端服务器的状态。
    * subject  参数法解释：检查项。  取值范围： - securityGroup：安全组检查。 - networkAcl：子网ACL配置检查。 - config：健康检查端口配置检查。 - all：所有检查项。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'listenerId' => 'listener_id',
            'subject' => 'subject'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * listenerId  参数解释：后端服务器所关联的监听器，查询在该监听器下后端服务器的状态。
    * subject  参数法解释：检查项。  取值范围： - securityGroup：安全组检查。 - networkAcl：子网ACL配置检查。 - config：健康检查端口配置检查。 - all：所有检查项。
    *
    * @var string[]
    */
    protected static $setters = [
            'listenerId' => 'setListenerId',
            'subject' => 'setSubject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * listenerId  参数解释：后端服务器所关联的监听器，查询在该监听器下后端服务器的状态。
    * subject  参数法解释：检查项。  取值范围： - securityGroup：安全组检查。 - networkAcl：子网ACL配置检查。 - config：健康检查端口配置检查。 - all：所有检查项。
    *
    * @var string[]
    */
    protected static $getters = [
            'listenerId' => 'getListenerId',
            'subject' => 'getSubject'
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
        $this->container['listenerId'] = isset($data['listenerId']) ? $data['listenerId'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['listenerId'] === null) {
            $invalidProperties[] = "'listenerId' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
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
    * Gets listenerId
    *  参数解释：后端服务器所关联的监听器，查询在该监听器下后端服务器的状态。
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
    * @param string $listenerId 参数解释：后端服务器所关联的监听器，查询在该监听器下后端服务器的状态。
    *
    * @return $this
    */
    public function setListenerId($listenerId)
    {
        $this->container['listenerId'] = $listenerId;
        return $this;
    }

    /**
    * Gets subject
    *  参数法解释：检查项。  取值范围： - securityGroup：安全组检查。 - networkAcl：子网ACL配置检查。 - config：健康检查端口配置检查。 - all：所有检查项。
    *
    * @return string
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string $subject 参数法解释：检查项。  取值范围： - securityGroup：安全组检查。 - networkAcl：子网ACL配置检查。 - config：健康检查端口配置检查。 - all：所有检查项。
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
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

