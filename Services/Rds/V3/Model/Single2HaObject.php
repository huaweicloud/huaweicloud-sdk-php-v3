<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Single2HaObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Single2HaObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * azCodeNewNode  实例节点可用区码（AZ）。
    * dsspoolId  Dec用户专属存储ID，每个az配置的专属存储不同，实例节点所在专属存储ID，仅支持DEC用户创建时使用。
    * isAutoPay  仅包周期实例进行单机转主备时可指定，表示是否自动从客户的账户中支付。 - true，为自动支付。 - false，为手动支付，默认该方式。
    * adDomainInfo  adDomainInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'azCodeNewNode' => 'string',
            'dsspoolId' => 'string',
            'isAutoPay' => 'bool',
            'adDomainInfo' => '\HuaweiCloud\SDK\Rds\V3\Model\ADDomainInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * azCodeNewNode  实例节点可用区码（AZ）。
    * dsspoolId  Dec用户专属存储ID，每个az配置的专属存储不同，实例节点所在专属存储ID，仅支持DEC用户创建时使用。
    * isAutoPay  仅包周期实例进行单机转主备时可指定，表示是否自动从客户的账户中支付。 - true，为自动支付。 - false，为手动支付，默认该方式。
    * adDomainInfo  adDomainInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'azCodeNewNode' => null,
        'dsspoolId' => null,
        'isAutoPay' => null,
        'adDomainInfo' => null
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
    * azCodeNewNode  实例节点可用区码（AZ）。
    * dsspoolId  Dec用户专属存储ID，每个az配置的专属存储不同，实例节点所在专属存储ID，仅支持DEC用户创建时使用。
    * isAutoPay  仅包周期实例进行单机转主备时可指定，表示是否自动从客户的账户中支付。 - true，为自动支付。 - false，为手动支付，默认该方式。
    * adDomainInfo  adDomainInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'azCodeNewNode' => 'az_code_new_node',
            'dsspoolId' => 'dsspool_id',
            'isAutoPay' => 'is_auto_pay',
            'adDomainInfo' => 'ad_domain_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * azCodeNewNode  实例节点可用区码（AZ）。
    * dsspoolId  Dec用户专属存储ID，每个az配置的专属存储不同，实例节点所在专属存储ID，仅支持DEC用户创建时使用。
    * isAutoPay  仅包周期实例进行单机转主备时可指定，表示是否自动从客户的账户中支付。 - true，为自动支付。 - false，为手动支付，默认该方式。
    * adDomainInfo  adDomainInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'azCodeNewNode' => 'setAzCodeNewNode',
            'dsspoolId' => 'setDsspoolId',
            'isAutoPay' => 'setIsAutoPay',
            'adDomainInfo' => 'setAdDomainInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * azCodeNewNode  实例节点可用区码（AZ）。
    * dsspoolId  Dec用户专属存储ID，每个az配置的专属存储不同，实例节点所在专属存储ID，仅支持DEC用户创建时使用。
    * isAutoPay  仅包周期实例进行单机转主备时可指定，表示是否自动从客户的账户中支付。 - true，为自动支付。 - false，为手动支付，默认该方式。
    * adDomainInfo  adDomainInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'azCodeNewNode' => 'getAzCodeNewNode',
            'dsspoolId' => 'getDsspoolId',
            'isAutoPay' => 'getIsAutoPay',
            'adDomainInfo' => 'getAdDomainInfo'
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
        $this->container['azCodeNewNode'] = isset($data['azCodeNewNode']) ? $data['azCodeNewNode'] : null;
        $this->container['dsspoolId'] = isset($data['dsspoolId']) ? $data['dsspoolId'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['adDomainInfo'] = isset($data['adDomainInfo']) ? $data['adDomainInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['azCodeNewNode'] === null) {
            $invalidProperties[] = "'azCodeNewNode' can't be null";
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
    * Gets azCodeNewNode
    *  实例节点可用区码（AZ）。
    *
    * @return string
    */
    public function getAzCodeNewNode()
    {
        return $this->container['azCodeNewNode'];
    }

    /**
    * Sets azCodeNewNode
    *
    * @param string $azCodeNewNode 实例节点可用区码（AZ）。
    *
    * @return $this
    */
    public function setAzCodeNewNode($azCodeNewNode)
    {
        $this->container['azCodeNewNode'] = $azCodeNewNode;
        return $this;
    }

    /**
    * Gets dsspoolId
    *  Dec用户专属存储ID，每个az配置的专属存储不同，实例节点所在专属存储ID，仅支持DEC用户创建时使用。
    *
    * @return string|null
    */
    public function getDsspoolId()
    {
        return $this->container['dsspoolId'];
    }

    /**
    * Sets dsspoolId
    *
    * @param string|null $dsspoolId Dec用户专属存储ID，每个az配置的专属存储不同，实例节点所在专属存储ID，仅支持DEC用户创建时使用。
    *
    * @return $this
    */
    public function setDsspoolId($dsspoolId)
    {
        $this->container['dsspoolId'] = $dsspoolId;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  仅包周期实例进行单机转主备时可指定，表示是否自动从客户的账户中支付。 - true，为自动支付。 - false，为手动支付，默认该方式。
    *
    * @return bool|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool|null $isAutoPay 仅包周期实例进行单机转主备时可指定，表示是否自动从客户的账户中支付。 - true，为自动支付。 - false，为手动支付，默认该方式。
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets adDomainInfo
    *  adDomainInfo
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ADDomainInfo|null
    */
    public function getAdDomainInfo()
    {
        return $this->container['adDomainInfo'];
    }

    /**
    * Sets adDomainInfo
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ADDomainInfo|null $adDomainInfo adDomainInfo
    *
    * @return $this
    */
    public function setAdDomainInfo($adDomainInfo)
    {
        $this->container['adDomainInfo'] = $adDomainInfo;
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

