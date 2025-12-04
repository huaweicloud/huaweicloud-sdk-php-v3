<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCloudPhoneSingleServerRequestBodyPublicIp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCloudPhoneSingleServerRequestBody_public_ip';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ids  指定已有的EIP进行云手机裸服务器创建，当前只支持传入一个已有的EIP ID。指定EIP后public_ip结构体中count字段和type字段不生效。
    * type  弹性公网IP的类型。 例如： 5_telcom：电信 5_union：联通 5_bgp：全动态BGP 5_sbgp：静态BGP
    * count  Eip数量。默认为0。取值范围为【0,1】
    * bandWidth  bandWidth
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ids' => 'string[]',
            'type' => 'string',
            'count' => 'int',
            'bandWidth' => '\HuaweiCloud\SDK\Cph\V1\Model\CreateCloudPhoneSingleServerRequestBodyPublicIpBandWidth'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ids  指定已有的EIP进行云手机裸服务器创建，当前只支持传入一个已有的EIP ID。指定EIP后public_ip结构体中count字段和type字段不生效。
    * type  弹性公网IP的类型。 例如： 5_telcom：电信 5_union：联通 5_bgp：全动态BGP 5_sbgp：静态BGP
    * count  Eip数量。默认为0。取值范围为【0,1】
    * bandWidth  bandWidth
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ids' => null,
        'type' => null,
        'count' => 'int32',
        'bandWidth' => null
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
    * ids  指定已有的EIP进行云手机裸服务器创建，当前只支持传入一个已有的EIP ID。指定EIP后public_ip结构体中count字段和type字段不生效。
    * type  弹性公网IP的类型。 例如： 5_telcom：电信 5_union：联通 5_bgp：全动态BGP 5_sbgp：静态BGP
    * count  Eip数量。默认为0。取值范围为【0,1】
    * bandWidth  bandWidth
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ids' => 'ids',
            'type' => 'type',
            'count' => 'count',
            'bandWidth' => 'band_width'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ids  指定已有的EIP进行云手机裸服务器创建，当前只支持传入一个已有的EIP ID。指定EIP后public_ip结构体中count字段和type字段不生效。
    * type  弹性公网IP的类型。 例如： 5_telcom：电信 5_union：联通 5_bgp：全动态BGP 5_sbgp：静态BGP
    * count  Eip数量。默认为0。取值范围为【0,1】
    * bandWidth  bandWidth
    *
    * @var string[]
    */
    protected static $setters = [
            'ids' => 'setIds',
            'type' => 'setType',
            'count' => 'setCount',
            'bandWidth' => 'setBandWidth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ids  指定已有的EIP进行云手机裸服务器创建，当前只支持传入一个已有的EIP ID。指定EIP后public_ip结构体中count字段和type字段不生效。
    * type  弹性公网IP的类型。 例如： 5_telcom：电信 5_union：联通 5_bgp：全动态BGP 5_sbgp：静态BGP
    * count  Eip数量。默认为0。取值范围为【0,1】
    * bandWidth  bandWidth
    *
    * @var string[]
    */
    protected static $getters = [
            'ids' => 'getIds',
            'type' => 'getType',
            'count' => 'getCount',
            'bandWidth' => 'getBandWidth'
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
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['bandWidth'] = isset($data['bandWidth']) ? $data['bandWidth'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 1024)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] > 1)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
            }
        if ($this->container['bandWidth'] === null) {
            $invalidProperties[] = "'bandWidth' can't be null";
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
    * Gets ids
    *  指定已有的EIP进行云手机裸服务器创建，当前只支持传入一个已有的EIP ID。指定EIP后public_ip结构体中count字段和type字段不生效。
    *
    * @return string[]|null
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param string[]|null $ids 指定已有的EIP进行云手机裸服务器创建，当前只支持传入一个已有的EIP ID。指定EIP后public_ip结构体中count字段和type字段不生效。
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets type
    *  弹性公网IP的类型。 例如： 5_telcom：电信 5_union：联通 5_bgp：全动态BGP 5_sbgp：静态BGP
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 弹性公网IP的类型。 例如： 5_telcom：电信 5_union：联通 5_bgp：全动态BGP 5_sbgp：静态BGP
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets count
    *  Eip数量。默认为0。取值范围为【0,1】
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count Eip数量。默认为0。取值范围为【0,1】
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets bandWidth
    *  bandWidth
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\CreateCloudPhoneSingleServerRequestBodyPublicIpBandWidth
    */
    public function getBandWidth()
    {
        return $this->container['bandWidth'];
    }

    /**
    * Sets bandWidth
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\CreateCloudPhoneSingleServerRequestBodyPublicIpBandWidth $bandWidth bandWidth
    *
    * @return $this
    */
    public function setBandWidth($bandWidth)
    {
        $this->container['bandWidth'] = $bandWidth;
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

