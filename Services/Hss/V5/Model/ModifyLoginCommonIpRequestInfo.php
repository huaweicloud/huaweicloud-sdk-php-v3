<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyLoginCommonIpRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyLoginCommonIpRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ipAddr  **参数解释**： 登录IP或登录网段,登录网段由IP地址和掩码组成,以'/'连接。 **取值范围**： 字符长度1-128位
    * hostIdList  **参数解释**： 服务器ID列表,不可为NULL,删除常用登录IP时,需要将服务器ID列表置为空列表[]。 **取值范围**： 最小值0，最大值200
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ipAddr' => 'string',
            'hostIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ipAddr  **参数解释**： 登录IP或登录网段,登录网段由IP地址和掩码组成,以'/'连接。 **取值范围**： 字符长度1-128位
    * hostIdList  **参数解释**： 服务器ID列表,不可为NULL,删除常用登录IP时,需要将服务器ID列表置为空列表[]。 **取值范围**： 最小值0，最大值200
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ipAddr' => null,
        'hostIdList' => null
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
    * ipAddr  **参数解释**： 登录IP或登录网段,登录网段由IP地址和掩码组成,以'/'连接。 **取值范围**： 字符长度1-128位
    * hostIdList  **参数解释**： 服务器ID列表,不可为NULL,删除常用登录IP时,需要将服务器ID列表置为空列表[]。 **取值范围**： 最小值0，最大值200
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ipAddr' => 'ip_addr',
            'hostIdList' => 'host_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ipAddr  **参数解释**： 登录IP或登录网段,登录网段由IP地址和掩码组成,以'/'连接。 **取值范围**： 字符长度1-128位
    * hostIdList  **参数解释**： 服务器ID列表,不可为NULL,删除常用登录IP时,需要将服务器ID列表置为空列表[]。 **取值范围**： 最小值0，最大值200
    *
    * @var string[]
    */
    protected static $setters = [
            'ipAddr' => 'setIpAddr',
            'hostIdList' => 'setHostIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ipAddr  **参数解释**： 登录IP或登录网段,登录网段由IP地址和掩码组成,以'/'连接。 **取值范围**： 字符长度1-128位
    * hostIdList  **参数解释**： 服务器ID列表,不可为NULL,删除常用登录IP时,需要将服务器ID列表置为空列表[]。 **取值范围**： 最小值0，最大值200
    *
    * @var string[]
    */
    protected static $getters = [
            'ipAddr' => 'getIpAddr',
            'hostIdList' => 'getHostIdList'
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
        $this->container['ipAddr'] = isset($data['ipAddr']) ? $data['ipAddr'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ipAddr'] === null) {
            $invalidProperties[] = "'ipAddr' can't be null";
        }
            if ((mb_strlen($this->container['ipAddr']) > 128)) {
                $invalidProperties[] = "invalid value for 'ipAddr', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['ipAddr']) < 1)) {
                $invalidProperties[] = "invalid value for 'ipAddr', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['hostIdList'] === null) {
            $invalidProperties[] = "'hostIdList' can't be null";
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
    * Gets ipAddr
    *  **参数解释**： 登录IP或登录网段,登录网段由IP地址和掩码组成,以'/'连接。 **取值范围**： 字符长度1-128位
    *
    * @return string
    */
    public function getIpAddr()
    {
        return $this->container['ipAddr'];
    }

    /**
    * Sets ipAddr
    *
    * @param string $ipAddr **参数解释**： 登录IP或登录网段,登录网段由IP地址和掩码组成,以'/'连接。 **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setIpAddr($ipAddr)
    {
        $this->container['ipAddr'] = $ipAddr;
        return $this;
    }

    /**
    * Gets hostIdList
    *  **参数解释**： 服务器ID列表,不可为NULL,删除常用登录IP时,需要将服务器ID列表置为空列表[]。 **取值范围**： 最小值0，最大值200
    *
    * @return string[]
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[] $hostIdList **参数解释**： 服务器ID列表,不可为NULL,删除常用登录IP时,需要将服务器ID列表置为空列表[]。 **取值范围**： 最小值0，最大值200
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
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

