<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Website implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Website';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * value  网站url
    * mainDomain  主域名
    * protectedStatus  WAF开启状态：OPEN | CLOSE
    * isPublic  外网或内网 true：外网 false: 内网
    * remark  网站备注
    * nameServer  网站服务器列表
    * extendProperties  extendProperties
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'value' => 'string',
            'mainDomain' => 'string',
            'protectedStatus' => 'string',
            'isPublic' => 'bool',
            'remark' => 'string',
            'nameServer' => 'string[]',
            'extendProperties' => '\HuaweiCloud\SDK\SecMaster\V1\Model\WebsiteExtendProperties'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * value  网站url
    * mainDomain  主域名
    * protectedStatus  WAF开启状态：OPEN | CLOSE
    * isPublic  外网或内网 true：外网 false: 内网
    * remark  网站备注
    * nameServer  网站服务器列表
    * extendProperties  extendProperties
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'value' => null,
        'mainDomain' => null,
        'protectedStatus' => null,
        'isPublic' => null,
        'remark' => null,
        'nameServer' => null,
        'extendProperties' => null
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
    * value  网站url
    * mainDomain  主域名
    * protectedStatus  WAF开启状态：OPEN | CLOSE
    * isPublic  外网或内网 true：外网 false: 内网
    * remark  网站备注
    * nameServer  网站服务器列表
    * extendProperties  extendProperties
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'value' => 'value',
            'mainDomain' => 'main_domain',
            'protectedStatus' => 'protected_status',
            'isPublic' => 'is_public',
            'remark' => 'remark',
            'nameServer' => 'name_server',
            'extendProperties' => 'extend_properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * value  网站url
    * mainDomain  主域名
    * protectedStatus  WAF开启状态：OPEN | CLOSE
    * isPublic  外网或内网 true：外网 false: 内网
    * remark  网站备注
    * nameServer  网站服务器列表
    * extendProperties  extendProperties
    *
    * @var string[]
    */
    protected static $setters = [
            'value' => 'setValue',
            'mainDomain' => 'setMainDomain',
            'protectedStatus' => 'setProtectedStatus',
            'isPublic' => 'setIsPublic',
            'remark' => 'setRemark',
            'nameServer' => 'setNameServer',
            'extendProperties' => 'setExtendProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * value  网站url
    * mainDomain  主域名
    * protectedStatus  WAF开启状态：OPEN | CLOSE
    * isPublic  外网或内网 true：外网 false: 内网
    * remark  网站备注
    * nameServer  网站服务器列表
    * extendProperties  extendProperties
    *
    * @var string[]
    */
    protected static $getters = [
            'value' => 'getValue',
            'mainDomain' => 'getMainDomain',
            'protectedStatus' => 'getProtectedStatus',
            'isPublic' => 'getIsPublic',
            'remark' => 'getRemark',
            'nameServer' => 'getNameServer',
            'extendProperties' => 'getExtendProperties'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['mainDomain'] = isset($data['mainDomain']) ? $data['mainDomain'] : null;
        $this->container['protectedStatus'] = isset($data['protectedStatus']) ? $data['protectedStatus'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['nameServer'] = isset($data['nameServer']) ? $data['nameServer'] : null;
        $this->container['extendProperties'] = isset($data['extendProperties']) ? $data['extendProperties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
            if ((mb_strlen($this->container['value']) > 256)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['value']) < 0)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['mainDomain'] === null) {
            $invalidProperties[] = "'mainDomain' can't be null";
        }
            if ((mb_strlen($this->container['mainDomain']) > 256)) {
                $invalidProperties[] = "invalid value for 'mainDomain', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['mainDomain']) < 0)) {
                $invalidProperties[] = "invalid value for 'mainDomain', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['protectedStatus'] === null) {
            $invalidProperties[] = "'protectedStatus' can't be null";
        }
            if ((mb_strlen($this->container['protectedStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectedStatus', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['protectedStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectedStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['isPublic'] === null) {
            $invalidProperties[] = "'isPublic' can't be null";
        }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) > 512)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) < 0)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['nameServer'] === null) {
            $invalidProperties[] = "'nameServer' can't be null";
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
    * Gets value
    *  网站url
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value 网站url
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets mainDomain
    *  主域名
    *
    * @return string
    */
    public function getMainDomain()
    {
        return $this->container['mainDomain'];
    }

    /**
    * Sets mainDomain
    *
    * @param string $mainDomain 主域名
    *
    * @return $this
    */
    public function setMainDomain($mainDomain)
    {
        $this->container['mainDomain'] = $mainDomain;
        return $this;
    }

    /**
    * Gets protectedStatus
    *  WAF开启状态：OPEN | CLOSE
    *
    * @return string
    */
    public function getProtectedStatus()
    {
        return $this->container['protectedStatus'];
    }

    /**
    * Sets protectedStatus
    *
    * @param string $protectedStatus WAF开启状态：OPEN | CLOSE
    *
    * @return $this
    */
    public function setProtectedStatus($protectedStatus)
    {
        $this->container['protectedStatus'] = $protectedStatus;
        return $this;
    }

    /**
    * Gets isPublic
    *  外网或内网 true：外网 false: 内网
    *
    * @return bool
    */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
    * Sets isPublic
    *
    * @param bool $isPublic 外网或内网 true：外网 false: 内网
    *
    * @return $this
    */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;
        return $this;
    }

    /**
    * Gets remark
    *  网站备注
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 网站备注
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets nameServer
    *  网站服务器列表
    *
    * @return string[]
    */
    public function getNameServer()
    {
        return $this->container['nameServer'];
    }

    /**
    * Sets nameServer
    *
    * @param string[] $nameServer 网站服务器列表
    *
    * @return $this
    */
    public function setNameServer($nameServer)
    {
        $this->container['nameServer'] = $nameServer;
        return $this;
    }

    /**
    * Gets extendProperties
    *  extendProperties
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\WebsiteExtendProperties|null
    */
    public function getExtendProperties()
    {
        return $this->container['extendProperties'];
    }

    /**
    * Sets extendProperties
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\WebsiteExtendProperties|null $extendProperties extendProperties
    *
    * @return $this
    */
    public function setExtendProperties($extendProperties)
    {
        $this->container['extendProperties'] = $extendProperties;
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

