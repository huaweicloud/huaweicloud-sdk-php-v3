<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddWafWhiteIpRuleV2RequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddWafWhiteIpRuleV2RequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainName  域名+端口组合，标准端口80/443无须加端口。
    * ips  待添加ip/ip段
    * overseasType  防护区域,0-大陆,1-海外
    * type  0-黑名单，1-白名单
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainName' => 'string',
            'ips' => 'string[]',
            'overseasType' => 'int',
            'type' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainName  域名+端口组合，标准端口80/443无须加端口。
    * ips  待添加ip/ip段
    * overseasType  防护区域,0-大陆,1-海外
    * type  0-黑名单，1-白名单
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainName' => null,
        'ips' => null,
        'overseasType' => 'int32',
        'type' => 'int32'
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
    * domainName  域名+端口组合，标准端口80/443无须加端口。
    * ips  待添加ip/ip段
    * overseasType  防护区域,0-大陆,1-海外
    * type  0-黑名单，1-白名单
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainName' => 'domain_name',
            'ips' => 'ips',
            'overseasType' => 'overseas_type',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainName  域名+端口组合，标准端口80/443无须加端口。
    * ips  待添加ip/ip段
    * overseasType  防护区域,0-大陆,1-海外
    * type  0-黑名单，1-白名单
    *
    * @var string[]
    */
    protected static $setters = [
            'domainName' => 'setDomainName',
            'ips' => 'setIps',
            'overseasType' => 'setOverseasType',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainName  域名+端口组合，标准端口80/443无须加端口。
    * ips  待添加ip/ip段
    * overseasType  防护区域,0-大陆,1-海外
    * type  0-黑名单，1-白名单
    *
    * @var string[]
    */
    protected static $getters = [
            'domainName' => 'getDomainName',
            'ips' => 'getIps',
            'overseasType' => 'getOverseasType',
            'type' => 'getType'
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
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['ips'] = isset($data['ips']) ? $data['ips'] : null;
        $this->container['overseasType'] = isset($data['overseasType']) ? $data['overseasType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
        if ($this->container['ips'] === null) {
            $invalidProperties[] = "'ips' can't be null";
        }
        if ($this->container['overseasType'] === null) {
            $invalidProperties[] = "'overseasType' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets domainName
    *  域名+端口组合，标准端口80/443无须加端口。
    *
    * @return string
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string $domainName 域名+端口组合，标准端口80/443无须加端口。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets ips
    *  待添加ip/ip段
    *
    * @return string[]
    */
    public function getIps()
    {
        return $this->container['ips'];
    }

    /**
    * Sets ips
    *
    * @param string[] $ips 待添加ip/ip段
    *
    * @return $this
    */
    public function setIps($ips)
    {
        $this->container['ips'] = $ips;
        return $this;
    }

    /**
    * Gets overseasType
    *  防护区域,0-大陆,1-海外
    *
    * @return int
    */
    public function getOverseasType()
    {
        return $this->container['overseasType'];
    }

    /**
    * Sets overseasType
    *
    * @param int $overseasType 防护区域,0-大陆,1-海外
    *
    * @return $this
    */
    public function setOverseasType($overseasType)
    {
        $this->container['overseasType'] = $overseasType;
        return $this;
    }

    /**
    * Gets type
    *  0-黑名单，1-白名单
    *
    * @return int
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int $type 0-黑名单，1-白名单
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

