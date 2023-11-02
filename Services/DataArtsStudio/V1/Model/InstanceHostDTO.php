<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceHostDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceHostDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  集群id
    * instanceName  集群名
    * intranetHost  内网地址
    * externalHost  外网地址
    * domains  网关域名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceName' => 'string',
            'intranetHost' => 'string',
            'externalHost' => 'string',
            'domains' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  集群id
    * instanceName  集群名
    * intranetHost  内网地址
    * externalHost  外网地址
    * domains  网关域名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceName' => null,
        'intranetHost' => null,
        'externalHost' => null,
        'domains' => null
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
    * instanceId  集群id
    * instanceName  集群名
    * intranetHost  内网地址
    * externalHost  外网地址
    * domains  网关域名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'intranetHost' => 'intranet_host',
            'externalHost' => 'external_host',
            'domains' => 'domains'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  集群id
    * instanceName  集群名
    * intranetHost  内网地址
    * externalHost  外网地址
    * domains  网关域名
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'intranetHost' => 'setIntranetHost',
            'externalHost' => 'setExternalHost',
            'domains' => 'setDomains'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  集群id
    * instanceName  集群名
    * intranetHost  内网地址
    * externalHost  外网地址
    * domains  网关域名
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'intranetHost' => 'getIntranetHost',
            'externalHost' => 'getExternalHost',
            'domains' => 'getDomains'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['intranetHost'] = isset($data['intranetHost']) ? $data['intranetHost'] : null;
        $this->container['externalHost'] = isset($data['externalHost']) ? $data['externalHost'] : null;
        $this->container['domains'] = isset($data['domains']) ? $data['domains'] : null;
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
    * Gets instanceId
    *  集群id
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
    * @param string|null $instanceId 集群id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  集群名
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
    * @param string|null $instanceName 集群名
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets intranetHost
    *  内网地址
    *
    * @return string|null
    */
    public function getIntranetHost()
    {
        return $this->container['intranetHost'];
    }

    /**
    * Sets intranetHost
    *
    * @param string|null $intranetHost 内网地址
    *
    * @return $this
    */
    public function setIntranetHost($intranetHost)
    {
        $this->container['intranetHost'] = $intranetHost;
        return $this;
    }

    /**
    * Gets externalHost
    *  外网地址
    *
    * @return string|null
    */
    public function getExternalHost()
    {
        return $this->container['externalHost'];
    }

    /**
    * Sets externalHost
    *
    * @param string|null $externalHost 外网地址
    *
    * @return $this
    */
    public function setExternalHost($externalHost)
    {
        $this->container['externalHost'] = $externalHost;
        return $this;
    }

    /**
    * Gets domains
    *  网关域名
    *
    * @return string[]|null
    */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
    * Sets domains
    *
    * @param string[]|null $domains 网关域名
    *
    * @return $this
    */
    public function setDomains($domains)
    {
        $this->container['domains'] = $domains;
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

